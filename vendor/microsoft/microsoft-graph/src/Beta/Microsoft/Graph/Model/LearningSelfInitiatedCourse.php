<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LearningSelfInitiatedCourse File
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
* LearningSelfInitiatedCourse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LearningSelfInitiatedCourse extends LearningCourseActivity
{
    /**
    * Gets the startedDateTime
    * The date time value on which the self-initiated course was started by the learner. Optional.
    *
    * @return \DateTime|null The startedDateTime
    */
    public function getStartedDateTime()
    {
        if (array_key_exists("startedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startedDateTime"], "\DateTime") || is_null($this->_propDict["startedDateTime"])) {
                return $this->_propDict["startedDateTime"];
            } else {
                $this->_propDict["startedDateTime"] = new \DateTime($this->_propDict["startedDateTime"]);
                return $this->_propDict["startedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startedDateTime
    * The date time value on which the self-initiated course was started by the learner. Optional.
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return LearningSelfInitiatedCourse
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }

}
