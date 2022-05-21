<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerUserFacingMessage File
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
* AndroidDeviceOwnerUserFacingMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerUserFacingMessage extends Entity
{
    /**
    * Gets the defaultMessage
    * The default message displayed if the user's locale doesn't match with any of the localized messages
    *
    * @return string|null The defaultMessage
    */
    public function getDefaultMessage()
    {
        if (array_key_exists("defaultMessage", $this->_propDict)) {
            return $this->_propDict["defaultMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultMessage
    * The default message displayed if the user's locale doesn't match with any of the localized messages
    *
    * @param string $val The value of the defaultMessage
    *
    * @return AndroidDeviceOwnerUserFacingMessage
    */
    public function setDefaultMessage($val)
    {
        $this->_propDict["defaultMessage"] = $val;
        return $this;
    }

    /**
    * Gets the localizedMessages
    * The list of &amp;lt;locale, message&amp;gt; pairs. This collection can contain a maximum of 500 elements.
    *
    * @return KeyValuePair|null The localizedMessages
    */
    public function getLocalizedMessages()
    {
        if (array_key_exists("localizedMessages", $this->_propDict)) {
            if (is_a($this->_propDict["localizedMessages"], "\Beta\Microsoft\Graph\Model\KeyValuePair") || is_null($this->_propDict["localizedMessages"])) {
                return $this->_propDict["localizedMessages"];
            } else {
                $this->_propDict["localizedMessages"] = new KeyValuePair($this->_propDict["localizedMessages"]);
                return $this->_propDict["localizedMessages"];
            }
        }
        return null;
    }

    /**
    * Sets the localizedMessages
    * The list of &amp;lt;locale, message&amp;gt; pairs. This collection can contain a maximum of 500 elements.
    *
    * @param KeyValuePair $val The value to assign to the localizedMessages
    *
    * @return AndroidDeviceOwnerUserFacingMessage The AndroidDeviceOwnerUserFacingMessage
    */
    public function setLocalizedMessages($val)
    {
        $this->_propDict["localizedMessages"] = $val;
         return $this;
    }
}
