<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvitationParticipantInfo File
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
* InvitationParticipantInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InvitationParticipantInfo extends Entity
{
    /**
    * Gets the hidden
    *
    * @return bool|null The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidden
    *
    * @param bool $val The value of the hidden
    *
    * @return InvitationParticipantInfo
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = $val;
        return $this;
    }

    /**
    * Gets the identity
    * The identitySet associated with this invitation.
    *
    * @return IdentitySet|null The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["identity"])) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new IdentitySet($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    * The identitySet associated with this invitation.
    *
    * @param IdentitySet $val The value to assign to the identity
    *
    * @return InvitationParticipantInfo The InvitationParticipantInfo
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
         return $this;
    }
    /**
    * Gets the participantId
    * Optional. The ID of the target participant.
    *
    * @return string|null The participantId
    */
    public function getParticipantId()
    {
        if (array_key_exists("participantId", $this->_propDict)) {
            return $this->_propDict["participantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the participantId
    * Optional. The ID of the target participant.
    *
    * @param string $val The value of the participantId
    *
    * @return InvitationParticipantInfo
    */
    public function setParticipantId($val)
    {
        $this->_propDict["participantId"] = $val;
        return $this;
    }
    /**
    * Gets the removeFromDefaultAudioRoutingGroup
    *
    * @return bool|null The removeFromDefaultAudioRoutingGroup
    */
    public function getRemoveFromDefaultAudioRoutingGroup()
    {
        if (array_key_exists("removeFromDefaultAudioRoutingGroup", $this->_propDict)) {
            return $this->_propDict["removeFromDefaultAudioRoutingGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeFromDefaultAudioRoutingGroup
    *
    * @param bool $val The value of the removeFromDefaultAudioRoutingGroup
    *
    * @return InvitationParticipantInfo
    */
    public function setRemoveFromDefaultAudioRoutingGroup($val)
    {
        $this->_propDict["removeFromDefaultAudioRoutingGroup"] = $val;
        return $this;
    }
    /**
    * Gets the replacesCallId
    * Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
    *
    * @return string|null The replacesCallId
    */
    public function getReplacesCallId()
    {
        if (array_key_exists("replacesCallId", $this->_propDict)) {
            return $this->_propDict["replacesCallId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replacesCallId
    * Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
    *
    * @param string $val The value of the replacesCallId
    *
    * @return InvitationParticipantInfo
    */
    public function setReplacesCallId($val)
    {
        $this->_propDict["replacesCallId"] = $val;
        return $this;
    }
}
