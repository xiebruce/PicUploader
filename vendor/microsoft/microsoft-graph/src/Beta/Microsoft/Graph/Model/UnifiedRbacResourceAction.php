<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRbacResourceAction File
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
* UnifiedRbacResourceAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRbacResourceAction extends Entity
{
    /**
    * Gets the actionVerb
    * HTTP method for the action, such as DELETE, GET, PATCH, POST, PUT, or null. Supports $filter (eq) but not for null values.
    *
    * @return string|null The actionVerb
    */
    public function getActionVerb()
    {
        if (array_key_exists("actionVerb", $this->_propDict)) {
            return $this->_propDict["actionVerb"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionVerb
    * HTTP method for the action, such as DELETE, GET, PATCH, POST, PUT, or null. Supports $filter (eq) but not for null values.
    *
    * @param string $val The actionVerb
    *
    * @return UnifiedRbacResourceAction
    */
    public function setActionVerb($val)
    {
        $this->_propDict["actionVerb"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description for the action. Supports $filter (eq).
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
    * Description for the action. Supports $filter (eq).
    *
    * @param string $val The description
    *
    * @return UnifiedRbacResourceAction
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * Name for the action within the resource namespace, such as microsoft.insights/programs/update. Can include slash character (/). Case insensitive. Required. Supports $filter (eq).
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
    * Name for the action within the resource namespace, such as microsoft.insights/programs/update. Can include slash character (/). Case insensitive. Required. Supports $filter (eq).
    *
    * @param string $val The name
    *
    * @return UnifiedRbacResourceAction
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the resourceScopeId
    * Not implemented.
    *
    * @return string|null The resourceScopeId
    */
    public function getResourceScopeId()
    {
        if (array_key_exists("resourceScopeId", $this->_propDict)) {
            return $this->_propDict["resourceScopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceScopeId
    * Not implemented.
    *
    * @param string $val The resourceScopeId
    *
    * @return UnifiedRbacResourceAction
    */
    public function setResourceScopeId($val)
    {
        $this->_propDict["resourceScopeId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceScope
    *
    * @return UnifiedRbacResourceScope|null The resourceScope
    */
    public function getResourceScope()
    {
        if (array_key_exists("resourceScope", $this->_propDict)) {
            if (is_a($this->_propDict["resourceScope"], "\Beta\Microsoft\Graph\Model\UnifiedRbacResourceScope") || is_null($this->_propDict["resourceScope"])) {
                return $this->_propDict["resourceScope"];
            } else {
                $this->_propDict["resourceScope"] = new UnifiedRbacResourceScope($this->_propDict["resourceScope"]);
                return $this->_propDict["resourceScope"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceScope
    *
    * @param UnifiedRbacResourceScope $val The resourceScope
    *
    * @return UnifiedRbacResourceAction
    */
    public function setResourceScope($val)
    {
        $this->_propDict["resourceScope"] = $val;
        return $this;
    }

}
