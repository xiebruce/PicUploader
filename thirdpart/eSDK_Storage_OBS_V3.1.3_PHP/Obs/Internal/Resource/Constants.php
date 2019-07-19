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

class Constants {
    const ALLOWED_RESOURCE_PARAMTER_NAMES = [ 
            'acl',
            'policy',
            'torrent',
            'logging',
            'location',
            'storageinfo',
            'quota',
            'storagepolicy',
            'requestpayment',
            'versions',
            'versioning',
            'versionid',
            'uploads',
            'uploadid',
            'partnumber',
            'website',
            'notification',
            'lifecycle',
            'deletebucket',
            'delete',
            'cors',
            'restore',
            'tagging',
            'response-content-type',
            'response-content-language',
            'response-expires',
            'response-cache-control',
            'response-content-disposition',
            'response-content-encoding',
            'x-image-process',

            'backtosource',
            'storageclass',
            'replication',
            'append',
            'position',
            'x-oss-process'
    ];
    const ALLOWED_REQUEST_HTTP_HEADER_METADATA_NAMES = [ 
            'content-type',
            'content-md5',
            'content-length',
            'content-language',
            'expires',
            'origin',
            'cache-control',
            'content-disposition',
            'content-encoding',
            'access-control-request-method',
            'access-control-request-headers',
            'x-default-storage-class',
            'location',
            'date',
            'etag',
            'range',
            'host',
            'if-modified-since',
            'if-unmodified-since',
            'if-match',
            'if-none-match',
            'last-modified',
            'content-range',

            'success-action-redirect'
    ];
    const ALLOWED_RESPONSE_HTTP_HEADER_METADATA_NAMES = [ 
            'content-type',
            'content-md5',
            'content-length',
            'content-language',
            'expires',
            'origin',
            'cache-control',
            'content-disposition',
            'content-encoding',
            'x-default-storage-class',
            'location',
            'date',
            'etag',
            'host',
            'last-modified',
            'content-range',
            'x-reserved',
            'access-control-allow-origin',
            'access-control-allow-headers',
            'access-control-max-age',
            'access-control-allow-methods',
            'access-control-expose-headers',
            'connection'
    ];
    
    public static function selectConstants($signature) {
        $signature = (strcasecmp ( $signature, 'obs' ) === 0) ? 'OBS' : 'V2';
        return __NAMESPACE__ . '\\' . $signature . 'Constants';
    }
    
    public static function selectRequestResource($signature) {
        $signature = (strcasecmp ( $signature, 'obs' ) === 0) ? 'OBS' : 'V2';
        return (__NAMESPACE__ . '\\' . $signature . 'RequestResource');
    }

}