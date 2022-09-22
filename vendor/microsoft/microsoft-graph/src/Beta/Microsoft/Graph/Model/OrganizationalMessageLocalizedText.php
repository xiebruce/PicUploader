<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageLocalizedText File
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
* OrganizationalMessageLocalizedText class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageLocalizedText extends Entity
{
    /**
    * Gets the locale
    * The locale for this text
    *
    * @return string|null The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locale
    * The locale for this text
    *
    * @param string $val The value of the locale
    *
    * @return OrganizationalMessageLocalizedText
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }

    /**
    * Gets the text
    * The text that will be displayed to a user from this specific locale
    *
    * @return OrganizationalMessageText|null The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            if (is_a($this->_propDict["text"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageText") || is_null($this->_propDict["text"])) {
                return $this->_propDict["text"];
            } else {
                $this->_propDict["text"] = new OrganizationalMessageText($this->_propDict["text"]);
                return $this->_propDict["text"];
            }
        }
        return null;
    }

    /**
    * Sets the text
    * The text that will be displayed to a user from this specific locale
    *
    * @param OrganizationalMessageText $val The value to assign to the text
    *
    * @return OrganizationalMessageLocalizedText The OrganizationalMessageLocalizedText
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
         return $this;
    }
}
