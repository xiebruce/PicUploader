<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceChange File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* ComplianceChange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComplianceChange extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdDateTime
    * The date and time when a compliance change was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time when a compliance change was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ComplianceChange
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the isRevoked
    * True indicates that a compliance change is revoked, preventing further application. Revoking a compliance change is a final action.
    *
    * @return bool|null The isRevoked
    */
    public function getIsRevoked()
    {
        if (array_key_exists("isRevoked", $this->_propDict)) {
            return $this->_propDict["isRevoked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRevoked
    * True indicates that a compliance change is revoked, preventing further application. Revoking a compliance change is a final action.
    *
    * @param bool $val The isRevoked
    *
    * @return ComplianceChange
    */
    public function setIsRevoked($val)
    {
        $this->_propDict["isRevoked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the revokedDateTime
    * The date and time when the compliance change was revoked.
    *
    * @return \DateTime|null The revokedDateTime
    */
    public function getRevokedDateTime()
    {
        if (array_key_exists("revokedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["revokedDateTime"], "\DateTime") || is_null($this->_propDict["revokedDateTime"])) {
                return $this->_propDict["revokedDateTime"];
            } else {
                $this->_propDict["revokedDateTime"] = new \DateTime($this->_propDict["revokedDateTime"]);
                return $this->_propDict["revokedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the revokedDateTime
    * The date and time when the compliance change was revoked.
    *
    * @param \DateTime $val The revokedDateTime
    *
    * @return ComplianceChange
    */
    public function setRevokedDateTime($val)
    {
        $this->_propDict["revokedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the updatePolicy
    * The policy this compliance change is a member of.
    *
    * @return UpdatePolicy|null The updatePolicy
    */
    public function getUpdatePolicy()
    {
        if (array_key_exists("updatePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["updatePolicy"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\UpdatePolicy") || is_null($this->_propDict["updatePolicy"])) {
                return $this->_propDict["updatePolicy"];
            } else {
                $this->_propDict["updatePolicy"] = new UpdatePolicy($this->_propDict["updatePolicy"]);
                return $this->_propDict["updatePolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the updatePolicy
    * The policy this compliance change is a member of.
    *
    * @param UpdatePolicy $val The updatePolicy
    *
    * @return ComplianceChange
    */
    public function setUpdatePolicy($val)
    {
        $this->_propDict["updatePolicy"] = $val;
        return $this;
    }

}
