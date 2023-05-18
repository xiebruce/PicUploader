<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SchemaExtension File
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
* SchemaExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SchemaExtension extends Entity
{
    /**
    * Gets the description
    * Description for the schema extension. Supports $filter (eq).
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
    * Description for the schema extension. Supports $filter (eq).
    *
    * @param string $val The description
    *
    * @return SchemaExtension
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the owner
    * The appId of the application that is the owner of the schema extension. The owner of the schema definition must be explicitly specified during the Create and Update operations, or it will be implied and auto-assigned by Azure AD as follows: In delegated access: The signed-in user must be the owner of the app that calls Microsoft Graph to create the schema extension definition.  If the signed-in user isn't the owner of the calling app, they must explicitly specify the owner property, and assign it the appId of an app that they own. In app-only access:  The owner property isn't required in the request body. Instead, the calling app is assigned ownership of the schema extension. So, for example, if creating a new schema extension definition using Graph Explorer, you must supply the owner property. Once set, this property is read-only and cannot be changed. Supports $filter (eq).
    *
    * @return string|null The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            return $this->_propDict["owner"];
        } else {
            return null;
        }
    }

    /**
    * Sets the owner
    * The appId of the application that is the owner of the schema extension. The owner of the schema definition must be explicitly specified during the Create and Update operations, or it will be implied and auto-assigned by Azure AD as follows: In delegated access: The signed-in user must be the owner of the app that calls Microsoft Graph to create the schema extension definition.  If the signed-in user isn't the owner of the calling app, they must explicitly specify the owner property, and assign it the appId of an app that they own. In app-only access:  The owner property isn't required in the request body. Instead, the calling app is assigned ownership of the schema extension. So, for example, if creating a new schema extension definition using Graph Explorer, you must supply the owner property. Once set, this property is read-only and cannot be changed. Supports $filter (eq).
    *
    * @param string $val The owner
    *
    * @return SchemaExtension
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }


     /**
     * Gets the schemaExtensionProperties
    * The collection of property names and types that make up the schema extension definition.
     *
     * @return array|null The schemaExtensionProperties
     */
    public function getSchemaExtensionProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
           return $this->_propDict["properties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schemaExtensionProperties
    * The collection of property names and types that make up the schema extension definition.
    *
    * @param ExtensionSchemaProperty[] $val The schemaExtensionProperties
    *
    * @return SchemaExtension
    */
    public function setSchemaExtensionProperties($val)
    {
        $this->_propDict["properties"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The lifecycle state of the schema extension. Possible states are InDevelopment, Available, and Deprecated. Automatically set to InDevelopment on creation. For more information about the possible state transitions and behaviors, see Schema extensions lifecycle. Supports $filter (eq).
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
    * The lifecycle state of the schema extension. Possible states are InDevelopment, Available, and Deprecated. Automatically set to InDevelopment on creation. For more information about the possible state transitions and behaviors, see Schema extensions lifecycle. Supports $filter (eq).
    *
    * @param string $val The status
    *
    * @return SchemaExtension
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the targetTypes
    * Set of Microsoft Graph types (that can support extensions) that the schema extension can be applied to. Select from administrativeUnit, contact, device, event, group, message, organization, post, todoTask, todoTaskList, or user.
    *
    * @return array|null The targetTypes
    */
    public function getTargetTypes()
    {
        if (array_key_exists("targetTypes", $this->_propDict)) {
            return $this->_propDict["targetTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetTypes
    * Set of Microsoft Graph types (that can support extensions) that the schema extension can be applied to. Select from administrativeUnit, contact, device, event, group, message, organization, post, todoTask, todoTaskList, or user.
    *
    * @param string[] $val The targetTypes
    *
    * @return SchemaExtension
    */
    public function setTargetTypes($val)
    {
        $this->_propDict["targetTypes"] = $val;
        return $this;
    }

}
