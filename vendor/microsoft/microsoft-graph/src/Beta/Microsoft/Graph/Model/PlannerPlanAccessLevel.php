<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanAccessLevel File
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
* PlannerPlanAccessLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanAccessLevel extends Enum
{
    /**
    * The Enum PlannerPlanAccessLevel
    */
    const READ_ACCESS = "readAccess";
    const READ_WRITE_ACCESS = "readWriteAccess";
    const FULL_ACCESS = "fullAccess";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
