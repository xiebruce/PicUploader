<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageEventType File
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
* MessageEventType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageEventType extends Enum
{
    /**
    * The Enum MessageEventType
    */
    const RECEIVED = "received";
    const SENT = "sent";
    const DELIVERED = "delivered";
    const FAILED = "failed";
    const PROCESSING_FAILED = "processingFailed";
    const DISTRIBUTION_GROUP_EXPANDED = "distributionGroupExpanded";
    const SUBMITTED = "submitted";
    const DELAYED = "delayed";
    const REDIRECTED = "redirected";
    const RESOLVED = "resolved";
    const DROPPED = "dropped";
    const RECIPIENTS_ADDED = "recipientsAdded";
    const MALWARE_DETECTED = "malwareDetected";
    const MALWARE_DETECTED_IN_MESSAGE = "malwareDetectedInMessage";
    const MALWARE_DETECTED_IN_ATTACHMENT = "malwareDetectedInAttachment";
    const TT_ZAPPED = "ttZapped";
    const TT_DELIVERED = "ttDelivered";
    const SPAM_DETECTED = "spamDetected";
    const TRANSPORT_RULE_TRIGGERED = "transportRuleTriggered";
    const DLP_RULE_TRIGGERED = "dlpRuleTriggered";
    const JOURNALED = "journaled";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
