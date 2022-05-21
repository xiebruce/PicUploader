<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRbacResourceNamespace File
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
* UnifiedRbacResourceNamespace class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRbacResourceNamespace extends Entity
{
    /**
    * Gets the name
    * Name of the resource namespace. Typically, the same name as the id property, such as microsoft.aad.b2c. Required. Supports $filter (eq, startsWith).
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
    * Name of the resource namespace. Typically, the same name as the id property, such as microsoft.aad.b2c. Required. Supports $filter (eq, startsWith).
    *
    * @param string $val The name
    *
    * @return UnifiedRbacResourceNamespace
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }


     /**
     * Gets the resourceActions
    * Operations that an authorized principal are allowed to perform.
     *
     * @return array|null The resourceActions
     */
    public function getResourceActions()
    {
        if (array_key_exists("resourceActions", $this->_propDict)) {
           return $this->_propDict["resourceActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceActions
    * Operations that an authorized principal are allowed to perform.
    *
    * @param UnifiedRbacResourceAction[] $val The resourceActions
    *
    * @return UnifiedRbacResourceNamespace
    */
    public function setResourceActions($val)
    {
        $this->_propDict["resourceActions"] = $val;
        return $this;
    }

}
