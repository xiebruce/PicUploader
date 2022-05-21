<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharePointIdentitySet File
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
* SharePointIdentitySet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharePointIdentitySet extends IdentitySet
{

    /**
    * Gets the group
    * The group associated with this action. Optional.
    *
    * @return Identity|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["group"])) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Identity($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    * The group associated with this action. Optional.
    *
    * @param Identity $val The value to assign to the group
    *
    * @return SharePointIdentitySet The SharePointIdentitySet
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
         return $this;
    }

    /**
    * Gets the siteGroup
    * The SharePoint group associated with this action. Optional.
    *
    * @return SharePointIdentity|null The siteGroup
    */
    public function getSiteGroup()
    {
        if (array_key_exists("siteGroup", $this->_propDict)) {
            if (is_a($this->_propDict["siteGroup"], "\Beta\Microsoft\Graph\Model\SharePointIdentity") || is_null($this->_propDict["siteGroup"])) {
                return $this->_propDict["siteGroup"];
            } else {
                $this->_propDict["siteGroup"] = new SharePointIdentity($this->_propDict["siteGroup"]);
                return $this->_propDict["siteGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the siteGroup
    * The SharePoint group associated with this action. Optional.
    *
    * @param SharePointIdentity $val The value to assign to the siteGroup
    *
    * @return SharePointIdentitySet The SharePointIdentitySet
    */
    public function setSiteGroup($val)
    {
        $this->_propDict["siteGroup"] = $val;
         return $this;
    }

    /**
    * Gets the siteUser
    * The SharePoint user associated with this action. Optional.
    *
    * @return SharePointIdentity|null The siteUser
    */
    public function getSiteUser()
    {
        if (array_key_exists("siteUser", $this->_propDict)) {
            if (is_a($this->_propDict["siteUser"], "\Beta\Microsoft\Graph\Model\SharePointIdentity") || is_null($this->_propDict["siteUser"])) {
                return $this->_propDict["siteUser"];
            } else {
                $this->_propDict["siteUser"] = new SharePointIdentity($this->_propDict["siteUser"]);
                return $this->_propDict["siteUser"];
            }
        }
        return null;
    }

    /**
    * Sets the siteUser
    * The SharePoint user associated with this action. Optional.
    *
    * @param SharePointIdentity $val The value to assign to the siteUser
    *
    * @return SharePointIdentitySet The SharePointIdentitySet
    */
    public function setSiteUser($val)
    {
        $this->_propDict["siteUser"] = $val;
         return $this;
    }
}
