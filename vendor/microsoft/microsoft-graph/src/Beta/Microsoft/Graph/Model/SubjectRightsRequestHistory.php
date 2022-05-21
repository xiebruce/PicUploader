<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequestHistory File
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
* SubjectRightsRequestHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequestHistory extends Entity
{

    /**
    * Gets the changedBy
    * Identity of the user who changed the  subject rights request.
    *
    * @return IdentitySet|null The changedBy
    */
    public function getChangedBy()
    {
        if (array_key_exists("changedBy", $this->_propDict)) {
            if (is_a($this->_propDict["changedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["changedBy"])) {
                return $this->_propDict["changedBy"];
            } else {
                $this->_propDict["changedBy"] = new IdentitySet($this->_propDict["changedBy"]);
                return $this->_propDict["changedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the changedBy
    * Identity of the user who changed the  subject rights request.
    *
    * @param IdentitySet $val The value to assign to the changedBy
    *
    * @return SubjectRightsRequestHistory The SubjectRightsRequestHistory
    */
    public function setChangedBy($val)
    {
        $this->_propDict["changedBy"] = $val;
         return $this;
    }

    /**
    * Gets the eventDateTime
    * Data and time when the entity was changed.
    *
    * @return \DateTime|null The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime") || is_null($this->_propDict["eventDateTime"])) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventDateTime
    * Data and time when the entity was changed.
    *
    * @param \DateTime $val The value to assign to the eventDateTime
    *
    * @return SubjectRightsRequestHistory The SubjectRightsRequestHistory
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the stage
    * The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
    *
    * @return SubjectRightsRequestStage|null The stage
    */
    public function getStage()
    {
        if (array_key_exists("stage", $this->_propDict)) {
            if (is_a($this->_propDict["stage"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestStage") || is_null($this->_propDict["stage"])) {
                return $this->_propDict["stage"];
            } else {
                $this->_propDict["stage"] = new SubjectRightsRequestStage($this->_propDict["stage"]);
                return $this->_propDict["stage"];
            }
        }
        return null;
    }

    /**
    * Sets the stage
    * The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
    *
    * @param SubjectRightsRequestStage $val The value to assign to the stage
    *
    * @return SubjectRightsRequestHistory The SubjectRightsRequestHistory
    */
    public function setStage($val)
    {
        $this->_propDict["stage"] = $val;
         return $this;
    }

    /**
    * Gets the stageStatus
    * The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
    *
    * @return SubjectRightsRequestStageStatus|null The stageStatus
    */
    public function getStageStatus()
    {
        if (array_key_exists("stageStatus", $this->_propDict)) {
            if (is_a($this->_propDict["stageStatus"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestStageStatus") || is_null($this->_propDict["stageStatus"])) {
                return $this->_propDict["stageStatus"];
            } else {
                $this->_propDict["stageStatus"] = new SubjectRightsRequestStageStatus($this->_propDict["stageStatus"]);
                return $this->_propDict["stageStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the stageStatus
    * The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
    *
    * @param SubjectRightsRequestStageStatus $val The value to assign to the stageStatus
    *
    * @return SubjectRightsRequestHistory The SubjectRightsRequestHistory
    */
    public function setStageStatus($val)
    {
        $this->_propDict["stageStatus"] = $val;
         return $this;
    }
    /**
    * Gets the type
    * Type of history.
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * Type of history.
    *
    * @param string $val The value of the type
    *
    * @return SubjectRightsRequestHistory
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
