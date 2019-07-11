<?php
/*
* Copyright 2014 Baidu, Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

namespace BaiduBce\Auth;

use BaiduBce\Http\HttpHeaders;
use BaiduBce\Util\DateUtils;
use BaiduBce\Util\HttpUtils;

/**
 * The V1 implementation of Signer with the BCE signing protocol.
 */
class BceV1Signer implements SignerInterface
{

    const BCE_AUTH_VERSION = "bce-auth-v1";

    // Default headers to sign with the BCE signing protocol.
    private static $defaultHeadersToSign;

    public static function  __init()
    {
        BceV1Signer::$defaultHeadersToSign = array(
            strtolower(HttpHeaders::HOST),
            strtolower(HttpHeaders::CONTENT_LENGTH),
            strtolower(HttpHeaders::CONTENT_TYPE),
            strtolower(HttpHeaders::CONTENT_MD5),
        );
    }

    /**
     * Sign the given request with the given set of credentials. Modifies the passed-in request to apply the signature.
     *
     * @param $credentials array the credentials to sign the request with.
     * @param $httpMethod string
     * @param $path string
     * @param $headers array
     * @param $params array
     * @param $options  array   the options for signing.
     * @return string The signed authorization string.
     */
    public function sign(
        array $credentials,
        $httpMethod,
        $path,
        $headers,
        $params,
        $options = array()
    ) {
        if (!isset($options[SignOptions::EXPIRATION_IN_SECONDS])) {
            $expirationInSeconds = SignOptions::DEFAULT_EXPIRATION_IN_SECONDS;
        } else {
            $expirationInSeconds = $options[SignOptions::EXPIRATION_IN_SECONDS];
        }

        // to compatible with ak/sk or accessKeyId/secretAccessKey
        if(isset($credentials['ak'])){
            $accessKeyId = $credentials['ak'];
        }
        if(isset($credentials['sk'])){
            $secretAccessKey = $credentials['sk'];
        }
        if(isset($credentials['accessKeyId'])){
            $accessKeyId = $credentials['accessKeyId'];
        }
        if(isset($credentials['secretAccessKey'])){
            $secretAccessKey = $credentials['secretAccessKey'];
        }

        if (isset($options[SignOptions::TIMESTAMP])) {
            $timestamp = $options[SignOptions::TIMESTAMP];
        } else {
            $timestamp = new \DateTime();
        }
        $timestamp->setTimezone(DateUtils::$UTC_TIMEZONE);

        $authString = BceV1Signer::BCE_AUTH_VERSION . '/' . $accessKeyId . '/'
            . DateUtils::formatAlternateIso8601Date(
                $timestamp
            ) . '/' . $expirationInSeconds;

        $signingKey = hash_hmac('sha256', $authString, $secretAccessKey);

        // Formatting the URL with signing protocol.
        $canonicalURI = BceV1Signer::getCanonicalURIPath($path);
        // Formatting the query string with signing protocol.
        $canonicalQueryString = HttpUtils::getCanonicalQueryString(
            $params,
            true
        );
        // Sorted the headers should be signed from the request.
        $headersToSign = null;
        if (isset($options[SignOptions::HEADERS_TO_SIGN])) {
            $headersToSign = $options[SignOptions::HEADERS_TO_SIGN];
        }
        // Formatting the headers from the request based on signing protocol.
        $canonicalHeader = BceV1Signer::getCanonicalHeaders(
            BceV1Signer::getHeadersToSign($headers, $headersToSign)
        );
        $signedHeaders = '';
        if ($headersToSign !== null) {
            $signedHeaders = strtolower(
                trim(implode(";", array_keys($headersToSign)))
            );
        }
        $canonicalRequest = "$httpMethod\n$canonicalURI\n"
            . "$canonicalQueryString\n$canonicalHeader";

        // Signing the canonical request using key with sha-256 algorithm.
        $signature = hash_hmac('sha256', $canonicalRequest, $signingKey);

        $authorizationHeader = "$authString/$signedHeaders/$signature";

        return $authorizationHeader;
    }

    /**
     * @param $path string
     * @return string
     */
    private static function getCanonicalURIPath($path)
    {
        if (empty($path)) {
            return '/';
        } else {
            if ($path[0] == '/') {
                return HttpUtils::urlEncodeExceptSlash($path);
            } else {
                return '/' . HttpUtils::urlEncodeExceptSlash($path);
            }
        }
    }

    /**
     * @param $headers array
     * @return string
     */
    private static function getCanonicalHeaders($headers)
    {
        if (count($headers) == 0) {
            return '';
        }

        $headerStrings = array();
        foreach ($headers as $k => $v) {
            if ($k === null) {
                continue;
            }
            if ($v === null) {
                $v = '';
            }
            $headerStrings[] = rawurlencode(
                    strtolower(trim($k))
                ) . ':' . rawurlencode(trim($v));
        }
        sort($headerStrings);

        return implode("\n", $headerStrings);
    }

    /**
     * @param $headers array
     * @param $headersToSign array
     * @return array
     */
    private static function getHeadersToSign($headers, $headersToSign)
    {
        $ret = array();
        if ($headersToSign !== null) {
            $tmp = array();
            foreach ($headersToSign as $header) {
                $tmp[] = strtolower(trim($header));
            }
            $headersToSign = $tmp;
        }
        foreach ($headers as $k => $v) {
            if (trim((string) $v) !== '') {
                if ($headersToSign !== null) {
                    if (in_array(strtolower(trim($k)), $headersToSign)) {
                        $ret[$k] = $v;
                    }
                } else {
                    if (BceV1Signer::isDefaultHeaderToSign(
                        $k,
                        $headersToSign
                    )
                    ) {
                        $ret[$k] = $v;
                    }
                }
            }
        }
        return $ret;
    }

    /**
     * @param $header string
     * @return bool
     */
    private static function isDefaultHeaderToSign($header)
    {
        $header = strtolower(trim($header));
        if (in_array($header, BceV1Signer::$defaultHeadersToSign)) {
            return true;
        }
        $prefix = substr($header, 0, strlen(HttpHeaders::BCE_PREFIX));
        if ($prefix === HttpHeaders::BCE_PREFIX) {
            return true;
        } else {
            return false;
        }
    }
}

BceV1Signer::__init();