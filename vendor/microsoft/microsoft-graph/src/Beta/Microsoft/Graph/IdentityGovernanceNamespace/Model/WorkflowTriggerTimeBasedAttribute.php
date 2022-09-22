<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkflowTriggerTimeBasedAttribute File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* WorkflowTriggerTimeBasedAttribute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkflowTriggerTimeBasedAttribute extends Enum
{
    /**
    * The Enum WorkflowTriggerTimeBasedAttribute
    */
    const EMPLOYEE_HIRE_DATE = "employeeHireDate";
    const EMPLOYEE_LEAVE_DATE_TIME = "employeeLeaveDateTime";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
