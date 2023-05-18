<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectorName File
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
* ConnectorName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectorName extends Enum
{
    /**
    * The Enum ConnectorName
    */
    const APPLE_PUSH_NOTIFICATION_SERVICE_EXPIRATION_DATE_TIME = "applePushNotificationServiceExpirationDateTime";
    const VPP_TOKEN_EXPIRATION_DATE_TIME = "vppTokenExpirationDateTime";
    const VPP_TOKEN_LAST_SYNC_DATE_TIME = "vppTokenLastSyncDateTime";
    const WINDOWS_AUTOPILOT_LAST_SYNC_DATE_TIME = "windowsAutopilotLastSyncDateTime";
    const WINDOWS_STORE_FOR_BUSINESS_LAST_SYNC_DATE_TIME = "windowsStoreForBusinessLastSyncDateTime";
    const JAMF_LAST_SYNC_DATE_TIME = "jamfLastSyncDateTime";
    const NDES_CONNECTOR_LAST_CONNECTION_DATE_TIME = "ndesConnectorLastConnectionDateTime";
    const APPLE_DEP_EXPIRATION_DATE_TIME = "appleDepExpirationDateTime";
    const APPLE_DEP_LAST_SYNC_DATE_TIME = "appleDepLastSyncDateTime";
    const ON_PREM_CONNECTOR_LAST_SYNC_DATE_TIME = "onPremConnectorLastSyncDateTime";
    const GOOGLE_PLAY_APP_LAST_SYNC_DATE_TIME = "googlePlayAppLastSyncDateTime";
    const GOOGLE_PLAY_CONNECTOR_LAST_MODIFIED_DATE_TIME = "googlePlayConnectorLastModifiedDateTime";
    const WINDOWS_DEFENDER_ATP_CONNECTOR_LAST_HEARTBEAT_DATE_TIME = "windowsDefenderATPConnectorLastHeartbeatDateTime";
    const MOBILE_THREAT_DEFENCE_CONNECTOR_LAST_HEARTBEAT_DATE_TIME = "mobileThreatDefenceConnectorLastHeartbeatDateTime";
    const CHROMEBOOK_LAST_DIRECTORY_SYNC_DATE_TIME = "chromebookLastDirectorySyncDateTime";
    const FUTURE_VALUE = "futureValue";
}
