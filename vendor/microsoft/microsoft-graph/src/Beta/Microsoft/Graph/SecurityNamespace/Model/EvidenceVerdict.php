<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvidenceVerdict File
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
* EvidenceVerdict class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvidenceVerdict extends Enum
{
    /**
    * The Enum EvidenceVerdict
    */
    const UNKNOWN = "unknown";
    const SUSPICIOUS = "suspicious";
    const MALICIOUS = "malicious";
    const NO_THREATS_FOUND = "noThreatsFound";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
