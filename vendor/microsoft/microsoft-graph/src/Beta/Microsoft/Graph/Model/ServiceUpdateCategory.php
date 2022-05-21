<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceUpdateCategory File
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
* ServiceUpdateCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceUpdateCategory extends Enum
{
    /**
    * The Enum ServiceUpdateCategory
    */
    const PREVENT_OR_FIX_ISSUE = "preventOrFixIssue";
    const PLAN_FOR_CHANGE = "planForChange";
    const STAY_INFORMED = "stayInformed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
