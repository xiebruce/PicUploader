<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedIdentity File
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
* ManagedIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedIdentity extends Entity
{
    /**
    * Gets the associatedResourceId
    * The ARM resource ID of the Azure resource associated with the managed identity used for sign in.
    *
    * @return string|null The associatedResourceId
    */
    public function getAssociatedResourceId()
    {
        if (array_key_exists("associatedResourceId", $this->_propDict)) {
            return $this->_propDict["associatedResourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the associatedResourceId
    * The ARM resource ID of the Azure resource associated with the managed identity used for sign in.
    *
    * @param string $val The value of the associatedResourceId
    *
    * @return ManagedIdentity
    */
    public function setAssociatedResourceId($val)
    {
        $this->_propDict["associatedResourceId"] = $val;
        return $this;
    }

    /**
    * Gets the msiType
    * The possible values are: none, userAssigned, systemAssigned, unknownFutureValue.
    *
    * @return MsiType|null The msiType
    */
    public function getMsiType()
    {
        if (array_key_exists("msiType", $this->_propDict)) {
            if (is_a($this->_propDict["msiType"], "\Beta\Microsoft\Graph\Model\MsiType") || is_null($this->_propDict["msiType"])) {
                return $this->_propDict["msiType"];
            } else {
                $this->_propDict["msiType"] = new MsiType($this->_propDict["msiType"]);
                return $this->_propDict["msiType"];
            }
        }
        return null;
    }

    /**
    * Sets the msiType
    * The possible values are: none, userAssigned, systemAssigned, unknownFutureValue.
    *
    * @param MsiType $val The value to assign to the msiType
    *
    * @return ManagedIdentity The ManagedIdentity
    */
    public function setMsiType($val)
    {
        $this->_propDict["msiType"] = $val;
         return $this;
    }
}
