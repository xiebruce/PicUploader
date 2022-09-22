<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageFrequency File
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
* OrganizationalMessageFrequency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageFrequency extends Enum
{
    /**
    * The Enum OrganizationalMessageFrequency
    */
    const WEEKLY_ONCE = "weeklyOnce";
    const MONTHLY_ONCE = "monthlyOnce";
    const MONTHLY_TWICE = "monthlyTwice";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
