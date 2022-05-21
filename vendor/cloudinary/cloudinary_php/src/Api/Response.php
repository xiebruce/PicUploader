<?php

namespace Cloudinary\Api;

/**
 * Class Response
 * @package Cloudinary\Api
 */
class Response extends \ArrayObject
{
    /**
     * Response constructor.
     *
     * @param \stdClass $response Response from HTTP request to Cloudinary server
     *
     * @throws GeneralError
     * @see Api::execute()          For response definition
     *
     */
    public function __construct($response)
    {
        parent::__construct(\Cloudinary\Api::parse_json_response($response));
        // According to RFC 2616, header names are case-insensitive.
        $headers = array_change_key_case($response->headers, CASE_LOWER);

        $this->rate_limit_reset_at  = strtotime(\Cloudinary::option_get($headers, "x-featureratelimit-reset"));
        $this->rate_limit_allowed   = (int)\Cloudinary::option_get($headers, "x-featureratelimit-limit");
        $this->rate_limit_remaining = (int)\Cloudinary::option_get($headers, "x-featureratelimit-remaining");
    }
}
