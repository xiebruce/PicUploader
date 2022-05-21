<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplateLifecycleState File
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
* DeviceManagementTemplateLifecycleState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTemplateLifecycleState extends Enum
{
    /**
    * The Enum DeviceManagementTemplateLifecycleState
    */
    const INVALID = "invalid";
    const DRAFT = "draft";
    const ACTIVE = "active";
    const SUPERSEDED = "superseded";
    const DEPRECATED = "deprecated";
    const RETIRED = "retired";
}
