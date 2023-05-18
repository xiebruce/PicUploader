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
namespace Microsoft\Graph\Model;

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
    * Gets the authenticationContextId
    *
    * @return string|null The authenticationContextId
    */
    public function getAuthenticationContextId()
    {
        if (array_key_exists("authenticationContextId", $this->_propDict)) {
            return $this->_propDict["authenticationContextId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationContextId
    *
    * @param string $val The authenticationContextId
    *
    * @return UnifiedRbacResourceAction
    */
    public function setAuthenticationContextId($val)
    {
        $this->_propDict["authenticationContextId"] = $val;
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
    * @return UnifiedRbacResourceAction
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the isAuthenticationContextSettable
    *
    * @return bool|null The isAuthenticationContextSettable
    */
    public function getIsAuthenticationContextSettable()
    {
        if (array_key_exists("isAuthenticationContextSettable", $this->_propDict)) {
            return $this->_propDict["isAuthenticationContextSettable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAuthenticationContextSettable
    *
    * @param bool $val The isAuthenticationContextSettable
    *
    * @return UnifiedRbacResourceAction
    */
    public function setIsAuthenticationContextSettable($val)
    {
        $this->_propDict["isAuthenticationContextSettable"] = boolval($val);
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
    * @return UnifiedRbacResourceAction
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the resourceScopeId
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

}
