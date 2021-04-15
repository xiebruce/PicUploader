<?php

namespace Cloudinary {

    use Cloudinary\Cache\ResponsiveBreakpointsCache;

    /**
     * Class Uploader
     * @package Cloudinary
     */
    class Uploader
    {
        const REMOTE_URL_REGEX = '/^@|^ftp:|^https?:|^s3:|^gs:|^data:([\w-]+\/[\w-]+(\+[\w-]+)?)?(;[\w-]+=[\w-]+)*;base64,([a-zA-Z0-9\/+\n=]+)$/';

        public static function build_upload_params(&$options)
        {
            $params = array(
                "timestamp" => time(),
                "access_control" => \Cloudinary::encode_array_to_json(
                    \Cloudinary::option_get($options, "access_control")
                ),
                "accessibility_analysis" => \Cloudinary::option_get($options, "accessibility_analysis"),
                "allowed_formats" => \Cloudinary::encode_array(\Cloudinary::option_get($options, "allowed_formats")),
                "async" => \Cloudinary::option_get($options, "async"),
                "auto_tagging" => \Cloudinary::option_get($options, "auto_tagging"),
                "background_removal" => \Cloudinary::option_get($options, "background_removal"),
                "backup" => \Cloudinary::option_get($options, "backup"),
                "callback" => \Cloudinary::option_get($options, "callback"),
                "categorization" => \Cloudinary::option_get($options, "categorization"),
                "cinemagraph_analysis" => \Cloudinary::option_get($options, "cinemagraph_analysis"),
                "colors" => \Cloudinary::option_get($options, "colors"),
                "context" => \Cloudinary::encode_assoc_array(\Cloudinary::option_get($options, "context")),
                "custom_coordinates" => \Cloudinary::encode_double_array(
                    \Cloudinary::option_get($options, "custom_coordinates")
                ),
                "detection" => \Cloudinary::option_get($options, "detection"),
                "discard_original_filename" => \Cloudinary::option_get($options, "discard_original_filename"),
                "eager" => Uploader::build_eager(\Cloudinary::option_get($options, "eager")),
                "eager_async" => \Cloudinary::option_get($options, "eager_async"),
                "eager_notification_url" => \Cloudinary::option_get($options, "eager_notification_url"),
                "eval" => \Cloudinary::option_get($options, "eval"),
                "exif" => \Cloudinary::option_get($options, "exif"),
                "face_coordinates" => \Cloudinary::encode_double_array(
                    \Cloudinary::option_get($options, "face_coordinates")
                ),
                "faces" => \Cloudinary::option_get($options, "faces"),
                "folder" => \Cloudinary::option_get($options, "folder"),
                "format" => \Cloudinary::option_get($options, "format"),
                "headers" => Uploader::build_custom_headers(\Cloudinary::option_get($options, "headers")),
                "image_metadata" => \Cloudinary::option_get($options, "image_metadata"),
                "invalidate" => \Cloudinary::option_get($options, "invalidate"),
                "metadata" => \Cloudinary::encode_assoc_array(\Cloudinary::option_get($options, "metadata")),
                "moderation" => \Cloudinary::option_get($options, "moderation"),
                "notification_url" => \Cloudinary::option_get($options, "notification_url"),
                "ocr" => \Cloudinary::option_get($options, "ocr"),
                "overwrite" => \Cloudinary::option_get($options, "overwrite"),
                "phash" => \Cloudinary::option_get($options, "phash"),
                "proxy" => \Cloudinary::option_get($options, "proxy"),
                "public_id" => \Cloudinary::option_get($options, "public_id"),
                "quality_analysis" => \Cloudinary::option_get($options, "quality_analysis"),
                "quality_override" => \Cloudinary::option_get($options, "quality_override"),
                "raw_convert" => \Cloudinary::option_get($options, "raw_convert"),
                "return_delete_token" => \Cloudinary::option_get($options, "return_delete_token"),
                "similarity_search" => \Cloudinary::option_get($options, "similarity_search"),
                "tags" => implode(",", \Cloudinary::build_array(\Cloudinary::option_get($options, "tags"))),
                "transformation" => \Cloudinary::generate_transformation_string($options),
                "type" => \Cloudinary::option_get($options, "type"),
                "unique_filename" => \Cloudinary::option_get($options, "unique_filename"),
                "upload_preset" => \Cloudinary::option_get($options, "upload_preset"),
                "use_filename" => \Cloudinary::option_get($options, "use_filename"),
                "responsive_breakpoints" => Uploader::build_responsive_breakpoints(
                    \Cloudinary::option_get($options, "responsive_breakpoints")
                ),
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

        public static function unsigned_upload($file, $upload_preset, $options = array())
        {
            return Uploader::upload(
                $file,
                array_merge($options, array("unsigned" => true, "upload_preset" => $upload_preset))
            );
        }

        public static function upload($file, $options = array())
        {
            $params = Uploader::build_upload_params($options);

            return Uploader::call_cacheable_api("upload", $params, $options, $file);
        }

        /**
         * Upload large files. Note that public_id should include an extension for best results.
         *
         * @param string    $file       The file to upload
         * @param array     $options    Additional options
         *
         * @return mixed|null
         * @throws \Exception
         */
        public static function upload_large($file, $options = array())
        {
            if (preg_match(self::REMOTE_URL_REGEX, $file)) {
                return self::upload($file, $options);
            }

            $src = fopen($file, 'r');

            // If not provided, preserve original file name in the upload
            $options["filename"] = \Cloudinary::option_get($options, 'filename', $file);

            $file_extension = pathinfo($file, PATHINFO_EXTENSION);
            $temp_file_name = tempnam(sys_get_temp_dir(), 'cldupload.') .
                              (!empty($file_extension) ? "." . $file_extension : "");
            $upload = null;
            $upload_id = \Cloudinary::random_public_id();
            $chunk_size = \Cloudinary::option_get($options, "chunk_size", 20000000);
            $public_id = \Cloudinary::option_get($options, "public_id");
            $index = 0;
            $file_size = filesize($file);
            while (!feof($src)) {
                $current_loc = $index * $chunk_size;
                if ($current_loc >= $file_size) {
                    break;
                }

                $dest = fopen($temp_file_name, 'w');
                stream_copy_to_stream($src, $dest, $chunk_size);
                fclose($dest);

                clearstatcache(true, $temp_file_name);

                $temp_file_size = filesize($temp_file_name);
                $range = "bytes " . $current_loc . "-" . ($current_loc + $temp_file_size - 1) . "/" . $file_size;
                try {
                    $upload = Uploader::upload_large_part(
                        $temp_file_name,
                        array_merge($options, array(
                            "public_id" => $public_id,
                            "content_range" => $range,
                            "x_unique_upload_id" => $upload_id
                        ))
                    );
                } catch (\Exception $e) {
                    unlink($temp_file_name);
                    fclose($src);
                    throw $e;
                }
                $public_id = \Cloudinary::option_get($upload, "public_id");
                $index += 1;
            }
            unlink($temp_file_name);
            fclose($src);
            return $upload;
        }


        // Upload large files. Note that public_id should include an extension for best results.
        public static function upload_large_part($file, $options = array())
        {
            $params = Uploader::build_upload_params($options);
            $full_options = array_merge(array("resource_type" => "raw"), $options);

            return Uploader::call_cacheable_api("upload", $params, $full_options, $file);
        }

        public static function destroy($public_id, $options = array())
        {
            $params = array(
                "timestamp" => time(),
                "type" => \Cloudinary::option_get($options, "type"),
                "invalidate" => \Cloudinary::option_get($options, "invalidate"),
                "public_id" => $public_id,
            );

            return Uploader::call_api("destroy", $params, $options);
        }

        public static function rename($from_public_id, $to_public_id, $options = array())
        {
            $params = array(
                "timestamp" => time(),
                "type" => \Cloudinary::option_get($options, "type"),
                "from_public_id" => $from_public_id,
                "to_public_id" => $to_public_id,
                "invalidate" => \Cloudinary::option_get($options, "invalidate"),
                "overwrite" => \Cloudinary::option_get($options, "overwrite"),
                "to_type" => \Cloudinary::option_get($options, "to_type"),
            );

            return Uploader::call_api("rename", $params, $options);
        }

        /**
         * Populates metadata fields with the given values. Existing values will be overwritten.
         *
         * Any metadata-value pairs given are merged with any existing metadata-value pairs
         * (an empty value for an existing metadata field clears the value)
         *
         * @param array $metadata   A list of custom metadata fields (by external_id) and the values to assign to each
         *                          of them.
         * @param array $public_ids An array of Public IDs of assets uploaded to Cloudinary.
         * @param array $options {
         *
         *      @var string resource_type   The type of file. Default: image. Valid values: image, raw, video.
         *      @var string type            The storage type. Default: upload.
         *                                  Valid values: upload, private, authenticated
         * }
         *
         * @return mixed a list of public IDs that were updated
         *
         * @throws Error
         */
        public static function update_metadata($metadata, $public_ids, $options = array())
        {
            $params = array(
                "timestamp" => time(),
                "metadata" => \Cloudinary::encode_assoc_array($metadata),
                "public_ids" => \Cloudinary::build_array($public_ids),
                "type" => \Cloudinary::option_get($options, "type"),
            );

            return Uploader::call_api("metadata", $params, $options);
        }

        public static function explicit($public_id, $options = array())
        {
            $options["public_id"] = $public_id;
            $params = Uploader::build_upload_params($options);

            return Uploader::call_cacheable_api("explicit", $params, $options);
        }

        public static function generate_sprite($tag, $options = array())
        {
            $transOptions = array_merge(array("fetch_format" => \Cloudinary::option_get($options, "format")), $options);
            $transformation = \Cloudinary::generate_transformation_string($transOptions);
            $params = array(
                "timestamp" => time(),
                "tag" => $tag,
                "async" => \Cloudinary::option_get($options, "async"),
                "notification_url" => \Cloudinary::option_get($options, "notification_url"),
                "transformation" => $transformation,
            );

            return Uploader::call_api("sprite", $params, $options);
        }

        public static function multi($tag, $options = array())
        {
            $transformation = \Cloudinary::generate_transformation_string($options);
            $params = array(
                "timestamp" => time(),
                "tag" => $tag,
                "format" => \Cloudinary::option_get($options, "format"),
                "async" => \Cloudinary::option_get($options, "async"),
                "notification_url" => \Cloudinary::option_get($options, "notification_url"),
                "transformation" => $transformation,
            );

            return Uploader::call_api("multi", $params, $options);
        }

        public static function explode($public_id, $options = array())
        {
            $transformation = \Cloudinary::generate_transformation_string($options);
            $params = array(
                "timestamp" => time(),
                "public_id" => $public_id,
                "format" => \Cloudinary::option_get($options, "format"),
                "type" => \Cloudinary::option_get($options, "type"),
                "notification_url" => \Cloudinary::option_get($options, "notification_url"),
                "transformation" => $transformation,
            );

            return Uploader::call_api("explode", $params, $options);
        }

        public static function add_tag($tag, $public_ids = array(), $options = array())
        {
            return Uploader::call_tags_api($tag, "add", $public_ids, $options);
        }

        public static function remove_tag($tag, $public_ids = array(), $options = array())
        {
            return Uploader::call_tags_api($tag, "remove", $public_ids, $options);
        }

        /**
         * Remove all tags from the specified public IDs.
         *
         * @param array|string  $public_ids     the public IDs of the resources to update
         * @param array         $options        additional options passed to the request
         * @return mixed                        list of public IDs that were updated
         */
        public static function remove_all_tags($public_ids, $options = array())
        {
            return Uploader::call_tags_api(null, "remove_all", $public_ids, $options);
        }

        public static function replace_tag($tag, $public_ids = array(), $options = array())
        {
            return Uploader::call_tags_api($tag, "replace", $public_ids, $options);
        }

        public static function call_tags_api($tag, $command, $public_ids = array(), &$options = array())
        {
            $params = array(
                "timestamp" => time(),
                "tag" => $tag,
                "public_ids" => \Cloudinary::build_array($public_ids),
                "type" => \Cloudinary::option_get($options, "type"),
                "command" => $command,
            );

            return Uploader::call_api("tags", $params, $options);
        }

        public static function add_context($context, $public_ids = array(), $options = array())
        {
            return Uploader::call_context_api($context, 'add', $public_ids, $options);
        }

        public static function remove_all_context($public_ids = array(), $options = array())
        {
            return Uploader::call_context_api(null, 'remove_all', $public_ids, $options);
        }

        public static function call_context_api($context, $command, $public_ids = array(), &$options = array())
        {
            $params = array(
                "timestamp" => time(),
                "context" => $context,
                "public_ids" => \Cloudinary::build_array($public_ids),
                "type" => \Cloudinary::option_get($options, "type"),
                "command" => $command,
            );

            return Uploader::call_api("context", $params, $options);
        }

        private static $TEXT_PARAMS = array(
            "public_id",
            "font_family",
            "font_size",
            "font_color",
            "text_align",
            "font_weight",
            "font_style",
            "background",
            "opacity",
            "text_decoration",
        );

        public static function text($text, $options = array())
        {
            $params = array("timestamp" => time(), "text" => $text);
            foreach (Uploader::$TEXT_PARAMS as $key) {
                $params[$key] = \Cloudinary::option_get($options, $key);
            }

            return Uploader::call_api("text", $params, $options);
        }

        # Creates a new archive in the server and returns information in JSON format
        public static function create_archive($options = array(), $target_format = null)
        {
            $params = \Cloudinary::build_archive_params($options);
            if ($target_format != null) {
                $params["target_format"] = $target_format;
            }

            return Uploader::call_api("generate_archive", $params, $options);
        }

        # Creates a new zip archive in the server and returns information in JSON format
        public static function create_zip($options = array())
        {
            return Uploader::create_archive($options, "zip");
        }

        /**
         * Calls Upload API and saves results to cache (if enabled)
         *
         * @param string      $action   Action to call
         * @param array       $params   Array of parameters
         * @param array|null  $options  Optional. Additional options
         * @param string|null $file     Optional. File to upload
         *
         * @return mixed
         *
         * @throws Error
         */
        public static function call_cacheable_api($action, $params, $options = array(), $file = null)
        {
            $result = self::call_api($action, $params, $options, $file);

            if (\Cloudinary::option_get($options, "use_cache", \Cloudinary::config_get("use_cache", false))) {
                self::save_responsive_breakpoints_to_cache($result);
            }

            return $result;
        }

        /**
         * Perform API call
         *
         * @param string      $action   Action to call
         * @param array       $params   Array of parameters
         * @param array|null  $options  Optional. Additional options
         * @param string|null $file     Optional. File to upload
         *
         * @return mixed
         *
         * @throws Error
         */
        public static function call_api($action, $params, $options = array(), $file = null)
        {
            $return_error = \Cloudinary::option_get($options, "return_error");
            if (!\Cloudinary::option_get($options, "unsigned")) {
                $params = \Cloudinary::sign_request($params, $options);
            }

            $api_url = \Cloudinary::cloudinary_api_url($action, $options);

            $ch = curl_init($api_url);

            $post_params = array();
            foreach ($params as $key => $value) {
                if (is_array($value)) {
                    $i = 0;
                    foreach ($value as $item) {
                        $post_params[$key . "[$i]"] = $item;
                        $i++;
                    }
                } else {
                    $post_params[$key] = $value;
                }
            }
            if ($file) {
                $filename = \Cloudinary::option_get($options, 'filename', $file);

                if (!preg_match(self::REMOTE_URL_REGEX, $file)) {
                    if (function_exists("curl_file_create")) {
                        $post_params['file'] = curl_file_create($file);
                        $post_params['file']->setPostFilename($filename);
                    } else {
                        $post_params["file"] = "@{$file};filename={$filename}";
                    }
                } else {
                    $post_params["file"] = $file;
                }
            }

            curl_setopt($ch, CURLOPT_POST, true);
            $timeout = \Cloudinary::option_get($options, "timeout", \Cloudinary::config_get("timeout", 60));
            curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
            $connection_timeout = \Cloudinary::option_get(
                $options,
                "connection_timeout",
                \Cloudinary::config_get("connection_timeout")
            );
            if ($connection_timeout != null) {
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $connection_timeout);
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_params);
            curl_setopt($ch, CURLOPT_CAINFO, realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "cacert.pem");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); # no effect since PHP 5.1.3
            curl_setopt($ch, CURLOPT_USERAGENT, \Cloudinary::userAgent());
            curl_setopt(
                $ch,
                CURLOPT_PROXY,
                \Cloudinary::option_get($options, "api_proxy", \Cloudinary::config_get("api_proxy"))
            );

            $headers = array();
            $range = \Cloudinary::option_get($options, "content_range");
            if ($range != null) {
                $headers[] = 'Content-Range: ' . $range;
            }
            $x_unique_upload_id = \Cloudinary::option_get($options, "x_unique_upload_id");
            if ($x_unique_upload_id != null) {
                $headers[] = 'X-Unique-Upload-Id: ' . $x_unique_upload_id;
            }
            if (!empty($headers)) {
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            }

            $response = curl_exec($ch);

            $errno = curl_errno($ch);

            $curl_error = null;
            if ($errno != CURLE_OK) {
                $curl_error = curl_error($ch);
            }

            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response_data = $response;

            curl_close($ch);

            if ($errno != CURLE_OK) {
                $message = "Error in sending request to server";

                // Provide user a better error message
                if ($errno === CURLE_READ_ERROR) {
                    // Note: race condition can happen here, not that critical, it's only for a message string
                    if (!file_exists($file)) {
                        $message .= " - file '{$file}' does not exist";
                    } else {
                        $message .= " - failed reading file '{$file}'";
                    }
                } else {
                    $message .= " - $curl_error, errno - $errno";
                }

                throw new Error($message);
            }

            if ($code != 200 && $code != 400 && $code != 500 && $code != 401 && $code != 404) {
                throw new Error(
                    "Server returned unexpected status code - " . $code . " - " . $response_data,
                    $code
                );
            }

            $result = json_decode($response_data, true);
            if ($result == null) {
                throw new Error("Error parsing server response (" . $code . ") - " . $response_data);
            }

            if (isset($result["error"])) {
                if ($return_error) {
                    $result["error"]["http_code"] = $code;
                } else {
                    $message = "";

                    if (isset($result["error"]["message"])) {
                        if (is_array($result["error"]["message"])) {
                            $message = $result["error"]["message"]["message"];
                        } else {
                            $message = $result["error"]["message"];
                        }
                    }

                    throw new Error($message, $code);
                }
            }

            return $result;
        }

