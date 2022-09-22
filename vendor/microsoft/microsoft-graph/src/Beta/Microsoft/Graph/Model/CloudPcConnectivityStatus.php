<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcConnectivityStatus File
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
* CloudPcConnectivityStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcConnectivityStatus extends Enum
{
    /**
    * The Enum CloudPcConnectivityStatus
    */
    const UNKNOWN = "unknown";
    const AVAILABLE = "available";
    const AVAILABLE_WITH_WARNING = "availableWithWarning";
    const UNAVAILABLE = "unavailable";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
