<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Permission File
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
* Permission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Permission extends Entity
{
    /**
    * Gets the expirationDateTime
    * A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Permission
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the grantedTo
    *
    * @return IdentitySet|null The grantedTo
    */
    public function getGrantedTo()
    {
        if (array_key_exists("grantedTo", $this->_propDict)) {
            if (is_a($this->_propDict["grantedTo"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["grantedTo"])) {
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
     * Gets the grantedToIdentities
     *
     * @return array|null The grantedToIdentities
     */
    public function getGrantedToIdentities()
    {
        if (array_key_exists("grantedToIdentities", $this->_propDict)) {
           return $this->_propDict["grantedToIdentities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the grantedToIdentities
    *
    * @param IdentitySet[] $val The grantedToIdentities
    *
    * @return Permission
    */
    public function setGrantedToIdentities($val)
    {
        $this->_propDict["grantedToIdentities"] = $val;
        return $this;
    }


     /**
     * Gets the grantedToIdentitiesV2
    * For link type permissions, the details of the users to whom permission was granted. Read-only.
     *
     * @return array|null The grantedToIdentitiesV2
     */
    public function getGrantedToIdentitiesV2()
    {
        if (array_key_exists("grantedToIdentitiesV2", $this->_propDict)) {
           return $this->_propDict["grantedToIdentitiesV2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the grantedToIdentitiesV2
    * For link type permissions, the details of the users to whom permission was granted. Read-only.
    *
    * @param SharePointIdentitySet[] $val The grantedToIdentitiesV2
    *
    * @return Permission
    */
    public function setGrantedToIdentitiesV2($val)
    {
        $this->_propDict["grantedToIdentitiesV2"] = $val;
        return $this;
    }

    /**
    * Gets the grantedToV2
    * For user type permissions, the details of the users and applications for this permission. Read-only.
    *
    * @return SharePointIdentitySet|null The grantedToV2
    */
    public function getGrantedToV2()
    {
        if (array_key_exists("grantedToV2", $this->_propDict)) {
            if (is_a($this->_propDict["grantedToV2"], "\Microsoft\Graph\Model\SharePointIdentitySet") || is_null($this->_propDict["grantedToV2"])) {
                return $this->_propDict["grantedToV2"];
            } else {
                $this->_propDict["grantedToV2"] = new SharePointIdentitySet($this->_propDict["grantedToV2"]);
                return $this->_propDict["grantedToV2"];
            }
        }
        return null;
    }

    /**
    * Sets the grantedToV2
    * For user type permissions, the details of the users and applications for this permission. Read-only.
    *
    * @param SharePointIdentitySet $val The grantedToV2
    *
    * @return Permission
    */
    public function setGrantedToV2($val)
    {
        $this->_propDict["grantedToV2"] = $val;
        return $this;
    }

    /**
    * Gets the hasPassword
    * Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only..
    *
    * @return bool|null The hasPassword
    */
    public function getHasPassword()
    {
        if (array_key_exists("hasPassword", $this->_propDict)) {
            return $this->_propDict["hasPassword"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasPassword
    * Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only..
    *
    * @param bool $val The hasPassword
    *
    * @return Permission
    */
    public function setHasPassword($val)
    {
        $this->_propDict["hasPassword"] = boolval($val);
        return $this;
    }

    /**
    * Gets the inheritedFrom
    * Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
    *
    * @return ItemReference|null The inheritedFrom
    */
    public function getInheritedFrom()
    {
        if (array_key_exists("inheritedFrom", $this->_propDict)) {
            if (is_a($this->_propDict["inheritedFrom"], "\Microsoft\Graph\Model\ItemReference") || is_null($this->_propDict["inheritedFrom"])) {
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
    * @return SharingInvitation|null The invitation
    */
    public function getInvitation()
    {
        if (array_key_exists("invitation", $this->_propDict)) {
            if (is_a($this->_propDict["invitation"], "\Microsoft\Graph\Model\SharingInvitation") || is_null($this->_propDict["invitation"])) {
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
    * @return SharingLink|null The link
    */
    public function getLink()
    {
        if (array_key_exists("link", $this->_propDict)) {
            if (is_a($this->_propDict["link"], "\Microsoft\Graph\Model\SharingLink") || is_null($this->_propDict["link"])) {
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
    * The type of permission, for example, read. See below for the full list of roles. Read-only.
    *
    * @return array|null The roles
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
    * The type of permission, for example, read. See below for the full list of roles. Read-only.
    *
    * @param string[] $val The roles
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
    * @return string|null The shareId
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
