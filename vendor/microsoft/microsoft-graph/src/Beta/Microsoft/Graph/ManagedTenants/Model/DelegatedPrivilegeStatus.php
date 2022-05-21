<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedPrivilegeStatus File
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
* DelegatedPrivilegeStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedPrivilegeStatus extends Enum
{
    /**
    * The Enum DelegatedPrivilegeStatus
    */
    const NONE = "none";
    const DELEGATED_ADMIN_PRIVILEGES = "delegatedAdminPrivileges";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const GRANULAR_DELEGATED_ADMIN_PRIVILEGES = "granularDelegatedAdminPrivileges";
    const DELEGATED_AND_GRANULAR_DELEGETED_ADMIN_PRIVILEGES = "delegatedAndGranularDelegetedAdminPrivileges";
}
