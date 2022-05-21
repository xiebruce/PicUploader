<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitivityLabelAssignment File
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
* SensitivityLabelAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SensitivityLabelAssignment extends Entity
{

    /**
    * Gets the assignmentMethod
    * Indicates whether the label assignment is done automatically, as a standard, or a privileged operation. The possible values are: standard, privileged, auto, unknownFutureValue.
    *
    * @return SensitivityLabelAssignmentMethod|null The assignmentMethod
    */
    public function getAssignmentMethod()
    {
        if (array_key_exists("assignmentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentMethod"], "\Beta\Microsoft\Graph\Model\SensitivityLabelAssignmentMethod") || is_null($this->_propDict["assignmentMethod"])) {
                return $this->_propDict["assignmentMethod"];
            } else {
                $this->_propDict["assignmentMethod"] = new SensitivityLabelAssignmentMethod($this->_propDict["assignmentMethod"]);
                return $this->_propDict["assignmentMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentMethod
    * Indicates whether the label assignment is done automatically, as a standard, or a privileged operation. The possible values are: standard, privileged, auto, unknownFutureValue.
    *
    * @param SensitivityLabelAssignmentMethod $val The value to assign to the assignmentMethod
    *
    * @return SensitivityLabelAssignment The SensitivityLabelAssignment
    */
    public function setAssignmentMethod($val)
    {
        $this->_propDict["assignmentMethod"] = $val;
         return $this;
    }
    /**
    * Gets the sensitivityLabelId
    * The unique identifier for the sensitivity label assigned to the file.
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
    * The unique identifier for the sensitivity label assigned to the file.
    *
    * @param string $val The value of the sensitivityLabelId
    *
    * @return SensitivityLabelAssignment
    */
    public function setSensitivityLabelId($val)
    {
        $this->_propDict["sensitivityLabelId"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
    * The unique identifier for the tenant that hosts the file when this label is applied.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The unique identifier for the tenant that hosts the file when this label is applied.
    *
    * @param string $val The value of the tenantId
    *
    * @return SensitivityLabelAssignment
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
}
