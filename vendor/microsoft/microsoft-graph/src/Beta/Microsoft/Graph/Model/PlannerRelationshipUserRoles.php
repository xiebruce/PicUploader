<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerRelationshipUserRoles File
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
* PlannerRelationshipUserRoles class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerRelationshipUserRoles extends Enum
{
    /**
    * The Enum PlannerRelationshipUserRoles
    */
    const DEFAULT_RULES = "defaultRules";
    const GROUP_OWNERS = "groupOwners";
    const GROUP_MEMBERS = "groupMembers";
    const TASK_ASSIGNEES = "taskAssignees";
    const APPLICATIONS = "applications";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
