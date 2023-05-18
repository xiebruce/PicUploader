<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionStageSetting File
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
* CustomExtensionStageSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionStageSetting extends Entity
{
    /**
    * Gets the stage
    * Indicates the stage of the access package assignment request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
    *
    * @return AccessPackageCustomExtensionStage|null The stage
    */
    public function getStage()
    {
        if (array_key_exists("stage", $this->_propDict)) {
            if (is_a($this->_propDict["stage"], "\Beta\Microsoft\Graph\Model\AccessPackageCustomExtensionStage") || is_null($this->_propDict["stage"])) {
                return $this->_propDict["stage"];
            } else {
                $this->_propDict["stage"] = new AccessPackageCustomExtensionStage($this->_propDict["stage"]);
                return $this->_propDict["stage"];
            }
        }
        return null;
    }

    /**
    * Sets the stage
    * Indicates the stage of the access package assignment request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
    *
    * @param AccessPackageCustomExtensionStage $val The stage
    *
    * @return CustomExtensionStageSetting
    */
    public function setStage($val)
    {
        $this->_propDict["stage"] = $val;
        return $this;
    }

    /**
    * Gets the customExtension
    * Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand.
    *
    * @return CustomCalloutExtension|null The customExtension
    */
    public function getCustomExtension()
    {
        if (array_key_exists("customExtension", $this->_propDict)) {
            if (is_a($this->_propDict["customExtension"], "\Beta\Microsoft\Graph\Model\CustomCalloutExtension") || is_null($this->_propDict["customExtension"])) {
                return $this->_propDict["customExtension"];
            } else {
                $this->_propDict["customExtension"] = new CustomCalloutExtension($this->_propDict["customExtension"]);
                return $this->_propDict["customExtension"];
            }
        }
        return null;
    }

    /**
    * Sets the customExtension
    * Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand.
    *
    * @param CustomCalloutExtension $val The customExtension
    *
    * @return CustomExtensionStageSetting
    */
    public function setCustomExtension($val)
    {
        $this->_propDict["customExtension"] = $val;
        return $this;
    }

}
