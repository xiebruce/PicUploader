<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceHealthStatus File
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
* ServiceHealthStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceHealthStatus extends Enum
{
    /**
    * The Enum ServiceHealthStatus
    */
    const SERVICE_OPERATIONAL = "serviceOperational";
    const INVESTIGATING = "investigating";
    const RESTORING_SERVICE = "restoringService";
    const VERIFYING_SERVICE = "verifyingService";
    const SERVICE_RESTORED = "serviceRestored";
    const POST_INCIDENT_REVIEW_PUBLISHED = "postIncidentReviewPublished";
    const SERVICE_DEGRADATION = "serviceDegradation";
    const SERVICE_INTERRUPTION = "serviceInterruption";
    const EXTENDED_RECOVERY = "extendedRecovery";
    const FALSE_POSITIVE = "falsePositive";
    const INVESTIGATION_SUSPENDED = "investigationSuspended";
    const RESOLVED = "resolved";
    const MITIGATED_EXTERNAL = "mitigatedExternal";
    const MITIGATED = "mitigated";
    const RESOLVED_EXTERNAL = "resolvedExternal";
    const CONFIRMED = "confirmed";
    const REPORTED = "reported";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
