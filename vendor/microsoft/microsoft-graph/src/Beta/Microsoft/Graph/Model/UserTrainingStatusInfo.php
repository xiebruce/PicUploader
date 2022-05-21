<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserTrainingStatusInfo File
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
* UserTrainingStatusInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserTrainingStatusInfo extends Entity
{

    /**
    * Gets the assignedDateTime
    * Date and time of assignment of the training to the user.
    *
    * @return \DateTime|null The assignedDateTime
    */
    public function getAssignedDateTime()
    {
        if (array_key_exists("assignedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignedDateTime"], "\DateTime") || is_null($this->_propDict["assignedDateTime"])) {
                return $this->_propDict["assignedDateTime"];
            } else {
                $this->_propDict["assignedDateTime"] = new \DateTime($this->_propDict["assignedDateTime"]);
                return $this->_propDict["assignedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedDateTime
    * Date and time of assignment of the training to the user.
    *
    * @param \DateTime $val The value to assign to the assignedDateTime
    *
    * @return UserTrainingStatusInfo The UserTrainingStatusInfo
    */
    public function setAssignedDateTime($val)
    {
        $this->_propDict["assignedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the completionDateTime
    * Date and time of completion of the training by the user.
    *
    * @return \DateTime|null The completionDateTime
    */
    public function getCompletionDateTime()
    {
        if (array_key_exists("completionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completionDateTime"], "\DateTime") || is_null($this->_propDict["completionDateTime"])) {
                return $this->_propDict["completionDateTime"];
            } else {
                $this->_propDict["completionDateTime"] = new \DateTime($this->_propDict["completionDateTime"]);
                return $this->_propDict["completionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completionDateTime
    * Date and time of completion of the training by the user.
    *
    * @param \DateTime $val The value to assign to the completionDateTime
    *
    * @return UserTrainingStatusInfo The UserTrainingStatusInfo
    */
    public function setCompletionDateTime($val)
    {
        $this->_propDict["completionDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * Display name of the assigned training.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name of the assigned training.
    *
    * @param string $val The value of the displayName
    *
    * @return UserTrainingStatusInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the trainingStatus
    * Status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
    *
    * @return TrainingStatus|null The trainingStatus
    */
    public function getTrainingStatus()
    {
        if (array_key_exists("trainingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["trainingStatus"], "\Beta\Microsoft\Graph\Model\TrainingStatus") || is_null($this->_propDict["trainingStatus"])) {
                return $this->_propDict["trainingStatus"];
            } else {
                $this->_propDict["trainingStatus"] = new TrainingStatus($this->_propDict["trainingStatus"]);
                return $this->_propDict["trainingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingStatus
    * Status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
    *
    * @param TrainingStatus $val The value to assign to the trainingStatus
    *
    * @return UserTrainingStatusInfo The UserTrainingStatusInfo
    */
    public function setTrainingStatus($val)
    {
        $this->_propDict["trainingStatus"] = $val;
         return $this;
    }
}
