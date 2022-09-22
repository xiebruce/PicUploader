<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcExternalPartnerStatus File
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
* CloudPcExternalPartnerStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcExternalPartnerStatus extends Enum
{
    /**
    * The Enum CloudPcExternalPartnerStatus
    */
    const NOT_AVAILABLE = "notAvailable";
    const AVAILABLE = "available";
    const HEALTHY = "healthy";
    const UNHEALTHY = "unhealthy";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
