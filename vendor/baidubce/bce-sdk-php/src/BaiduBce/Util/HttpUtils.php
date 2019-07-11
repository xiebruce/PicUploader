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

namespace BaiduBce\Util;

use BaiduBce\Http\HttpHeaders;
use BaiduBce\BceClientConfigOptions;

class HttpUtils
{
    private static $PERCENT_ENCODED_STRINGS;

    public static function __init()
    {
        HttpUtils::$PERCENT_ENCODED_STRINGS = array();
        for ($i = 0; $i < 256; ++$i) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[$i] = sprintf("%%%02X", $i);
        }
        foreach (range('a', 'z') as $ch) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[ord($ch)] = $ch;
        }

        foreach (range('A', 'Z') as $ch) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[ord($ch)] = $ch;
        }

        foreach (range('0', '9') as $ch) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[ord($ch)] = $ch;
        }
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('-')] = '-';
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('.')] = '.';
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('_')] = '_';
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('~')] = '~';
    }

    public static function parseEndpointFromConfig(array $config)
    {
        $endpoint = $config[BceClientConfigOptions::ENDPOINT];

        // no scheme in endpoint, use protocol in config
        if (!strpos($endpoint, "://")) {
            $config_protocol = strtolower(trim($config[BceClientConfigOptions::PROTOCOL]));
            if ($config_protocol !== 'http' && $config_protocol !== 'https') {
                throw new \InvalidArgumentException(
                    "Invalid protocol $config_protocol."
                );
            }
            $endpoint = $config_protocol . "://" . $endpoint;
        }

        $parsed_endpoint = parse_url($endpoint);

        $scheme = strtolower($parsed_endpoint['scheme']);
        if ($scheme !== 'http' && $scheme !== 'https') {
            throw new \InvalidArgumentException(
                "Invalid endpoint $endpoint, unsupported scheme $scheme."
            );
        }
        $protocol = $scheme;

        $host = $parsed_endpoint['host'];
        if (isset($parsed_endpoint['port'])) {
            $port = (int) $parsed_endpoint['port'];
        } else {
            if ($protocol == 'http') {
                $port = 80;
            } else {
                $port = 443;
            }
        }
        if (($protocol === 'http' && $port === 80)
            || ($protocol === 'https' && $port === 443)) {
            $hostHeader = $host;
        } else {
            $hostHeader = "$host:$port";
        }
        return array("$protocol://$hostHeader", $hostHeader);
    }


    /**
     * Normalize a string for use in url path. The algorithm is:
     * <p>
     *
     * <ol>
     *   <li>Normalize the string</li>
     *   <li>replace all "%2F" with "/"</li>
     *   <li>replace all "//" with "/%2F"</li>
     * </ol>
     *
     * <p>
     * Bos object key can contain arbitrary characters, which may result double
     * slash in the url path. Apache Http client will replace "//" in the path
     * with a single '/', which makes the object key incorrect. Thus we replace
     * "//" with "/%2F" here.
     *
     * @param $path string the path string to normalize.
     * @return string the normalized path string.
     * @see #normalize(string)
     */
    public static function urlEncodeExceptSlash($path)
    {
        return str_replace("%2F", "/", HttpUtils::urlEncode($path));
    }

    /**
     * Normalize a string for use in BCE web service APIs. The normalization
     * algorithm is:
     * <p>
     * <ol>
     *   <li>Convert the string into a UTF-8 byte array.</li>
     *   <li>Encode all octets into percent-encoding, except all URI unreserved
     * characters per the RFC 3986.</li>
     * </ol>
     *
     * <p>
     * All letters used in the percent-encoding are in uppercase.
     *
     * @param $value string the string to normalize.
     * @return string the normalized string.
     */
    public static function urlEncode($value)
    {
        $result = '';
        for ($i = 0; $i < strlen($value); ++$i) {
            $result .= HttpUtils::$PERCENT_ENCODED_STRINGS[ord($value[$i])];
        }
        return $result;
    }

    /**
     * @param $parameters array
     * @param $forSignature bool
     * @return string
     */
    public static function getCanonicalQueryString(array $parameters, $forSignature)
    {
        if (count($parameters) == 0) {
            return '';
        }

        $parameterStrings = array();
        foreach ($parameters as $k => $v) {
            if ($forSignature
                    && strcasecmp(HttpHeaders::AUTHORIZATION, $k) == 0) {
                continue;
            }
            if (!isset($k)) {
                throw new \InvalidArgumentException(
                    "parameter key should not be null"
                );
            }
            if (isset($v)) {
                $parameterStrings[] = HttpUtils::urlEncode($k)
                    . '=' . HttpUtils::urlEncode((string) $v);
            } else {
                if ($forSignature) {
                    $parameterStrings[] = HttpUtils::urlEncode($k) . '=';
                } else {
                    $parameterStrings[] = HttpUtils::urlEncode($k);
                }
            }
        }
        sort($parameterStrings);

        return implode('&', $parameterStrings);
    }

    /**
     * Append the given path to the given baseUri.
     *
     * <p>
     * This method will encode the given path but not the given baseUri.
     *
     */
    public static function appendUri()
    {
        $path = array();
        foreach (func_get_args() as $arg) {
            if ($arg !== null) {
                $path[] = $arg;
            }
        }

        if (count($path) > 1) {
            $last = count($path) - 1;
            $path[0] = rtrim($path[0], '/');
            $path[$last] = ltrim($path[$last], '/');
            for ($i = 1; $i < $last; ++$i) {
                $path[$i] = trim($path[$i], '/');
            }
        }
        return implode("/", $path);
    }
}

HttpUtils::__init();
