<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceSource File
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
* ServiceSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceSource extends Enum
{
    /**
    * The Enum ServiceSource
    */
    const UNKNOWN = "unknown";
    const MICROSOFT_DEFENDER_FOR_ENDPOINT = "microsoftDefenderForEndpoint";
    const MICROSOFT_DEFENDER_FOR_IDENTITY = "microsoftDefenderForIdentity";
    const MICROSOFT_DEFENDER_FOR_CLOUD_APPS = "microsoftDefenderForCloudApps";
    const MICROSOFT_DEFENDER_FOR_OFFICE365 = "microsoftDefenderForOffice365";
    const MICROSOFT365_DEFENDER = "microsoft365Defender";
    const AZURE_AD_IDENTITY_PROTECTION = "azureAdIdentityProtection";
    const MICROSOFT_APP_GOVERNANCE = "microsoftAppGovernance";
    const DATA_LOSS_PREVENTION = "dataLossPrevention";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
