<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MembersAddedEventMessageDetail File
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
* MembersAddedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MembersAddedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.membersAddedEventMessageDetail");
    }


    /**
    * Gets the initiator
    * Initiator of the event.
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict)) {
            if (is_a($this->_propDict["initiator"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["initiator"])) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    * Initiator of the event.
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return MembersAddedEventMessageDetail The MembersAddedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }

    /**
    * Gets the members
    * List of members added.
    *
    * @return TeamworkUserIdentity|null The members
    */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
            if (is_a($this->_propDict["members"], "\Microsoft\Graph\Model\TeamworkUserIdentity") || is_null($this->_propDict["members"])) {
                return $this->_propDict["members"];
            } else {
                $this->_propDict["members"] = new TeamworkUserIdentity($this->_propDict["members"]);
                return $this->_propDict["members"];
            }
        }
        return null;
    }

    /**
    * Sets the members
    * List of members added.
    *
    * @param TeamworkUserIdentity $val The value to assign to the members
    *
    * @return MembersAddedEventMessageDetail The MembersAddedEventMessageDetail
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
         return $this;
    }

    /**
    * Gets the visibleHistoryStartDateTime
    * The timestamp that denotes how far back a conversation's history is shared with the conversation members.
    *
    * @return \DateTime|null The visibleHistoryStartDateTime
    */
    public function getVisibleHistoryStartDateTime()
    {
        if (array_key_exists("visibleHistoryStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["visibleHistoryStartDateTime"], "\DateTime") || is_null($this->_propDict["visibleHistoryStartDateTime"])) {
                return $this->_propDict["visibleHistoryStartDateTime"];
            } else {
                $this->_propDict["visibleHistoryStartDateTime"] = new \DateTime($this->_propDict["visibleHistoryStartDateTime"]);
                return $this->_propDict["visibleHistoryStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the visibleHistoryStartDateTime
    * The timestamp that denotes how far back a conversation's history is shared with the conversation members.
    *
    * @param \DateTime $val The value to assign to the visibleHistoryStartDateTime
    *
    * @return MembersAddedEventMessageDetail The MembersAddedEventMessageDetail
    */
    public function setVisibleHistoryStartDateTime($val)
    {
        $this->_propDict["visibleHistoryStartDateTime"] = $val;
         return $this;
    }
}
