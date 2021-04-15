<?php

namespace Cloudinary {

    /**
     * Class Api for accessing Cloudinary API functionality
     * @see https://cloudinary.com/documentation/admin_api
     *
     * @package Cloudinary
     */
    class Api
    {
        /**
         * @var array Cloudinary API Error Classes mapping between http error codes and Cloudinary exceptions
         */
        public static $CLOUDINARY_API_ERROR_CLASSES = array(
            400 => "\Cloudinary\Api\BadRequest",
            401 => "\Cloudinary\Api\AuthorizationRequired",
            403 => "\Cloudinary\Api\NotAllowed",
            404 => "\Cloudinary\Api\NotFound",
            409 => "\Cloudinary\Api\AlreadyExists",
            420 => "\Cloudinary\Api\RateLimited",
            500 => "\Cloudinary\Api\GeneralError",
        );

        /**
         * Tests the reachability of the Cloudinary API
         *
         * @see https://cloudinary.com/documentation/admin_api#ping_cloudinary
         *
         * @param array $options Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function ping($options = array())
        {
            return $this->call_api("get", array("ping"), array(), $options);
        }

        /**
         * Gets account usage details
         *
         * Get a report on the status of your Cloudinary account usage details, including
         * storage, bandwidth, requests, number of resources, and add-on usage.
         * Note that numbers are updated periodically.
         *
         * @see https://cloudinary.com/documentation/admin_api#get_account_usage_details
         *
         * @param array $options Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function usage($options = array())
        {
            $uri = array_filter(array("usage", \Cloudinary::encode_dates(\Cloudinary::option_get($options, 'date'))));

            return $this->call_api("get", $uri, array(), $options);
        }

        /**
         * Lists available resource types
         *
         * @param array $options Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function resource_types($options = array())
        {
            return $this->call_api("get", array("resources"), array(), $options);
        }

        /**
         * Lists all uploaded resources optionally filtered by the specified options
         *
         * @see https://cloudinary.com/documentation/admin_api#browse_resources
         *
         * @param array $options {
         *
         *      @var string         resource_type   The type of file. Default: image.
         *          Valid values: image, raw, video.
         *      @var string         type            The storage type. Default: all.
         *          Valid values: upload, private, authenticated, facebook, twitter, gplus, instagram_name, gravatar,
         *              youtube, hulu, vimeo, animoto, worldstarhiphop or dailymotion
         *      @var string         prefix          Find resources with a public ID that starts with the given prefix
         *      @var string|array   public_ids      List resources with the given public IDs (up to 100)
         *      @var int            max_results     Max number of resources to return. Default: 10. Maximum: 500
         *      @var string         next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as
         *          the next_cursor parameter of the following listing request.
         *      @var string         start_at        List resources that were created since the given timestamp(ISO).
         *          Supported if no prefix or public IDs were specified.
         *      @var string|int     direction       Control the order of returned resources.
         *          Valid values: "asc" (or 1), "desc" (or -1). Default: "desc".
         *          Note that if a prefix is specified, this parameter is ignored
         *          and the results are sorted by public ID.
         *      @var boolean        tags            Include the list of tag names assigned each resource. Default: false
         *      @var boolean        context         Include key-value pairs of context associated with each resource.
         *          Default: false
         *      @var boolean        moderations     Include image moderation status of each listed resource.
         *          Default: false
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function resources($options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type");
            $uri = array("resources", $resource_type);
            if ($type) {
                array_push($uri, $type);
            }
            $params = $this->only(
                $options,
                array(
                    "next_cursor",
                    "max_results",
                    "prefix",
                    "tags",
                    "context",
                    "moderations",
                    "direction",
                    "start_at",
                    "metadata",
                )
            );

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Lists resources by tag
         *
         * Retrieve a list of resources with a specified tag.
         * This method does not return deleted resources even if they have been backed up.
         *
         * @see https://cloudinary.com/documentation/admin_api#list_resources_by_tag
         *
         * @param string    $tag    The tag name of the resources
         * @param array     $options {
         *
         *      @var string         resource_type   The type of file. Default: image.
         *          Valid values: image, raw, video.
         *      @var int            max_results     Max number of resources to return. Default: 10. Maximum: 500
         *      @var string         next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as
         *          the next_cursor parameter of the following listing request.
         *      @var string|int     direction       Control the order of returned resources.
         *          Valid values: "asc" (or 1), "desc" (or -1). Default: "desc".
         *          Note that if a prefix is specified, this parameter is ignored
         *          and the results are sorted by public ID.
         *      @var boolean        tags            Include the list of tag names assigned each resource. Default: false
         *      @var boolean        context         Include key-value pairs of context associated with each resource.
         *          Default: false
         *      @var boolean        moderations     Include image moderation status of each listed resource.
         *          Default: false
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function resources_by_tag($tag, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $uri = array("resources", $resource_type, "tags", $tag);
            $params = $this->only(
                $options,
                array("next_cursor", "max_results", "tags", "context", "moderations", "direction", "metadata")
            );

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Lists resources by context
         *
         * Retrieve a list of resources with a specified context key.
         * This method does not return deleted resources even if they have been backed up.
         *
         * @see https://cloudinary.com/documentation/admin_api#list_resources_by_context
         *
         * @param string    $key    Only resources with this context key are returned
         * @param string    $value  Only resources with this value for the context key are returned.
         *      If this parameter is not provided, all resources with the given context key are returned,
         *      regardless of the actual value of the key.
         * @param array     $options {
         *
         *      @var string         resource_type   The type of file. Default: image.
         *          Valid values: image, raw, video.
         *      @var int            max_results     Max number of resources to return. Default: 10. Maximum: 500
         *      @var string         next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as
         *          the next_cursor parameter of the following listing request.
         *      @var string|int     direction       Control the order of returned resources.
         *          Valid values: "asc" (or 1), "desc" (or -1). Default: "desc".
         *          Note that if a prefix is specified, this parameter is ignored
         *          and the results are sorted by public ID.
         *      @var boolean        tags            Include the list of tag names assigned each resource. Default: false
         *      @var boolean        context         Include key-value pairs of context associated with each resource.
         *          Default: false
         *      @var boolean        moderations     Include image moderation status of each listed resource.
         *          Default: false
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function resources_by_context($key, $value = null, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $uri = array("resources", $resource_type, "context");
            $params = $this->only(
                $options,
                array("next_cursor", "max_results", "tags", "context", "moderations", "direction", "metadata")
            );
            $params["key"] = $key;
            $params["value"] = $value;

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Lists resources in moderation queues
         *
         * @see https://cloudinary.com/documentation/admin_api#list_resources_in_moderation_queues
         *
         * @param string    $kind   Type of image moderation queue to list.
         *      Valid values:  "manual", "webpurify", "aws_rek", or "metascan"
         * @param string    $status Moderation status of resources.
         *      Valid values: "pending", "approved", "rejected"
         * @param array     $options {
         *
         *      @var string         resource_type   The type of file. Default: image.
         *          Valid values: image, raw, video.
         *      @var int            max_results     Max number of resources to return. Default: 10. Maximum: 500
         *      @var string         next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as
         *          the next_cursor parameter of the following listing request.
         *      @var string|int     direction       Control the order of returned resources.
         *          Valid values: "asc" (or 1), "desc" (or -1). Default: "desc".
         *          Note that if a prefix is specified, this parameter is ignored
         *          and the results are sorted by public ID.
         *      @var boolean        tags            Include the list of tag names assigned each resource. Default: false
         *      @var boolean        context         Include key-value pairs of context associated with each resource.
         *          Default: false
         *      @var boolean        moderations     Include image moderation status of each listed resource.
         *          Default: false
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function resources_by_moderation($kind, $status, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $uri = array("resources", $resource_type, "moderations", $kind, $status);
            $params = $this->only(
                $options,
                array("next_cursor", "max_results", "tags", "context", "moderations", "direction", "metadata")
            );

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Lists resources by public IDs
         *
         * @see https://cloudinary.com/documentation/admin_api#list_all_uploaded_images_with_the_given_ids
         *
         * @param string|array   public_ids      List resources with the given public IDs (up to 100)
         * @param array     $options {
         *
         *      @var string         resource_type   The type of file. Default: image.
         *          Valid values: image, raw, video.
         *      @var string         type            The storage type. Default: all.
         *          Valid values: upload, private, authenticated, facebook, twitter, gplus, instagram_name, gravatar,
         *              youtube, hulu, vimeo, animoto, worldstarhiphop or dailymotion
         *      @var boolean        tags            Include the list of tag names assigned each resource. Default: false
         *      @var boolean        context         Include key-value pairs of context associated with each resource.
         *          Default: false
         *      @var boolean        moderations     Include image moderation status of each listed resource.
         *          Default: false
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function resources_by_ids($public_ids, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type", "upload");
            $uri = array("resources", $resource_type, $type);
            $params = array_merge($options, array("public_ids" => $public_ids));
            $params = $this->only($params, array("public_ids", "tags", "moderations", "context"));

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Details of a single resource
         *
         * Return details of the requested resource as well as all its derived resources.
         * Note that if you only need details about the original resource,
         * you can also use the Uploader::upload or Uploader::explicit methods, which are not rate limited.
         *
         * @see https://cloudinary.com/documentation/admin_api#details_of_a_single_resource
         *
         * @param string    $public_id   The public ID of the resource.
         * @param array $options {
         *
         *      @var string     resource_type   The type of file. Default: image. Valid values: image, raw, video.
         *      @var string     type            The storage type. Default: all.
         *          Valid values: upload, private, authenticated, facebook, twitter, gplus, instagram_name, gravatar,
         *          youtube, hulu, vimeo, animoto, worldstarhiphop or dailymotion
         *      @var boolean    colors          Include color information: predominant colors and histogram of 32
         *          leading colors. Default: false
         *      @var boolean    image_metadata  Include IPTC, XMP, and detailed Exif metadata.
         *          Supported for images, video, and audio. Default: false
         *      @var boolean    exif     Deprecated. Use image_metadata instead
         *      @var boolean    faces    Include a list of coordinates of detected faces. Default: false
         *      @var boolean    quality_analysis Include quality analysis information. Default: false
         *      @var boolean    pages    Report the number of pages in multi-page documents (e.g., PDF). Default: false
         *      @var boolean    phash    Include the perceptual hash (pHash) of the uploaded photo for image similarity
         *          detection. Default: false
         *      @var boolean    coordinates    Include previously specified custom cropping coordinates and faces
         *          coordinates. Default: false
         *      @var int        max_results    The number of derived images to return. Default: 10. Maximum: 100
         *      @var string     derived_next_cursor If there are more derived images than max_results,
         *          the derived_next_cursor value is returned as part of the response. You can then specify this value
         *          as the derived_next_cursor parameter of the following listing request.
         *      @var boolean    cinemagraph_analysis    Include cinemagraph analysis information. Default: false
         *      @var boolean    accessibility_analysis    Include accessibility analysis information. Default: false
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function resource($public_id, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type", "upload");
            $uri = array("resources", $resource_type, $type, $public_id);
            $params = $this->only(
                $options,
                array(
                    "exif",
                    "colors",
                    "faces",
                    "quality_analysis",
                    "cinemagraph_analysis",
                    "image_metadata",
                    "phash",
                    "pages",
                    "coordinates",
                    "max_results",
                    "derived_next_cursor",
                    "accessibility_analysis",
                    "versions",
                )
            );

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Restores a deleted resource
         *
         * Reverts to the latest backed up version of the resource.
         *
         * @see https://cloudinary.com/documentation/admin_api#restore_a_deleted_resource
         *
         * @param string|array  $public_ids The public IDs of (deleted or existing) backed up resources to restore.
         * @param array     $options {
         *
         *      @var string resource_type   The type of file. Default: image. Valid values: image, raw, video.
         *      @var string type            The storage type: upload, private, or authenticated. Default: upload.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function restore($public_ids, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type", "upload");
            $uri = array("resources", $resource_type, $type, "restore");
            $params = array_merge($options, array("public_ids" => $public_ids));
            $options['content_type'] = 'application/json';

            return $this->call_api("post", $uri, $params, $options);
        }

        /**
         * Updates details of an existing resource
         *
         *
         * Update one or more of the attributes associated with a specified resource. Note that you can also update
         * many attributes of an existing resource using the Uploader::explicit method, which is not rate limited.
         *
         *  @see https://cloudinary.com/documentation/admin_api#update_details_of_an_existing_resource
         *
         * @param string|array  $public_id  The public ID of the resource to update.
         * @param array         $options {
         *
         *      @var string         resource_type       The type of file. Default: image.
         *          Valid values: image, raw, video.
         *      @var string         type                The storage type. Default: upload.
         *          Valid values: upload, private, authenticated, facebook, twitter, gplus, instagram_name, gravatar,
         *              youtube, hulu, vimeo, animoto, worldstarhiphop or dailymotion
         *      @var string|array   tags                Tag names to assign to the uploaded image.
         *      @var string|array   context             Array of key-value pairs of general textual context metadata
         *          to attach to an uploaded resource.
         *      @var string|array   face_coordinates    Array of coordinates of faces contained in an uploaded image.
         *          Each face is specified by the X & Y coordinates of the top left corner
         *          and the width & height of the face.
         *          For example: array(array(10,20,150,130), array(213, 345, 82, 61))
         *      @var string|array   custom_coordinates  Coordinates of an interesting region contained in an image.
         *          The given coordinates are used for cropping uploaded images using the custom gravity mode.
         *          The region is specified by the X & Y coordinates of the top left corner
         *          and the width & height of the region. For example: array(85, 120, 220, 310).
         *      @var string         moderation_status   Manually set image moderation status or override previously
         *          automatically moderated images by approving or rejecting. Valid values: approved, rejected
         *      @var float          auto_tagging        Whether to assign tags to an image according to detected scene
         *          categories with confidence score higher than the given value. Valid values: 0.0 to 1.0
         *      @var string          detection          Set to 'adv_face' to automatically extract advanced face
         *          attributes of photos using the Advanced Facial Attributes Detection add-on
         *      @var string          ocr                Set to 'adv_ocr' to extract all text elements in an image
         *          as well as the bounding box coordinates of each detected elementusing the
         *          OCR Text Detection and Extraction add-on.
         *      @var string         raw_convert         Set to 'aspose' to automatically convert Office documents to
         *          PDF files and other image formats using the Aspose Document Conversion add-on.
         *      @var string         categorization      Set to 'imagga_tagging' to automatically detect scene categories
         *          of photos using the Imagga Auto Tagging add-on.
         *      @var string         background_removal  Set to 'remove_the_background'
         *          (or 'pixelz' - the new name of the company) to automatically clear the background of an uploaded
         *          photo using the Remove-The-Background Editing add-on.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function update($public_id, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type", "upload");
            $uri = array("resources", $resource_type, $type, $public_id);

            $tags = \Cloudinary::option_get($options, "tags");
            $context = \Cloudinary::option_get($options, "context");
            $face_coordinates = \Cloudinary::option_get($options, "face_coordinates");
            $custom_coordinates = \Cloudinary::option_get($options, "custom_coordinates");
            $access_control = \Cloudinary::option_get($options, "access_control");

            $primitive_options = $this->only(
                $options,
                array(
                    "moderation_status",
                    "raw_convert",
                    "ocr",
                    "categorization",
                    "detection",
                    "similarity_search",
                    "auto_tagging",
                    "background_removal",
                    "quality_override",
                    "notification_url",
                )
            );

            $array_options = array(
                "tags" => $tags ? implode(",", \Cloudinary::build_array($tags)) : $tags,
                "context" => $context ? \Cloudinary::encode_assoc_array($context) : $context,
                "face_coordinates" => $face_coordinates ? \Cloudinary::encode_double_array(
                    $face_coordinates
                ) : $face_coordinates,
                "custom_coordinates" => $custom_coordinates ? \Cloudinary::encode_double_array(
                    $custom_coordinates
                ) : $custom_coordinates,
                "access_control" => \Cloudinary::encode_array_to_json($access_control),
            );

            $update_options = array_merge($primitive_options, $array_options);

            return $this->call_api("post", $uri, $update_options, $options);
        }

        /**
         * Deletes resources by public IDs
         *
         * Delete all resources with the given public IDs (up to 100).
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_uploaded_images_by_public_ids
         *
         * @param string|array  $public_ids     The public IDs of the resources
         * @param array         $options {
         *
         *      @var string         resource_type       The type of the file. Default: image.
         *          Valid values: image, raw, video.
         *      @var string         type                The storage type. Default: upload.
         *          Valid values: upload, private, authenticated, facebook, twitter, gplus, instagram_name, gravatar,
         *              youtube, hulu, vimeo, animoto, worldstarhiphop or dailymotion
         *      @var boolean        keep_original       Delete only the derived resources. Default: false
         *      @var boolean        invalidate          Whether to also invalidate the copies of the resource on the CDN
         *          Default: false
         *      @var string         next_cursor         When a deletion request has more than 1000 resources to delete,
         *          the response includes the partial boolean parameter set to true, as well as a next_cursor value.
         *          Use this returned next_cursor value as the next_cursor parameter of the following deletion request
         *      @var string|array   transformations     Only the derived resources matching this array of
         *          transformation parameters will be deleted.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_resources($public_ids, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type", "upload");
            $uri = array("resources", $resource_type, $type);
            $params = $this->prepare_delete_resource_params($options, ["public_ids" => $public_ids]);

            return $this->call_api("delete", $uri, $params, $options);
        }

        /**
         * Deletes resources by prefix.
         *
         * Delete all resources, including derived resources, where the public ID starts with the given prefix
         * (up to a maximum of 1000 original resources).
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_uploaded_images_by_prefix
         *
         * @param string    $prefix     The prefix of the public IDs
         * @param array     $options {
         *
         *      @option string         resource_type    The type of the file. Default: image.
         *          Valid values: image, raw, video.
         *      @option string         type             The storage type. Default: upload.
         *          Valid values: upload, private, authenticated, facebook, twitter, gplus, instagram_name, gravatar,
         *              youtube, hulu, vimeo, animoto, worldstarhiphop or dailymotion
         *      @option boolean        keep_original    Delete only the derived resources. Default: false
         *      @option boolean        invalidate       Whether to also invalidate the copies of the resource on the CDN
         *          Default: false
         *      @option string         next_cursor      When a deletion request has more than 1000 resources to delete,
         *          the response includes the partial boolean parameter set to true, as well as a next_cursor value.
         *          Use this returned next_cursor value as the next_cursor parameter of the following deletion request
         *      @option string|array   transformations  Only the derived resources matching this array of
         *          transformation parameters will be deleted.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_resources_by_prefix($prefix, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type", "upload");
            $uri = array("resources", $resource_type, $type);
            $params = $this->prepare_delete_resource_params($options, ["prefix" => $prefix]);

            return $this->call_api("delete", $uri, $params, $options);
        }

        /**
         * Deletes all resources
         *
         * Delete all resources (of the relevant resource type and type), including derived resources
         * (up to a maximum of 1000 original resources)
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_all_or_selected_resources
         *
         * @param array     $options {
         *
         *      @var string         resource_type       The type of the file. Default: image.
         *          Valid values: image, raw, video.
         *      @var string         type                The storage type. Default: upload.
         *          Valid values: upload, private, authenticated, facebook, twitter, gplus, instagram_name, gravatar,
         *              youtube, hulu, vimeo, animoto, worldstarhiphop or dailymotion
         *      @var boolean        keep_original       Delete only the derived resources. Default: false
         *      @var boolean        invalidate          Whether to also invalidate the copies of the resource on the CDN
         *          Default: false
         *      @var string         next_cursor         When a deletion request has more than 1000 resources to delete,
         *          the response includes the partial boolean parameter set to true, as well as a next_cursor value.
         *          Use this returned next_cursor value as the next_cursor parameter of the following deletion request
         *      @var string|array   transformations     Only the derived resources matching this array of
         *          transformation parameters will be deleted.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_all_resources($options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type = \Cloudinary::option_get($options, "type", "upload");
            $uri = array("resources", $resource_type, $type);
            $params = $this->prepare_delete_resource_params($options, ["all" => true]);

            return $this->call_api("delete", $uri, $params, $options);
        }
        /**
         * Deletes resources by tag
         *
         * Delete all resources (and their derivatives) with the given tag name
         * (up to a maximum of 1000 original resources).
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_resources_by_tags
         *
         * @param string    $tag    The tag name of the resources to delete
         * @param array $options {
         *
         *      @var string         resource_type       The type of the file. Default: image.
         *          Valid values: image, raw, video.
         *      @var boolean        keep_original       Delete only the derived resources. Default: false
         *      @var boolean        invalidate          Whether to also invalidate the copies of the resource on the CDN
         *          Default: false
         *      @var string         next_cursor         When a deletion request has more than 1000 resources to delete,
         *          the response includes the partial boolean parameter set to true, as well as a next_cursor value.
         *          Use this returned next_cursor value as the next_cursor parameter of the following deletion request
         *      @var string|array   transformations     Only the derived resources matching this array of
         *          transformation parameters will be deleted.
         * }
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_resources_by_tag($tag, $options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $uri = array("resources", $resource_type, "tags", $tag);
            $params = $this->prepare_delete_resource_params($options);

            return $this->call_api("delete", $uri, $params, $options);
        }

        /**
         * Deletes derived resources
         *
         * Delete all derived resources with the given IDs (an array of up to 100 derived_resource_ids).
         * The derived resource IDs are returned when calling the Details of a single resource method.
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_derived_resources
         *
         * @param string|array      $derived_resource_ids   The derived resource IDs
         * @param array             $options                Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_derived_resources($derived_resource_ids, $options = array())
        {
            $uri = array("derived_resources");
            $params = array("derived_resource_ids" => $derived_resource_ids);

            return $this->call_api("delete", $uri, $params, $options);
        }

        /**
         * Deletes derived resources identified by transformation for the provided public_ids
         *
         * @param string|array  $public_ids         The resources the derived resources belong to
         * @param string|array  $transformations    The transformation(s) associated with the derived resources
         * @param array     $options {
         *
         *      @var string         resource_type       The type of the file. Default: image.
         *          Valid values: image, raw, video.
         *      @var string         type                The storage type. Default: upload.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_derived_by_transformation(
            $public_ids,
            $transformations = array(),
            $options = array()
        ) {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $type          = \Cloudinary::option_get($options, "type", "upload");
            $uri           = ["resources", $resource_type, $type];
            $params = [
                "public_ids" => \Cloudinary::build_array($public_ids),
                "keep_original" => true,
            ];
            $params["transformations"] = \Cloudinary::build_eager($transformations);
            $params = array_merge($params, $this->only($options, ["invalidate"]));

            return $this->call_api("delete", $uri, $params, $options);
        }

        /**
         * Lists tags
         *
         * @see https://cloudinary.com/documentation/admin_api#list_tags
         *
         * @param array     $options {
         *
         *      @var string     resource_type   The type of the file. Default: image.
         *          Valid values: image, raw, video.
         *      @var string     prefix          Find all tags that start with the given prefix.
         *      @var int        max_results     Max number of tags to return. Default: 10. Maximum: 500
         *      @var string     next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as
         *          the next_cursor parameter of the following listing request.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function tags($options = array())
        {
            $resource_type = \Cloudinary::option_get($options, "resource_type", "image");
            $uri = array("tags", $resource_type);
            $params = $this->only($options, array("next_cursor", "max_results", "prefix"));

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Lists transformations
         *
         * @see https://cloudinary.com/documentation/admin_api#list_transformations
         *
         * @param array $options {
         *
         *      @var int        max_results     Max number of transformations to return. Default: 10. Maximum: 500
         *      @var string     next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as
         *          the next_cursor parameter of the following listing request.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function transformations($options = array())
        {
            $uri = array("transformations");
            $params = $this->only($options, array("named", "next_cursor", "max_results"));

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Details of a single transformation
         *
         * @see https://cloudinary.com/documentation/admin_api#details_of_a_single_transformation
         *
         * @param string|array  $transformation The transformation. Can be either a string or an array of parameters.
         *      For example: "w_150,h_100,c_fill" or array("width" => 150, "height" => 100,"crop" => "fill")
         * @param array         $options {
         *
         *      @var int        max_results     Max number of transformations to return. Default: 10. Maximum: 500
         *      @var string     next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as the
         *          next_cursor parameter of the following listing request.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function transformation($transformation, $options = array())
        {
            $uri = array("transformations");
            $params = $this->only($options, array("next_cursor", "max_results"));
            $params["transformation"] = \Cloudinary::build_single_eager($transformation);

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Deletes transformation
         *
         * Note: Deleting a transformation also deletes all the derived images based on this transformation (up to 1000)
         * The method returns an error if there are more than 1000 derived images based on this transformation.
         *
         * @see  https://cloudinary.com/documentation/admin_api#delete_transformation
         *
         * @param string|array  $transformation The transformation. Can be either a string or an array of parameters
         *      For example: "w_150,h_100,c_fill" or array("width" => 150, "height" => 100,"crop" => "fill")
         * @param array         $options        Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_transformation($transformation, $options = array())
        {
            $uri = array("transformations");
            $params = array("transformation" => \Cloudinary::build_single_eager($transformation));
            if (isset($options["invalidate"])) {
                $params["invalidate"] = $options["invalidate"];
            }

            return $this->call_api("delete", $uri, $params, $options);
        }

        /**
         * Updates transformation
         *
         * @see https://cloudinary.com/documentation/admin_api#update_transformation
         *
         * @param string|array  $transformation The transformation. Can be either a string or an array of parameters.
         *      For example: "w_150,h_100,c_fill" or array("width" => 150, "height" => 100,"crop" => "fill")
         * @param array         $updates {
         *
         *      @var boolean    allowed_for_strict  Whether this transformation is allowed when
         *          Strict Transformations are enabled.
         *      @var boolean    unsafe_update       Allows updating an existing named transformation without updating
         *          all associated derived images (the new settings of the named transformation only take effect from
         *          now on).
         * }
         * @param array         $options        Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function update_transformation($transformation, $updates = array(), $options = array())
        {
            $uri = array("transformations");
            $params = $this->only($updates, array("allowed_for_strict"));
            if (isset($updates["unsafe_update"])) {
                $params["unsafe_update"] = $this->transformation_string($updates["unsafe_update"]);
            }
            $params["transformation"] = \Cloudinary::build_single_eager($transformation);

            return $this->call_api("put", $uri, $params, $options);
        }

        /**
         * Creates named transformation
         *
         * @see https://cloudinary.com/documentation/admin_api#create_named_transformation
         *
         * @param string        $name       The name of the transformation
         * @param string|array  $definition The transformation. Can be either a string or an array of parameters.
         *      For example: "w_150,h_100,c_fill" or array("width" => 150, "height" => 100,"crop" => "fill")
         * @param array         $options    Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function create_transformation($name, $definition, $options = array())
        {
            $uri = array("transformations");
            $params = array("transformation" => \Cloudinary::build_single_eager($definition), "name" => $name);

            return $this->call_api("post", $uri, $params, $options);
        }

        /**
         * Lists upload presets
         *
         * @see https://cloudinary.com/documentation/admin_api#list_upload_presets
         *
         * @param array         $options {
         *
         *      @var int        max_results     Max number of upload presets to return. Default: 10. Maximum: 500
         *      @var string     next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as the
         *          next_cursor parameter of the following listing request.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function upload_presets($options = array())
        {
            $uri = array("upload_presets");
            $params = $this->only($options, array("next_cursor", "max_results"));

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Details of a single upload preset
         *
         * @see https://cloudinary.com/documentation/admin_api#details_of_a_single_upload_preset
         *
         * @param string    $name       The name of the upload preset
         * @param array     $options    Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function upload_preset($name, $options = array())
        {
            $uri = array("upload_presets", $name);

            return $this->call_api("get", $uri, $this->only($options, array("max_results")), $options);
        }

        /**
         * Deletes an upload preset
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_an_upload_preset
         *
         * @param string    $name       The name of the upload preset
         * @param array     $options    Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_upload_preset($name, $options = array())
        {
            $uri = array("upload_presets", $name);

            return $this->call_api("delete", $uri, array(), $options);
        }

        /**
         * Updates an upload preset
         *
         * @see https://cloudinary.com/documentation/admin_api#update_an_upload_preset
         *
         * @param string    $name       The name of the upload preset
         *
         * @see \Cloudinary\Uploader::upload()
         *
         * @param array $options {
         *      In addition to the options below, any Uploader::upload() actions to apply to assets uploaded with this
         *      preset.
         *
         *      @var boolean unsigned           Whether this upload preset allows unsigned uploading to Cloudinary.
         *      @var boolean disallow_public_id Whether this upload preset disables assigning a public_id in the
         *          image upload call
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function update_upload_preset($name, $options = array())
        {
            $uri = array("upload_presets", $name);
            $params = \Cloudinary\Uploader::build_upload_params($options);
            $params = array_merge($params, $this->only($options, array("unsigned", "disallow_public_id", "live")));

            return $this->call_api("put", $uri, $params, $options);
        }

        /**
         * Creates an upload preset
         *
         * @see https://cloudinary.com/documentation/admin_api#create_an_upload_preset
         *
         * @see \Cloudinary\Uploader::upload()
         *
         * @param array $options {
         *      In addition to the options below, any Uploader::upload() parameters to apply to assets uploaded with
         *      this preset.
         *
         *      @var string     name               The name to assign to the new upload preset. If not provided, random
         *          name is generated
         *      @var boolean    unsigned           Whether this upload preset allows unsigned uploading to Cloudinary.
         *      @var boolean    disallow_public_id Whether this upload preset disables assigning a public_id in the
         *          image upload call
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function create_upload_preset($options = array())
        {
            $params = \Cloudinary\Uploader::build_upload_params($options);
            $params = array_merge(
                $params,
                $this->only($options, array("name", "unsigned", "disallow_public_id", "live"))
            );

            return $this->call_api("post", array("upload_presets"), $params, $options);
        }

        /**
         * Lists all root folders
         *
         * @see https://cloudinary.com/documentation/admin_api#list_all_root_folders
         *
         * @param array $options {
         *
         *      @var int     max_results     Max number of root folders to return. Default: 2000. Maximum: 2000
         *      @var string  next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as the
         *          next_cursor parameter of the following listing request.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function root_folders($options = array())
        {
            $params = $this->only($options, array("next_cursor", "max_results"));

            return $this->call_api("get", array("folders"), $params, $options);
        }

        /**
         * Lists subfolders
         *
         * Lists the name and path of all the subfolders of a given root folder
         *
         * @see https://cloudinary.com/documentation/admin_api#list_subfolders
         *
         * @param string    $of_folder_path The root folder
         * @param array $options {
         *
         *      @var int     max_results     Max number of sub-folders to return. Default: 2000. Maximum: 2000
         *      @var string  next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as the
         *          next_cursor parameter of the following listing request.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function subfolders($of_folder_path, $options = array())
        {
            $uri = array("folders", $of_folder_path);
            $params = $this->only($options, array("next_cursor", "max_results"));

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Creates folder
         *
         * Creates an empty folder
         *
         * @param string $path    The folder path to create
         * @param array  $options Additional options
         *
         * @return Api\Response
         *
         * @throws Api\BadRequest
         * @throws Api\GeneralError
         */
        public function create_folder($path, $options = array())
        {
            $uri = array("folders", $path);

            return $this->call_api("post", $uri, array(), $options);
        }

