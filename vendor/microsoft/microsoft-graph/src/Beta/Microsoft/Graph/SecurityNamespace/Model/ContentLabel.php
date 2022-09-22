<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentLabel File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* ContentLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentLabel extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the assignmentMethod
    * Describes whether the label was applied by an automated (standard) process or a person (privileged).
    *
    * @return AssignmentMethod|null The assignmentMethod
    */
    public function getAssignmentMethod()
    {
        if (array_key_exists("assignmentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentMethod"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AssignmentMethod") || is_null($this->_propDict["assignmentMethod"])) {
                return $this->_propDict["assignmentMethod"];
            } else {
                $this->_propDict["assignmentMethod"] = new AssignmentMethod($this->_propDict["assignmentMethod"]);
                return $this->_propDict["assignmentMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentMethod
    * Describes whether the label was applied by an automated (standard) process or a person (privileged).
    *
    * @param AssignmentMethod $val The value to assign to the assignmentMethod
    *
    * @return ContentLabel The ContentLabel
    */
    public function setAssignmentMethod($val)
    {
        $this->_propDict["assignmentMethod"] = $val;
         return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ContentLabel The ContentLabel
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the sensitivityLabelId
    *
    * @return string|null The sensitivityLabelId
    */
    public function getSensitivityLabelId()
    {
        if (array_key_exists("sensitivityLabelId", $this->_propDict)) {
            return $this->_propDict["sensitivityLabelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitivityLabelId
    *
    * @param string $val The value of the sensitivityLabelId
    *
    * @return ContentLabel
    */
    public function setSensitivityLabelId($val)
    {
        $this->_propDict["sensitivityLabelId"] = $val;
        return $this;
    }
}
