<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LifecycleWorkflowProcessingStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* LifecycleWorkflowProcessingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LifecycleWorkflowProcessingStatus extends Enum
{
    /**
    * The Enum LifecycleWorkflowProcessingStatus
    */
    const QUEUED = "queued";
    const IN_PROGRESS = "inProgress";
    const COMPLETED = "completed";
    const COMPLETED_WITH_ERRORS = "completedWithErrors";
    const CANCELED = "canceled";
    const FAILED = "failed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
