<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminRelationshipStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* DelegatedAdminRelationshipStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminRelationshipStatus extends Enum
{
    /**
    * The Enum DelegatedAdminRelationshipStatus
    */
    const ACTIVATING = "activating";
    const ACTIVE = "active";
    const APPROVAL_PENDING = "approvalPending";
    const APPROVED = "approved";
    const CREATED = "created";
    const EXPIRED = "expired";
    const EXPIRING = "expiring";
    const TERMINATED = "terminated";
    const TERMINATING = "terminating";
    const TERMINATION_REQUESTED = "terminationRequested";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
