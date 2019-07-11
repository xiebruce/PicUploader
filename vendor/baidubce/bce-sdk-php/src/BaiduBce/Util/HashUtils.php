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

namespace baidubce\util;

class HashUtils
{
    /**
     * @param resource $fp The opened file
     * @param number $offset The offset.
     * @param number $length Maximum number of characters to copy from
     *   $fp into the hashing context.
     * @param boolean $raw_output When TRUE, returns the digest in raw
     *   binary format with a length of 16
     *
     * @return string
     */
    public static function md5FromStream(
        $fp,
        $offset = 0,
        $length = -1
    ) {
        $pos = ftell($fp);
        $ctx = hash_init('md5');
        fseek($fp, $offset, SEEK_SET);
        hash_update_stream($ctx, $fp, $length);
        if ($pos !== false) {
            fseek($fp, $pos, SEEK_SET);
        }
        return hash_final($ctx, true);
    }
} 
