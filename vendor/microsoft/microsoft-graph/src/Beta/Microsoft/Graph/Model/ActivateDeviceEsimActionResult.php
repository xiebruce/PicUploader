<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActivateDeviceEsimActionResult File
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
* ActivateDeviceEsimActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActivateDeviceEsimActionResult extends DeviceActionResult
{
    /**
    * Gets the carrierUrl
    * Carrier Url to activate the device eSIM
    *
    * @return string|null The carrierUrl
    */
    public function getCarrierUrl()
    {
        if (array_key_exists("carrierUrl", $this->_propDict)) {
            return $this->_propDict["carrierUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the carrierUrl
    * Carrier Url to activate the device eSIM
    *
    * @param string $val The value of the carrierUrl
    *
    * @return ActivateDeviceEsimActionResult
    */
    public function setCarrierUrl($val)
    {
        $this->_propDict["carrierUrl"] = $val;
        return $this;
    }
}
