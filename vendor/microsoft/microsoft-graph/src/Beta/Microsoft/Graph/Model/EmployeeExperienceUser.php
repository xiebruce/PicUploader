<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmployeeExperienceUser File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* EmployeeExperienceUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmployeeExperienceUser extends Entity
{

     /**
     * Gets the learningCourseActivities
     *
     * @return array|null The learningCourseActivities
     */
    public function getLearningCourseActivities()
    {
        if (array_key_exists("learningCourseActivities", $this->_propDict)) {
           return $this->_propDict["learningCourseActivities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the learningCourseActivities
    *
    * @param LearningCourseActivity[] $val The learningCourseActivities
    *
    * @return EmployeeExperienceUser
    */
    public function setLearningCourseActivities($val)
    {
        $this->_propDict["learningCourseActivities"] = $val;
        return $this;
    }

}
