<?php

namespace {

    use Cloudinary\Cache\ResponsiveBreakpointsCache;
    use Cloudinary\HttpClient;

    /**
     * Recommended sources for video tag
     *
     * @return array List of default video sources
     */
    function default_video_sources()
    {
        return [
            [
                "type"            => "mp4",
                "codecs"          => "hev1",
                "transformations" => ["video_codec" => "h265"]
            ],
            [
                "type"            => "webm",
                "codecs"          => "vp9",
                "transformations" => ["video_codec" => "vp9"]
            ],
            [
                "type"            => "mp4",
                "transformations" => ["video_codec" => "auto"]
            ],
            [
                "type"            => "webm",
                "transformations" => ["video_codec" => "auto"]
            ],
        ];
    }

    function cl_upload_url($options = array())
    {
        $options['resource_type'] = Cloudinary::option_get($options, 'resource_type', 'auto');
        $endpoint = array_key_exists('chunk_size', $options) ? 'upload_chunked' : 'upload';

        return Cloudinary::cloudinary_api_url($endpoint, $options);
    }

    function cl_upload_tag_params($options = array())
    {
        $params = Cloudinary\Uploader::build_upload_params($options);
        if (Cloudinary::option_get($options, "unsigned")) {
            $params = array_filter(
                $params,
                function ($v) {
                    return !is_null($v) && ($v !== "");
                }
            );
        } else {
            $params = Cloudinary::sign_request($params, $options);
        }

        return json_encode($params);
    }

    function cl_unsigned_image_upload_tag($field, $upload_preset, $options = array())
    {
        return cl_image_upload_tag(
            $field,
            array_merge($options, array("unsigned" => true, "upload_preset" => $upload_preset))
        );
    }

    function cl_image_upload_tag($field, $options = array())
    {
        return cl_upload_tag($field, $options);
    }

    function cl_upload_tag($field, $options = array())
    {
        $html_options = Cloudinary::option_get($options, "html", array());

        $classes = array("cloudinary-fileupload");
        if (isset($html_options["class"])) {
            array_unshift($classes, Cloudinary::option_consume($html_options, "class"));
        }
        $tag_options = array_merge(
            $html_options,
            array(
                "type" => "file",
                "name" => "file",
                "data-url" => cl_upload_url($options),
                "data-form-data" => cl_upload_tag_params($options),
                "data-cloudinary-field" => $field,
                "class" => implode(" ", $classes),
            )
        );
        if (array_key_exists('chunk_size', $options)) {
            $tag_options['data-max-chunk-size'] = $options['chunk_size'];
        }

        return '<input ' . Cloudinary::html_attrs($tag_options) . '/>';
    }

    function cl_form_tag($callback_url, $options = array())
    {
        $form_options = Cloudinary::option_get($options, "form", array());

        $options["callback_url"] = $callback_url;

        $params = Cloudinary\Uploader::build_upload_params($options);
        $params = Cloudinary::sign_request($params, $options);

        $api_url = Cloudinary::cloudinary_api_url("upload", $options);

        $form = "<form enctype='multipart/form-data' action='" . $api_url . "' method='POST' " .
            Cloudinary::html_attrs($form_options) . ">\n";
        foreach ($params as $key => $value) {
            $attributes =  array(
                "name" => $key,
                "value" => $value,
                "type" => "hidden",
            );
            $form .= "<input " . Cloudinary::html_attrs($attributes) . "/>\n";
        }
        $form .= "</form>\n";

        return $form;
    }

