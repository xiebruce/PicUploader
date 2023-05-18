<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomalyState File
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
* UserExperienceAnalyticsAnomalyState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomalyState extends Enum
{
    /**
    * The Enum UserExperienceAnalyticsAnomalyState
    */
    const GRAPHNEW = "new";
    const ACTIVE = "active";
    const DISABLED = "disabled";
    const REMOVED = "removed";
    const OTHER = "other";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
