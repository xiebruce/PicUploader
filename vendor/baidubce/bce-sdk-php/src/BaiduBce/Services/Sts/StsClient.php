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

namespace BaiduBce\Services\Sts;

use BaiduBce\Auth\BceV1Signer;
use BaiduBce\BceBaseClient;
use BaiduBce\Http\BceHttpClient;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Http\HttpContentTypes;
use BaiduBce\Http\HttpMethod;
use BaiduBce\Util\HttpUtils;

class StsClient extends BceBaseClient
{
    const STS_URL_PREFIX = "/";
    const GET_SESSION_TOKEN_VERSION = "v1";
    const GET_SESSION_TOKEN_PATH = "sessionToken";
	
    /**
     * @var \BaiduBce\Auth\SignerInterface
     */
    private $signer;
    private $httpClient;
    private $stsEndpoint;

    /**
     * The StsClient constructor
     *
     * @param array $config The client configuration
     */
    function __construct(array $config)
    {
        parent::__construct($config, 'sts');
        $this->signer = new BceV1Signer();
        $this->httpClient = new BceHttpClient();
        $this->stsEndpoint = $config['stsEndpoint'];
    }
	
    /**
     * Get STS session token
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating StsClient instance.
     * @return object the server response.
     */
    public function getSessionToken($options = array())
    {
        list($config, $acl, $durationSeconds) =
            $this->parseOptions(
                $options,
                'config',
                'acl',
                'durationSeconds'
            );
		
        $params = array();
        if ($durationSeconds !== null) {
            $params['durationSeconds'] = $durationSeconds;
        }
        $headers = array();
        if ($acl !== null) {
            $headers[HttpHeaders::CONTENT_LENGTH] = strlen($acl);
        } else {
            $headers[HttpHeaders::CONTENT_LENGTH] = 0;
        }
        $headers[HttpHeaders::CONTENT_TYPE] = HttpContentTypes::JSON;
        // prevent low version curl add a default pragma:no-cache
        $headers[HttpHeaders::PRAGMA] = '';
        $config['endpoint'] = $this->stsEndpoint;
        $config = array_merge(
            $this->config,
            $config
        );
        $path = HttpUtils::appendUri(StsClient::STS_URL_PREFIX, StsClient::GET_SESSION_TOKEN_VERSION, StsClient::GET_SESSION_TOKEN_PATH);

        $response = $this->httpClient->sendRequest(
            $config,
            HttpMethod::POST,
            $path,
            $acl,
            $headers,
            $params,
            $this->signer
        );
		
        return $this->parseJsonResult($response['body']);
    }
}
