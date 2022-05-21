<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OperatingSystemUpgradeEligibility File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* OperatingSystemUpgradeEligibility class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OperatingSystemUpgradeEligibility extends Enum
{
    /**
    * The Enum OperatingSystemUpgradeEligibility
    */
    const UPGRADED = "upgraded";
    const UNKNOWN = "unknown";
    const NOT_CAPABLE = "notCapable";
    const CAPABLE = "capable";
}
