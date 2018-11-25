<?php
// +-------------------------------------------------------------------------
// | Copyright (C) 2016 Yunify, Inc.
// +-------------------------------------------------------------------------
// | Licensed under the Apache License, Version 2.0 (the "License");
// | you may not use this work except in compliance with the License.
// | You may obtain a copy of the License in the LICENSE file, or at:
// |
// | http://www.apache.org/licenses/LICENSE-2.0
// |
// | Unless required by applicable law or agreed to in writing, software
// | distributed under the License is distributed on an "AS IS" BASIS,
// | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// | See the License for the specific language governing permissions and
// | limitations under the License.
// +-------------------------------------------------------------------------


namespace QingStor\SDK\Service;

use QingStor\SDK\Request;
use QingStor\SDK\Unpacker;
use QingStor\SDK\Exception;

# QingStor provides QingStor Service API (API Version 2016-01-06)

class QingStor
{
    public function __construct($config)
    {
        $this->config = $config;
    }
    
    /**
     * listBucketsRequest: Build Lists's request
     * @link https://docs.qingcloud.com/qingstor/api/service/get.html Documentation URL
     * @param string 'Location' Limits results to buckets that in the location
     *
     * @return Request
     */
    public function listBucketsRequest($options=array())
    {
        $operation = array(
            'API' => 'ListBuckets',
            'Method' => 'GET',
            'Uri' => '/',
            'Headers' => array(
                'Host' => $this->config->host,
                'Location' => isset($options['Location'])?$options['Location']:null,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => array(),
            'Body' => null
        );
        $this->listBucketsValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * listBuckets: Retrieve the bucket list.
     * @link https://docs.qingcloud.com/qingstor/api/service/get.html Documentation URL
     * @param string 'Location' Limits results to buckets that in the location
     * @return Unpacker
     * @throws \Exception
     */
    public function listBuckets($options=array())
    {
        $req = $this->listBucketsRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: lists');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * listBucketsQuery: listBuckets's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/service/get.html Documentation URL
     * @param string 'Location' Limits results to buckets that in the location
     *
     * @return Request
     */
    public function listBucketsQuery($expires, $options=array())
    {
        $req = $this->listBucketsRequest($options);
        return $req->query_sign($expires);
    }
    
    public function listBucketsValidate($operation)
    {
    }


    public function Bucket($bucket_name, $zone)
    {
        $properties = array(
            'bucket-name' => $bucket_name,
            'zone' => $zone
        );
        return new Bucket($this->config, $properties);
    }
}
