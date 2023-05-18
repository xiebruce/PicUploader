<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessRule File
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
* ConditionalAccessRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessRule extends Enum
{
    /**
    * The Enum ConditionalAccessRule
    */
    const ALL_APPS = "allApps";
    const FIRST_PARTY_APPS = "firstPartyApps";
    const OFFICE365 = "office365";
    const APP_ID = "appId";
    const ACR = "acr";
    const APP_FILTER = "appFilter";
    const ALL_USERS = "allUsers";
    const GUEST = "guest";
    const GROUP_ID = "groupId";
    const ROLE_ID = "roleId";
    const USER_ID = "userId";
    const ALL_DEVICE_PLATFORMS = "allDevicePlatforms";
    const DEVICE_PLATFORM = "devicePlatform";
    const ALL_LOCATIONS = "allLocations";
    const INSIDE_CORPNET = "insideCorpnet";
    const ALL_TRUSTED_LOCATIONS = "allTrustedLocations";
    const LOCATION_ID = "locationId";
    const ALL_DEVICES = "allDevices";
    const DEVICE_FILTER = "deviceFilter";
    const DEVICE_STATE = "deviceState";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const DEVICE_FILTER_INCLUDE_RULE_NOT_MATCHED = "deviceFilterIncludeRuleNotMatched";
    const ALL_DEVICE_STATES = "allDeviceStates";
    const ANONYMIZED_IP_ADDRESS = "anonymizedIPAddress";
    const UNFAMILIAR_FEATURES = "unfamiliarFeatures";
    const NATION_STATE_IP_ADDRESS = "nationStateIPAddress";
    const REAL_TIME_THREAT_INTELLIGENCE = "realTimeThreatIntelligence";
    const INTERNAL_GUEST = "internalGuest";
    const B2B_COLLABORATION_GUEST = "b2bCollaborationGuest";
    const B2B_COLLABORATION_MEMBER = "b2bCollaborationMember";
    const B2B_DIRECT_CONNECT_USER = "b2bDirectConnectUser";
    const OTHER_EXTERNAL_USER = "otherExternalUser";
    const SERVICE_PROVIDER = "serviceProvider";
    const MICROSOFT_ADMIN_PORTALS = "microsoftAdminPortals";
}
