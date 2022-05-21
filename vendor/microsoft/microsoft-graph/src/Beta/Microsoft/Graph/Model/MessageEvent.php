<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageEvent File
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
* MessageEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageEvent extends Entity
{
    /**
    * Gets the dateTime
    *
    * @return \DateTime|null The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dateTime"], "\DateTime") || is_null($this->_propDict["dateTime"])) {
                return $this->_propDict["dateTime"];
            } else {
                $this->_propDict["dateTime"] = new \DateTime($this->_propDict["dateTime"]);
                return $this->_propDict["dateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dateTime
    *
    * @param \DateTime $val The dateTime
    *
    * @return MessageEvent
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return MessageEvent
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the eventType
    *
    * @return MessageEventType|null The eventType
    */
    public function getEventType()
    {
        if (array_key_exists("eventType", $this->_propDict)) {
            if (is_a($this->_propDict["eventType"], "\Beta\Microsoft\Graph\Model\MessageEventType") || is_null($this->_propDict["eventType"])) {
                return $this->_propDict["eventType"];
            } else {
                $this->_propDict["eventType"] = new MessageEventType($this->_propDict["eventType"]);
                return $this->_propDict["eventType"];
            }
        }
        return null;
    }

    /**
    * Sets the eventType
    *
    * @param MessageEventType $val The eventType
    *
    * @return MessageEvent
    */
    public function setEventType($val)
    {
        $this->_propDict["eventType"] = $val;
        return $this;
    }

}
