<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewTimeoutBehavior File
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
* AccessReviewTimeoutBehavior class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewTimeoutBehavior extends Enum
{
    /**
    * The Enum AccessReviewTimeoutBehavior
    */
    const KEEP_ACCESS = "keepAccess";
    const REMOVE_ACCESS = "removeAccess";
    const ACCEPT_ACCESS_RECOMMENDATION = "acceptAccessRecommendation";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
