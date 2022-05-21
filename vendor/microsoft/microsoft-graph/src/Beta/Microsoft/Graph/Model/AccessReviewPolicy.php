<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewPolicy File
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
* AccessReviewPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewPolicy extends Entity
{
    /**
    * Gets the description
    * Description for this policy. Read-only.
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
    * Description for this policy. Read-only.
    *
    * @param string $val The description
    *
    * @return AccessReviewPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name for this policy. Read-only.
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
    * Display name for this policy. Read-only.
    *
    * @param string $val The displayName
    *
    * @return AccessReviewPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isGroupOwnerManagementEnabled
    * If true, group owners can create and manage access reviews on groups they own.
    *
    * @return bool|null The isGroupOwnerManagementEnabled
    */
    public function getIsGroupOwnerManagementEnabled()
    {
        if (array_key_exists("isGroupOwnerManagementEnabled", $this->_propDict)) {
            return $this->_propDict["isGroupOwnerManagementEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isGroupOwnerManagementEnabled
    * If true, group owners can create and manage access reviews on groups they own.
    *
    * @param bool $val The isGroupOwnerManagementEnabled
    *
    * @return AccessReviewPolicy
    */
    public function setIsGroupOwnerManagementEnabled($val)
    {
        $this->_propDict["isGroupOwnerManagementEnabled"] = boolval($val);
        return $this;
    }

}
