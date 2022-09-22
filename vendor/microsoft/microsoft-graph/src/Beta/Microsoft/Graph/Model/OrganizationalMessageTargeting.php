<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageTargeting File
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
* OrganizationalMessageTargeting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageTargeting extends Entity
{
    /**
    * Gets the excludeIds
    * The groups that will not receive the message. If a user from an excluded group is part of an included group, it will not receive the message
    *
    * @return string|null The excludeIds
    */
    public function getExcludeIds()
    {
        if (array_key_exists("excludeIds", $this->_propDict)) {
            return $this->_propDict["excludeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeIds
    * The groups that will not receive the message. If a user from an excluded group is part of an included group, it will not receive the message
    *
    * @param string $val The value of the excludeIds
    *
    * @return OrganizationalMessageTargeting
    */
    public function setExcludeIds($val)
    {
        $this->_propDict["excludeIds"] = $val;
        return $this;
    }
    /**
    * Gets the includeIds
    * The groups that will be targeted and receive the message
    *
    * @return string|null The includeIds
    */
    public function getIncludeIds()
    {
        if (array_key_exists("includeIds", $this->_propDict)) {
            return $this->_propDict["includeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeIds
    * The groups that will be targeted and receive the message
    *
    * @param string $val The value of the includeIds
    *
    * @return OrganizationalMessageTargeting
    */
    public function setIncludeIds($val)
    {
        $this->_propDict["includeIds"] = $val;
        return $this;
    }

    /**
    * Gets the targetingType
    * Indicates the type of targeting. Possible values are: aadGroup, unknownFutureValue.
    *
    * @return OrganizationalMessageTargetingType|null The targetingType
    */
    public function getTargetingType()
    {
        if (array_key_exists("targetingType", $this->_propDict)) {
            if (is_a($this->_propDict["targetingType"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageTargetingType") || is_null($this->_propDict["targetingType"])) {
                return $this->_propDict["targetingType"];
            } else {
                $this->_propDict["targetingType"] = new OrganizationalMessageTargetingType($this->_propDict["targetingType"]);
                return $this->_propDict["targetingType"];
            }
        }
        return null;
    }

    /**
    * Sets the targetingType
    * Indicates the type of targeting. Possible values are: aadGroup, unknownFutureValue.
    *
    * @param OrganizationalMessageTargetingType $val The value to assign to the targetingType
    *
    * @return OrganizationalMessageTargeting The OrganizationalMessageTargeting
    */
    public function setTargetingType($val)
    {
        $this->_propDict["targetingType"] = $val;
         return $this;
    }
}
