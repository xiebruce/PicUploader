<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostReputationRuleSeverity File
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
* HostReputationRuleSeverity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostReputationRuleSeverity extends Enum
{
    /**
    * The Enum HostReputationRuleSeverity
    */
    const UNKNOWN = "unknown";
    const LOW = "low";
    const MEDIUM = "medium";
    const HIGH = "high";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