    /**
     * Generates an HTML meta tag that enables Client-Hints
     *
     * @return string Resulting meta tag
     */
    function cl_client_hints_meta_tag()
    {
        return "<meta http-equiv='Accept-CH' content='DPR, Viewport-Width, Width' />";
    }
    /**
     * @internal
     * Helper function. Validates src_data parameters
     *
     * @param array $srcset_data {
     *
     *      @var array  breakpoints An array of breakpoints.
     *      @var int    min_width   Minimal width of the srcset images.
     *      @var int    max_width   Maximal width of the srcset images.
     *      @var int    max_images  Number of srcset images to generate.
     * }
     *
     * @return bool true on success or false on failure
     */
    function validate_srcset_data($srcset_data)
    {
        foreach (array('min_width', 'max_width', 'max_images') as $arg) {
            if (empty($srcset_data[$arg]) || !is_numeric($srcset_data[$arg]) || is_string($srcset_data[$arg])) {
                error_log('Either valid (min_width, max_width, max_images) or breakpoints must be provided ' .
                          'to the image srcset attribute');
                return false;
            }
        }

        if ($srcset_data['min_width'] > $srcset_data['max_width']) {
            error_log('min_width must be less than max_width');
            return false;
        }

        if ($srcset_data['max_images'] <= 0) {
            error_log('max_images must be a positive integer');
            return false;
        }

        return true;
    }

    /**
     * @internal
     * Helper function. Calculates static srcset breakpoints using provided parameters
     *
     * Either the breakpoints or min_width, max_width, max_images must be provided.
     *
     * @param array $srcset_data {
     *
     *      @var array  breakpoints An array of breakpoints.
     *      @var int    min_width   Minimal width of the srcset images.
     *      @var int    max_width   Maximal width of the srcset images.
     *      @var int    max_images  Number of srcset images to generate.
     * }
     *
     * @return array Array of breakpoints
     *
     * @throws InvalidArgumentException In case of invalid or missing parameters
     */
    function generate_breakpoints($srcset_data)
    {
        $breakpoints = Cloudinary::option_get($srcset_data, "breakpoints", array());

        if (!empty($breakpoints)) {
            return $breakpoints;
        }

        if (!validate_srcset_data($srcset_data)) {
            return null;
        }

        $min_width = $srcset_data['min_width'];
        $max_width = $srcset_data['max_width'];
        $max_images = $srcset_data['max_images'];

        if ($max_images == 1) {
            // if user requested only 1 image in srcset, we return max_width one
            $min_width = $max_width;
        }

        $step_size = (int)ceil(($max_width - $min_width) / ($max_images > 1 ? $max_images - 1 : 1));

        $curr_breakpoint = $min_width;

        while ($curr_breakpoint < $max_width) {
            array_push($breakpoints, $curr_breakpoint);
            $curr_breakpoint += $step_size;
        }

        array_push($breakpoints, $max_width);

        return $breakpoints;
    }

    /**
     * @internal
     * Helper function. Retrieves responsive breakpoints list from cloudinary server
     *
     * When passing special string to transformation `width` parameter of form `auto:breakpoints{parameters}:json`,
     * the response contains JSON with data of the responsive breakpoints
     *
     * @param string    $public_id      The public ID of the image
     * @param array     $srcset_data {
     *
     *      @var int    min_width   Minimal width of the srcset images
     *      @var int    max_width   Maximal width of the srcset images
     *      @var int    bytes_step  Minimal bytes step between images
     *      @var int    max_images  Number of srcset images to generate
     * }
     * @param array     $options        Cloudinary url options
     *
     * @return array    Resulting breakpoints
     *
     * @throws \Cloudinary\Error
     */
    function fetch_breakpoints($public_id, $srcset_data = array(), $options = array())
    {
        $min_width = \Cloudinary::option_get($srcset_data, 'min_width', 50);
        $max_width = \Cloudinary::option_get($srcset_data, 'max_width', 1000);
        $bytes_step = \Cloudinary::option_get($srcset_data, 'bytes_step', 20000);
        $max_images = \Cloudinary::option_get($srcset_data, 'max_images', 20);
        $transformation = \Cloudinary::option_get($srcset_data, 'transformation');

        $kbytes_step = (int)ceil($bytes_step / 1024);

        $width_param = "auto:breakpoints_${min_width}_${max_width}_${kbytes_step}_${max_images}:json";
        // We use Cloudinary::cloudinary_scaled_url function, passing special `width` parameter
        $breakpoints_url = Cloudinary::cloudinary_scaled_url($public_id, $width_param, $transformation, $options);

        $client = new HttpClient();

        return $client->getJSON($breakpoints_url)["breakpoints"];
    }

