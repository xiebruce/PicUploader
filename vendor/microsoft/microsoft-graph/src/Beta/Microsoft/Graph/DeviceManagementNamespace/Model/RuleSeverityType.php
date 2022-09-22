<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RuleSeverityType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* RuleSeverityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RuleSeverityType extends Enum
{
    /**
    * The Enum RuleSeverityType
    */
    const UNKNOWN = "unknown";
    const INFORMATIONAL = "informational";
    const WARNING = "warning";
    const CRITICAL = "critical";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
