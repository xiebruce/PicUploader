<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadTheme File
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
* PayloadTheme class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadTheme extends Enum
{
    /**
    * The Enum PayloadTheme
    */
    const UNKNOWN = "unknown";
    const OTHER = "other";
    const ACCOUNT_ACTIVATION = "accountActivation";
    const ACCOUNT_VERIFICATION = "accountVerification";
    const BILLING = "billing";
    const CLEAN_UP_MAIL = "cleanUpMail";
    const CONTROVERSIAL = "controversial";
    const DOCUMENT_RECEIVED = "documentReceived";
    const EXPENSE = "expense";
    const FAX = "fax";
    const FINANCE_REPORT = "financeReport";
    const INCOMING_MESSAGES = "incomingMessages";
    const INVOICE = "invoice";
    const ITEM_RECEIVED = "itemReceived";
    const LOGIN_ALERT = "loginAlert";
    const MAIL_RECEIVED = "mailReceived";
    const PASSWORD = "password";
    const PAYMENT = "payment";
    const PAYROLL = "payroll";
    const PERSONALIZED_OFFER = "personalizedOffer";
    const QUARANTINE = "quarantine";
    const REMOTE_WORK = "remoteWork";
    const REVIEW_MESSAGE = "reviewMessage";
    const SECURITY_UPDATE = "securityUpdate";
    const SERVICE_SUSPENDED = "serviceSuspended";
    const SIGNATURE_REQUIRED = "signatureRequired";
    const UPGRADE_MAILBOX_STORAGE = "upgradeMailboxStorage";
    const VERIFY_MAILBOX = "verifyMailbox";
    const VOICEMAIL = "voicemail";
    const ADVERTISEMENT = "advertisement";
    const EMPLOYEE_ENGAGEMENT = "employeeEngagement";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
