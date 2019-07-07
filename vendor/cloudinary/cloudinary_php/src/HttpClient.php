<?php
namespace Cloudinary;

/**
 * Class HttpClient
 * @package Cloudinary
 */
class HttpClient
{
    const DEFAULT_HTTP_TIMEOUT = 60;

    /**
     * @var int HTTP timeout in seconds
     */
    private $timeout;

    /**
     * HttpClient constructor.
     *
     * @param $options
     */
    public function __construct($options = null)
    {
        $this->timeout = \Cloudinary::option_get($options, "timeout", self::DEFAULT_HTTP_TIMEOUT);
    }

    /**
     * Get JSON as associative array from specified URL
     *
     * @param string $url URL of the JSON
     *
     * @return array Associative array that represents JSON object
     *
     * @throws Error
     */
    public function getJSON($url)
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, \Cloudinary::userAgent());

        $response = $this->execute($ch);

        $curl_error = null;
        if (curl_errno($ch)) {
            $curl_error = curl_error($ch);
        }

        curl_close($ch);

        if ($curl_error != null) {
            throw new Error("Error in sending request to server - " . $curl_error);
        }

        if ($response->responseCode != 200) {
            throw new Error("Server returned unexpected status code - {$response->responseCode} - {$response->body}");
        }

        return self::parseJSONResponse($response);
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
    protected static function execute($ch)
    {
        $content = curl_exec($ch);
        $result = new \stdClass;
        $result->body = trim($content);
        $result->responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        return $result;
    }

    /**
     * Parses JSON string from response body.
     *
     * @param \stdClass $response Class representing response
     *
     * @return mixed Decoded JSON object
     *
     * @throws Error
     */
    protected static function parseJSONResponse($response)
    {
        $result = json_decode($response->body, true);
        if ($result == null) {
            $error = json_last_error();
            throw new Error(
                "Error parsing server response ({$response->responseCode}) - {$response->body}. Got - {$error}"
            );
        }

        return $result;
    }
}
