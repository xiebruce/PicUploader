<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendationType File
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
* RecommendationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendationType extends Enum
{
    /**
    * The Enum RecommendationType
    */
    const ADFS_APPS_MIGRATION = "adfsAppsMigration";
    const ENABLE_DESKTOP_SSO = "enableDesktopSSO";
    const ENABLE_PHS = "enablePHS";
    const ENABLE_PROVISIONING = "enableProvisioning";
    const SWITCH_FROM_PER_USER_MFA = "switchFromPerUserMFA";
    const TENANT_MFA = "tenantMFA";
    const THIRD_PARTY_APPS = "thirdPartyApps";
    const TURN_OFF_PER_USER_MFA = "turnOffPerUserMFA";
    const USE_AUTHENTICATOR_APP = "useAuthenticatorApp";
    const USE_MY_APPS = "useMyApps";
    const STALE_APPS = "staleApps";
    const STALE_APP_CREDS = "staleAppCreds";
    const APPLICATION_CREDENTIAL_EXPIRY = "applicationCredentialExpiry";
    const SERVICE_PRINCIPAL_KEY_EXPIRY = "servicePrincipalKeyExpiry";
    const ADMIN_MFAV2 = "adminMFAV2";
    const BLOCK_LEGACY_AUTHENTICATION = "blockLegacyAuthentication";
    const INTEGRATED_APPS = "integratedApps";
    const MFA_REGISTRATION_V2 = "mfaRegistrationV2";
    const PWAGE_POLICY_NEW = "pwagePolicyNew";
    const PASSWORD_HASH_SYNC = "passwordHashSync";
    const ONE_ADMIN = "oneAdmin";
    const ROLE_OVERLAP = "roleOverlap";
    const SELF_SERVICE_PASSWORD_RESET = "selfServicePasswordReset";
    const SIGNIN_RISK_POLICY = "signinRiskPolicy";
    const USER_RISK_POLICY = "userRiskPolicy";
    const VERIFY_APP_PUBLISHER = "verifyAppPublisher";
    const PRIVATE_LINK_FOR_AAD = "privateLinkForAAD";
    const APP_ROLE_ASSIGNMENTS_GROUPS = "appRoleAssignmentsGroups";
    const APP_ROLE_ASSIGNMENTS_USERS = "appRoleAssignmentsUsers";
    const MANAGED_IDENTITY = "managedIdentity";
    const OVERPRIVILEGED_APPS = "overprivilegedApps";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
