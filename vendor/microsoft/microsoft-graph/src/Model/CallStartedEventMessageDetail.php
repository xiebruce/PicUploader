<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallStartedEventMessageDetail File
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
* CallStartedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallStartedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.callStartedEventMessageDetail");
    }


    /**
    * Gets the callEventType
    * Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
    *
    * @return TeamworkCallEventType|null The callEventType
    */
    public function getCallEventType()
    {
        if (array_key_exists("callEventType", $this->_propDict)) {
            if (is_a($this->_propDict["callEventType"], "\Microsoft\Graph\Model\TeamworkCallEventType") || is_null($this->_propDict["callEventType"])) {
                return $this->_propDict["callEventType"];
            } else {
                $this->_propDict["callEventType"] = new TeamworkCallEventType($this->_propDict["callEventType"]);
                return $this->_propDict["callEventType"];
            }
        }
        return null;
    }

    /**
    * Sets the callEventType
    * Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
    *
    * @param TeamworkCallEventType $val The value to assign to the callEventType
    *
    * @return CallStartedEventMessageDetail The CallStartedEventMessageDetail
    */
    public function setCallEventType($val)
    {
        $this->_propDict["callEventType"] = $val;
         return $this;
    }
    /**
    * Gets the callId
    * Unique identifier of the call.
    *
    * @return string|null The callId
    */
    public function getCallId()
    {
        if (array_key_exists("callId", $this->_propDict)) {
            return $this->_propDict["callId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callId
    * Unique identifier of the call.
    *
    * @param string $val The value of the callId
    *
    * @return CallStartedEventMessageDetail
    */
    public function setCallId($val)
    {
        $this->_propDict["callId"] = $val;
        return $this;
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
    * @return CallStartedEventMessageDetail The CallStartedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
}