    /**
     * @internal
     * Helper function. Gets from cache or calculates srcset breakpoints using provided parameters
     *
     * @param string    $public_id  Public ID of the resource
     * @param array     $srcset_data {
     *
     *      @var array  breakpoints An array of breakpoints.
     *      @var int    min_width   Minimal width of the srcset images.
     *      @var int    max_width   Maximal width of the srcset images.
     *      @var int    max_images  Number of srcset images to generate.
     * }
     *
     * @param array     $options Additional options
     *
     * @return array|null Array of breakpoints, null if failed
     */
    function get_or_generate_breakpoints($public_id, $srcset_data, $options = array())
    {
        $breakpoints = Cloudinary::option_get($srcset_data, "breakpoints", null);

        if (!empty($breakpoints)) {
            # User might provide explicit breakpoints, in this case we omit calculation and cache
            return $breakpoints;
        }

        if (Cloudinary::option_get($srcset_data, "use_cache", false)) {
            $breakpoints = ResponsiveBreakpointsCache::instance()->get($public_id, $options);

            if (is_null($breakpoints)) {
                // Cache miss, let's bring breakpoints from Cloudinary
                try {
                    $breakpoints = fetch_breakpoints($public_id, $srcset_data, $options);
                } catch (\Cloudinary\Error $e) {
                    error_log("Failed getting responsive breakpoints: $e");
                }

                if (!is_null($breakpoints)) {
                    ResponsiveBreakpointsCache::instance()->set($public_id, $options, $breakpoints);
                }
            }
        }

        if (empty($breakpoints)) {
            // Static calculation if cache is not enabled or we failed to fetch breakpoints
            $breakpoints = generate_breakpoints($srcset_data);
        }

        return $breakpoints;
    }

    /**
     * @internal
     * Helper function. Generates srcset attribute value of the HTML img tag
     *
     * @param array $srcset_data {
     *
     *      @var array  breakpoints An array of breakpoints.
     *      @var int    min_width   Minimal width of the srcset images.
     *      @var int    max_width   Maximal width of the srcset images.
     *      @var int    max_images  Number of srcset images to generate.
     * }
     *
     * @param array $options Additional options.
     *
     * @return string Resulting srcset attribute value
     *
     * @throws InvalidArgumentException In case of invalid or missing parameters
     */
    function generate_srcset_attribute($public_id, $breakpoints, $transformation = null, $options = array())
    {
        if (empty($breakpoints)) {
            return null;
        }

        $items = array();
        foreach ($breakpoints as $breakpoint) {
            array_push(
                $items,
                Cloudinary::cloudinary_scaled_url($public_id, $breakpoint, $transformation, $options) . " {$breakpoint}w"
            );
        }

        return implode(", ", $items);
    }

    /**
     * @internal
     * Helper function. Generates a sizes attribute for HTML tags
     *
     * @var array  breakpoints An array of breakpoints.
     *
     * @return string Resulting sizes attribute value
     *
     */
    function generate_sizes_attribute($breakpoints)
    {
        if (empty($breakpoints)) {
            return null;
        }

        $sizes_items = array();
        foreach ($breakpoints as $breakpoint) {
            array_push($sizes_items, "(max-width: {$breakpoint}px) {$breakpoint}px");
        }

        return implode(", ", $sizes_items);
    }

