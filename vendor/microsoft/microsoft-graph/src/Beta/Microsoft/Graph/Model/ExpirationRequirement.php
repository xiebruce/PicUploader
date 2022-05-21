<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpirationRequirement File
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
* ExpirationRequirement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpirationRequirement extends Enum
{
    /**
    * The Enum ExpirationRequirement
    */
    const REMEMBER_MULTIFACTOR_AUTHENTICATION_ON_TRUSTED_DEVICES = "rememberMultifactorAuthenticationOnTrustedDevices";
    const TENANT_TOKEN_LIFETIME_POLICY = "tenantTokenLifetimePolicy";
    const AUDIENCE_TOKEN_LIFETIME_POLICY = "audienceTokenLifetimePolicy";
    const SIGN_IN_FREQUENCY_PERIODIC_REAUTHENTICATION = "signInFrequencyPeriodicReauthentication";
    const NGC_MFA = "ngcMfa";
    const SIGN_IN_FREQUENCY_EVERY_TIME = "signInFrequencyEveryTime";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
