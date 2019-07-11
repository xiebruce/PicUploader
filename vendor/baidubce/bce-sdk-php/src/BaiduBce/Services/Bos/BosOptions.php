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

namespace BaiduBce\Services\Bos;


class BosOptions
{
    // Common options
    const CONFIG = 'config';

    // Options for generatePreSignedUrl
    const SIGN_OPTIONS = 'signOptions';
    const HEADERS = 'headers';
    const PARAMS = 'params';

    const ACCESS_KEY_ID = 'accessKeyId';
    const ACCESS_KEY_SECRET = 'accessKeySecret';
    const ENDPOINT = 'endpoint';
    const CHARSET = 'charset';
    const DATE = 'date';
    const ETAG = 'etag';
    const LAST_MODIFIED = 'lastModified';

    const BUCKET = 'bucket';
    const OBJECT = 'object';

    const RANGE = 'range';

    const OBJECT_CONTENT_STRING = 'objectContentString';
    const OBJECT_CONTENT_STREAM = 'objectDataStream';

    const OBJECT_COPY_SOURCE = 'copySource';
    const OBJECT_COPY_SOURCE_IF_MATCH_TAG = 'ifMatchTag';
    const OBJECT_COPY_METADATA_DIRECTIVE = 'metadataDirective';

    const BUCKET_LOCATION = 'bucketLocation';

    const LIST_MAX_UPLOAD_SIZE = 'listMaxUploadSize';

    const ACL = 'acl';
    const LOCATION = 'location';

    const UPLOAD_ID = 'uploadId';
    const PART_NUM = 'partNum';
    const PART_LIST = 'partList';

    const CONTENT_LENGTH = 'contentLength';
    const CONTENT_TYPE = 'contentType';
    const CONTENT_MD5 = 'contentMd5';
    const CONTENT_SHA256 = 'contentSHA256';
    const USER_METADATA = 'userMetadata';

    const MAX_PARTS_COUNT = 'maxPartsCount';
    const PART_NUMBER_MARKER = 'partNumberMarker';

    const MAX_KEYS = 'maxKeys';
    const PREFIX = 'prefix';
    const MARKER = 'marker';
    const DELIMITER = 'delimiter';
    const LIMIT = 'limit';
    const STORAGE_CLASS = 'storageClass';
} 