        protected static function build_eager($transformations)
        {
            return \Cloudinary::build_eager($transformations);
        }

        protected static function build_responsive_breakpoints($breakpoints)
        {
            if (!$breakpoints) {
                return null;
            }
            $breakpoints_params = array();
            foreach (\Cloudinary::build_array($breakpoints) as $breakpoint_settings) {
                if ($breakpoint_settings) {
                    $transformation = \Cloudinary::option_consume($breakpoint_settings, "transformation");
                    if ($transformation) {
                        $breakpoint_settings["transformation"] = \Cloudinary::generate_transformation_string(
                            $transformation
                        );
                    }
                    array_push($breakpoints_params, $breakpoint_settings);
                }
            }

            return json_encode($breakpoints_params);
        }

        /**
         * Saves responsive breakpoints parsed from upload result to cache
         *
         * @param array $result Upload result
         */
        protected static function save_responsive_breakpoints_to_cache($result)
        {
            if (!array_key_exists("responsive_breakpoints", $result)) {
                return;
            }

            $public_id = \Cloudinary::option_get($result, "public_id");

            if (empty($public_id)) {
                // We have some faulty result, nothing to cache
                return;
            }

            $options = \Cloudinary::array_subset($result, ['type', 'resource_type']);

            foreach ($result["responsive_breakpoints"] as $transformation) {
                $options["raw_transformation"] = \Cloudinary::option_get($transformation, "transformation", "");
                $options["format"] = pathinfo($transformation["breakpoints"][0]["url"], PATHINFO_EXTENSION);

                // TODO: When updating minimum PHP version to at least 5.5, replace `array_map` with the line below
                // $breakpoints = array_column($transformation["breakpoints"], 'width');
                $breakpoints = array_map(
                    function ($e) {
                        return $e['width'];
                    },
                    $transformation["breakpoints"]
                );

                ResponsiveBreakpointsCache::instance()->set($public_id, $options, $breakpoints);
            }
        }

        protected static function build_custom_headers($headers)
        {
            if ($headers == null) {
                return null;
            } elseif (is_string($headers)) {
                return $headers;
            } elseif ($headers == array_values($headers)) {
                return implode("\n", $headers);
            } else {
                $join_pair = function ($key, $value) {
                    return $key . ": " . $value;
                };

                return implode("\n", array_map($join_pair, array_keys($headers), array_values($headers)));
            }
        }
    }
}
