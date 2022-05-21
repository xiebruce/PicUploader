<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementCategory File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

use Microsoft\Graph\Core\Enum;

/**
* ManagementCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementCategory extends Enum
{
    /**
    * The Enum ManagementCategory
    */
    const CUSTOM = "custom";
    const DEVICES = "devices";
    const IDENTITY = "identity";
    const DATA = "data";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
