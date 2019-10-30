<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Permission File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Permission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Permission extends Entity
{
    /**
    * Gets the grantedTo
    * For user type permissions, the details of the users &amp; applications for this permission. Read-only.
    *
    * @return IdentitySet The grantedTo
    */
    public function getGrantedTo()
    {
        if (array_key_exists("grantedTo", $this->_propDict)) {
            if (is_a($this->_propDict["grantedTo"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["grantedTo"];
            } else {
                $this->_propDict["grantedTo"] = new IdentitySet($this->_propDict["grantedTo"]);
                return $this->_propDict["grantedTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grantedTo
    * For user type permissions, the details of the users &amp; applications for this permission. Read-only.
    *
    * @param IdentitySet $val The grantedTo
    *
    * @return Permission
    */
    public function setGrantedTo($val)
    {
        $this->_propDict["grantedTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the inheritedFrom
    * Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
    *
    * @return ItemReference The inheritedFrom
    */
    public function getInheritedFrom()
    {
        if (array_key_exists("inheritedFrom", $this->_propDict)) {
            if (is_a($this->_propDict["inheritedFrom"], "Microsoft\Graph\Model\ItemReference")) {
                return $this->_propDict["inheritedFrom"];
            } else {
                $this->_propDict["inheritedFrom"] = new ItemReference($this->_propDict["inheritedFrom"]);
                return $this->_propDict["inheritedFrom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inheritedFrom
    * Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
    *
    * @param ItemReference $val The inheritedFrom
    *
    * @return Permission
    */
    public function setInheritedFrom($val)
    {
        $this->_propDict["inheritedFrom"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitation
    * Details of any associated sharing invitation for this permission. Read-only.
    *
    * @return SharingInvitation The invitation
    */
    public function getInvitation()
    {
        if (array_key_exists("invitation", $this->_propDict)) {
            if (is_a($this->_propDict["invitation"], "Microsoft\Graph\Model\SharingInvitation")) {
                return $this->_propDict["invitation"];
            } else {
                $this->_propDict["invitation"] = new SharingInvitation($this->_propDict["invitation"]);
                return $this->_propDict["invitation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invitation
    * Details of any associated sharing invitation for this permission. Read-only.
    *
    * @param SharingInvitation $val The invitation
    *
    * @return Permission
    */
    public function setInvitation($val)
    {
        $this->_propDict["invitation"] = $val;
        return $this;
    }
    
    /**
    * Gets the link
    * Provides the link details of the current permission, if it is a link type permissions. Read-only.
    *
    * @return SharingLink The link
    */
    public function getLink()
    {
        if (array_key_exists("link", $this->_propDict)) {
            if (is_a($this->_propDict["link"], "Microsoft\Graph\Model\SharingLink")) {
                return $this->_propDict["link"];
            } else {
                $this->_propDict["link"] = new SharingLink($this->_propDict["link"]);
                return $this->_propDict["link"];
            }
        }
        return null;
    }
    
    /**
    * Sets the link
    * Provides the link details of the current permission, if it is a link type permissions. Read-only.
    *
    * @param SharingLink $val The link
    *
    * @return Permission
    */
    public function setLink($val)
    {
        $this->_propDict["link"] = $val;
        return $this;
    }
    
    /**
    * Gets the roles
    * The type of permission, e.g. read. See below for the full list of roles. Read-only.
    *
    * @return string The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            return $this->_propDict["roles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roles
    * The type of permission, e.g. read. See below for the full list of roles. Read-only.
    *
    * @param string $val The roles
    *
    * @return Permission
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }
    
    /**
    * Gets the shareId
    * A unique token that can be used to access this shared item via the **shares** API. Read-only.
    *
    * @return string The shareId
    */
    public function getShareId()
    {
        if (array_key_exists("shareId", $this->_propDict)) {
            return $this->_propDict["shareId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shareId
    * A unique token that can be used to access this shared item via the **shares** API. Read-only.
    *
    * @param string $val The shareId
    *
    * @return Permission
    */
    public function setShareId($val)
    {
        $this->_propDict["shareId"] = $val;
        return $this;
    }
    
}