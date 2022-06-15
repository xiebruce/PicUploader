<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VideoCodec File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* VideoCodec class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VideoCodec extends Enum
{
    /**
    * The Enum VideoCodec
    */
    const UNKNOWN = "unknown";
    const INVALID = "invalid";
    const AV1 = "av1";
    const H263 = "h263";
    const H264 = "h264";
    const H264S = "h264s";
    const H264UC = "h264uc";
    const H265 = "h265";
    const RTVC1 = "rtvc1";
    const RT_VIDEO = "rtVideo";
    const XRTVC1 = "xrtvc1";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
