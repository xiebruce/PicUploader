<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserMailboxSetting File
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
* UserMailboxSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserMailboxSetting extends Enum
{
    /**
    * The Enum UserMailboxSetting
    */
    const NONE = "none";
    const JUNK_MAIL_DELETION = "junkMailDeletion";
    const IS_FROM_ADDRESS_IN_ADDRESS_BOOK = "isFromAddressInAddressBook";
    const IS_FROM_ADDRESS_IN_ADDRESS_SAFE_LIST = "isFromAddressInAddressSafeList";
    const IS_FROM_ADDRESS_IN_ADDRESS_BLOCK_LIST = "isFromAddressInAddressBlockList";
    const IS_FROM_ADDRESS_IN_ADDRESS_IMPLICIT_SAFE_LIST = "isFromAddressInAddressImplicitSafeList";
    const IS_FROM_ADDRESS_IN_ADDRESS_IMPLICIT_JUNK_LIST = "isFromAddressInAddressImplicitJunkList";
    const IS_FROM_DOMAIN_IN_DOMAIN_SAFE_LIST = "isFromDomainInDomainSafeList";
    const IS_FROM_DOMAIN_IN_DOMAIN_BLOCK_LIST = "isFromDomainInDomainBlockList";
    const IS_RECIPIENT_IN_RECIPIENT_SAFE_LIST = "isRecipientInRecipientSafeList";
    const CUSTOM_RULE = "customRule";
    const JUNK_MAIL_RULE = "junkMailRule";
    const SENDER_PRA_PRESENT = "senderPraPresent";
    const FROM_FIRST_TIME_SENDER = "fromFirstTimeSender";
    const EXCLUSIVE = "exclusive";
    const PRIOR_SEEN_PASS = "priorSeenPass";
    const SENDER_AUTHENTICATION_SUCCEEDED = "senderAuthenticationSucceeded";
    const IS_JUNK_MAIL_RULE_ENABLED = "isJunkMailRuleEnabled";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
