<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserMatchingSetting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;
/**
* UserMatchingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserMatchingSetting extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the matchTarget
    * The RefUserMatchTarget for matching a user from the source with an Azure Active Directory user object.
    *
    * @return UserMatchTargetReferenceValue|null The matchTarget
    */
    public function getMatchTarget()
    {
        if (array_key_exists("matchTarget", $this->_propDict)) {
            if (is_a($this->_propDict["matchTarget"], "\Beta\Microsoft\Graph\IndustryData\Model\UserMatchTargetReferenceValue") || is_null($this->_propDict["matchTarget"])) {
                return $this->_propDict["matchTarget"];
            } else {
                $this->_propDict["matchTarget"] = new UserMatchTargetReferenceValue($this->_propDict["matchTarget"]);
                return $this->_propDict["matchTarget"];
            }
        }
        return null;
    }

    /**
    * Sets the matchTarget
    * The RefUserMatchTarget for matching a user from the source with an Azure Active Directory user object.
    *
    * @param UserMatchTargetReferenceValue $val The value to assign to the matchTarget
    *
    * @return UserMatchingSetting The UserMatchingSetting
    */
    public function setMatchTarget($val)
    {
        $this->_propDict["matchTarget"] = $val;
         return $this;
    }
    /**
    * Gets the priorityOrder
    * The priority order to apply when a user has multiple RefRole codes assigned.
    *
    * @return int|null The priorityOrder
    */
    public function getPriorityOrder()
    {
        if (array_key_exists("priorityOrder", $this->_propDict)) {
            return $this->_propDict["priorityOrder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priorityOrder
    * The priority order to apply when a user has multiple RefRole codes assigned.
    *
    * @param int $val The value of the priorityOrder
    *
    * @return UserMatchingSetting
    */
    public function setPriorityOrder($val)
    {
        $this->_propDict["priorityOrder"] = $val;
        return $this;
    }

    /**
    * Gets the sourceIdentifier
    * The RefIdentifierType that uniquely identifies a user in the source data.
    *
    * @return IdentifierTypeReferenceValue|null The sourceIdentifier
    */
    public function getSourceIdentifier()
    {
        if (array_key_exists("sourceIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["sourceIdentifier"], "\Beta\Microsoft\Graph\IndustryData\Model\IdentifierTypeReferenceValue") || is_null($this->_propDict["sourceIdentifier"])) {
                return $this->_propDict["sourceIdentifier"];
            } else {
                $this->_propDict["sourceIdentifier"] = new IdentifierTypeReferenceValue($this->_propDict["sourceIdentifier"]);
                return $this->_propDict["sourceIdentifier"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceIdentifier
    * The RefIdentifierType that uniquely identifies a user in the source data.
    *
    * @param IdentifierTypeReferenceValue $val The value to assign to the sourceIdentifier
    *
    * @return UserMatchingSetting The UserMatchingSetting
    */
    public function setSourceIdentifier($val)
    {
        $this->_propDict["sourceIdentifier"] = $val;
         return $this;
    }

    /**
    * Gets the roleGroup
    *
    * @return RoleGroup|null The roleGroup
    */
    public function getRoleGroup()
    {
        if (array_key_exists("roleGroup", $this->_propDict)) {
            if (is_a($this->_propDict["roleGroup"], "\Beta\Microsoft\Graph\IndustryData\Model\RoleGroup") || is_null($this->_propDict["roleGroup"])) {
                return $this->_propDict["roleGroup"];
            } else {
                $this->_propDict["roleGroup"] = new RoleGroup($this->_propDict["roleGroup"]);
                return $this->_propDict["roleGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the roleGroup
    *
    * @param RoleGroup $val The value to assign to the roleGroup
    *
    * @return UserMatchingSetting The UserMatchingSetting
    */
    public function setRoleGroup($val)
    {
        $this->_propDict["roleGroup"] = $val;
         return $this;
    }
}
