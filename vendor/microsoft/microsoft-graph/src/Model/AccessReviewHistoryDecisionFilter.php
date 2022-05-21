<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewHistoryDecisionFilter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AccessReviewHistoryDecisionFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewHistoryDecisionFilter extends Enum
{
    /**
    * The Enum AccessReviewHistoryDecisionFilter
    */
    const APPROVE = "approve";
    const DENY = "deny";
    const NOT_REVIEWED = "notReviewed";
    const DONT_KNOW = "dontKnow";
    const NOT_NOTIFIED = "notNotified";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
