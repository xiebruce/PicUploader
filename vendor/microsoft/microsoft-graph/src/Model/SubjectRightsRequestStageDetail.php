<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequestStageDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SubjectRightsRequestStageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequestStageDetail extends Entity
{

    /**
    * Gets the error
    * Describes the error, if any, for the current stage.
    *
    * @return PublicError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\PublicError") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * Describes the error, if any, for the current stage.
    *
    * @param PublicError $val The value to assign to the error
    *
    * @return SubjectRightsRequestStageDetail The SubjectRightsRequestStageDetail
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }

    /**
    * Gets the stage
    * The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
    *
    * @return SubjectRightsRequestStage|null The stage
    */
    public function getStage()
    {
        if (array_key_exists("stage", $this->_propDict)) {
            if (is_a($this->_propDict["stage"], "\Microsoft\Graph\Model\SubjectRightsRequestStage") || is_null($this->_propDict["stage"])) {
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
    * The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
    *
    * @param SubjectRightsRequestStage $val The value to assign to the stage
    *
    * @return SubjectRightsRequestStageDetail The SubjectRightsRequestStageDetail
    */
    public function setStage($val)
    {
        $this->_propDict["stage"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
    *
    * @return SubjectRightsRequestStageStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\SubjectRightsRequestStageStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SubjectRightsRequestStageStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
    *
    * @param SubjectRightsRequestStageStatus $val The value to assign to the status
    *
    * @return SubjectRightsRequestStageDetail The SubjectRightsRequestStageDetail
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
