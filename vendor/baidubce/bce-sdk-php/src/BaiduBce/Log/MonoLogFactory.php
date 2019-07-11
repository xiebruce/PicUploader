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

namespace BaiduBce\Log;

use Monolog\Handler\HandlerInterface;
use Monolog\Logger;


/**
 * A LogFactory for Monolog.
 */
class MonoLogFactory implements LogFactoryInterface
{
    /**
     * @var array
     */
    private $handlers;

    /**
     * Constructs a new MonoLogFactory instance.
     *
     * @param array $handlers log handlers
     */
    public function __construct(array $handlers = null)
    {
        $this->handlers = $handlers;
    }

    /**
     * Returns \Monolog\Logger.
     *
     * @param string $name the name of logger
     * @return \Monolog\Logger a monolog logger instance
     */
    public function getLogger($name)
    {
        $logger = new Logger($name);
        if ($this->handlers !== null) {
            foreach ($this->handlers as $handler) {
                $logger->pushHandler($handler);
            }
        }
        return $logger;
    }
}