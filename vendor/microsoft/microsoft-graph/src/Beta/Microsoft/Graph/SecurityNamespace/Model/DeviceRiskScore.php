<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceRiskScore File
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
* DeviceRiskScore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceRiskScore extends Enum
{
    /**
    * The Enum DeviceRiskScore
    */
    const NONE = "none";
    const INFORMATIONAL = "informational";
    const LOW = "low";
    const MEDIUM = "medium";
    const HIGH = "high";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
