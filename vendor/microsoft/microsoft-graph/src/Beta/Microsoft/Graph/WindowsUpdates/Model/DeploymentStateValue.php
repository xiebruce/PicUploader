<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentStateValue File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeploymentStateValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentStateValue extends Enum
{
    /**
    * The Enum DeploymentStateValue
    */
    const SCHEDULED = "scheduled";
    const OFFERING = "offering";
    const PAUSED = "paused";
    const FAULTED = "faulted";
    const ARCHIVED = "archived";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
