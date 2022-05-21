<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataSourceHoldStatus File
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
* DataSourceHoldStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataSourceHoldStatus extends Enum
{
    /**
    * The Enum DataSourceHoldStatus
    */
    const NOT_APPLIED = "notApplied";
    const APPLIED = "applied";
    const APPLYING = "applying";
    const REMOVING = "removing";
    const PARTIAL = "partial";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
