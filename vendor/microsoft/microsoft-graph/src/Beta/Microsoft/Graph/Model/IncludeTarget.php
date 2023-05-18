<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IncludeTarget File
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
* IncludeTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IncludeTarget extends Entity
{
    /**
    * Gets the id
    * The ID of the entity targeted.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The ID of the entity targeted.
    *
    * @param string $val The value of the id
    *
    * @return IncludeTarget
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the targetType
    * The kind of entity targeted. Possible values are: user, group.
    *
    * @return AuthenticationMethodTargetType|null The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodTargetType") || is_null($this->_propDict["targetType"])) {
                return $this->_propDict["targetType"];
            } else {
                $this->_propDict["targetType"] = new AuthenticationMethodTargetType($this->_propDict["targetType"]);
                return $this->_propDict["targetType"];
            }
        }
        return null;
    }

    /**
    * Sets the targetType
    * The kind of entity targeted. Possible values are: user, group.
    *
    * @param AuthenticationMethodTargetType $val The value to assign to the targetType
    *
    * @return IncludeTarget The IncludeTarget
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
         return $this;
    }
}
