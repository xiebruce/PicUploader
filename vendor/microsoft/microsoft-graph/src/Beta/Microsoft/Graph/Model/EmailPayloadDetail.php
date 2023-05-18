<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailPayloadDetail File
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
* EmailPayloadDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailPayloadDetail extends PayloadDetail
{
    /**
    * Gets the fromEmail
    * Email address of the user.
    *
    * @return string|null The fromEmail
    */
    public function getFromEmail()
    {
        if (array_key_exists("fromEmail", $this->_propDict)) {
            return $this->_propDict["fromEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fromEmail
    * Email address of the user.
    *
    * @param string $val The value of the fromEmail
    *
    * @return EmailPayloadDetail
    */
    public function setFromEmail($val)
    {
        $this->_propDict["fromEmail"] = $val;
        return $this;
    }
    /**
    * Gets the fromName
    * Display name of the user.
    *
    * @return string|null The fromName
    */
    public function getFromName()
    {
        if (array_key_exists("fromName", $this->_propDict)) {
            return $this->_propDict["fromName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fromName
    * Display name of the user.
    *
    * @param string $val The value of the fromName
    *
    * @return EmailPayloadDetail
    */
    public function setFromName($val)
    {
        $this->_propDict["fromName"] = $val;
        return $this;
    }
    /**
    * Gets the isExternalSender
    * Indicates whether the sender is not from the user's organization.
    *
    * @return bool|null The isExternalSender
    */
    public function getIsExternalSender()
    {
        if (array_key_exists("isExternalSender", $this->_propDict)) {
            return $this->_propDict["isExternalSender"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternalSender
    * Indicates whether the sender is not from the user's organization.
    *
    * @param bool $val The value of the isExternalSender
    *
    * @return EmailPayloadDetail
    */
    public function setIsExternalSender($val)
    {
        $this->_propDict["isExternalSender"] = $val;
        return $this;
    }
    /**
    * Gets the subject
    * The subject of the email address sent to the user.
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
    * The subject of the email address sent to the user.
    *
    * @param string $val The value of the subject
    *
    * @return EmailPayloadDetail
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
}
