<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExcludeTarget File
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
* ExcludeTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExcludeTarget extends Entity
{
    /**
    * Gets the id
    * The object identifier of an Azure Active Directory user or group.
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
    * The object identifier of an Azure Active Directory user or group.
    *
    * @param string $val The value of the id
    *
    * @return ExcludeTarget
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the targetType
    * The type of the authentication method target. Possible values are: user, group, unknownFutureValue.
    *
    * @return AuthenticationMethodTargetType|null The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "\Microsoft\Graph\Model\AuthenticationMethodTargetType") || is_null($this->_propDict["targetType"])) {
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
    * The type of the authentication method target. Possible values are: user, group, unknownFutureValue.
    *
    * @param AuthenticationMethodTargetType $val The value to assign to the targetType
    *
    * @return ExcludeTarget The ExcludeTarget
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
         return $this;
    }
}
