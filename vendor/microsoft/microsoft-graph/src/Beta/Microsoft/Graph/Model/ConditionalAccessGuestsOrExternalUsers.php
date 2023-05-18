<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessGuestsOrExternalUsers File
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
* ConditionalAccessGuestsOrExternalUsers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessGuestsOrExternalUsers extends Entity
{

    /**
    * Gets the externalTenants
    * The tenant IDs of the selected types of external users. Either all B2B tenant or a collection of tenant IDs. External tenants can be specified only when the property guestOrExternalUserTypes is not null or an empty String.
    *
    * @return ConditionalAccessExternalTenants|null The externalTenants
    */
    public function getExternalTenants()
    {
        if (array_key_exists("externalTenants", $this->_propDict)) {
            if (is_a($this->_propDict["externalTenants"], "\Beta\Microsoft\Graph\Model\ConditionalAccessExternalTenants") || is_null($this->_propDict["externalTenants"])) {
                return $this->_propDict["externalTenants"];
            } else {
                $this->_propDict["externalTenants"] = new ConditionalAccessExternalTenants($this->_propDict["externalTenants"]);
                return $this->_propDict["externalTenants"];
            }
        }
        return null;
    }

    /**
    * Sets the externalTenants
    * The tenant IDs of the selected types of external users. Either all B2B tenant or a collection of tenant IDs. External tenants can be specified only when the property guestOrExternalUserTypes is not null or an empty String.
    *
    * @param ConditionalAccessExternalTenants $val The value to assign to the externalTenants
    *
    * @return ConditionalAccessGuestsOrExternalUsers The ConditionalAccessGuestsOrExternalUsers
    */
    public function setExternalTenants($val)
    {
        $this->_propDict["externalTenants"] = $val;
         return $this;
    }

    /**
    * Gets the guestOrExternalUserTypes
    * Indicates internal guests or external user types. This is a multi-valued property. Possible values are: none, internalGuest, b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser,  otherExternalUser, serviceProvider, unknownFutureValue.
    *
    * @return ConditionalAccessGuestOrExternalUserTypes|null The guestOrExternalUserTypes
    */
    public function getGuestOrExternalUserTypes()
    {
        if (array_key_exists("guestOrExternalUserTypes", $this->_propDict)) {
            if (is_a($this->_propDict["guestOrExternalUserTypes"], "\Beta\Microsoft\Graph\Model\ConditionalAccessGuestOrExternalUserTypes") || is_null($this->_propDict["guestOrExternalUserTypes"])) {
                return $this->_propDict["guestOrExternalUserTypes"];
            } else {
                $this->_propDict["guestOrExternalUserTypes"] = new ConditionalAccessGuestOrExternalUserTypes($this->_propDict["guestOrExternalUserTypes"]);
                return $this->_propDict["guestOrExternalUserTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the guestOrExternalUserTypes
    * Indicates internal guests or external user types. This is a multi-valued property. Possible values are: none, internalGuest, b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser,  otherExternalUser, serviceProvider, unknownFutureValue.
    *
    * @param ConditionalAccessGuestOrExternalUserTypes $val The value to assign to the guestOrExternalUserTypes
    *
    * @return ConditionalAccessGuestsOrExternalUsers The ConditionalAccessGuestsOrExternalUsers
    */
    public function setGuestOrExternalUserTypes($val)
    {
        $this->_propDict["guestOrExternalUserTypes"] = $val;
         return $this;
    }
}
