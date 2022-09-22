<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationReceiver File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;
/**
* NotificationReceiver class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationReceiver extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contactInformation
    *
    * @return string|null The contactInformation
    */
    public function getContactInformation()
    {
        if (array_key_exists("contactInformation", $this->_propDict)) {
            return $this->_propDict["contactInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactInformation
    *
    * @param string $val The value of the contactInformation
    *
    * @return NotificationReceiver
    */
    public function setContactInformation($val)
    {
        $this->_propDict["contactInformation"] = $val;
        return $this;
    }
    /**
    * Gets the locale
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
    *
    * @param string $val The value of the locale
    *
    * @return NotificationReceiver
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }
}
