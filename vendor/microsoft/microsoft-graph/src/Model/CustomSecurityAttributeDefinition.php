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
namespace Microsoft\Graph\Model;

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
