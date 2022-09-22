<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Acl File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;
/**
* Acl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Acl extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the accessType
    * The access granted to the identity. Possible values are: grant, deny, unknownFutureValue.
    *
    * @return AccessType|null The accessType
    */
    public function getAccessType()
    {
        if (array_key_exists("accessType", $this->_propDict)) {
            if (is_a($this->_propDict["accessType"], "\Microsoft\Graph\ExternalConnectors\Model\AccessType") || is_null($this->_propDict["accessType"])) {
                return $this->_propDict["accessType"];
            } else {
                $this->_propDict["accessType"] = new AccessType($this->_propDict["accessType"]);
                return $this->_propDict["accessType"];
            }
        }
        return null;
    }

    /**
    * Sets the accessType
    * The access granted to the identity. Possible values are: grant, deny, unknownFutureValue.
    *
    * @param AccessType $val The value to assign to the accessType
    *
    * @return Acl The Acl
    */
    public function setAccessType($val)
    {
        $this->_propDict["accessType"] = $val;
         return $this;
    }

    /**
    * Gets the type
    * The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests, externalGroup, unknownFutureValue.
    *
    * @return AclType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\ExternalConnectors\Model\AclType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AclType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests, externalGroup, unknownFutureValue.
    *
    * @param AclType $val The value to assign to the type
    *
    * @return Acl The Acl
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup
    *
    * @param string $val The value of the value
    *
    * @return Acl
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
