<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosiPadOSWebClip File
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
* IosiPadOSWebClip class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosiPadOSWebClip extends MobileApp
{
    /**
    * Gets the appUrl
    * Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
    *
    * @return string|null The appUrl
    */
    public function getAppUrl()
    {
        if (array_key_exists("appUrl", $this->_propDict)) {
            return $this->_propDict["appUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appUrl
    * Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
    *
    * @param string $val The appUrl
    *
    * @return IosiPadOSWebClip
    */
    public function setAppUrl($val)
    {
        $this->_propDict["appUrl"] = $val;
        return $this;
    }

    /**
    * Gets the useManagedBrowser
    * Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
    *
    * @return bool|null The useManagedBrowser
    */
    public function getUseManagedBrowser()
    {
        if (array_key_exists("useManagedBrowser", $this->_propDict)) {
            return $this->_propDict["useManagedBrowser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useManagedBrowser
    * Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
    *
    * @param bool $val The useManagedBrowser
    *
    * @return IosiPadOSWebClip
    */
    public function setUseManagedBrowser($val)
    {
        $this->_propDict["useManagedBrowser"] = boolval($val);
        return $this;
    }

}
