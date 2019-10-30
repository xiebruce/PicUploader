<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharingLink File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* SharingLink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SharingLink extends Entity
{

    /**
    * Gets the application
    * The app the link is associated with.
    *
    * @return Identity The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            if (is_a($this->_propDict["application"], "Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new Identity($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }

    /**
    * Sets the application
    * The app the link is associated with.
    *
    * @param Identity $val The value to assign to the application
    *
    * @return SharingLink The SharingLink
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
         return $this;
    }
    /**
    * Gets the scope
    * The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
    *
    * @return string The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scope
    * The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
    *
    * @param string $val The value of the scope
    *
    * @return SharingLink
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    /**
    * Gets the type
    * The type of the link created.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * The type of the link created.
    *
    * @param string $val The value of the type
    *
    * @return SharingLink
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
    * A URL that opens the item in the browser on the OneDrive website.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * A URL that opens the item in the browser on the OneDrive website.
    *
    * @param string $val The value of the webUrl
    *
    * @return SharingLink
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