        /**
         * Deletes folder
         *
         * Deleted folder must be empty, but can have descendant empty sub folders
         *
         * @param string $path    The folder to delete
         * @param array  $options Additional options
         *
         * @return Api\Response
         *
         * @throws Api\BadRequest
         * @throws Api\GeneralError
         */
        public function delete_folder($path, $options = array())
        {
            $uri = array("folders", $path);

            return $this->call_api("delete", $uri, array(), $options);
        }

        /**
         * Lists upload mappings
         *
         * List all upload mappings by folder and its mapped template (URL).
         *
         * @see https://cloudinary.com/documentation/admin_api#list_upload_mappings
         *
         * @param array $options {
         *
         *      @var int     max_results     Max number of upload presets to return. Default: 10. Maximum: 500
         *      @var string  next_cursor     When a listing request has more results to return than max_results,
         *          the next_cursor value is returned as part of the response. You can then specify this value as the
         *          next_cursor parameter of the following listing request.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function upload_mappings($options = array())
        {
            $uri = array("upload_mappings");
            $params = $this->only($options, array("next_cursor", "max_results"));

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Details of a single upload mapping
         *
         * Retrieve the mapped template (URL) of a given upload mapping folder.
         *
         * @see https://cloudinary.com/documentation/admin_api#details_of_a_single_upload_mapping
         *
         * @param string    $name       The name of the folder
         * @param array     $options    Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function upload_mapping($name, $options = array())
        {
            $uri = array("upload_mappings");
            $params = array("folder" => $name);

            return $this->call_api("get", $uri, $params, $options);
        }

        /**
         * Deletes an upload mapping
         *
         * Delete an upload mapping by folder name.
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_an_upload_mapping
         *
         * @param string    $name       The name of the folder
         * @param array     $options    Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_upload_mapping($name, $options = array())
        {
            $uri = array("upload_mappings");
            $params = array("folder" => $name);

            return $this->call_api("delete", $uri, $params, $options);
        }

        /**
         * Updates an upload mapping
         *
         * Update an existing upload mapping folder with a new template (URL).
         *
         * @see https://cloudinary.com/documentation/admin_api#update_an_upload_mapping
         *
         * @param string    $name   The name of the folder
         * @param array     $options {
         *
         *      @var string     template    The new URL to be mapped to the folder.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function update_upload_mapping($name, $options = array())
        {
            $uri = array("upload_mappings");
            $params = array_merge(array("folder" => $name), $this->only($options, array("template")));

            return $this->call_api("put", $uri, $params, $options);
        }

        /**
         * Creates an upload mapping
         *
         * Create a new upload mapping folder and its template (URL).
         *
         * @see https://cloudinary.com/documentation/admin_api#create_an_upload_mapping
         *
         * @param string    $name   The name of the folder to map.
         * @param array     $options {
         *
         *      @var string     template    The URL to be mapped to the folder.
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function create_upload_mapping($name, $options = array())
        {
            $uri = array("upload_mappings");
            $params = array_merge(array("folder" => $name), $this->only($options, array("template")));

            return $this->call_api("post", $uri, $params, $options);
        }

        /**
         * Lists streaming profiles
         *
         * List streaming profiles associated with the current customer, including built-in and custom profiles.
         *
         * @see https://cloudinary.com/documentation/admin_api#list_streaming_profiles
         *
         * @param array $options Additional options
         *
         * @return Api\Response An array with a "data" key for results
         *
         * @throws Api\GeneralError
         */
        public function list_streaming_profiles($options = array())
        {
            return $this->call_api("get", array("streaming_profiles"), array(), $options);
        }

