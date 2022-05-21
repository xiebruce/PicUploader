<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantOnboardingStatus File
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
* TenantOnboardingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantOnboardingStatus extends Enum
{
    /**
    * The Enum TenantOnboardingStatus
    */
    const INELIGIBLE = "ineligible";
    const IN_PROCESS = "inProcess";
    const ACTIVE = "active";
    const INACTIVE = "inactive";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
