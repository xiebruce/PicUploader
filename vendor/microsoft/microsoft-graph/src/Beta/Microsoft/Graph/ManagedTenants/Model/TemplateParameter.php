<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemplateParameter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* TemplateParameter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemplateParameter extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the description
    * The description for the template parameter. Optional. Read-only.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description for the template parameter. Optional. Read-only.
    *
    * @param string $val The value of the description
    *
    * @return TemplateParameter
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name for the template parameter. Required. Read-only.
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
    * The display name for the template parameter. Required. Read-only.
    *
    * @param string $val The value of the displayName
    *
    * @return TemplateParameter
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the jsonAllowedValues
    * The allowed values for the template parameter represented by a serialized string of JSON. Optional. Read-only.
    *
    * @return string|null The jsonAllowedValues
    */
    public function getJsonAllowedValues()
    {
        if (array_key_exists("jsonAllowedValues", $this->_propDict)) {
            return $this->_propDict["jsonAllowedValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the jsonAllowedValues
    * The allowed values for the template parameter represented by a serialized string of JSON. Optional. Read-only.
    *
    * @param string $val The value of the jsonAllowedValues
    *
    * @return TemplateParameter
    */
    public function setJsonAllowedValues($val)
    {
        $this->_propDict["jsonAllowedValues"] = $val;
        return $this;
    }
    /**
    * Gets the jsonDefaultValue
    * The default value for the template parameter represented by a serialized string of JSON. Required. Read-only.
    *
    * @return string|null The jsonDefaultValue
    */
    public function getJsonDefaultValue()
    {
        if (array_key_exists("jsonDefaultValue", $this->_propDict)) {
            return $this->_propDict["jsonDefaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the jsonDefaultValue
    * The default value for the template parameter represented by a serialized string of JSON. Required. Read-only.
    *
    * @param string $val The value of the jsonDefaultValue
    *
    * @return TemplateParameter
    */
    public function setJsonDefaultValue($val)
    {
        $this->_propDict["jsonDefaultValue"] = $val;
        return $this;
    }

    /**
    * Gets the valueType
    * The data type for the template parameter.. Possible values are: string, integer, boolean, guid, stringCollection, integerCollection, booleanCollection, guidCollection, unknownFutureValue. Required. Read-only.
    *
    * @return ManagementParameterValueType|null The valueType
    */
    public function getValueType()
    {
        if (array_key_exists("valueType", $this->_propDict)) {
            if (is_a($this->_propDict["valueType"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementParameterValueType") || is_null($this->_propDict["valueType"])) {
                return $this->_propDict["valueType"];
            } else {
                $this->_propDict["valueType"] = new ManagementParameterValueType($this->_propDict["valueType"]);
                return $this->_propDict["valueType"];
            }
        }
        return null;
    }

    /**
    * Sets the valueType
    * The data type for the template parameter.. Possible values are: string, integer, boolean, guid, stringCollection, integerCollection, booleanCollection, guidCollection, unknownFutureValue. Required. Read-only.
    *
    * @param ManagementParameterValueType $val The value to assign to the valueType
    *
    * @return TemplateParameter The TemplateParameter
    */
    public function setValueType($val)
    {
        $this->_propDict["valueType"] = $val;
         return $this;
    }
}
