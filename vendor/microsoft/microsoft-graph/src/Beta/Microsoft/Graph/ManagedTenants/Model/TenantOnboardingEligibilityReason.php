<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantOnboardingEligibilityReason File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

use Microsoft\Graph\Core\Enum;

/**
* TenantOnboardingEligibilityReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantOnboardingEligibilityReason extends Enum
{
    /**
    * The Enum TenantOnboardingEligibilityReason
    */
    const NONE = "none";
    const CONTRACT_TYPE = "contractType";
    const DELEGATED_ADMIN_PRIVILEGES = "delegatedAdminPrivileges";
    const USERS_COUNT = "usersCount";
    const LICENSE = "license";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
