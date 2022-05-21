<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityUserFlowAttribute File
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
* IdentityUserFlowAttribute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityUserFlowAttribute extends Entity
{
    /**
    * Gets the dataType
    * The data type of the user flow attribute. This cannot be modified after the custom user flow attribute is created. The supported values for dataType are: string , boolean , int64 , stringCollection , dateTime.
    *
    * @return IdentityUserFlowAttributeDataType|null The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            if (is_a($this->_propDict["dataType"], "\Microsoft\Graph\Model\IdentityUserFlowAttributeDataType") || is_null($this->_propDict["dataType"])) {
                return $this->_propDict["dataType"];
            } else {
                $this->_propDict["dataType"] = new IdentityUserFlowAttributeDataType($this->_propDict["dataType"]);
                return $this->_propDict["dataType"];
            }
        }
        return null;
    }

    /**
    * Sets the dataType
    * The data type of the user flow attribute. This cannot be modified after the custom user flow attribute is created. The supported values for dataType are: string , boolean , int64 , stringCollection , dateTime.
    *
    * @param IdentityUserFlowAttributeDataType $val The dataType
    *
    * @return IdentityUserFlowAttribute
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the user flow attribute that's shown to the user at the time of sign-up.
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
    * The description of the user flow attribute that's shown to the user at the time of sign-up.
    *
    * @param string $val The description
    *
    * @return IdentityUserFlowAttribute
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the user flow attribute.
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
    * The display name of the user flow attribute.
    *
    * @param string $val The displayName
    *
    * @return IdentityUserFlowAttribute
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the userFlowAttributeType
    * The type of the user flow attribute. This is a read-only attribute that is automatically set. Depending on the type of attribute, the values for this property will be builtIn, custom, or required.
    *
    * @return IdentityUserFlowAttributeType|null The userFlowAttributeType
    */
    public function getUserFlowAttributeType()
    {
        if (array_key_exists("userFlowAttributeType", $this->_propDict)) {
            if (is_a($this->_propDict["userFlowAttributeType"], "\Microsoft\Graph\Model\IdentityUserFlowAttributeType") || is_null($this->_propDict["userFlowAttributeType"])) {
                return $this->_propDict["userFlowAttributeType"];
            } else {
                $this->_propDict["userFlowAttributeType"] = new IdentityUserFlowAttributeType($this->_propDict["userFlowAttributeType"]);
                return $this->_propDict["userFlowAttributeType"];
            }
        }
        return null;
    }

    /**
    * Sets the userFlowAttributeType
    * The type of the user flow attribute. This is a read-only attribute that is automatically set. Depending on the type of attribute, the values for this property will be builtIn, custom, or required.
    *
    * @param IdentityUserFlowAttributeType $val The userFlowAttributeType
    *
    * @return IdentityUserFlowAttribute
    */
    public function setUserFlowAttributeType($val)
    {
        $this->_propDict["userFlowAttributeType"] = $val;
        return $this;
    }

}
