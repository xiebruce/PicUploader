<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcStatus File
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
* CloudPcStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcStatus extends Enum
{
    /**
    * The Enum CloudPcStatus
    */
    const NOT_PROVISIONED = "notProvisioned";
    const PROVISIONING = "provisioning";
    const PROVISIONED = "provisioned";
    const IN_GRACE_PERIOD = "inGracePeriod";
    const DEPROVISIONING = "deprovisioning";
    const FAILED = "failed";
    const PROVISIONED_WITH_WARNINGS = "provisionedWithWarnings";
    const RESIZING = "resizing";
    const RESTORING = "restoring";
    const PENDING_PROVISION = "pendingProvision";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
