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

namespace BaiduBce\Http;

use BaiduBce\Log\LogFactory;
use Guzzle\Log\AbstractLogAdapter;
use Psr\Log\LogLevel;

class GuzzleLogAdapter extends AbstractLogAdapter
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Constructs a new GuzzleLogAdapter instance.
     */
    public function __construct()
    {
        $this->logger = LogFactory::getLogger('HTTP');
    }

    /**
     * Logs the message.
     *
     * @param string $message the log message
     * @param int $priority the log level
     * @param array $extras extra arguments
     */
    public function log($message, $priority = LOG_INFO, $extras = array())
    {
        // All guzzle logs should be DEBUG, regardless of its own priority.
        if (LogFactory::isDebugEnabled()) {
            // To avoid memory exhausted, truncate request or response longer than 1024 bytes.
            if(strlen($extras['request']) > 1024){
                $extras['request'] = substr($request, 0, 1024);
            }
            if(strlen($extras['response']) > 1024){
                $extras['response'] = substr($response, 0, 1024);
            }
            $this->logger->log(LogLevel::DEBUG, $message, $extras);
        }
    }
}