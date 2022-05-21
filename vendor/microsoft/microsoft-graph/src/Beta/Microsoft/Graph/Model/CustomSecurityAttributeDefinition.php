<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomSecurityAttributeDefinition File
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
* CustomSecurityAttributeDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomSecurityAttributeDefinition extends Entity
{
    /**
    * Gets the attributeSet
    * Name of the attribute set. Case insensitive.
    *
    * @return string|null The attributeSet
    */
    public function getAttributeSet()
    {
        if (array_key_exists("attributeSet", $this->_propDict)) {
            return $this->_propDict["attributeSet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attributeSet
    * Name of the attribute set. Case insensitive.
    *
    * @param string $val The attributeSet
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setAttributeSet($val)
    {
        $this->_propDict["attributeSet"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
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
    * Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
    *
    * @param string $val The description
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the isCollection
    * Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
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
    * Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
    *
    * @param bool $val The isCollection
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setIsCollection($val)
    {
        $this->_propDict["isCollection"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSearchable
    * Indicates whether custom security attribute values will be indexed for searching on objects that are assigned attribute values. Cannot be changed later.
    *
    * @return bool|null The isSearchable
    */
    public function getIsSearchable()
    {
        if (array_key_exists("isSearchable", $this->_propDict)) {
            return $this->_propDict["isSearchable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSearchable
    * Indicates whether custom security attribute values will be indexed for searching on objects that are assigned attribute values. Cannot be changed later.
    *
    * @param bool $val The isSearchable
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setIsSearchable($val)
    {
        $this->_propDict["isSearchable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the name
    * Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
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
    * Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
    *
    * @param string $val The name
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Specifies whether the custom security attribute is active or deactivated. Acceptable values are Available and Deprecated. Can be changed later.
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    * Specifies whether the custom security attribute is active or deactivated. Acceptable values are Available and Deprecated. Can be changed later.
    *
    * @param string $val The status
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * Data type for the custom security attribute values. Supported types are Boolean, Integer, and String. Cannot be changed later.
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
    * Data type for the custom security attribute values. Supported types are Boolean, Integer, and String. Cannot be changed later.
    *
    * @param string $val The type
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the usePreDefinedValuesOnly
    * Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
    *
    * @return bool|null The usePreDefinedValuesOnly
    */
    public function getUsePreDefinedValuesOnly()
    {
        if (array_key_exists("usePreDefinedValuesOnly", $this->_propDict)) {
            return $this->_propDict["usePreDefinedValuesOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usePreDefinedValuesOnly
    * Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
    *
    * @param bool $val The usePreDefinedValuesOnly
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setUsePreDefinedValuesOnly($val)
    {
        $this->_propDict["usePreDefinedValuesOnly"] = boolval($val);
        return $this;
    }


     /**
     * Gets the allowedValues
    * Values that are predefined for this custom security attribute.This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
     *
     * @return array|null The allowedValues
     */
    public function getAllowedValues()
    {
        if (array_key_exists("allowedValues", $this->_propDict)) {
           return $this->_propDict["allowedValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedValues
    * Values that are predefined for this custom security attribute.This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
    *
    * @param AllowedValue[] $val The allowedValues
    *
    * @return CustomSecurityAttributeDefinition
    */
    public function setAllowedValues($val)
    {
        $this->_propDict["allowedValues"] = $val;
        return $this;
    }

}
