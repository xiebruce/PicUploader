<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendationFeatureAreas File
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
* RecommendationFeatureAreas class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendationFeatureAreas extends Enum
{
    /**
    * The Enum RecommendationFeatureAreas
    */
    const USERS = "users";
    const GROUPS = "groups";
    const DEVICES = "devices";
    const APPLICATIONS = "applications";
    const ACCESS_REVIEWS = "accessReviews";
    const CONDITIONAL_ACCESS = "conditionalAccess";
    const GOVERNANCE = "governance";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
