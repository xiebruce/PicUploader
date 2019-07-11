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

class BceClientConfigOptions
{
    const CONNECTION_TIMEOUT_IN_MILLIS = 'connectionTimeoutInMillis';
    const SOCKET_TIMEOUT_IN_MILLIS = 'socketTimeoutInMillis';
    const PROTOCOL = 'protocol';
    const REGION = 'region';
    const ENDPOINT = 'endpoint';
    const CREDENTIALS = 'credentials';
    const RETRY_POLICY = 'retryPolicy';
    const SEND_BUF_SIZE = 'sendBufSize';
    const RECV_BUF_SIZE = 'recvBufSize';
    const SESSION_TOKEN = 'sessionToken';
}