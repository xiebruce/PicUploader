<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomalyType File
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
* UserExperienceAnalyticsAnomalyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomalyType extends Enum
{
    /**
    * The Enum UserExperienceAnalyticsAnomalyType
    */
    const DEVICE = "device";
    const APPLICATION = "application";
    const STOP_ERROR = "stopError";
    const DRIVER = "driver";
    const OTHER = "other";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
