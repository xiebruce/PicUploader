<?php

namespace Cloudinary;

/**
 * Class SignatureVerifier
 * @package Cloudinary
 */
class SignatureVerifier
{
    /**
     * @var array of parameter => allowed_types for notification signature validator
     */
    private static $NOTIFICATION_VALIDATOR_ALLOWED_TYPES = [
        'body'      => 'string',
        'timestamp' => 'int|string',
        'signature' => 'string',
        'validFor' => 'int|string'
    ];

    /**
     * @var array of parameter => allowed_types for API response signature validator
     */
    private static $API_RESPONSE_VALIDATOR_ALLOWED_TYPES = [
        'publicId' => 'string',
        'version'   => 'int|string',
        'signature' => 'string',
    ];

    /**
     * Verifies the authenticity of a notification signature
     *
     * @param string        $body       Json of the request's body
     * @param int|string    $timestamp  Unix timestamp. Can be retrieved from the X-Cld-Timestamp header
     * @param string        $signature  Actual signature. Can be retrieved from the X-Cld-Signature header
     * @param int|string    $validFor  The desired time in seconds for considering the request valid
     *
     * @return boolean
     *
     * @throws \InvalidArgumentException In case a mandatory parameter is empty or of wrong type
     */
    public static function verifyNotificationSignature($body, $timestamp, $signature, $validFor = 7200)
    {
        $paramsArray = [
            'body'      => $body,
            'timestamp' => $timestamp,
            'signature' => $signature,
            'validFor'  => $validFor
        ];

        self::validateParams($paramsArray, self::$NOTIFICATION_VALIDATOR_ALLOWED_TYPES);

        if (time() - $timestamp > $validFor) {
            return false;
        }

        $apiSecret = \Cloudinary::config_get('api_secret');
        self::validateApiSecret($apiSecret);

        $payloadToSign = $body . $timestamp;
        $hmac = self::generateHmac($payloadToSign, $apiSecret);

        if ($hmac !== $signature) {
            return false;
        }

        return true;
    }

    /**
     * Verifies the authenticity of an API response signature
     *
     * @param string        $publicId  The public id of the asset as returned in the API response
     * @param int|string    $version    The version of the asset as returned in the API response
     * @param string        $signature  Actual signature. Can be retrieved from the X-Cld-Signature header
     *
     * @return boolean
     *
     * @throws \InvalidArgumentException in case a mandatory parameter is empty or of wrong type
     */
    public static function verifyApiResponseSignature($publicId, $version, $signature)
    {
        $paramsArray = ['publicId' => $publicId, 'version' => $version, 'signature' => $signature];

        self::validateParams($paramsArray, self::$API_RESPONSE_VALIDATOR_ALLOWED_TYPES);

        $apiSecret = \Cloudinary::config_get('api_secret');
        self::validateApiSecret($apiSecret);

        $payloadToSign = 'public_id=' . $publicId . '&version=' . $version;
        $hmac = self::generateHmac($payloadToSign, $apiSecret);

        if ($hmac !== $signature) {
            return false;
        }

        return true;
    }

    /**
     * Validates parameters
     *
     * @param array    $params         Parameters to validate
     * @param array    $allowedTypes   The allowed type/s of the parameters. Pipe delimiter for multiple values
     *
     * @throws \InvalidArgumentException In case a mandatory parameter is empty or of wrong type
     */
    private static function validateParams($params, $allowedTypes)
    {
        foreach ($allowedTypes as $param => $types) {
            if (empty($params[$param])) {
                throw new \InvalidArgumentException("$param parameter cannot be empty");
            }

            if (!self::paramValidator($params[$param], $types)) {
                throw new \InvalidArgumentException("$param must be one of the following types: $types");
            }
        }
    }

    /**
     * Validates the type of a single parameter
     *
     * @param mixed     $param  Parameter to validate
     * @param string    $type   The allowed type/s of the parameter. Pipe delimiter for multiple values
     *
     * @return boolean
     */
    private static function paramValidator($param, $type)
    {
        $allowedTypes = explode('|', $type);

        foreach ($allowedTypes as $allowedType) {
            $validationFunction = 'is_' . $allowedType;
            if ($validationFunction($param)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Validates API secret
     *
     * @param  string   $apiSecret  The API secret
     *
     * @throws  \InvalidArgumentException   In case API secret is missing or invalid
     */
    private static function validateApiSecret($apiSecret)
    {
        if (empty($apiSecret) || !is_string($apiSecret)) {
            throw new \InvalidArgumentException('API Secret is invalid');
        }
    }

    /**
     * Generates hmac to compare against signature
     *
     * @param  string  $payloadToSign   The payload to sign
     * @param  string  $apiSecret       The API secret
     *
     * @return string
     */
    public static function generateHmac($payloadToSign, $apiSecret)
    {
        return sha1($payloadToSign . $apiSecret);
    }
}
