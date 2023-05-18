<?php

class Cloudinary
{
    const CF_SHARED_CDN = "d3jpl91pxevbkh.cloudfront.net";
    const OLD_AKAMAI_SHARED_CDN = "cloudinary-a.akamaihd.net";
    const AKAMAI_SHARED_CDN = "res.cloudinary.com";
    const SHARED_CDN = "res.cloudinary.com";
    const BLANK = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7";
    const RANGE_VALUE_RE = '/^(?P<value>(\d+\.)?\d+)(?P<modifier>[%pP])?$/';
    const RANGE_RE = '/^(\d+\.)?\d+[%pP]?\.\.(\d+\.)?\d+[%pP]?$/';
    const ALGO_SHA1 = 'sha1';
    const ALGO_SHA256 = 'sha256';
    const SHORT_URL_SIGNATURE_LENGTH = 8;
    const LONG_URL_SIGNATURE_LENGTH = 32;

    const DEFAULT_UPLOAD_PREFIX = 'https://api.cloudinary.com';

    const VERSION = "1.20.2";

    /**
     * @internal
     * @var array a list of keys used by the cloudinary_url function
     */
    public static $URL_KEYS = array(
        'api_secret',
        'auth_token',
        'cdn_subdomain',
        'cloud_name',
        'cname',
        'format',
        'long_url_signature',
        'private_cdn',
        'resource_type',
        'secure',
        'secure_cdn_subdomain',
        'secure_distribution',
        'shorten',
        'sign_url',
        'ssl_detected',
        'type',
        'url_suffix',
        'use_root_path',
        'version'
    );

    /**
     * Contains information about SDK user agent. Passed to the Cloudinary servers.
     *
     * Initialized on the first call to {@see self::userAgent()}
     *
     * Sample value: CloudinaryPHP/1.2.3 (PHP 5.6.7)
     *
     * @internal
     * Do not change this value
     */
    private static $USER_AGENT = "";

    /**
     * Additional information to be passed with the USER_AGENT, e.g. "CloudinaryMagento/1.0.1".
     * This value is set in platform-specific
     * implementations that use cloudinary_php.
     *
     * The format of the value should be <ProductName>/Version[ (comment)].
     * @see http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.43
     *
     * @internal
     * <b>Do not set this value in application code!</b>
     *
     * @var string
     */
    public static $USER_PLATFORM = "";

    public static $DEFAULT_RESPONSIVE_WIDTH_TRANSFORMATION = array("width" => "auto", "crop" => "limit");

    private static $config = null;

    public static $JS_CONFIG_PARAMS = array(
        "api_key",
        "cloud_name",
        "private_cdn",
        "secure_distribution",
        "cdn_subdomain",
    );

    /**
     * Provides the {@see self::$USER_AGENT} string that is passed to the Cloudinary servers.
     *
     * Prepends {@see self::$USER_PLATFORM} if it is defined.
     *
     * @return string
     */
    public static function userAgent()
    {
        if (empty(self::$USER_AGENT)) {
            self::$USER_AGENT = 'CloudinaryPHP/' . self::VERSION . ' (PHP ' . PHP_VERSION. ')';
        }

        if (empty(self::$USER_PLATFORM)) {
            return self::$USER_AGENT;
        }

        return self::$USER_PLATFORM . ' '  . self::$USER_AGENT;
    }

    public static function is_not_null($var)
    {
        return !is_null($var);
    }

    /**
     * @internal
     * When upload type is fetch, remove the format options.
     * In addition, set the fetch_format options to the format value unless it was already set.
     * Mutates the $options parameter!
     * @param array $options URL and transformation options
     */
    public static function patch_fetch_format(&$options)
    {
        $type = Cloudinary::option_get($options, "type", "upload");
        if ($type != "fetch") return;

        // format does not apply to fetch resources since they are identified by a URL
        $format = Cloudinary::option_consume($options, "format");
        if (!isset($options["fetch_format"])) {
            $options["fetch_format"] = $format;
        }
    }

    public static function config($values = null)
    {
        if (self::$config == null) {
            self::reset_config();
        }
        if ($values != null) {
            self::$config = array_merge(self::$config, $values);
        }

        return self::$config;
    }

    public static function reset_config()
    {
        self::config_from_url(getenv("CLOUDINARY_URL"));
    }

    public static function config_from_url($cloudinary_url)
    {
        self::$config = array();
        if ($cloudinary_url) {
            $uri = parse_url($cloudinary_url);

            if (!isset($uri["scheme"]) || strtolower($uri["scheme"]) !== "cloudinary") {
                throw new InvalidArgumentException("Invalid CLOUDINARY_URL scheme. Expecting to start with 'cloudinary://'");
            }

            $q_params = array();

            if (isset($uri["query"])) {
                parse_str($uri["query"], $q_params);
            }

            $private_cdn = isset($uri["path"]) && $uri["path"] != "/";
            $config = array_merge(
                $q_params,
                array(
                    "cloud_name" => $uri["host"],
                    "api_key" => $uri["user"],
                    "api_secret" => $uri["pass"],
                    "private_cdn" => $private_cdn,
                )
            );
            if ($private_cdn) {
                $config["secure_distribution"] = substr($uri["path"], 1);
            }
            self::$config = array_merge(self::$config, $config);
        }
    }

    public static function config_get($option, $default = null)
    {
        return Cloudinary::option_get(self::config(), $option, $default);
    }

    public static function option_get($options, $option, $default = null)
    {
        if (isset($options[$option])) {
            return $options[$option];
        } else {
            return $default;
        }
    }

    public static function option_consume(&$options, $option, $default = null)
    {
        $value = self::option_get($options, $option, $default);
        unset($options[$option]);

        return $value;
    }

    public static function build_array($value)
    {
        if (is_null($value)) {
            return array();
        }

        if (is_array($value) && !Cloudinary::is_assoc($value)) {
            return $value;
        }

        return array($value);
    }


    /**
     * Converts a value that can be presented as an array of associative arrays.
     *
     * In case top level item is not an array, it is wrapped with an array
     *
     * @param array|string  $value  The value to be converted
     *
     *  Valid values examples:
     *      - Valid assoc array: array("k" => "v", "k2"=> "v2")
     *      - Array of assoc arrays: array(array("k" => "v"), array("k2" =>"v2"))
     *      - JSON decodable string: '{"k": "v"}', or '[{"k": "v"}]'
     *
     *  Invalid values examples:
     *      - array("not", "an", "assoc", "array")
     *      - array(123, None),
     *      - array(array("another", "array"))
     *
     * @return array|mixed Converted(or original) array of associative arrays
     *
     * @throws InvalidArgumentException in case value cannot be converted to an array of associative arrays
     */
    private static function build_array_of_assoc_arrays($value)
    {
        if (is_string($value)) {
            $value = Cloudinary::json_decode_cb($value, 'Cloudinary::ensure_assoc');
            if (is_null($value)) {
                throw new InvalidArgumentException("Failed parsing JSON string value");
            }
        }
        $value = Cloudinary::build_array($value);
        if (!self::is_array_of_assoc($value)) {
            throw new InvalidArgumentException("Expected an array of associative arrays");
        }
        return $value;
    }

