<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Identity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* Identity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Identity extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the type
    * The type of identity. Possible values are: user or group for Azure AD identities and externalgroup for groups in an external system.
    *
    * @return IdentityType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\IdentityType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new IdentityType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of identity. Possible values are: user or group for Azure AD identities and externalgroup for groups in an external system.
    *
    * @param IdentityType $val The type
    *
    * @return Identity
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

}
