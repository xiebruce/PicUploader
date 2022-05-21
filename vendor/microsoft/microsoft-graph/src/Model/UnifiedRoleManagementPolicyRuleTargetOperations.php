<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyRuleTargetOperations File
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
* UnifiedRoleManagementPolicyRuleTargetOperations class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyRuleTargetOperations extends Enum
{
    /**
    * The Enum UnifiedRoleManagementPolicyRuleTargetOperations
    */
    const ALL = "all";
    const ACTIVATE = "activate";
    const DEACTIVATE = "deactivate";
    const ASSIGN = "assign";
    const UPDATE = "update";
    const REMOVE = "remove";
    const EXTEND = "extend";
    const RENEW = "renew";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
