<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallParticipantInfo File
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
* CallParticipantInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallParticipantInfo extends Entity
{

    /**
    * Gets the participant
    * Identity of the call participant.
    *
    * @return IdentitySet|null The participant
    */
    public function getParticipant()
    {
        if (array_key_exists("participant", $this->_propDict)) {
            if (is_a($this->_propDict["participant"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["participant"])) {
                return $this->_propDict["participant"];
            } else {
                $this->_propDict["participant"] = new IdentitySet($this->_propDict["participant"]);
                return $this->_propDict["participant"];
            }
        }
        return null;
    }

    /**
    * Sets the participant
    * Identity of the call participant.
    *
    * @param IdentitySet $val The value to assign to the participant
    *
    * @return CallParticipantInfo The CallParticipantInfo
    */
    public function setParticipant($val)
    {
        $this->_propDict["participant"] = $val;
         return $this;
    }
}
