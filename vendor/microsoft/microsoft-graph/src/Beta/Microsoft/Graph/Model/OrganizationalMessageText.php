<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageText File
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
* OrganizationalMessageText class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageText extends Entity
{
    /**
    * Gets the buttonText
    * Indicates the text that will be displayed on the button of the message. This field applies to the softLanding surface
    *
    * @return string|null The buttonText
    */
    public function getButtonText()
    {
        if (array_key_exists("buttonText", $this->_propDict)) {
            return $this->_propDict["buttonText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the buttonText
    * Indicates the text that will be displayed on the button of the message. This field applies to the softLanding surface
    *
    * @param string $val The value of the buttonText
    *
    * @return OrganizationalMessageText
    */
    public function setButtonText($val)
    {
        $this->_propDict["buttonText"] = $val;
        return $this;
    }
    /**
    * Gets the clickUrl
    * Indicates the url that the user will be directed to when the message is clicked
    *
    * @return string|null The clickUrl
    */
    public function getClickUrl()
    {
        if (array_key_exists("clickUrl", $this->_propDict)) {
            return $this->_propDict["clickUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clickUrl
    * Indicates the url that the user will be directed to when the message is clicked
    *
    * @param string $val The value of the clickUrl
    *
    * @return OrganizationalMessageText
    */
    public function setClickUrl($val)
    {
        $this->_propDict["clickUrl"] = $val;
        return $this;
    }
    /**
    * Gets the message
    * Indicates the message that will be displayed
    *
    * @return string|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * Indicates the message that will be displayed
    *
    * @param string $val The value of the message
    *
    * @return OrganizationalMessageText
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the title
    * Indicates the title that will be displayed
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * Indicates the title that will be displayed
    *
    * @param string $val The value of the title
    *
    * @return OrganizationalMessageText
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
