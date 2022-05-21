<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendationStatus File
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
* RecommendationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendationStatus extends Enum
{
    /**
    * The Enum RecommendationStatus
    */
    const ACTIVE = "active";
    const COMPLETED_BY_SYSTEM = "completedBySystem";
    const COMPLETED_BY_USER = "completedByUser";
    const DISMISSED = "dismissed";
    const POSTPONED = "postponed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
