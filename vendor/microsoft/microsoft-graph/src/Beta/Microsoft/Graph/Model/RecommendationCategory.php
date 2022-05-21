<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendationCategory File
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
* RecommendationCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendationCategory extends Enum
{
    /**
    * The Enum RecommendationCategory
    */
    const USAGE_AND_COMPLIANCE = "usageAndCompliance";
    const SECURITY = "security";
    const PRODUCTIVITY = "productivity";
    const HEALTH = "health";
    const CONFIGURATION = "configuration";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
