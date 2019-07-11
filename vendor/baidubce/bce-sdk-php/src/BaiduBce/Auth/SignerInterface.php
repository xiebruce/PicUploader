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

interface SignerInterface
{
    /**
     * Sign the given request with the given set of credentials and returns the
     * signed authorization string.
     *
     * @param $credentials array the credentials to sign the request with.
     * @param $httpMethod string
     * @param $path string
     * @param $headers array
     * @param $params array
     * @param $options array the options for signing.
     * @return string The signed authorization string.
     */
     public function sign(
        array $credentials,
        $httpMethod,
        $path,
        $headers,
        $params,
        $options = array()
    );
}
