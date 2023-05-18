<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScheduleRequestActions File
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
* ScheduleRequestActions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ScheduleRequestActions extends Enum
{
    /**
    * The Enum ScheduleRequestActions
    */
    const ADMIN_ASSIGN = "adminAssign";
    const ADMIN_UPDATE = "adminUpdate";
    const ADMIN_REMOVE = "adminRemove";
    const SELF_ACTIVATE = "selfActivate";
    const SELF_DEACTIVATE = "selfDeactivate";
    const ADMIN_EXTEND = "adminExtend";
    const ADMIN_RENEW = "adminRenew";
    const SELF_EXTEND = "selfExtend";
    const SELF_RENEW = "selfRenew";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
