<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkUserIdentity File
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
* TeamworkUserIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkUserIdentity extends Identity
{

    /**
    * Gets the userIdentityType
    * Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, emailUser and azureCommunicationServicesUser.
    *
    * @return TeamworkUserIdentityType|null The userIdentityType
    */
    public function getUserIdentityType()
    {
        if (array_key_exists("userIdentityType", $this->_propDict)) {
            if (is_a($this->_propDict["userIdentityType"], "\Beta\Microsoft\Graph\Model\TeamworkUserIdentityType") || is_null($this->_propDict["userIdentityType"])) {
                return $this->_propDict["userIdentityType"];
            } else {
                $this->_propDict["userIdentityType"] = new TeamworkUserIdentityType($this->_propDict["userIdentityType"]);
                return $this->_propDict["userIdentityType"];
            }
        }
        return null;
    }

    /**
    * Sets the userIdentityType
    * Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, emailUser and azureCommunicationServicesUser.
    *
    * @param TeamworkUserIdentityType $val The value to assign to the userIdentityType
    *
    * @return TeamworkUserIdentity The TeamworkUserIdentity
    */
    public function setUserIdentityType($val)
    {
        $this->_propDict["userIdentityType"] = $val;
         return $this;
    }
}
