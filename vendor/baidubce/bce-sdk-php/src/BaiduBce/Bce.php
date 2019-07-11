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

class Bce
{
    const SDK_VERSION = '0.8.22';
    const DEFAULT_SERVICE_DOMAIN = 'baidubce.com';
    const URL_PREFIX = '/v1';
    const DEFAULT_ENCODING = 'UTF-8';

    /**
     * @return mixed The default bce configuration.
     */
    public static function getDefaultConfig()
    {
        return array(
            BceClientConfigOptions::PROTOCOL => 'http',
            BceClientConfigOptions::REGION => 'bj',
            BceClientConfigOptions::CONNECTION_TIMEOUT_IN_MILLIS => 50 * 1000,
            BceClientConfigOptions::SOCKET_TIMEOUT_IN_MILLIS => 0, //wait infinitely
            BceClientConfigOptions::SEND_BUF_SIZE => 1024 * 1024,
            BceClientConfigOptions::RECV_BUF_SIZE => 10 * 1024 * 1024,
        );
    }
}



/* vim: set ts=4 sw=4 sts=4 tw=120: */
