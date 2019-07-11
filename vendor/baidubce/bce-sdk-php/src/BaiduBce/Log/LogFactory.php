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

use Psr\Log\LoggerInterface;


/**
 * The global LogFactory for the SDK.
 */
class LogFactory
{
    /**
     * @var LogFactoryInterface the LogFactory instance
     */
    private static $instance;

    private static $logLevel;

    private static $logLevelMapping;

    public static function __init()
    {
        LogFactory::$instance = new NullLogFactory();
        LogFactory::$logLevelMapping = array(
            'emergency' => 0,
            'alert' => 1,
            'critical' => 2,
            'error' => 3,
            'warning' => 4,
            'notice' => 5,
            'info' => 6,
            'debug' => 7
        );
        LogFactory::$logLevel = 6;
    }

    /**
     * @param LogFactoryInterface $logFactory the logFactory interface.
     * @throws \InvalidArgumentException if $logFactory is null.
     */
    public static function setInstance(LogFactoryInterface $logFactory)
    {
        if ($logFactory === null) {
            throw new \InvalidArgumentException(
                '$logFactory should not be null.'
            );
        }
        LogFactory::$instance = $logFactory;
    }


    /**
     * @param string $logLevel the log level. The value can be 'emergency',
     *     'alert', 'critical', 'error', 'warning', 'notice', 'info', or
     *     'debug'.
     * @throws \InvalidArgumentException if no such a log level is defined.
     */
    public static function setLogLevel($logLevel)
    {
        if (isset(LogFactory::$logLevelMapping[$logLevel])) {
            LogFactory::$logLevel = LogFactory::$logLevelMapping[$logLevel];
        } else {
            throw new \InvalidArgumentException(
                "Unrecognized log level $logLevel"
            );
        }
    }

    /**
     * @return boolean true if the debug log level is enabled.
     */
    public static function isDebugEnabled()
    {
        return LogFactory::$logLevel >= 7;
    }

    /**
     * @param $name string the name of logger
     * @return LoggerInterface the Logger instance
     */
    public static function getLogger($name)
    {
        return LogFactory::$instance->getLogger($name);
    }
}

LogFactory::__init();
