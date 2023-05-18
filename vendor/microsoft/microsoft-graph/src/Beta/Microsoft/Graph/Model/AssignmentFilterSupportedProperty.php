<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterSupportedProperty File
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
* AssignmentFilterSupportedProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterSupportedProperty extends Entity
{
    /**
    * Gets the dataType
    * The data type of the property.
    *
    * @return string|null The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            return $this->_propDict["dataType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataType
    * The data type of the property.
    *
    * @param string $val The value of the dataType
    *
    * @return AssignmentFilterSupportedProperty
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
        return $this;
    }
    /**
    * Gets the isCollection
    * Indicates whether the property is a collection type or not.
    *
    * @return bool|null The isCollection
    */
    public function getIsCollection()
    {
        if (array_key_exists("isCollection", $this->_propDict)) {
            return $this->_propDict["isCollection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCollection
    * Indicates whether the property is a collection type or not.
    *
    * @param bool $val The value of the isCollection
    *
    * @return AssignmentFilterSupportedProperty
    */
    public function setIsCollection($val)
    {
        $this->_propDict["isCollection"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * Name of the property.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the property.
    *
    * @param string $val The value of the name
    *
    * @return AssignmentFilterSupportedProperty
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the propertyRegexConstraint
    * Regex string to do validation on the property value.
    *
    * @return string|null The propertyRegexConstraint
    */
    public function getPropertyRegexConstraint()
    {
        if (array_key_exists("propertyRegexConstraint", $this->_propDict)) {
            return $this->_propDict["propertyRegexConstraint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyRegexConstraint
    * Regex string to do validation on the property value.
    *
    * @param string $val The value of the propertyRegexConstraint
    *
    * @return AssignmentFilterSupportedProperty
    */
    public function setPropertyRegexConstraint($val)
    {
        $this->_propDict["propertyRegexConstraint"] = $val;
        return $this;
    }

    /**
    * Gets the supportedOperators
    * List of all supported operators on this property.
    *
    * @return AssignmentFilterOperator|null The supportedOperators
    */
    public function getSupportedOperators()
    {
        if (array_key_exists("supportedOperators", $this->_propDict)) {
            if (is_a($this->_propDict["supportedOperators"], "\Beta\Microsoft\Graph\Model\AssignmentFilterOperator") || is_null($this->_propDict["supportedOperators"])) {
                return $this->_propDict["supportedOperators"];
            } else {
                $this->_propDict["supportedOperators"] = new AssignmentFilterOperator($this->_propDict["supportedOperators"]);
                return $this->_propDict["supportedOperators"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedOperators
    * List of all supported operators on this property.
    *
    * @param AssignmentFilterOperator $val The value to assign to the supportedOperators
    *
    * @return AssignmentFilterSupportedProperty The AssignmentFilterSupportedProperty
    */
    public function setSupportedOperators($val)
    {
        $this->_propDict["supportedOperators"] = $val;
         return $this;
    }
    /**
    * Gets the supportedValues
    * List of all supported values for this property, empty if everything is supported.
    *
    * @return string|null The supportedValues
    */
    public function getSupportedValues()
    {
        if (array_key_exists("supportedValues", $this->_propDict)) {
            return $this->_propDict["supportedValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedValues
    * List of all supported values for this property, empty if everything is supported.
    *
    * @param string $val The value of the supportedValues
    *
    * @return AssignmentFilterSupportedProperty
    */
    public function setSupportedValues($val)
    {
        $this->_propDict["supportedValues"] = $val;
        return $this;
    }
}