    /**
     * @internal
     * Helper function. Generates srcset and sizes attributes of the image tag
     *
     * Generated attributes are added to $attributes argument
     *
     * @param string    $public_id  The public ID of the resource
     * @param array     $attributes Existing attributes
     * @param array     $srcset_data {
     *
     *      @var array  breakpoints An array of breakpoints.
     *      @var int    min_width   Minimal width of the srcset images.
     *      @var int    max_width   Maximal width of the srcset images.
     *      @var int    max_images  Number of srcset images to generate.
     * }
     *
     * @param array     $options    Additional options.
     *
     * @return array The responsive attributes
     */
    function generate_image_responsive_attributes($public_id, $attributes, $srcset_data, $options)
    {
        // Create both srcset and sizes here to avoid fetching breakpoints twice

        $responsive_attributes = array();
        if (empty($srcset_data)) {
            return $responsive_attributes;
        }

        $breakpoints = null;

        if (!array_key_exists("srcset", $attributes)) {
            $breakpoints = get_or_generate_breakpoints($public_id, $srcset_data, $options);
            $transformation = Cloudinary::option_get($srcset_data, "transformation");
            $srcset_attr = generate_srcset_attribute($public_id, $breakpoints, $transformation, $options);
            if (!is_null($srcset_attr)) {
                $responsive_attributes["srcset"] = $srcset_attr;
            }
        }

        if (!array_key_exists("sizes", $attributes) && Cloudinary::option_get($srcset_data, "sizes") === true) {
            if (is_null($breakpoints)) {
                $breakpoints = get_or_generate_breakpoints($public_id, $srcset_data, $options);
            }

            $sizes_attr = generate_sizes_attribute($breakpoints);
            if (!is_null($sizes_attr)) {
                $responsive_attributes["sizes"] = $sizes_attr;
            }
        }

        return $responsive_attributes;
    }
    /**
     * Generates HTML img tag
     *
     * @api
     *
     * @param string $public_id Public ID of the resource
     *
     * @param array  $options   Additional options
     *
     * Examples:
     *
     * W/H are not sent to cloudinary
     * cl_image_tag("israel.png", array("width"=>100, "height"=>100, "alt"=>"hello")
     *
     * W/H are sent to cloudinary
     * cl_image_tag("israel.png", array("width"=>100, "height"=>100, "alt"=>"hello", "crop"=>"fit")
     *
     * @return string Resulting img tag
     *
     */
    function cl_image_tag($public_id, $options = array())
    {
        $original_options = $options;

        $attributes = Cloudinary::option_consume($options, 'attributes', array());

        $srcset_option = Cloudinary::option_consume($options, 'srcset', []);

        $srcset_data = [];

        if (!is_array($srcset_option)) {
            $attributes = array_merge(["srcset" => $srcset_option], $attributes);
        }
        else {
            $srcset_data = array_merge(Cloudinary::config_get("srcset", []), $srcset_option);
        }

        $source = cloudinary_url_internal($public_id, $options);
        if (isset($options["html_width"])) {
            $options["width"] = Cloudinary::option_consume($options, "html_width");
        }
        if (isset($options["html_height"])) {
            $options["height"] = Cloudinary::option_consume($options, "html_height");
        }

        $client_hints = Cloudinary::option_consume($options, "client_hints", Cloudinary::config_get("client_hints"));
        $responsive = Cloudinary::option_consume($options, "responsive");
        $hidpi = Cloudinary::option_consume($options, "hidpi");
        if (($responsive || $hidpi) && !$client_hints) {
            $options["data-src"] = $source;
            $classes = array($responsive ? "cld-responsive" : "cld-hidpi");
            $current_class = Cloudinary::option_consume($options, "class");
            if ($current_class) {
                array_unshift($classes, $current_class);
            }
            $options["class"] = implode(" ", $classes);
            $source = Cloudinary::option_consume(
                $options,
                "responsive_placeholder",
                Cloudinary::config_get("responsive_placeholder")
            );
            if ($source == "blank") {
                $source = Cloudinary::BLANK;
            }
        }

        $responsive_attrs = generate_image_responsive_attributes(
            $public_id,
            $attributes,
            $srcset_data,
            $original_options
        );
        if (!empty($responsive_attrs)) {
            $size_attributes = array("width", "height");
            foreach ($size_attributes as $key) {
                unset($options[$key]);
            }
        }

        // Explicitly provided attributes override options
        $attributes = array_merge($options, $responsive_attrs, $attributes);

        $html = "<img ";
        if ($source) {
            $html .= "src='" . htmlspecialchars($source, ENT_QUOTES) . "' ";
        }
        $html .= Cloudinary::html_attrs($attributes) . "/>";

        return $html;
    }

