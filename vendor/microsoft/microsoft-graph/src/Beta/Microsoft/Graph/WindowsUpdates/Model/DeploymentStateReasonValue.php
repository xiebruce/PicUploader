<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentStateReasonValue File
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
* DeploymentStateReasonValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentStateReasonValue extends Enum
{
    /**
    * The Enum DeploymentStateReasonValue
    */
    const SCHEDULED_BY_OFFER_WINDOW = "scheduledByOfferWindow";
    const OFFERING_BY_REQUEST = "offeringByRequest";
    const PAUSED_BY_REQUEST = "pausedByRequest";
    const PAUSED_BY_MONITORING = "pausedByMonitoring";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const FAULTED_BY_CONTENT_OUTDATED = "faultedByContentOutdated";
}
