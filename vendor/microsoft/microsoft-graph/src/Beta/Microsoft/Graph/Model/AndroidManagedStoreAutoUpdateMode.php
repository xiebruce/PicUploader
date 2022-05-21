<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAutoUpdateMode File
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
* AndroidManagedStoreAutoUpdateMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAutoUpdateMode extends Enum
{
    /**
    * The Enum AndroidManagedStoreAutoUpdateMode
    */
    const GRAPHDEFAULT = "default";
    const POSTPONED = "postponed";
    const PRIORITY = "priority";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
