<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRoleSummary File
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
* PrivilegedRoleSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRoleSummary extends Entity
{
    /**
    * Gets the elevatedCount
    *
    * @return int|null The elevatedCount
    */
    public function getElevatedCount()
    {
        if (array_key_exists("elevatedCount", $this->_propDict)) {
            return $this->_propDict["elevatedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the elevatedCount
    *
    * @param int $val The elevatedCount
    *
    * @return PrivilegedRoleSummary
    */
    public function setElevatedCount($val)
    {
        $this->_propDict["elevatedCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the managedCount
    *
    * @return int|null The managedCount
    */
    public function getManagedCount()
    {
        if (array_key_exists("managedCount", $this->_propDict)) {
            return $this->_propDict["managedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedCount
    *
    * @param int $val The managedCount
    *
    * @return PrivilegedRoleSummary
    */
    public function setManagedCount($val)
    {
        $this->_propDict["managedCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the mfaEnabled
    *
    * @return bool|null The mfaEnabled
    */
    public function getMfaEnabled()
    {
        if (array_key_exists("mfaEnabled", $this->_propDict)) {
            return $this->_propDict["mfaEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mfaEnabled
    *
    * @param bool $val The mfaEnabled
    *
    * @return PrivilegedRoleSummary
    */
    public function setMfaEnabled($val)
    {
        $this->_propDict["mfaEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the status
    *
    * @return RoleSummaryStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\RoleSummaryStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new RoleSummaryStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param RoleSummaryStatus $val The status
    *
    * @return PrivilegedRoleSummary
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the usersCount
    *
    * @return int|null The usersCount
    */
    public function getUsersCount()
    {
        if (array_key_exists("usersCount", $this->_propDict)) {
            return $this->_propDict["usersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usersCount
    *
    * @param int $val The usersCount
    *
    * @return PrivilegedRoleSummary
    */
    public function setUsersCount($val)
    {
        $this->_propDict["usersCount"] = intval($val);
        return $this;
    }

}
