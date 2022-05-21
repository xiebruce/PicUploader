<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageTrace File
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
* MessageTrace class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageTrace extends Entity
{
    /**
    * Gets the destinationIPAddress
    *
    * @return string|null The destinationIPAddress
    */
    public function getDestinationIPAddress()
    {
        if (array_key_exists("destinationIPAddress", $this->_propDict)) {
            return $this->_propDict["destinationIPAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationIPAddress
    *
    * @param string $val The destinationIPAddress
    *
    * @return MessageTrace
    */
    public function setDestinationIPAddress($val)
    {
        $this->_propDict["destinationIPAddress"] = $val;
        return $this;
    }

    /**
    * Gets the messageId
    *
    * @return string|null The messageId
    */
    public function getMessageId()
    {
        if (array_key_exists("messageId", $this->_propDict)) {
            return $this->_propDict["messageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageId
    *
    * @param string $val The messageId
    *
    * @return MessageTrace
    */
    public function setMessageId($val)
    {
        $this->_propDict["messageId"] = $val;
        return $this;
    }

    /**
    * Gets the receivedDateTime
    *
    * @return \DateTime|null The receivedDateTime
    */
    public function getReceivedDateTime()
    {
        if (array_key_exists("receivedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["receivedDateTime"], "\DateTime") || is_null($this->_propDict["receivedDateTime"])) {
                return $this->_propDict["receivedDateTime"];
            } else {
                $this->_propDict["receivedDateTime"] = new \DateTime($this->_propDict["receivedDateTime"]);
                return $this->_propDict["receivedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the receivedDateTime
    *
    * @param \DateTime $val The receivedDateTime
    *
    * @return MessageTrace
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the senderEmail
    *
    * @return string|null The senderEmail
    */
    public function getSenderEmail()
    {
        if (array_key_exists("senderEmail", $this->_propDict)) {
            return $this->_propDict["senderEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderEmail
    *
    * @param string $val The senderEmail
    *
    * @return MessageTrace
    */
    public function setSenderEmail($val)
    {
        $this->_propDict["senderEmail"] = $val;
        return $this;
    }

    /**
    * Gets the size
    *
    * @return int|null The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    *
    * @param int $val The size
    *
    * @return MessageTrace
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }

    /**
    * Gets the sourceIPAddress
    *
    * @return string|null The sourceIPAddress
    */
    public function getSourceIPAddress()
    {
        if (array_key_exists("sourceIPAddress", $this->_propDict)) {
            return $this->_propDict["sourceIPAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceIPAddress
    *
    * @param string $val The sourceIPAddress
    *
    * @return MessageTrace
    */
    public function setSourceIPAddress($val)
    {
        $this->_propDict["sourceIPAddress"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return MessageTrace
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }


     /**
     * Gets the recipients
     *
     * @return array|null The recipients
     */
    public function getRecipients()
    {
        if (array_key_exists("recipients", $this->_propDict)) {
           return $this->_propDict["recipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipients
    *
    * @param MessageRecipient[] $val The recipients
    *
    * @return MessageTrace
    */
    public function setRecipients($val)
    {
        $this->_propDict["recipients"] = $val;
        return $this;
    }

}
