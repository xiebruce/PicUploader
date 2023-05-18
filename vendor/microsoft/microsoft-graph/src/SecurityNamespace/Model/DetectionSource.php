<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectionSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* DetectionSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectionSource extends Enum
{
    /**
    * The Enum DetectionSource
    */
    const UNKNOWN = "unknown";
    const MICROSOFT_DEFENDER_FOR_ENDPOINT = "microsoftDefenderForEndpoint";
    const ANTIVIRUS = "antivirus";
    const SMART_SCREEN = "smartScreen";
    const CUSTOM_TI = "customTi";
    const MICROSOFT_DEFENDER_FOR_OFFICE365 = "microsoftDefenderForOffice365";
    const AUTOMATED_INVESTIGATION = "automatedInvestigation";
    const MICROSOFT_THREAT_EXPERTS = "microsoftThreatExperts";
    const CUSTOM_DETECTION = "customDetection";
    const MICROSOFT_DEFENDER_FOR_IDENTITY = "microsoftDefenderForIdentity";
    const CLOUD_APP_SECURITY = "cloudAppSecurity";
    const MICROSOFT365_DEFENDER = "microsoft365Defender";
    const AZURE_AD_IDENTITY_PROTECTION = "azureAdIdentityProtection";
    const MANUAL = "manual";
    const MICROSOFT_DATA_LOSS_PREVENTION = "microsoftDataLossPrevention";
    const APP_GOVERNANCE_POLICY = "appGovernancePolicy";
    const APP_GOVERNANCE_DETECTION = "appGovernanceDetection";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
