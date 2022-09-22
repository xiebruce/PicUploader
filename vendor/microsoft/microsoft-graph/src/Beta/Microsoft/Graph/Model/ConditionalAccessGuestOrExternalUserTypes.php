<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessGuestOrExternalUserTypes File
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
* ConditionalAccessGuestOrExternalUserTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessGuestOrExternalUserTypes extends Enum
{
    /**
    * The Enum ConditionalAccessGuestOrExternalUserTypes
    */
    const NONE = "none";
    const INTERNAL_GUEST = "internalGuest";
    const B2B_COLLABORATION_GUEST = "b2bCollaborationGuest";
    const B2B_COLLABORATION_MEMBER = "b2bCollaborationMember";
    const B2B_DIRECT_CONNECT_USER = "b2bDirectConnectUser";
    const OTHER_EXTERNAL_USER = "otherExternalUser";
    const SERVICE_PROVIDER = "serviceProvider";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
