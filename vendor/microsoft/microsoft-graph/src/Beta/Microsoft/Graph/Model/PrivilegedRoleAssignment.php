<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRoleAssignment File
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
* PrivilegedRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRoleAssignment extends Entity
{
    /**
    * Gets the expirationDateTime
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
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return PrivilegedRoleAssignment
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the isElevated
    *
    * @return bool|null The isElevated
    */
    public function getIsElevated()
    {
        if (array_key_exists("isElevated", $this->_propDict)) {
            return $this->_propDict["isElevated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isElevated
    *
    * @param bool $val The isElevated
    *
    * @return PrivilegedRoleAssignment
    */
    public function setIsElevated($val)
    {
        $this->_propDict["isElevated"] = boolval($val);
        return $this;
    }

    /**
    * Gets the resultMessage
    *
    * @return string|null The resultMessage
    */
    public function getResultMessage()
    {
        if (array_key_exists("resultMessage", $this->_propDict)) {
            return $this->_propDict["resultMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resultMessage
    *
    * @param string $val The resultMessage
    *
    * @return PrivilegedRoleAssignment
    */
    public function setResultMessage($val)
    {
        $this->_propDict["resultMessage"] = $val;
        return $this;
    }

    /**
    * Gets the roleId
    *
    * @return string|null The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleId
    *
    * @param string $val The roleId
    *
    * @return PrivilegedRoleAssignment
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return PrivilegedRoleAssignment
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the roleInfo
    *
    * @return PrivilegedRole|null The roleInfo
    */
    public function getRoleInfo()
    {
        if (array_key_exists("roleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["roleInfo"], "\Beta\Microsoft\Graph\Model\PrivilegedRole") || is_null($this->_propDict["roleInfo"])) {
                return $this->_propDict["roleInfo"];
            } else {
                $this->_propDict["roleInfo"] = new PrivilegedRole($this->_propDict["roleInfo"]);
                return $this->_propDict["roleInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the roleInfo
    *
    * @param PrivilegedRole $val The roleInfo
    *
    * @return PrivilegedRoleAssignment
    */
    public function setRoleInfo($val)
    {
        $this->_propDict["roleInfo"] = $val;
        return $this;
    }

}
