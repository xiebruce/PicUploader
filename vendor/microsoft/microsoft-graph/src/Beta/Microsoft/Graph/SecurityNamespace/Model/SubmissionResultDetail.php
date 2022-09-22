<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubmissionResultDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* SubmissionResultDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubmissionResultDetail extends Enum
{
    /**
    * The Enum SubmissionResultDetail
    */
    const NONE = "none";
    const UNDER_INVESTIGATION = "underInvestigation";
    const SIMULATED_THREAT = "simulatedThreat";
    const ALLOWED_BY_SEC_OPS = "allowedBySecOps";
    const ALLOWED_BY_THIRD_PARTY_FILTERS = "allowedByThirdPartyFilters";
    const MESSAGE_NOT_FOUND = "messageNotFound";
    const URL_FILE_SHOULD_NOT_BE_BLOCKED = "urlFileShouldNotBeBlocked";
    const URL_FILE_SHOULD_BE_BLOCKED = "urlFileShouldBeBlocked";
    const URL_FILE_CANNOT_MAKE_DECISION = "urlFileCannotMakeDecision";
    const DOMAIN_IMPERSONATION = "domainImpersonation";
    const USER_IMPERSONATION = "userImpersonation";
    const BRAND_IMPERSONATION = "brandImpersonation";
    const OUTBOUND_SHOULD_NOT_BE_BLOCKED = "outboundShouldNotBeBlocked";
    const OUTBOUND_SHOULD_BE_BLOCKED = "outboundShouldBeBlocked";
    const OUTBOUND_BULK = "outboundBulk";
    const OUTBOUND_CANNOT_MAKE_DECISION = "outboundCannotMakeDecision";
    const OUTBOUND_NOT_RESCANNED = "outboundNotRescanned";
    const ZERO_HOUR_AUTO_PURGE_ALLOWED = "zeroHourAutoPurgeAllowed";
    const ZERO_HOUR_AUTO_PURGE_BLOCKED = "zeroHourAutoPurgeBlocked";
    const ZERO_HOUR_AUTO_PURGE_QUARANTINE_RELEASED = "zeroHourAutoPurgeQuarantineReleased";
    const ON_PREMISES_SKIP = "onPremisesSkip";
    const ALLOWED_BY_TENANT_ALLOW_BLOCK_LIST = "allowedByTenantAllowBlockList";
    const BLOCKED_BY_TENANT_ALLOW_BLOCK_LIST = "blockedByTenantAllowBlockList";
    const ALLOWED_URL_BY_TENANT_ALLOW_BLOCK_LIST = "allowedUrlByTenantAllowBlockList";
    const ALLOWED_FILE_BY_TENANT_ALLOW_BLOCK_LIST = "allowedFileByTenantAllowBlockList";
    const ALLOWED_SENDER_BY_TENANT_ALLOW_BLOCK_LIST = "allowedSenderByTenantAllowBlockList";
    const ALLOWED_RECIPIENT_BY_TENANT_ALLOW_BLOCK_LIST = "allowedRecipientByTenantAllowBlockList";
    const BLOCKED_URL_BY_TENANT_ALLOW_BLOCK_LIST = "blockedUrlByTenantAllowBlockList";
    const BLOCKED_FILE_BY_TENANT_ALLOW_BLOCK_LIST = "blockedFileByTenantAllowBlockList";
    const BLOCKED_SENDER_BY_TENANT_ALLOW_BLOCK_LIST = "blockedSenderByTenantAllowBlockList";
    const BLOCKED_RECIPIENT_BY_TENANT_ALLOW_BLOCK_LIST = "blockedRecipientByTenantAllowBlockList";
    const ALLOWED_BY_CONNECTION = "allowedByConnection";
    const BLOCKED_BY_CONNECTION = "blockedByConnection";
    const ALLOWED_BY_EXCHANGE_TRANSPORT_RULE = "allowedByExchangeTransportRule";
    const BLOCKED_BY_EXCHANGE_TRANSPORT_RULE = "blockedByExchangeTransportRule";
    const QUARANTINE_RELEASED = "quarantineReleased";
    const QUARANTINE_RELEASED_THEN_BLOCKED = "quarantineReleasedThenBlocked";
    const JUNK_MAIL_RULE_DISABLED = "junkMailRuleDisabled";
    const ALLOWED_BY_USER_SETTING = "allowedByUserSetting";
    const BLOCKED_BY_USER_SETTING = "blockedByUserSetting";
    const ALLOWED_BY_TENANT = "allowedByTenant";
    const BLOCKED_BY_TENANT = "blockedByTenant";
    const INVALID_FALSE_POSITIVE = "invalidFalsePositive";
    const INVALID_FALSE_NEGATIVE = "invalidFalseNegative";
    const SPOOF_BLOCKED = "spoofBlocked";
    const GOOD_RECLASSIFIED_AS_BAD = "goodReclassifiedAsBad";
    const GOOD_RECLASSIFIED_AS_BULK = "goodReclassifiedAsBulk";
    const GOOD_RECLASSIFIED_AS_GOOD = "goodReclassifiedAsGood";
    const GOOD_RECLASSIFIED_AS_CANNOT_MAKE_DECISION = "goodReclassifiedAsCannotMakeDecision";
    const BAD_RECLASSIFIED_AS_GOOD = "badReclassifiedAsGood";
    const BAD_RECLASSIFIED_AS_BULK = "badReclassifiedAsBulk";
    const BAD_RECLASSIFIED_AS_BAD = "badReclassifiedAsBad";
    const BAD_RECLASSIFIED_AS_CANNOT_MAKE_DECISION = "badReclassifiedAsCannotMakeDecision";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