    static function ensure_assoc($item)
    {
        if (is_string($item)) {
            $item = json_decode($item, true);
            if (is_null($item)) {
                throw new InvalidArgumentException("Failed parsing JSON string item");
            }
        }

        if (!Cloudinary::is_assoc($item)) {
            throw new InvalidArgumentException("Expected an array of associative arrays");
        }
        return $item;
    }
    /**
     * Encodes an array of associative arrays to JSON.
     *
     * This is a wrapper around json_encode with additional preprocessing (DateTime formatting, etc)
     *
     * @param array $array  An array of associative arrays
     *
     * @return string Resulting JSON string
     *
     * @throws InvalidArgumentException in case the value is not an array of associative arrays
     */
    private static function json_encode_array_of_assoc_arrays($array)
    {
        return self::json_encode_cb($array, 'Cloudinary::encode_dates');
    }

    static function encode_dates($value)
    {
        if ($value instanceof DateTime) {
            $value = $value->format(DateTime::ISO8601);
        }
        return $value;
    }

    static function is_array_of_assoc($array)
    {
        if (!is_array($array)) {
            return false;
        }

        foreach ($array as &$item) {
            if (!Cloudinary::is_assoc($item)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Returns the JSON representation of a value
     * @param mixed $array <p>
     * The <i>value</i> being encoded. Can be any type except
     * a resource.
     * </p>
     * @param callable $encoder [optional] <p>
     * An encoder that will be invoked for each value.
     * </p>
     * @param int $options [optional] <p>
     * Bitmask consisting of <b>JSON_HEX_QUOT</b>,
     * <b>JSON_HEX_TAG</b>,
     * <b>JSON_HEX_AMP</b>,
     * <b>JSON_HEX_APOS</b>,
     * <b>JSON_NUMERIC_CHECK</b>,
     * <b>JSON_PRETTY_PRINT</b>,
     * <b>JSON_UNESCAPED_SLASHES</b>,
     * <b>JSON_FORCE_OBJECT</b>,
     * <b>JSON_UNESCAPED_UNICODE</b>. The behaviour of these
     * constants is described on
     * the JSON constants page.
     * </p>
     * @param int $depth [optional] <p>
     * Set the maximum depth. Must be greater than zero.
     * </p>
     * @return string a JSON encoded string on success or <b>FALSE</b> on failure.
     */

    public static function json_encode_cb($array, $encoder = null, $options = 0, $depth = 512)
    {
        if (!is_array($array)) {
            throw new InvalidArgumentException("Expected an array of associative arrays");
        }

        foreach ($array as &$item) {
            $is_assoc = Cloudinary::is_assoc($item);
            if (!$is_assoc) {
                throw new InvalidArgumentException("Expected an array of associative arrays");
            }
            if (!is_null($encoder)) {
                foreach ($item as $key => $value) {
                    $item[$key] = call_user_func($encoder, $value);
                }
            }
        }

        return \json_encode($array);
    }

    public static function json_decode_cb($json, $decoder)
    {
        if (!is_string($json)) {
            throw new InvalidArgumentException("Expected an string");
        }
        $array = json_decode($json, true);
        if (!is_null($decoder) && !is_null($array)) {
            foreach ($array as $key => $value) {
                try {
                    $array[$key] = call_user_func($decoder, $value);
                } catch (Exception $e) {
                }

            }
        }

        return $array;
    }

    /**
     * Wrapper for calling build_array_of_assoc_arrays and json_encode_array_of_assoc_arrays with null value handling.
     *
     * @see Cloudinary::json_encode_array_of_assoc_arrays
     * @see Cloudinary::build_array_of_assoc_arrays
     *
     * @param array|string  $value  The value to be converted
     *
     * @return string Resulting JSON string
     *
     * @throws InvalidArgumentException in case value cannot be converted and encoded
     */
    public static function encode_array_to_json($value)
    {
        if (is_null($value)) {
            return null;
        }
        $array = Cloudinary::build_array_of_assoc_arrays($value);
        return  Cloudinary::json_encode_cb($array, 'Cloudinary::encode_dates');
    }

    public static function encode_array($array)
    {
        return implode(",", Cloudinary::build_array($array));
    }

    public static function encode_double_array($array)
    {
        $array = Cloudinary::build_array($array);
        if (count($array) > 0 && !is_array($array[0])) {
            return Cloudinary::encode_array($array);
        } else {
            $array = array_map('Cloudinary::encode_array', $array);
        }

        return implode("|", $array);
    }

    public static function encode_assoc_array($array)
    {
        if (Cloudinary::is_assoc($array)) {
            $encoded = array();
            foreach ($array as $key => $value) {
                if (!empty($value)) {
                    $value = preg_replace('/([\|=])/', '\\\$1', $value);
                }
                array_push($encoded, $key . '=' . $value);
            }

            return implode("|", $encoded);
        } else {
            return $array;
        }
    }

    /**
     * Encodes data with URL safe base64
     *
     * @see https://tools.ietf.org/html/rfc4648#section-5
     *
     * @param mixed $data The data to encode.
     *
     * @return string The encoded data, as a string.
     */
    private static function base64url_encode($data)
    {
        return strtr(base64_encode($data), '+/', '-_');
    }

    /**
     * Helper function for making a recursive array copy while cloning objects on the way.
     *
     * @param array $array Source array
     *
     * @return array Recursive copy of the source array
     */
    public static function array_copy($array)
    {
        if (!is_array($array)) {
            return $array;
        }

        $result = array();
        foreach ($array as $key => $val) {
            if (is_array($val)) {
                $result[$key] = self::array_copy($val);
            } elseif (is_object($val)) {
                $result[$key] = clone $val;
            } else {
                $result[$key] = $val;
            }
        }
        return $result;
    }

    /**
     * Returns subset of associative array specified by array of keys
     *
     * @param array $array Source associative array
     * @param array $keys Simple array of keys
     *
     * @return array Resulting array
     */
    public static function array_subset($array, $keys)
    {
        return array_intersect_key($array, array_flip($keys));
    }

    private static function is_assoc($array)
    {
        if (!is_array($array)) {
            return false;
        }

        return $array != array_values($array);
    }

    /** @internal
     * Prepends associative element to the beginning of an array
     *
     * @param array $arr The input array.
     * @param mixed $key The prepended key
     * @param mixed $val The prepended value
     *
     * @return array The resulting array
     */
    public static function array_unshift_assoc(&$arr, $key, $val)
    {
        $arr = array_reverse($arr, true);
        $arr[$key] = $val;
        $arr = array_reverse($arr, true);
        return $arr;
    }

    private static function generate_base_transformation($base_transformation)
    {
        $options = is_array(
            $base_transformation
        ) ? $base_transformation : array("transformation" => $base_transformation);

        return Cloudinary::generate_transformation_string($options);
    }

    // Warning: $options are being destructively updated!
    public static function generate_transformation_string(&$options = array())
    {
        $generate_base_transformation = "Cloudinary::generate_base_transformation";
        if (is_string($options)) {
            return $options;
        }
        if ($options == array_values($options)) {
            return implode("/", array_map($generate_base_transformation, $options));
        }

        $responsive_width = Cloudinary::option_consume(
            $options,
            "responsive_width",
            Cloudinary::config_get("responsive_width")
        );

        $size = Cloudinary::option_consume($options, "size");
        if ($size) {
            list($options["width"], $options["height"]) = preg_split("/x/", $size);
        }

        $width = Cloudinary::option_get($options, "width");
        $height = Cloudinary::option_get($options, "height");

        $has_layer = Cloudinary::option_get($options, "underlay") || Cloudinary::option_get($options, "overlay");
        $angle = implode(".", Cloudinary::build_array(Cloudinary::option_consume($options, "angle")));
        $crop = Cloudinary::option_consume($options, "crop");

        $no_html_sizes = $has_layer || !empty($angle) || $crop == "fit" || $crop == "limit" || $responsive_width;

        if (strlen($width) == 0 || $width &&
            (substr($width, 0, 4) == "auto" || floatval($width) < 1 || $no_html_sizes)) {
            unset($options["width"]);
        }
        if (strlen($height) == 0 || $height && (floatval($height) < 1 || $no_html_sizes)) {
            unset($options["height"]);
        }

        $background = Cloudinary::option_consume($options, "background");
        if ($background) {
            $background = preg_replace("/^#/", 'rgb:', $background);
        }
        $color = Cloudinary::option_consume($options, "color");
        if ($color) {
            $color = preg_replace("/^#/", 'rgb:', $color);
        }

        $base_transformations = Cloudinary::build_array(Cloudinary::option_consume($options, "transformation"));
        if (count(array_filter($base_transformations, "is_array")) > 0) {
            $base_transformations = array_map($generate_base_transformation, $base_transformations);
            $named_transformation = "";
        } else {
            $named_transformation = implode(".", $base_transformations);
            $base_transformations = array();
        }

        $effect = Cloudinary::option_consume($options, "effect");
        if (is_array($effect)) {
            $effect = implode(":", $effect);
        }

        $border = Cloudinary::process_border(Cloudinary::option_consume($options, "border"));

        $flags = implode(".", Cloudinary::build_array(Cloudinary::option_consume($options, "flags")));
        $dpr = Cloudinary::option_consume($options, "dpr", Cloudinary::config_get("dpr"));

        $duration = Cloudinary::norm_range_value(Cloudinary::option_consume($options, "duration"));
        $start_offset = Cloudinary::norm_auto_range_value(Cloudinary::option_consume($options, "start_offset"));
        $end_offset = Cloudinary::norm_range_value(Cloudinary::option_consume($options, "end_offset"));
        $offset = Cloudinary::split_range(Cloudinary::option_consume($options, "offset"));
        if (!empty($offset)) {
            $start_offset = Cloudinary::norm_auto_range_value($offset[0]);
            $end_offset = Cloudinary::norm_range_value($offset[1]);
        }

        $video_codec = Cloudinary::process_video_codec_param(Cloudinary::option_consume($options, "video_codec"));
        $fps = Cloudinary::process_fps(Cloudinary::option_consume($options, "fps"));
        $keyframe_interval = Cloudinary::process_keyframe_interval(Cloudinary::option_consume($options, "keyframe_interval"));

        $overlay = Cloudinary::process_layer(Cloudinary::option_consume($options, "overlay"), "overlay");
        $underlay = Cloudinary::process_layer(Cloudinary::option_consume($options, "underlay"), "underlay");
        $if = Cloudinary::process_if(Cloudinary::option_consume($options, "if"));
        $custom_function = Cloudinary::process_custom_function(Cloudinary::option_consume($options, "custom_function"));
        $custom_pre_function = Cloudinary::process_custom_pre_function(Cloudinary::option_consume($options, "custom_pre_function"));
        $aspect_ratio = Cloudinary::option_consume($options, "aspect_ratio");
        $opacity = Cloudinary::option_consume($options, "opacity");
        $quality = Cloudinary::option_consume($options, "quality");
        $radius = Cloudinary::process_radius(Cloudinary::option_consume($options, "radius"));
        $x = Cloudinary::option_consume($options, "x");
        $y = Cloudinary::option_consume($options, "y");
        $zoom = Cloudinary::option_consume($options, "zoom");

        $params = array(
            "a" => self::normalize_expression($angle),
            "ar" => self::normalize_expression($aspect_ratio),
            "b" => $background,
            "bo" => $border,
            "c" => $crop,
            "co" => $color,
            "dpr" => self::normalize_expression($dpr),
            "du" => $duration,
            "e" => self::normalize_expression($effect),
            "eo" => $end_offset,
            "fl" => $flags,
            "fn" => $custom_function ?: $custom_pre_function,
            "fps" => $fps,
            "ki" => $keyframe_interval,
            "h" => self::normalize_expression($height),
            "l" => $overlay,
            "o" => self::normalize_expression($opacity),
            "q" => self::normalize_expression($quality),
            "r" => $radius,
            "so" => $start_offset,
            "t" => $named_transformation,
            "u" => $underlay,
            "vc" => $video_codec,
            "w" => self::normalize_expression($width),
            "x" => self::normalize_expression($x),
            "y" => self::normalize_expression($y),
            "z" => self::normalize_expression($zoom),
        );

        $simple_params = array(
            "ac" => "audio_codec",
            "af" => "audio_frequency",
            "br" => "bit_rate",
            "cs" => "color_space",
            "d" => "default_image",
            "dl" => "delay",
            "dn" => "density",
            "f" => "fetch_format",
            "g" => "gravity",
            "p" => "prefix",
            "pg" => "page",
            "sp" => "streaming_profile",
            "vs" => "video_sampling",
        );

        foreach ($simple_params as $param => $option) {
            $params[$param] = Cloudinary::option_consume($options, $option);
        }

        $variables = !empty($options["variables"]) ? $options["variables"] : [];

        $var_params = [];
        foreach ($options as $key => $value) {
            if (preg_match('/^\$/', $key)) {
                $var_params[] = $key . '_' . self::normalize_expression((string)$value);
            }
        }

        sort($var_params);

        if (!empty($variables)) {
            foreach ($variables as $key => $value) {
                $var_params[] = $key . '_' . self::normalize_expression((string)$value);
            }
        }

        $variables = join(',', $var_params);


        $param_filter = function ($value) {
            return $value === 0 || $value === '0' || trim($value) == true;
        };
        $params = array_filter($params, $param_filter);
        ksort($params);
        if (isset($if)) {
            $if = 'if_' . $if;
        }
        $join_pair = function ($key, $value) {
            return $key . "_" . $value;
        };
        $transformation = implode(",", array_map($join_pair, array_keys($params), array_values($params)));
        $raw_transformation = Cloudinary::option_consume($options, "raw_transformation");
        $transformation = implode(",", array_filter(array($if, $variables, $transformation, $raw_transformation)));
        array_push($base_transformations, $transformation);
        if ($responsive_width) {
            $responsive_width_transformation = Cloudinary::config_get(
                "responsive_width_transformation",
                Cloudinary::$DEFAULT_RESPONSIVE_WIDTH_TRANSFORMATION
            );
            array_push(
                $base_transformations,
                Cloudinary::generate_transformation_string($responsive_width_transformation)
            );
        }
        if (substr($width, 0, 4) == "auto" || $responsive_width) {
            $options["responsive"] = true;
        }
        if (substr($dpr, 0, 4) == "auto") {
            $options["hidpi"] = true;
        }

        return implode("/", array_filter($base_transformations));
    }

    /**
     * Helper function, allows chaining transformations to the end of transformations list
     *
     * The result of this function is an updated $options parameter
     *
     * @param array     $options         Original options
     * @param array     $transformations Transformations to chain at the end
     *
     * @return array Resulting options
     */
    public static function chain_transformations($options, $transformations)
    {
        $transformations = \Cloudinary::build_array($transformations);
        // preserve url options
        $url_options = self::array_subset($options, self::$URL_KEYS);
        array_unshift($transformations, $options);
        $url_options["transformation"] = $transformations;
        return $url_options;
    }

    private static $LAYER_KEYWORD_PARAMS = array(
        "font_weight" => "normal",
        "font_style" => "normal",
        "text_decoration" => "none",
        "text_align" => null,
        "stroke" => "none",
    );

    private static function text_style($layer, $layer_parameter)
    {
        $font_family = Cloudinary::option_get($layer, "font_family");
        $font_size = Cloudinary::option_get($layer, "font_size");
        $keywords = array();

        foreach (Cloudinary::$LAYER_KEYWORD_PARAMS as $attr => $default_value) {
            $attr_value = Cloudinary::option_get($layer, $attr, $default_value);
            if ($attr_value != $default_value) {
                array_push($keywords, $attr_value);
            }
        }

        $letter_spacing = Cloudinary::option_get($layer, "letter_spacing");
        if ($letter_spacing != null) {
            array_push($keywords, "letter_spacing_$letter_spacing");
        }

        $line_spacing = Cloudinary::option_get($layer, "line_spacing");
        if ($line_spacing != null) {
            array_push($keywords, "line_spacing_$line_spacing");
        }

        $font_antialiasing = Cloudinary::option_get($layer, "font_antialiasing");
        if ($font_antialiasing != null) {
            array_push($keywords, "antialias_$font_antialiasing");
        }

        $font_hinting = Cloudinary::option_get($layer, "font_hinting");
        if ($font_hinting != null) {
            array_push($keywords, "hinting_$font_hinting");
        }

        $has_text_options = $font_size != null || $font_family != null || !empty($keywords);
        if (!$has_text_options) {
            return null;
        }
        if ($font_family == null) {
            throw new InvalidArgumentException("Must supply font_family for text in $layer_parameter");
        }
        if ($font_size == null) {
            throw new InvalidArgumentException("Must supply font_size for text in $layer_parameter");
        }
        array_unshift($keywords, $font_size);
        array_unshift($keywords, $font_family);

        return implode("_", array_filter($keywords, 'Cloudinary::is_not_null'));
    }


    /**
     * Handle overlays.
     * Overlay properties can came as array or as string.
     * @param $layer
     * @param $layer_parameter
     * @return string
     */
    private static function process_layer($layer, $layer_parameter)
    {
        // When overlay is array.
        if (is_array($layer)) {
            $resource_type = Cloudinary::option_get($layer, "resource_type");
            $type = Cloudinary::option_get($layer, "type");
            $text = Cloudinary::option_get($layer, "text");
            $fetch = Cloudinary::option_get($layer, "fetch");
            $text_style = null;
            $public_id = Cloudinary::option_get($layer, "public_id");
            $format = Cloudinary::option_get($layer, "format");
            $components = array();

            if ($public_id != null) {
                $public_id = str_replace("/", ":", $public_id);
                if ($format != null) {
                    $public_id = $public_id . "." . $format;
                }
            }

            // Fetch overlay.
            if (!empty($fetch) || $resource_type === "fetch") {
                $public_id = null;
                $resource_type = "fetch";
                $fetch = self::base64url_encode($fetch);
            } // Text overlay.
            elseif (!empty($text) || $resource_type === "text") {
                $resource_type = "text";
                $type = null; // type is ignored for text layers
                $text_style = Cloudinary::text_style($layer, $layer_parameter); #FIXME duplicate
                if ($text != null) {
                    if (!($public_id != null xor $text_style != null)) {
                        throw new InvalidArgumentException(
                            "Must supply either style parameters or a public_id when providing text parameter in a text $layer_parameter"
                        );
                    }
                    $escaped = Cloudinary::smart_escape($text);
                    $escaped = str_replace("%2C", "%252C", $escaped);
                    $escaped = str_replace("/", "%252F", $escaped);
                    # Don't encode interpolation expressions e.g. $(variable)
                    preg_match_all('/\$\([a-zA-Z]\w+\)/', $text, $matches);
                    foreach ($matches[0] as $match) {
                        $escaped_match = Cloudinary::smart_escape($match);
                        $escaped = str_replace($escaped_match, $match, $escaped);
                    }

                    $text = $escaped;
                }
            } else {
                if ($public_id == null) {
                    throw new InvalidArgumentException("Must supply public_id for $resource_type $layer_parameter");
                }
                if ($resource_type == "subtitles") {
                    $text_style = Cloudinary::text_style($layer, $layer_parameter);
                }
            }

            // Build a components array.
            if ($resource_type != "image") {
                array_push($components, $resource_type);
            }
            if ($type != "upload") {
                array_push($components, $type);
            }
            array_push($components, $text_style);
            array_push($components, $public_id);
            array_push($components, $text);
            array_push($components, $fetch);

            // Build a valid overlay string.
            $layer = implode(":", array_filter($components, 'Cloudinary::is_not_null'));
        } // Handle fetch overlay from string definition.
        elseif (substr($layer, 0, strlen('fetch:')) === 'fetch:') {
            $url = substr($layer, strlen('fetch:'));
            $b64 = self::base64url_encode($url);
            $layer = 'fetch:' . $b64;
        }

        return $layer;
    }

    private static $CONDITIONAL_OPERATORS = array(
        "=" => 'eq',
        "!=" => 'ne',
        "<" => 'lt',
        ">" => 'gt',
        "<=" => 'lte',
        ">=" => 'gte',
        "&&" => 'and',
        "||" => 'or',
        "*" => 'mul',
        "/" => 'div',
        "+" => 'add',
        "-" => 'sub',
        "^" => 'pow',
    );
    private static $PREDEFINED_VARS = array(
        "aspect_ratio" => "ar",
        "current_page" => "cp",
        "duration" => "du",
        "face_count" => "fc",
        "height" => "h",
        "initial_aspect_ratio" => "iar",
        "initial_duration" => "idu",
        "initial_height" => "ih",
        "initial_width" => "iw",
        "page_count" => "pc",
        "page_x" => "px",
        "page_y" => "py",
        "tags" => "tags",
        "width" => "w",
    );

    private static function translate_if($source)
    {
        if (isset(self::$CONDITIONAL_OPERATORS[$source[0]])) {
            return self::$CONDITIONAL_OPERATORS[$source[0]];
        } elseif (isset(self::$PREDEFINED_VARS[$source[0]])) {
            return self::$PREDEFINED_VARS[$source[0]];
        } else {
            return $source[0];
        }
    }

    private static $IF_REPLACE_RE;

    private static function process_if($if)
    {
        $if = self::normalize_expression($if);

        return $if;
    }

    private static function float_to_string($value) {
        if (!is_float($value)) {
            return $value;
        }

        $locale = localeconv();
        $string = strval($value);
        $string = str_replace($locale['decimal_point'], '.', $string);

        return $string;
    }

    private static function normalize_expression($exp)
    {
        if (is_float($exp)) {
            return self::float_to_string($exp);
        }
        if (preg_match('/^!.+!$/', $exp)) {
            return $exp;
        } else {
            if (empty(self::$IF_REPLACE_RE)) {
                self::$IF_REPLACE_RE = '/((\|\||>=|<=|&&|!=|>|=|<|\/|\-|\+|\*|\^)(?=[ _])|(?<!\$)('.
                    implode('|', array_keys(self::$PREDEFINED_VARS)) . '))/';
            }
            if (isset($exp)) {
                $exp = preg_replace('/[ _]+/', '_', $exp);
                $exp = preg_replace_callback(self::$IF_REPLACE_RE, array("Cloudinary", "translate_if"), $exp);
            }

            return $exp;
        }
    }

    private static function process_border($border)
    {
        if (is_array($border)) {
            $border_width = Cloudinary::option_get($border, "width", "2");
            $border_color = preg_replace("/^#/", 'rgb:', Cloudinary::option_get($border, "color", "black"));
            $border = $border_width . "px_solid_" . $border_color;
        }

        return $border;
    }

    private static function process_radius($radius)
    {
        if (!is_array($radius)) {
            return $radius;
        }

        return implode(":", array_map("self::normalize_expression", $radius));
    }

    private static function process_custom_function($custom_function)
    {
        if (!is_array($custom_function)) {
            return $custom_function;
        }

        $function_type = Cloudinary::option_get($custom_function, "function_type");
        $source = Cloudinary::option_get($custom_function, "source");

        if ($function_type == 'remote') {
            $source = self::base64url_encode($source);
        }

        return implode(':', [$function_type, $source]);
    }

    private static function process_custom_pre_function($custom_function)
    {
        $value = self::process_custom_function($custom_function);
        return $value ? 'pre:' . $value : null;
    }

    private static function split_range($range)
    {
        if (is_array($range) && count($range) >= 2) {
            return array($range[0], end($range));
        } else {
            if (is_string($range) && preg_match(Cloudinary::RANGE_RE, $range) == 1) {
                return explode("..", $range, 2);
            } else {
                return null;
            }
        }
    }

    private static function norm_range_value($value)
    {
        if (is_null($value)) {
            return null;
        }

        // Ensure that trailing decimal(.0) part is not cropped when float is provided
        // e.g. float 1.0 should be returned as "1.0" and not "1" as it happens by default
        if (is_float($value) && $value - (int)$value == 0) {
            $value = sprintf("%.1f", $value);
        }

        preg_match(Cloudinary::RANGE_VALUE_RE, $value, $matches);

        if (empty($matches)) {
            return null;
        }

        $modifier = '';
        if (!empty($matches['modifier'])) {
            $modifier = 'p';
        }

        return $matches['value'] . $modifier;
    }

    private static function norm_auto_range_value($value)
    {
        if ($value == 'auto') {
            return $value;
        }
        return self::norm_range_value($value);
    }

    private static function process_video_codec_param($param)
    {
        $out_param = $param;
        if (is_array($out_param)) {
            $out_param = $param['codec'];
            if (array_key_exists('profile', $param)) {
                $out_param = $out_param . ':' . $param['profile'];
                if (array_key_exists('level', $param)) {
                    $out_param = $out_param . ':' . $param['level'];
                }
            }
        }

        return $out_param;
    }

    /**
     * Serializes fps transformation parameter
     *
     * @param mixed $fps A single number, an array of mixed type, a string, including open-ended and closed range values
     *                   Examples: '24-29.97', 24, 24.973, '-24', [24, 29.97]
     *
     * @return string
     */
    private static function process_fps($fps)
    {
        if (!is_array($fps)) {
            return strval($fps);
        }

        return implode("-", array_map("self::normalize_expression", $fps));
    }

    /**
     * Serializes keyframe_interval transformation parameter
     *
     * @param float|int|string $keyframe_interval A positive number or a string
     *
     * @return string
     */
    private static function process_keyframe_interval($keyframe_interval)
    {
        if (is_string($keyframe_interval) || $keyframe_interval == null) {
            return $keyframe_interval;
        }
        if (!is_numeric($keyframe_interval)) {
            throw new InvalidArgumentException("Keyframe interval should be a number or a string");
        }
        if ($keyframe_interval < 0) {
            throw new InvalidArgumentException("Keyframe interval should be greater than zero");
        }
        if (is_int($keyframe_interval)) {
            return $keyframe_interval . ".0";
        }
        return $keyframe_interval;
    }

    // Warning: $options are being destructively updated!
    public static function cloudinary_url($source, &$options = array())
    {
        $source = self::check_cloudinary_field($source, $options);
        self::patch_fetch_format($options);
        $type = Cloudinary::option_consume($options, "type", "upload");
        $transformation = Cloudinary::generate_transformation_string($options);

        $resource_type = Cloudinary::option_consume($options, "resource_type", "image");
        $version = Cloudinary::option_consume($options, "version");
        $force_version = Cloudinary::option_consume(
            $options,
            "force_version",
            Cloudinary::config_get("force_version", true)
        );
        $format = Cloudinary::option_consume($options, "format");

        $cloud_name = Cloudinary::option_consume($options, "cloud_name", Cloudinary::config_get("cloud_name"));
        if (!$cloud_name) {
            throw new InvalidArgumentException("Must supply cloud_name in tag or in configuration");
        }
        $secure = Cloudinary::option_consume($options, "secure", Cloudinary::config_get("secure"));
        $private_cdn = Cloudinary::option_consume($options, "private_cdn", Cloudinary::config_get("private_cdn"));
        $secure_distribution = Cloudinary::option_consume(
            $options,
            "secure_distribution",
            Cloudinary::config_get("secure_distribution")
        );
        $cdn_subdomain = Cloudinary::option_consume(
            $options,
            "cdn_subdomain",
            Cloudinary::config_get("cdn_subdomain")
        );
        $secure_cdn_subdomain = Cloudinary::option_consume(
            $options,
            "secure_cdn_subdomain",
            Cloudinary::config_get("secure_cdn_subdomain")
        );
        $cname = Cloudinary::option_consume($options, "cname", Cloudinary::config_get("cname"));
        $shorten = Cloudinary::option_consume($options, "shorten", Cloudinary::config_get("shorten"));
        $sign_url = Cloudinary::option_consume($options, "sign_url", Cloudinary::config_get("sign_url"));
        $api_secret = Cloudinary::option_consume($options, "api_secret", Cloudinary::config_get("api_secret"));
        $url_suffix = Cloudinary::option_consume($options, "url_suffix", Cloudinary::config_get("url_suffix"));
        $use_root_path = Cloudinary::option_consume($options, "use_root_path", Cloudinary::config_get("use_root_path"));
        $long_url_signature = Cloudinary::option_consume(
            $options,
            "long_url_signature",
            Cloudinary::config_get("long_url_signature")
        );
        $signature_algorithm = Cloudinary::option_consume(
            $options,
            "signature_algorithm",
            self::config_get("signature_algorithm", self::ALGO_SHA1)
        );
        $auth_token = Cloudinary::option_consume($options, "auth_token");
        if (is_array($auth_token)) {
            $auth_token = array_merge(self::config_get("auth_token", array()), $auth_token);
        } elseif (is_null($auth_token)) {
            $auth_token = self::config_get("auth_token");
        }

        if (!$source) {
            return $source;
        }

        if (preg_match("/^https?:\//i", $source)) {
            if ($type == "upload") {
                return $source;
            }
        }

        $resource_type_and_type = Cloudinary::finalize_resource_type(
            $resource_type,
            $type,
            $url_suffix,
            $use_root_path,
            $shorten
        );
        $sources = Cloudinary::finalize_source($source, $format, $url_suffix);
        $source = $sources["source"];
        $source_to_sign = $sources["source_to_sign"];

        if (empty($version) && $force_version && strpos($source_to_sign, "/") &&
            !preg_match("/^https?:\//", $source_to_sign) && !preg_match("/^v[0-9]+/", $source_to_sign)) {
            $version = "1";
        }
        $version = $version ? "v" . $version : null;

        $signature = null;
        if ($sign_url && !$auth_token) {
            $to_sign = implode("/", array_filter(array($transformation, $source_to_sign)));

            $algorithm = $long_url_signature ? self::ALGO_SHA256 : $signature_algorithm; // Long signature forces SHA256
            $signature_len = $long_url_signature ? self::LONG_URL_SIGNATURE_LENGTH : self::SHORT_URL_SIGNATURE_LENGTH;

            $hash = hash($algorithm, $to_sign . $api_secret, true);
            $signature = 's--' . substr(self::base64url_encode($hash), 0, $signature_len) . '--';
        }

        $prefix = Cloudinary::unsigned_download_url_prefix(
            $source,
            $cloud_name,
            $private_cdn,
            $cdn_subdomain,
            $secure_cdn_subdomain,
            $cname,
            $secure,
            $secure_distribution
        );

        $source = preg_replace(
            "/([^:])\/+/",
            "$1/",
            implode(
                "/",
                array_filter(
                    array(
                        $prefix,
                        $resource_type_and_type,
                        $signature,
                        $transformation,
                        $version,
                        $source,
                    )
                )
            )
        );

        if ($sign_url && $auth_token) {
            $path = parse_url($source, PHP_URL_PATH);
            $token = \Cloudinary\AuthToken::generate(array_merge($auth_token, array("url" => $path)));
            $source = $source . "?" . $token;
        }

        return $source;
    }

    private static function finalize_source($source, $format, $url_suffix)
    {
        $source = preg_replace('/([^:])\/\//', '$1/', $source);
        if (preg_match('/^https?:\//i', $source)) {
            $source = Cloudinary::smart_escape($source);
            $source_to_sign = $source;
        } else {
            $source = Cloudinary::smart_escape(rawurldecode($source));
            $source_to_sign = $source;
            if (!empty($url_suffix)) {
                if (preg_match('/[\.\/]/i', $url_suffix)) {
                    throw new InvalidArgumentException("url_suffix should not include . or /");
                }
                $source = $source . '/' . $url_suffix;
            }
            if (!empty($format)) {
                $source = $source . '.' . $format;
                $source_to_sign = $source_to_sign . '.' . $format;
            }
        }

        return array("source" => $source, "source_to_sign" => $source_to_sign);
    }

    private static function finalize_resource_type($resource_type, $type, $url_suffix, $use_root_path, $shorten)
    {
        if (empty($type)) {
            $type = "upload";
        }

        if (!empty($url_suffix)) {
            if ($resource_type == "image" && $type == "upload") {
                $resource_type = "images";
                $type = null;
            } elseif ($resource_type == "image" && $type == "private") {
                $resource_type = "private_images";
                $type = null;
            } elseif ($resource_type == "image" && $type == "authenticated") {
                $resource_type = "authenticated_images";
                $type = null;
            } elseif ($resource_type == "video" && $type == "upload") {
                $resource_type = "videos";
                $type = null;
            } elseif ($resource_type == "raw" && $type == "upload") {
                    $resource_type = "files";
                    $type = null;
            } else {
                throw new InvalidArgumentException(
                    "URL Suffix only supported for image/upload, image/private, image/authenticated, " .
                    "video/upload and raw/upload"
                );
            }
        }

        if ($use_root_path) {
            if (($resource_type == "image" && $type == "upload") || ($resource_type == "images" && empty($type))) {
                $resource_type = null;
                $type = null;
            } else {
                throw new InvalidArgumentException("Root path only supported for image/upload");
            }
        }
        if ($shorten && $resource_type == "image" && $type == "upload") {
            $resource_type = "iu";
            $type = null;
        }
        $out = "";
        if (!empty($resource_type)) {
            $out = $resource_type;
        }
        if (!empty($type)) {
            $out = $out.'/'.$type;
        }

        return $out;
    }

    // cdn_subdomain and secure_cdn_subdomain
    // 1) Customers in shared distribution (e.g. res.cloudinary.com)
    //   if cdn_domain is true uses res-[1-5].cloudinary.com for both http and https. Setting secure_cdn_subdomain to false disables this for https.
    // 2) Customers with private cdn
    //   if cdn_domain is true uses cloudname-res-[1-5].cloudinary.com for http
    //   if secure_cdn_domain is true uses cloudname-res-[1-5].cloudinary.com for https (please contact support if you require this)
    // 3) Customers with cname
    //   if cdn_domain is true uses a[1-5].cname for http. For https, uses the same naming scheme as 1 for shared distribution and as 2 for private distribution.
    private static function unsigned_download_url_prefix(
        $source,
        $cloud_name,
        $private_cdn,
        $cdn_subdomain,
        $secure_cdn_subdomain,
        $cname,
        $secure,
        $secure_distribution
    ) {
        $shared_domain = !$private_cdn;
        $prefix = null;
        if ($secure) {
            if (empty($secure_distribution) || $secure_distribution == Cloudinary::OLD_AKAMAI_SHARED_CDN) {
                $secure_distribution = $private_cdn ? $cloud_name . '-res.cloudinary.com' : Cloudinary::SHARED_CDN;
            }

            if (empty($shared_domain)) {
                $shared_domain = ($secure_distribution == Cloudinary::SHARED_CDN);
            }

            if (is_null($secure_cdn_subdomain) && $shared_domain) {
                $secure_cdn_subdomain = $cdn_subdomain;
            }

            if ($secure_cdn_subdomain) {
                $secure_distribution = str_replace(
                    'res.cloudinary.com',
                    "res-" . Cloudinary::domain_shard($source) . ".cloudinary.com",
                    $secure_distribution
                );
            }

            $prefix = "https://".$secure_distribution;
        } else {
            if ($cname) {
                $subdomain = $cdn_subdomain ? "a" . Cloudinary::domain_shard($source) . '.' : "";
                $prefix = "http://" . $subdomain . $cname;
            } else {
                $host = implode(
                    array(
                        $private_cdn ? $cloud_name."-" : "",
                        "res",
                        $cdn_subdomain ? "-".Cloudinary::domain_shard($source) : "",
                        ".cloudinary.com",
                    )
                );
                $prefix = "http://".$host;
            }
        }
        if ($shared_domain) {
            $prefix = $prefix . '/' . $cloud_name;
        }

        return $prefix;
    }

    private static function domain_shard($source)
    {
        return (((crc32($source) % 5) + 5) % 5 + 1);
    }

    // Warning: $options are being destructively updated!
    public static function check_cloudinary_field($source, &$options = array())
    {
        // [<resource_type>/][<image_type>/][v<version>/]<public_id>[.<format>][#<signature>]
        $IDENTIFIER_RE = "~" .
            "^" .
            "(?:([^/]+)/)??" . // resource type
            "(?:([^/]+)/)??" . // type
            "(?:(?:v(\\d+)/)(?:([^#]+)/)?)?" . // version
            "([^#/]+?)" . // public ID
            "(?:\\.([^.#/]+))?" . //format
            "(?:#([^/]+))?" . // signature
            "$" .
            "~";
        if (!is_object($source) || !method_exists($source, 'identifier')) {
            // $source doesn't look like a CloudinaryField, so just return it
            return $source;
        }

        // $source is a CloudinaryField, parse its identifier
        $matches = array();
        $identifier = $source->identifier();
        if (!$identifier || strstr(':', $identifier) !== false || !preg_match($IDENTIFIER_RE, $identifier, $matches)) {
            return $source;
        }
        $optionNames = array('resource_type', 'type', 'version', 'folder', 'public_id', 'format');
        foreach ($optionNames as $index => $optionName) {
            if (@$matches[$index + 1]) {
                $options[$optionName] = $matches[$index + 1];
            }
        }

        return Cloudinary::option_consume($options, 'public_id');
    }

    // Based on http://stackoverflow.com/a/1734255/526985
    private static function smart_escape($str)
    {
        $revert = array('%3A' => ':', '%2F' => '/');

        return strtr(rawurlencode($str), $revert);
    }

    public static function cloudinary_api_url($action = 'upload', $options = array())
    {
        $cloudinary = Cloudinary::option_get(
            $options,
            "upload_prefix",
            Cloudinary::config_get("upload_prefix", self::DEFAULT_UPLOAD_PREFIX)
        );
        $cloud_name = Cloudinary::option_get($options, "cloud_name", Cloudinary::config_get("cloud_name"));
        if (!$cloud_name) {
            throw new InvalidArgumentException("Must supply cloud_name in options or in configuration");
        }
        $resource_type = Cloudinary::option_get($options, "resource_type", "image");

        return implode("/", array($cloudinary, "v1_1", $cloud_name, $resource_type, $action));
    }

    public static function random_public_id()
    {
        return substr(sha1(uniqid(Cloudinary::config_get("api_secret", "") . mt_rand())), 0, 16);
    }

    public static function signed_preloaded_image($result)
    {
        return $result["resource_type"] . "/upload/v" . $result["version"] . "/" . $result["public_id"] .
            (isset($result["format"]) ? "." . $result["format"] : "") . "#" . $result["signature"];
    }

    /**
     * Generates a cloudinary url scaled to specified width.
     *
     * In case transformation parameter is provided, it is used instead of transformations specified in $options
     *
     * @param string       $source         Public ID of the resource
     * @param int          $width          Width in pixels of the srcset item
     * @param array|string $transformation Custom transformation that overrides transformations provided in $options
     * @param array        $options        Additional options
     *
     * @return null|string
     */
    public static function cloudinary_scaled_url($source, $width, $transformation, $options)
    {
        if (!empty($transformation)) {
            // Replace transformation parameters in $options with those in $transformation

            if(is_string($transformation)){
                $transformation = array("raw_transformation"=> $transformation);
            }
            $options = self::array_subset($options, self::$URL_KEYS);
            $options = array_merge($options, $transformation);
        }

        $scale_transformation = ["crop" => "scale", "width" => $width];

        self::check_cloudinary_field($source, $options);
        self::patch_fetch_format($options);
        $options = self::chain_transformations($options, $scale_transformation);

        return cloudinary_url_internal($source, $options);
    }

    # Utility method that uses the deprecated ZIP download API.
    # @deprecated Replaced by {download_zip_url} that uses the more advanced and robust archive generation and download API
    public static function zip_download_url($tag, $options = array())
    {
        $params = array(
            "timestamp" => time(),
            "tag" => $tag,
            "transformation" => \Cloudinary::generate_transformation_string($options),
        );
        $params = Cloudinary::sign_request($params, $options);
        return Cloudinary::cloudinary_api_url("download_tag.zip", $options) . "?" . http_build_query($params);
    }


    # Returns a URL that when invokes creates an archive and returns it.
    # @param options [Hash]
    # @option options [String] resource_type  The resource type of files to include in the archive. Must be one of image | video | raw
    # @option options [String] type (upload) The specific file type of resources upload|private|authenticated
    # @option options [String|Array] tags (nil) list of tags to include in the archive
    # @option options [String|Array<String>] public_ids (nil) list of public_ids to include in the archive
    # @option options [String|Array<String>] prefixes (nil) Optional list of prefixes of public IDs (e.g., folders).
    # @option options [String|Array<String>] transformations Optional list of transformations.
    #   The derived images of the given transformations are included in the archive. Using the string representation of
    #   multiple chained transformations as we use for the 'eager' upload parameter.
    # @option options [String] mode (create) return the generated archive file or to store it as a raw resource and
    #   return a JSON with URLs for accessing the archive. Possible values download, create
    # @option options [String] target_format (zip)
    # @option options [String] target_public_id Optional public ID of the generated raw resource.
    #   Relevant only for the create mode. If not specified, random public ID is generated.
    # @option options [boolean] flatten_folders (false) If true, flatten public IDs with folders to be in the root of the archive.
    #   Add numeric counter to the file name in case of a name conflict.
    # @option options [boolean] flatten_transformations (false) If true, and multiple transformations are given,
    #   flatten the folder structure of derived images and store the transformation details on the file name instead.
    # @option options [boolean] use_original_filename Use the original file name of included images (if available) instead of the public ID.
    # @option options [boolean] async (false) If true, return immediately and perform the archive creation in the background.
    #   Relevant only for the create mode.
    # @option options [String] notification_url Optional URL to send an HTTP post request (webhook) when the archive creation is completed.
    # @option options [String|Array<String] target_tags Optional array. Allows assigning one or more tag to the generated archive file (for later housekeeping via the admin API).
    # @option options [String] keep_derived (false) keep the derived images used for generating the archive
    # @return [String] archive url
    public static function download_archive_url($options = array())
    {
        $options["mode"] = "download";
        $params = Cloudinary::build_archive_params($options);
        $params = Cloudinary::sign_request($params, $options);

        return Cloudinary::cloudinary_api_url("generate_archive", $options) . "?" .
            preg_replace("/%5B\d+%5D/", "%5B%5D", http_build_query($params));
    }

    # Returns a URL that when invokes creates an zip archive and returns it.
    # @see download_archive_url
    public static function download_zip_url($options = array())
    {
        $options["target_format"] = "zip";

        return Cloudinary::download_archive_url($options);
    }

    /**
     * Creates and returns a URL that when invoked creates an archive of a folder.
     *
     * @param string $folder_path Full path (from the root) of the folder to download.
     * @param array  $options     Additional options.
     *
     * @return string Url for downloading an archive of a folder
     */
    public static function download_folder($folder_path, $options = array())
    {
        $options['prefixes']      = $folder_path;
        $options['resource_type'] = Cloudinary::option_get($options, 'resource_type', 'all');

        return self::download_archive_url($options);
    }

    /**
     * The returned url allows downloading the backedup asset based on the the asset ID and the version ID.
     *
     * @param string $asset_id   The asset ID of the asset.
     * @param string $version_id The version ID of the asset.
     *
     * @return string The signed URL for downloading backup version of the asset.
     */
    public static function download_backedup_asset($asset_id, $version_id)
    {
        $options['asset_id']      = $asset_id;
        $options['version_id']    = $version_id;
        $options['resource_type'] = 'download_backup';

        $params = self::build_archive_params($options);
        $params = self::sign_request($params, $options);

        return self::cloudinary_api_url(null, $options) . '?' . http_build_query($params);
    }

    /**
     *  Generate an authorization token.
     *  Options:
     *      string key - the secret key required to sign the token
     *      string ip - the IP address of the client
     *      number start_time - the start time of the token in seconds from epoch
     *      string expiration - the expiration time of the token in seconds from epoch
     *      string duration - the duration of the token (from start_time)
     *      string acl - the ACL for the token
     *      string url - the URL to authentication in case of a URL token
     *
     * @param array $options token configuration, merge with the global configuration "auth_token".
     * @return string the authorization token
     * @throws \Cloudinary\Error
     */
    public static function generate_auth_token($options)
    {
        $token_options = array_merge(self::config_get("auth_token", array()), $options);

        return \Cloudinary\AuthToken::generate($token_options);
    }

    /**
     * @internal
     *
     * Returns an array of parameters used to create an archive
     *
     * @param array $options
     *
     * @return array
     */
    public static function build_archive_params(&$options)
    {
        $params = array(
            "allow_missing" => \Cloudinary::option_get($options, "allow_missing"),
            "asset_id" => \Cloudinary::option_get($options, "asset_id"),
            "async" => \Cloudinary::option_get($options, "async"),
            "expires_at" => \Cloudinary::option_get($options, "expires_at"),
            "flatten_folders" => \Cloudinary::option_get($options, "flatten_folders"),
            "flatten_transformations" => \Cloudinary::option_get($options, "flatten_transformations"),
            "keep_derived" => \Cloudinary::option_get($options, "keep_derived"),
            "mode" => \Cloudinary::option_get($options, "mode"),
            "notification_url" => \Cloudinary::option_get($options, "notification_url"),
            "phash" => \Cloudinary::option_get($options, "phash"),
            "prefixes" => \Cloudinary::build_array(\Cloudinary::option_get($options, "prefixes")),
            "public_ids" => \Cloudinary::build_array(\Cloudinary::option_get($options, "public_ids")),
            "fully_qualified_public_ids" => \Cloudinary::build_array(
                \Cloudinary::option_get($options, "fully_qualified_public_ids")
            ),
            "skip_transformation_name" => \Cloudinary::option_get($options, "skip_transformation_name"),
            "tags" => \Cloudinary::build_array(\Cloudinary::option_get($options, "tags")),
            "target_format" => \Cloudinary::option_get($options, "target_format"),
            "target_public_id" => \Cloudinary::option_get($options, "target_public_id"),
            "target_tags" => \Cloudinary::build_array(\Cloudinary::option_get($options, "target_tags")),
            "timestamp" => time(),
            "transformations" => \Cloudinary::build_eager(\Cloudinary::option_get($options, "transformations")),
            "type" => \Cloudinary::option_get($options, "type"),
            "use_original_filename" => \Cloudinary::option_get($options, "use_original_filename"),
            "version_id" => \Cloudinary::option_get($options, "version_id"),
        );
        array_walk(
            $params,
            function (&$value, $key) {
                $value = (is_bool($value) ? ($value ? "1" : "0") : $value);
            }
        );

        return array_filter(
            $params,
            function ($v) {
                return !is_null($v) && ($v !== "");
            }
        );
    }

    public static function build_eager($transformations)
    {
        $eager = array();
        foreach (\Cloudinary::build_array($transformations) as $trans) {
            $single_eager = \Cloudinary::build_single_eager($trans);
            array_push($eager, $single_eager);
        }

        return implode("|", $eager);
    }

    /**
     * Builds a single eager transformation which consists of transformation and (optionally) format joined by "/"
     *
     * @param  array|string $options Options containing transformation parameters and (optionally) a "format" key
     *    format can be a string value (jpg, gif, etc) or can be set to "" (empty string).
     *    The latter leads to transformation ending with "/", which means "No extension, use original format"
     *    If format is not provided or set to null, only transformation is used (without the trailing "/")
     *
     * @return string
     */
    public static function build_single_eager($options)
    {
        if (is_string($options)) {
            return $options;
        }

        $trans_str = \Cloudinary::generate_transformation_string($options);

        if (empty($trans_str)) {
            return "";
        }

        $file_format_str = "";
        if (isset($options["format"])) {
            $file_format_str = "/" . $options["format"];
        }

        return $trans_str . $file_format_str;
    }

    public static function private_download_url($public_id, $format, $options = array())
    {
        $cloudinary_params = Cloudinary::sign_request(
            array(
                "timestamp" => time(),
                "public_id" => $public_id,
                "format" => $format,
                "type" => Cloudinary::option_get($options, "type"),
                "attachment" => Cloudinary::option_get($options, "attachment"),
                "expires_at" => Cloudinary::option_get($options, "expires_at"),
            ),
            $options
        );

        return Cloudinary::cloudinary_api_url("download", $options) . "?" . http_build_query($cloudinary_params);
    }

    public static function sign_request($params, &$options)
    {
        $api_key = Cloudinary::option_get($options, "api_key", Cloudinary::config_get("api_key"));
        if (!$api_key) {
            throw new \InvalidArgumentException("Must supply api_key");
        }
        $api_secret = Cloudinary::option_get($options, "api_secret", Cloudinary::config_get("api_secret"));
        if (!$api_secret) {
            throw new \InvalidArgumentException("Must supply api_secret");
        }

        $signature_algorithm = Cloudinary::option_get(
            $options,
            "signature_algorithm",
            self::config_get("signature_algorithm", self::ALGO_SHA1)
        );

        # Remove blank parameters
        $params = array_filter(
            $params,
            function ($v) {
                return isset($v) && $v !== "";
            }
        );

        $params["signature"] = self::api_sign_request($params, $api_secret, $signature_algorithm);
        $params["api_key"] = $api_key;

        return $params;
    }

    public static function api_sign_request($params_to_sign, $api_secret, $algorithm = self::ALGO_SHA1)
    {
        $params = array();
        foreach ($params_to_sign as $param => $value) {
            if (isset($value) && $value !== "") {
                if (!is_array($value)) {
                    $params[$param] = $value;
                } else {
                    if (count($value) > 0) {
                        $params[$param] = implode(",", $value);
                    }
                }
            }
        }
        ksort($params);
        $join_pair = function ($key, $value) {
            return $key . "=" . $value;
        };
        $to_sign = implode("&", array_map($join_pair, array_keys($params), array_values($params)));
        return hash($algorithm, $to_sign . $api_secret);
    }

    public static function html_attrs($options, $only = null)
    {
        $attrs = array();
        foreach ($options as $k => $v) {
            $key = $k;
            $value = $v;
            if (is_int($k)) {
                $key = $v;
                $value = "";
            }
            if (is_array($only) && array_search($key, $only) !== false || !is_array($only)) {
                $attrs[$key] = $value;
            }
        }
        ksort($attrs);

        $join_pair = function ($key, $value) {
            $out = $key;
            if (!empty($value)) {
                $out .= '=\'' . htmlspecialchars($value, ENT_QUOTES) . '\'';
            }

            return $out;
        };

        return implode(" ", array_map($join_pair, array_keys($attrs), array_values($attrs)));
    }
}
