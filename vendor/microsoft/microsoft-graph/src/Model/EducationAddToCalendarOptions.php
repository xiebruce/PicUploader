<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAddToCalendarOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* EducationAddToCalendarOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAddToCalendarOptions extends Enum
{
    /**
    * The Enum EducationAddToCalendarOptions
    */
    const NONE = "none";
    const STUDENTS_AND_PUBLISHER = "studentsAndPublisher";
    const STUDENTS_AND_TEAM_OWNERS = "studentsAndTeamOwners";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const STUDENTS_ONLY = "studentsOnly";
}
