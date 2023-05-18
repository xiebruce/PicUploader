<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcResizeValidationCode File
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
* CloudPcResizeValidationCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcResizeValidationCode extends Enum
{
    /**
    * The Enum CloudPcResizeValidationCode
    */
    const SUCCESS = "success";
    const CLOUD_PC_NOT_FOUND = "cloudPcNotFound";
    const OPERATION_CONFLICT = "operationConflict";
    const OPERATION_NOT_SUPPORTED = "operationNotSupported";
    const TARGET_LICENSE_HAS_ASSIGNED = "targetLicenseHasAssigned";
    const INTERNAL_SERVER_ERROR = "internalServerError";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