        /**
         * Gets details of a single streaming profile
         *
         * Retrieve the details of a single streaming profile by name.
         *
         * @see https://cloudinary.com/documentation/admin_api#get_details_of_a_single_streaming_profile
         *
         * @param string    $name       The identification name of the streaming profile
         * @param array     $options    Additional options
         *
         * @return Api\Response An array with a "data" key for results
         *
         * @throws Api\GeneralError
         */
        public function get_streaming_profile($name, $options = array())
        {
            $uri = array("streaming_profiles/" . $name);
            return $this->call_api("get", $uri, array(), $options);
        }

        /**
         * Deletes or reverts the specified streaming profile
         *
         * For custom streaming profiles, delete the specified profile.
         * For built-in streaming profiles, if the built-in profile was modified, revert the profile to the original
         * settings.
         * For built-in streaming profiles that have not been modified, the Delete method returns an error.
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_or_revert_the_specified_streaming_profile
         *
         * @param string    $name       The identification name of the streaming profile
         * @param array     $options    Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function delete_streaming_profile($name, $options = array())
        {
            $uri = array("streaming_profiles/" . $name);
            return $this->call_api("delete", $uri, array(), $options);
        }

        /**
         * Updates an existing streaming profile
         *
         * Update the specified existing streaming profile. You can update both custom and built-in profiles.
         * The specified list of representations replaces the previous list.
         *
         * @param string    $name       The identification name of the streaming profile
         * @param array $options {
         *
         *      @var string         display_name    A descriptive name for the profile.
         *      @var array          representations An array of structures that defines a custom streaming profile.
         *      @var string|array   transformation  Specifies the transformation parameters for the representation.
         *          All video transformation parameters except video_sampling are supported. Common transformation
         *          parameters for representations include: width, height (or aspect_ratio), bit_rate, video_codec,
         *          audio_codec, sample_rate (or fps), etc.
         *      @see self::create_transformation()
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function update_streaming_profile($name, $options = array())
        {
            $uri = array("streaming_profiles/" . $name);
            $params = $this->prepare_streaming_profile_params($options);
            return $this->call_api("put", $uri, $params, $options);
        }

        /**
         * Creates a new, custom streaming profile.
         *
         * @see https://cloudinary.com/documentation/admin_api#create_a_streaming_profile
         *
         * @param string $name      The identification name to assign to the new streaming profile.
         *      The name is case-insensitive and can contain alphanumeric characters, underscores (_) and hyphens (-).
         *      If the name is of a predefined profile, the profile will be modified.
         * @param array $options {
         *
         *      @var string         display_name    A descriptive name for the profile.
         *      @var array          representations An array of structures that defines a custom streaming profile.
         *      @var string|array   transformation  Specifies the transformation parameters for the representation.
         *          All video transformation parameters except video_sampling are supported. Common transformation
         *          parameters for representations include: width, height (or aspect_ratio), bit_rate, video_codec,
         *          audio_codec, sample_rate (or fps), etc.
         *      @see self::create_transformation()
         * }
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function create_streaming_profile($name, $options = array())
        {
            $uri = array("streaming_profiles");
            $params = $this->prepare_streaming_profile_params($options);
            $params["name"] = $name;

            return $this->call_api("post", $uri, $params, $options);
        }

        /**
         * Returns a list of all metadata field definitions
         *
         * @see https://cloudinary.com/documentation/admin_api#get_metadata_fields Get metadata fields API reference
         *
         * @param array $options Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function list_metadata_fields($options = array())
        {
            return $this->call_metadata_api('get', array(), array(), $options);
        }

        /**
         * Gets a metadata field by external id
         *
         * @see https://cloudinary.com/documentation/admin_api#get_a_metadata_field_by_external_id Get metadata field by external ID API reference
         *
         * @param string $field_external_id The ID of the metadata field to retrieve
         * @param array  $options           Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function metadata_field_by_field_id($field_external_id, $options = array())
        {
            $uri = [$field_external_id];

            return $this->call_metadata_api('get', $uri, array(), $options);
        }

        /**
         * Creates a new metadata field definition
         *
         * @see https://cloudinary.com/documentation/admin_api#create_a_metadata_field Create metadata field API reference
         *
         * @param array $field   The field to add
         * @param array $options Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function add_metadata_field($field, $options = array())
        {
            $params = $this->only($field, [
                'type',
                'external_id',
                'label',
                'mandatory',
                'default_value',
                'validation',
                'datasource'
            ]);

            return $this->call_metadata_api('post', array(), $params, $options);
        }

        /**
         * Updates a metadata field by external id
         *
         * Updates a metadata field definition (partially, no need to pass the entire object) passed as JSON data.
         * See {@see https://cloudinary.com/documentation/admin_api#generic_structure_of_a_metadata_field Generic structure of a metadata field} for details.
         *
         * @see https://cloudinary.com/documentation/admin_api#update_a_metadata_field_by_external_id Update metadata field API reference
         *
         * @param string $field_external_id The id of the metadata field to update
         * @param array  $field             The field definition
         * @param array  $options           Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function update_metadata_field($field_external_id, $field, $options = array())
        {
            $uri = [$field_external_id];
            $params = $this->only($field, [
                'label',
                'mandatory',
                'default_value',
                'validation'
            ]);

            return $this->call_metadata_api('put', $uri, $params, $options);
        }

        /**
         * Deletes a metadata field definition.
         *
         * The field should no longer be considered a valid candidate for all other endpoints
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_a_metadata_field_by_external_id Delete metadata field API reference
         *
         * @param string $field_external_id The external id of the field to delete
         * @param array  $options           Additional options
         *
         * @return Api\Response An array with a "message" key. "ok" value indicates a successful deletion.
         *
         * @throws Api\GeneralError
         */
        public function delete_metadata_field($field_external_id, $options = array())
        {
            $uri = [$field_external_id];

            return $this->call_metadata_api('delete', $uri, array(), $options);
        }

