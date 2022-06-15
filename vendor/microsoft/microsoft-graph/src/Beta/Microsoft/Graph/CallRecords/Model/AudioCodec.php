<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AudioCodec File
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
* AudioCodec class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AudioCodec extends Enum
{
    /**
    * The Enum AudioCodec
    */
    const UNKNOWN = "unknown";
    const INVALID = "invalid";
    const CN = "cn";
    const PCMA = "pcma";
    const PCMU = "pcmu";
    const AMR_WIDE = "amrWide";
    const G722 = "g722";
    const G7221 = "g7221";
    const G7221C = "g7221c";
    const G729 = "g729";
    const MULTI_CHANNEL_AUDIO = "multiChannelAudio";
    const MUCHV2 = "muchv2";
    const OPUS = "opus";
    const SATIN = "satin";
    const SATIN_FULLBAND = "satinFullband";
    const RT_AUDIO8 = "rtAudio8";
    const RT_AUDIO16 = "rtAudio16";
    const SILK = "silk";
    const SILK_NARROW = "silkNarrow";
    const SILK_WIDE = "silkWide";
    const SIREN = "siren";
    const XMS_RTA = "xmsRta";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