    function fetch_image_tag($url, $options = array())
    {
        $options["type"] = "fetch";

        return cl_image_tag($url, $options);
    }

    function facebook_profile_image_tag($profile, $options = array())
    {
        $options["type"] = "facebook";

        return cl_image_tag($profile, $options);
    }

    function gravatar_profile_image_tag($email, $options = array())
    {
        $options["type"] = "gravatar";
        $options["format"] = "jpg";

        return cl_image_tag(md5(strtolower(trim($email))), $options);
    }

    function twitter_profile_image_tag($profile, $options = array())
    {
        $options["type"] = "twitter";

        return cl_image_tag($profile, $options);
    }

    function twitter_name_profile_image_tag($profile, $options = array())
    {
        $options["type"] = "twitter_name";

        return cl_image_tag($profile, $options);
    }

    function cloudinary_js_config()
    {
        $params = array();
        foreach (Cloudinary::$JS_CONFIG_PARAMS as $param) {
            $value = Cloudinary::config_get($param);
            if ($value) {
                $params[$param] = $value;
            }
        }

        return "<script type='text/javascript'>\n" .
            "$.cloudinary.config(" . json_encode($params) . ");\n" .
            "</script>\n";
    }

    function cloudinary_url($source, $options = array())
    {
        return cloudinary_url_internal($source, $options);
    }