        /**
         * Deletes entries in a metadata field datasource
         *
         * Deletes (blocks) the datasource entries for a specified metadata field definition. Sets the state of the
         * entries to inactive. This is a soft delete, the entries still exist under the hood and can be activated
         * again with the restore datasource entries method.
         *
         * @see https://cloudinary.com/documentation/admin_api#delete_entries_in_a_metadata_field_datasource Delete entries in a metadata field datasource API reference
         *
         * @param string $field_external_id   The id of the field to update
         * @param array  $entries_external_id The ids of all the entries to delete from the datasource
         * @param array  $options             Additional options
         *
         * @return Api\Response The remaining datasource entries.
         *
         * @throws Api\GeneralError
         */
        public function delete_datasource_entries($field_external_id, $entries_external_id, $options = array()
        )
        {
            $uri = [$field_external_id, 'datasource'];
            $params = ['external_ids' => $entries_external_id];

            return $this->call_metadata_api("delete", $uri, $params, $options);
        }

        /**
         * Updates a metadata field datasource
         *
         * Updates the datasource of a supported field type (currently only enum and set), passed as JSON data. The
         * update is partial: datasource entries with an existing external_id will be updated and entries with new
         * external_id’s (or without external_id’s) will be appended.
         *
         * @see https://cloudinary.com/documentation/admin_api#update_a_metadata_field_datasource Update a metadata field datasource API reference
         *
         * @param string $field_external_id The external id of the field to update
         * @param array  $entries_external_id
         * @param array  $options           Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function update_metadata_field_datasource($field_external_id, $entries_external_id, $options = array()
        )
        {
            $uri = [$field_external_id, 'datasource'];
            $params = array('values' => array());
            foreach ($entries_external_id as $item) {
                $item = $this->only($item, ['external_id', 'value']);
                if (!empty($item)) {
                    $params['values'][] = $item;
                }
            }

            return $this->call_metadata_api('put', $uri, $params, $options);
        }

        /**
         * Restores entries in a metadata field datasource
         *
         * Restores (unblocks) any previously deleted datasource entries for a specified metadata field definition.
         * Sets the state of the entries to active.
         *
         * @see https://cloudinary.com/documentation/admin_api#restore_entries_in_a_metadata_field_datasource Restore entries in a metadata field datasource API reference
         *
         * @param string $field_external_id    The ID of the metadata field
         * @param array  $entries_external_ids An array of IDs of datasource entries to restore (unblock)
         * @param array  $options              Additional options
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function restore_metadata_field_datasource($field_external_id, $entries_external_ids, $options = array()
        )
        {
            $uri = [$field_external_id, 'datasource_restore'];
            $params = ['external_ids' => $entries_external_ids];

            return $this->call_metadata_api('post', $uri, $params, $options);
        }

        /**
         * Private function that assists with performing an API call to the metadata_fields part of the Admin API
         *
         * @param string $method  The HTTP method. Valid methods: get, post, put, delete
         * @param array  $uri     REST endpoint of the API (without 'metadata_fields')
         * @param array  $params  Query/body parameters passed to the method
         * @param array  $options Additional options. Can be an override of the configuration, headers, etc.
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        private function call_metadata_api($method, $uri, $params, &$options)
        {
            array_unshift($uri, 'metadata_fields');
            $options['content_type'] = 'application/json';

            return $this->call_api($method, $uri, $params, $options);
        }

        /**
         * The core function that performs the API call
         *
         * Function validates configuration, builds query string/request body, performs request and returns result
         *
         * @param string    $method    The HTTP method. Valid methods: get, post, put, delete
         * @param array     $uri       REST endpoint of the API
         * @param array     $params    Query/body parameters passed to the method
         * @param array     $options   Additional options. Can be an override of the configuration, headers, etc.
         *
         * @return Api\Response
         *
         * @throws Api\GeneralError
         */
        public function call_api($method, $uri, $params, &$options)
        {
            $prefix = \Cloudinary::option_get(
                $options,
                "upload_prefix",
                \Cloudinary::config_get("upload_prefix", \Cloudinary::DEFAULT_UPLOAD_PREFIX)
            );
            $cloud_name = \Cloudinary::option_get($options, "cloud_name", \Cloudinary::config_get("cloud_name"));
            if (!$cloud_name) {
                throw new \InvalidArgumentException("Must supply cloud_name");
            }
            $api_key = \Cloudinary::option_get($options, "api_key", \Cloudinary::config_get("api_key"));
            if (!$api_key) {
                throw new \InvalidArgumentException("Must supply api_key");
            }
            $api_secret = \Cloudinary::option_get($options, "api_secret", \Cloudinary::config_get("api_secret"));
            if (!$api_secret) {
                throw new \InvalidArgumentException("Must supply api_secret");
            }

            $api_url = implode("/", array_merge(array($prefix, "v1_1", $cloud_name), array_map('rawurlencode', $uri)));

            $params = array_filter(
                $params,
                function ($v) {
                    return !is_null($v) && ($v !== "");
                }
            );
            if ($method == "get") {
                $api_url .= "?" . preg_replace("/%5B\d+%5D/", "%5B%5D", http_build_query($params));
            }

            $ch = curl_init($api_url);

            if ($method != "get") {
                $post_params = array();
                if (array_key_exists("content_type", $options) && $options["content_type"] == 'application/json') {
                    $headers = array(
                        "Content-type: application/json",
                        "Accept: application/json",
                    );
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    $post_params = json_encode($params);
                } else {
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
                }
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_params);
            }
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, "{$api_key}:{$api_secret}");
            curl_setopt($ch, CURLOPT_CAINFO, realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "cacert.pem");
            curl_setopt($ch, CURLOPT_USERAGENT, \Cloudinary::userAgent());
            curl_setopt(
                $ch,
                CURLOPT_PROXY,
                \Cloudinary::option_get($options, "api_proxy", \Cloudinary::config_get("api_proxy"))
            );
            $response = $this->execute($ch);
            $curl_error = null;
            if (curl_errno($ch)) {
                $curl_error = curl_error($ch);
            }
            curl_close($ch);
            if ($curl_error != null) {
                throw new \Cloudinary\Api\GeneralError("Error in sending request to server - " . $curl_error);
            }
            if ($response->responseCode == 200) {
                return new \Cloudinary\Api\Response($response);
            } else {
                $exception_class = \Cloudinary::option_get(
                    self::$CLOUDINARY_API_ERROR_CLASSES,
                    $response->responseCode
                );
                if (!$exception_class) {
                    throw new \Cloudinary\Api\GeneralError(
                        "Server returned unexpected status code - {$response->responseCode} - {$response->body}"
                    );
                }
                $json = $this->parse_json_response($response);
                throw new $exception_class($json["error"]["message"]);
            }
        }


        /**
         * Executes HTTP request, parses response headers, leaves body as a string
         *
         * Based on http://snipplr.com/view/17242/
         *
         * @param resource $ch cURL handle
         *
         * @return \stdClass Containing headers, body, responseCode properties
         */
        protected function execute($ch)
        {
            $string = curl_exec($ch);
            $headers = array();
            $content = '';
            $str = strtok($string, "\n");
            $h = null;
            while ($str !== false) {
                if ($h and trim($str) === '') {
                    $h = false;
                    continue;
                }
                if ($h !== false and false !== strpos($str, ':')) {
                    $h = true;
                    list($headername, $headervalue) = explode(':', trim($str), 2);
                    $headervalue = ltrim($headervalue);
                    if (isset($headers[$headername])) {
                        $headers[$headername] .= ',' . $headervalue;
                    } else {
                        $headers[$headername] = $headervalue;
                    }
                }
                if ($h === false) {
                    $content .= $str . "\n";
                }
                $str = strtok("\n");
            }
            $result = new \stdClass;
            $result->headers = $headers;
            $result->body = trim($content);
            $result->responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            return $result;
        }

        /**
         * Parses JSON string from response body.
         *
         * @param \stdClass $response Class representing response
         * @see \Cloudinary\Api::execute()
         *
         * @return mixed Decoded JSON object
         *
         * @throws Api\GeneralError
         */
        public static function parse_json_response($response)
        {
            $result = json_decode($response->body, true);
            if ($result == null) {
                $error = json_last_error();
                throw new \Cloudinary\Api\GeneralError(
                    "Error parsing server response ({$response->responseCode}) - {$response->body}. Got - {$error}"
                );
            }

            return $result;
        }

        /**
         * Filters associative array using provided keys
         *
         * @param array $hash   Array to filter
         * @param array $keys   Keys to keep
         *
         * @return array Filtered associative array
         *
         * @todo Replace with array_intersect_key($hash, array_flip($hash))
         */
        protected function only(&$hash, $keys)
        {
            $result = array();
            foreach ($keys as $key) {
                if (isset($hash[$key])) {
                    $result[$key] = $hash[$key];
                }
            }

            return $result;
        }

        /**
         * Alias for \Cloudinary::generate_transformation_string()
         *
         * @see \Cloudinary::generate_transformation_string()
         *
         * @param string|array $transformation
         *
         * @return string Resulting transformation string
         */
        protected function transformation_string($transformation)
        {
            if (is_string($transformation)) {
                return $transformation;
            }

            return \Cloudinary::generate_transformation_string($transformation);
        }

        /**
         * Prepares streaming profile parameters for API calls
         *
         * @param array $options The options passed to the API
         *
         * @return array A single profile parameters
         */
        protected function prepare_streaming_profile_params($options)
        {
            $params = $this->only($options, array("display_name"));
            if (isset($options['representations'])) {
                $array_map = array_map(
                    function ($representation) {
                        return array("transformation" => \Cloudinary::generate_transformation_string($representation));
                    },
                    $options['representations']
                );
                $params["representations"] = json_encode($array_map);
            }

            return $params;
        }

        /**
         * Prepares delete resource parameters for API calls
         *
         * @param array $options    Additional options
         * @param array $params     The parameters passed to the API
         *
         * @return array    Updated parameters
         */
        protected function prepare_delete_resource_params($options, $params = [])
        {
            $filtered = $this->only($options, ["keep_original", "next_cursor", "invalidate"]);
            if (isset($options["transformations"])) {
                $filtered["transformations"] = \Cloudinary::build_eager($options["transformations"]);
            }
            return array_merge($params, $filtered);
        }
    }

}
