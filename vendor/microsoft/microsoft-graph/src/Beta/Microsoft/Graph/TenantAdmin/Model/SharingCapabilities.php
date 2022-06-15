<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharingCapabilities File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\TenantAdmin\Model;

use Microsoft\Graph\Core\Enum;

/**
* SharingCapabilities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharingCapabilities extends Enum
{
    /**
    * The Enum SharingCapabilities
    */
    const DISABLED = "disabled";
    const EXTERNAL_USER_SHARING_ONLY = "externalUserSharingOnly";
    const EXTERNAL_USER_AND_GUEST_SHARING = "externalUserAndGuestSharing";
    const EXISTING_EXTERNAL_USER_SHARING_ONLY = "existingExternalUserSharingOnly";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
