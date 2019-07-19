<?php
/**
 * Copyright 2019 Huawei Technologies Co.,Ltd.
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use
 * this file except in compliance with the License.  You may obtain a copy of the
 * License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed
 * under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations under the License.
 *
 */

namespace Obs\Internal\Resource;

class V2Constants extends Constants {
    const FLAG = 'AWS';
    const METADATA_PREFIX = 'x-amz-meta-';
    const HEADER_PREFIX = 'x-amz-';
    const ALTERNATIVE_DATE_HEADER = 'x-amz-date';
    const SECURITY_TOKEN_HEAD = 'x-amz-security-token';
    const TEMPURL_AK_HEAD = 'AWSAccessKeyId';
    
    const GROUP_ALL_USERS_PREFIX = 'http://acs.amazonaws.com/groups/global/';
    const GROUP_AUTHENTICATED_USERS_PREFIX = 'http://acs.amazonaws.com/groups/global/';
    const GROUP_LOG_DELIVERY_PREFIX = 'http://acs.amazonaws.com/groups/s3/';
    
    const COMMON_HEADERS = [
        'content-length' => 'ContentLength',
        'date' => 'Date',
        'x-amz-request-id' => 'RequestId',
        'x-amz-id-2' => 'Id2',
        'x-reserved' => 'Reserved'
    ];
}
