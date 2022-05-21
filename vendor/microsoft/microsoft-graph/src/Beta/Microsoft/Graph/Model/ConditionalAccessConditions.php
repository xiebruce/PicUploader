<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessConditions File
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
* ConditionalAccessConditions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessConditions extends Enum
{
    /**
    * The Enum ConditionalAccessConditions
    */
    const NONE = "none";
    const APPLICATION = "application";
    const USERS = "users";
    const DEVICE_PLATFORM = "devicePlatform";
    const LOCATION = "location";
    const CLIENT_TYPE = "clientType";
    const SIGN_IN_RISK = "signInRisk";
    const USER_RISK = "userRisk";
    const TIME = "time";
    const DEVICE_STATE = "deviceState";
    const CLIENT = "client";
    const IP_ADDRESS_SEEN_BY_AZURE_AD = "ipAddressSeenByAzureAD";
    const IP_ADDRESS_SEEN_BY_RESOURCE_PROVIDER = "ipAddressSeenByResourceProvider";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const SERVICE_PRINCIPALS = "servicePrincipals";
    const SERVICE_PRINCIPAL_RISK = "servicePrincipalRisk";
}