    function cloudinary_url_internal($source, &$options = array())
    {
        if (!isset($options["secure"])) {
            $options["secure"] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
                (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
        }

        return Cloudinary::cloudinary_url($source, $options);
    }

    function cl_sprite_url($tag, $options = array())
    {
        if (substr($tag, -strlen(".css")) != ".css") {
            $options["format"] = "css";
        }
        $options["type"] = "sprite";

        return cloudinary_url_internal($tag, $options);
    }

    function cl_sprite_tag($tag, $options = array())
    {
        return "<link rel='stylesheet' type='text/css' href='" .
            htmlspecialchars(cl_sprite_url($tag, $options), ENT_QUOTES) .
            "'>";
    }

    function default_poster_options()
    {
        return array('format' => 'jpg', 'resource_type' => 'video');
    }

    function default_source_types()
    {
        return array('webm', 'mp4', 'ogv');
    }

    # Returns a url for the given source with +options+
    function cl_video_path($source, $options = array())
    {
        $options = array_merge(array('resource_type' => 'video'), $options);

        return cloudinary_url_internal($source, $options);
    }

    # Returns an HTML <tt>img</tt> tag with the thumbnail for the given video +source+ and +options+
    function cl_video_thumbnail_tag($source, $options = array())
    {
        return cl_image_tag($source, array_merge(default_poster_options(), $options));
    }

    # Returns a url for the thumbnail for the given video +source+ and +options+
    function cl_video_thumbnail_path($source, $options = array())
    {
        $options = array_merge(default_poster_options(), $options);

        return cloudinary_url_internal($source, $options);
    }

    /**
     * @internal
     * Helper function for cl_video_tag, collects remaining options and returns them as attributes
     *
     * @param array $video_options Remaining options
     *
     * @return array Resulting attributes
     */
    function collect_video_tag_attributes($video_options)
    {
        $attributes = $video_options;

        if (isset($attributes["html_width"])) {
            $attributes['width'] = Cloudinary::option_consume($attributes, 'html_width');
        }

        if (isset($attributes['html_height'])) {
            $attributes['height'] = Cloudinary::option_consume($attributes, 'html_height');
        }

        if (empty($attributes['poster'])) {
            unset($attributes['poster']);
        }

        return $attributes;
    }

    /**
     * @internal
     * Helper function for cl_video_tag, generates video poster URL
     *
     * @param string    $source The public ID of the resource
     * @param array     $video_options  Additional options
     *
     * @return string Resulting video poster URL
     */
    function generate_video_poster_attr($source, $video_options)
    {
        if (!array_key_exists('poster', $video_options)) {
            return cl_video_thumbnail_path($source, $video_options);
        }

        if (!is_array($video_options['poster'])) {
            return $video_options['poster'];
        }

        if (!array_key_exists('public_id', $video_options['poster'])) {
            return cl_video_thumbnail_path($source, $video_options['poster']);
        }

        return cloudinary_url_internal($video_options['poster']['public_id'], $video_options['poster']);
    }

    /**
     * @internal
     * Helper function for cl_video_tag, generates video mime type from source_type and codecs
     *
     * @param string        $source_type The type of the source
     *
     * @param string|array  $codecs Codecs
     *
     * @return string Resulting mime type
     */
    function video_mime_type($source_type, $codecs = null)
    {
        $video_type = (($source_type == 'ogv') ? 'ogg' : $source_type);

        if (empty($source_type)) {
            return null;
        }

        $codecs_str = is_array($codecs) ? implode(', ', $codecs) : $codecs;
        $codecs_str = !empty($codecs_str) ? "codecs=$codecs_str" : $codecs_str;

        return implode('; ', array_filter(["video/$video_type", $codecs_str]));
    }

    /**
     * @internal
     * Helper function for cl_video_tag, populates source tags from provided options.
     *
     * source_types and sources are mutually exclusive, only one of them can be used.
     * If both are not provided, source types are used (for backwards compatibility)
     *
     * @param string    $source     The public ID of the video
     * @param array     $options    Additional options
     *
     * @return array Resulting source tags (may be empty)
     */
    function populate_video_source_tags($source, &$options)
    {
        $source_tags = [];
        // Consume all relevant options, otherwise they are left and passed as attributes
        $sources = Cloudinary::option_consume($options, 'sources', null);
        $source_types = Cloudinary::option_consume($options, 'source_types', null);
        $source_transformation = Cloudinary::option_consume($options, 'source_transformation', array());

        if (is_array($sources) && !empty($sources)) {
            foreach ($sources as $source_data) {
                $transformations = Cloudinary::option_get($source_data, "transformations", array());
                $transformation = array_merge($options, $transformations);
                $source_type = Cloudinary::option_get($source_data, "type");
                $src = cl_video_path($source . '.' . $source_type, $transformation);
                $codecs = Cloudinary::option_get($source_data, "codecs");
                $attributes = ['src' => $src, 'type' => video_mime_type($source_type, $codecs)];
                array_push($source_tags, '<source ' . Cloudinary::html_attrs($attributes) . '>');
            }

            return $source_tags;
        }

        if (empty($source_types)) {
            $source_types = default_source_types();
        }

        if (!is_array($source_types)) {
            return $source_tags;
        }

        foreach ($source_types as $source_type) {
            $transformation = Cloudinary::option_consume($source_transformation, $source_type, array());
            $transformation = array_merge($options, $transformation);
            $src = cl_video_path($source . '.' . $source_type, $transformation);
            $attributes = ['src' => $src, 'type' => video_mime_type($source_type)];
            array_push($source_tags, '<source ' . Cloudinary::html_attrs($attributes) . '>');
        }

        return $source_tags;
    }

    /**
     * @api
     * Creates an HTML video tag for the provided source
     *
     * @param string    $source     The public ID of the video
     * @param array     $options    Additional options
     *
     * @return string Resulting video tag
     */
    function cl_video_tag($source, $options = array())
    {
        $source = preg_replace('/\.(' . implode('|', default_source_types()) . ')$/', '', $source);

        $attributes = Cloudinary::option_consume($options, 'attributes', array());

        $fallback = Cloudinary::option_consume($options, 'fallback_content', '');

        # Save source types for a single video source handling (it can be a single type)
        $source_types = Cloudinary::option_get($options, 'source_types', "");

        if (!array_key_exists("poster", $attributes)) {
            $options['poster'] = generate_video_poster_attr($source, $options);
        }

        $options = array_merge(['resource_type' => 'video'], $options);

        $source_tags = populate_video_source_tags($source, $options);

        if (empty($source_tags)) {
            $source .= '.' . $source_types;
        }

        $src = cloudinary_url_internal($source, $options);

        if (empty($source_tags)) {
            $attributes['src'] = $src;
        }

        $attributes = array_merge(collect_video_tag_attributes($options), $attributes);

        $html = '<video ';
        $html .= Cloudinary::html_attrs($attributes) . '>';

        foreach ($source_tags as $source_tag) {
            $html .= $source_tag;
        }

        $html .= $fallback;
        $html .= '</video>';

        return $html;
    }

    /**
     * @internal
     * Generates `media` attribute of the `source` tag
     *
     * @param array $attributes    Attributes
     * @param array $media_options Currently only supported `min_width` and `max_width`
     *
     * @return null|string Media attribute
     */
    function generate_media_attr($media_options)
    {
        $media_query_conditions = [];

        if (!empty($media_options['min_width'])) {
            array_push($media_query_conditions, "(min-width: ${media_options['min_width']}px)");
        }

        if (!empty($media_options['max_width'])) {
            array_push($media_query_conditions, "(max-width: ${media_options['max_width']}px)");
        }

        if (empty($media_query_conditions)) {
            return null;
        }

        return implode(' and ', $media_query_conditions);
    }

    /**
     * @api Generates HTML `source` tag that can be used by `picture` tag
     *
     * @param $public_id
     * @param $options
     *
     * @return string
     */
    function cl_source_tag($public_id, $options = [])
    {
        $srcset_data = array_merge(
            Cloudinary::config_get("srcset", []),
            Cloudinary::option_consume($options, 'srcset', [])
        );

        $attributes = Cloudinary::option_get($options, 'attributes', []);

        $responsive_attrs = generate_image_responsive_attributes(
            $public_id,
            $attributes,
            $srcset_data,
            $options
        );

        $attributes = array_merge($responsive_attrs, $attributes);

        // `source` tag under `picture` tag uses `srcset` attribute for both `srcset` and `src` urls
        if (!array_key_exists("srcset", $attributes)) {
            $attributes["srcset"] = cloudinary_url($public_id, $options);
        }

        $media_attr = generate_media_attr(Cloudinary::option_get($options, "media"));
        if (!empty($media_attr)) {
            $attributes["media"] = $media_attr;
        }

        return '<source ' . Cloudinary::html_attrs($attributes) . '>';
    }

    /**
     * @api Generates HTML `picture` tag
     *
     * @param string $public_id Public ID of the source image
     * @param array  $options   Common options for all sources and `img` tag
     * @param array  $sources   Definitions of each source which contains min_width, max_width and transformation
     *
     * @return string
     */
    function cl_picture_tag($public_id, $options = [], $sources = [])
    {
        $tag = '<picture>';

        $public_id = Cloudinary::check_cloudinary_field($public_id, $options);
        Cloudinary::patch_fetch_format($options);
        foreach ($sources as $source) {
            $source_options =  $options;
            $source_options = Cloudinary::chain_transformations(
                $source_options,
                Cloudinary::option_get($source, "transformation")
            );
            $source_options["media"] = Cloudinary::array_subset($source, ['min_width', 'max_width']);

            $tag .= cl_source_tag($public_id, $source_options);
        }

        $tag .= cl_image_tag($public_id, $options);

        $tag .= '</picture>';

        return $tag;
    }
}
