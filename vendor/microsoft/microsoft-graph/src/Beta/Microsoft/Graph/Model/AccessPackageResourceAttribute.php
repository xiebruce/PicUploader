<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceAttribute File
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
* AccessPackageResourceAttribute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceAttribute extends Entity
{

    /**
    * Gets the attributeDestination
    * Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore object type.
    *
    * @return AccessPackageResourceAttributeDestination|null The attributeDestination
    */
    public function getAttributeDestination()
    {
        if (array_key_exists("attributeDestination", $this->_propDict)) {
            if (is_a($this->_propDict["attributeDestination"], "\Beta\Microsoft\Graph\Model\AccessPackageResourceAttributeDestination") || is_null($this->_propDict["attributeDestination"])) {
                return $this->_propDict["attributeDestination"];
            } else {
                $this->_propDict["attributeDestination"] = new AccessPackageResourceAttributeDestination($this->_propDict["attributeDestination"]);
                return $this->_propDict["attributeDestination"];
            }
        }
        return null;
    }

    /**
    * Sets the attributeDestination
    * Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore object type.
    *
    * @param AccessPackageResourceAttributeDestination $val The value to assign to the attributeDestination
    *
    * @return AccessPackageResourceAttribute The AccessPackageResourceAttribute
    */
    public function setAttributeDestination($val)
    {
        $this->_propDict["attributeDestination"] = $val;
         return $this;
    }
    /**
    * Gets the attributeName
    * The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension_2b676109c7c74ae2b41549205f1947ed_personalTitle.
    *
    * @return string|null The attributeName
    */
    public function getAttributeName()
    {
        if (array_key_exists("attributeName", $this->_propDict)) {
            return $this->_propDict["attributeName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attributeName
    * The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension_2b676109c7c74ae2b41549205f1947ed_personalTitle.
    *
    * @param string $val The value of the attributeName
    *
    * @return AccessPackageResourceAttribute
    */
    public function setAttributeName($val)
    {
        $this->_propDict["attributeName"] = $val;
        return $this;
    }

    /**
    * Gets the attributeSource
    * Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion object type.
    *
    * @return AccessPackageResourceAttributeSource|null The attributeSource
    */
    public function getAttributeSource()
    {
        if (array_key_exists("attributeSource", $this->_propDict)) {
            if (is_a($this->_propDict["attributeSource"], "\Beta\Microsoft\Graph\Model\AccessPackageResourceAttributeSource") || is_null($this->_propDict["attributeSource"])) {
                return $this->_propDict["attributeSource"];
            } else {
                $this->_propDict["attributeSource"] = new AccessPackageResourceAttributeSource($this->_propDict["attributeSource"]);
                return $this->_propDict["attributeSource"];
            }
        }
        return null;
    }

    /**
    * Sets the attributeSource
    * Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion object type.
    *
    * @param AccessPackageResourceAttributeSource $val The value to assign to the attributeSource
    *
    * @return AccessPackageResourceAttribute The AccessPackageResourceAttribute
    */
    public function setAttributeSource($val)
    {
        $this->_propDict["attributeSource"] = $val;
         return $this;
    }
    /**
    * Gets the id
    * Unique identifier for the attribute on the access package resource. Read-only.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique identifier for the attribute on the access package resource. Read-only.
    *
    * @param string $val The value of the id
    *
    * @return AccessPackageResourceAttribute
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isEditable
    * Specifies whether or not an existing attribute value can be edited by the requester.
    *
    * @return bool|null The isEditable
    */
    public function getIsEditable()
    {
        if (array_key_exists("isEditable", $this->_propDict)) {
            return $this->_propDict["isEditable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEditable
    * Specifies whether or not an existing attribute value can be edited by the requester.
    *
    * @param bool $val The value of the isEditable
    *
    * @return AccessPackageResourceAttribute
    */
    public function setIsEditable($val)
    {
        $this->_propDict["isEditable"] = $val;
        return $this;
    }
    /**
    * Gets the isPersistedOnAssignmentRemoval
    * Specifies whether the attribute will remain in the end system after an assignment ends.
    *
    * @return bool|null The isPersistedOnAssignmentRemoval
    */
    public function getIsPersistedOnAssignmentRemoval()
    {
        if (array_key_exists("isPersistedOnAssignmentRemoval", $this->_propDict)) {
            return $this->_propDict["isPersistedOnAssignmentRemoval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPersistedOnAssignmentRemoval
    * Specifies whether the attribute will remain in the end system after an assignment ends.
    *
    * @param bool $val The value of the isPersistedOnAssignmentRemoval
    *
    * @return AccessPackageResourceAttribute
    */
    public function setIsPersistedOnAssignmentRemoval($val)
    {
        $this->_propDict["isPersistedOnAssignmentRemoval"] = $val;
        return $this;
    }
}
