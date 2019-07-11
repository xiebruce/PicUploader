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

namespace BaiduBce;

use BaiduBce\Exception\BceClientException;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Services\Bos\BosOptions;
use BaiduBce\Util\StringUtils;

class BceBaseClient
{
    private $serviceId;
    private $regionSupported;
    protected $config;

    /**
     * @param mixed $config the client configuration. The constructor makes a
     * copy of this parameter so that it is safe to change the configuration
     * after then.
     * @param string $serviceId The service id, such as Bos, ses, sms and so
     * on.
     * @param boolean $regionSupported true if this client supports region.
     */
    public function __construct($config, $serviceId, $regionSupported = true)
    {
        $this->config = array_merge(array(), Bce::getDefaultConfig(), $config);
        $this->serviceId = $serviceId;
        $this->regionSupported = $regionSupported;
        if (!isset($this->config[BceClientConfigOptions::ENDPOINT])) {
            $this->config[BceClientConfigOptions::ENDPOINT] =
                $this->computeEndpoint();
        }
    }

    /**
     * @param string $jsonString
     * @return \stdClass
     * @throws BceClientException
     */
    protected static function parseJsonResult($jsonString)
    {
        $result = null;
        if (strcmp($jsonString, "") == 0) {
            return new \stdClass();
        }

        $result = json_decode($jsonString);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new BceClientException(
                'Invalid json in response body: ' . json_last_error_msg()
            );
        }

        if ($result === null) {
            $result = new \stdClass();
        }
        return $result;
    }

    /**
     * @param array $headers
     */
    protected static function convertHttpHeadersToMetadata(array $headers)
    {
        $metadata = array();
        if (isset($headers[HttpHeaders::CONTENT_TYPE])) {
            $metadata[BosOptions::CONTENT_TYPE] =
                $headers[HttpHeaders::CONTENT_TYPE];
        }
        if (isset($headers[HttpHeaders::CONTENT_LENGTH])) {
            $metadata[BosOptions::CONTENT_LENGTH] =
                (int) $headers[HttpHeaders::CONTENT_LENGTH];
        }
        if (isset($headers[HttpHeaders::CONTENT_MD5])) {
            $metadata[BosOptions::CONTENT_MD5] =
                $headers[HttpHeaders::CONTENT_MD5];
        }
        if (isset($headers[HttpHeaders::DATE])) {
            $metadata[BosOptions::DATE] =
                \DateTime::createFromFormat(
                    \DateTime::RFC2822,
                    $headers[HttpHeaders::DATE]
                );
        }
        if (isset($headers[HttpHeaders::ETAG])) {
            $metadata[BosOptions::ETAG] =
                trim($headers[HttpHeaders::ETAG], '"');
        }
        if (isset($headers[HttpHeaders::LAST_MODIFIED])) {
            $metadata[BosOptions::LAST_MODIFIED] =
                \DateTime::createFromFormat(
                    \DateTime::RFC2822,
                    $headers[HttpHeaders::LAST_MODIFIED]
                );
        }
        if (isset($headers[HttpHeaders::BCE_STORAGE_CLASS])) {
            $metadata[BosOptions::STORAGE_CLASS] =
              trim($headers[HttpHeaders::BCE_STORAGE_CLASS], '"');
        }
        return $metadata;
    }

    protected function parseOptions(array $options) {
        return $this->doParseOptions(
            $options,
            array_slice(func_get_args(), 1),
            false
        );
    }

    protected function parseOptionsIgnoreExtra(array $options) {
        return $this->doParseOptions(
            $options,
            array_slice(func_get_args(), 1),
            true
        );
    }

    private function doParseOptions(
        array $options,
        array $args,
        $allowExtraOptions
    ) {
        $result = array();
        foreach ($args as $arg) {
            if (isset($options[$arg])) {
                $result[] = $options[$arg];
                unset($options[$arg]);
            } else {
                $result[] = null;
            }
        }
        if (!$allowExtraOptions && count($options) > 0) {
            throw new \InvalidArgumentException(
                'Unexpected options:' . implode(',', array_keys($options))
                . ' Acceptable options are:' . implode(',', $args)
            );
        }
        return $result;
    }

    /**
     * compute endpoint based on the configuration and service id
     * @return string The endpoint
     */
    private function computeEndpoint()
    {
        $protocol = $this->config[BceClientConfigOptions::PROTOCOL];
        if ($this->regionSupported) {
            return sprintf(
                '%s://%s.%s.%s',
                $protocol,
                $this->serviceId,
                $this->config[BceClientConfigOptions::REGION],
                Bce::DEFAULT_SERVICE_DOMAIN
            );
        } else {
            return sprintf(
                '%s://%s.%s',
                $protocol,
                $this->serviceId,
                Bce::DEFAULT_SERVICE_DOMAIN
            );
        }
    }
}
