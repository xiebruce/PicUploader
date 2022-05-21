<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EquivalentContentOption File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

use Microsoft\Graph\Core\Enum;

/**
* EquivalentContentOption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EquivalentContentOption extends Enum
{
    /**
    * The Enum EquivalentContentOption
    */
    const NONE = "none";
    const LATEST_SECURITY = "latestSecurity";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
