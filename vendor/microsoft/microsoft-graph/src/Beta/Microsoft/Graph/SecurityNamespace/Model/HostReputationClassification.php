<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostReputationClassification File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* HostReputationClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostReputationClassification extends Enum
{
    /**
    * The Enum HostReputationClassification
    */
    const UNKNOWN = "unknown";
    const NEUTRAL = "neutral";
    const SUSPICIOUS = "suspicious";
    const MALICIOUS = "malicious";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
