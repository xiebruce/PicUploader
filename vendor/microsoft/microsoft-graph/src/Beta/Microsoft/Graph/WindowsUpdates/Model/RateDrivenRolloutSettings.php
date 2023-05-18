<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RateDrivenRolloutSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* RateDrivenRolloutSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RateDrivenRolloutSettings extends GradualRolloutSettings
{
    /**
    * Gets the devicesPerOffer
    * Specifies the number of devices that are offered at the same time. When not set, all devices in the deployment are offered content at the same time.
    *
    * @return int|null The devicesPerOffer
    */
    public function getDevicesPerOffer()
    {
        if (array_key_exists("devicesPerOffer", $this->_propDict)) {
            return $this->_propDict["devicesPerOffer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicesPerOffer
    * Specifies the number of devices that are offered at the same time. When not set, all devices in the deployment are offered content at the same time.
    *
    * @param int $val The value of the devicesPerOffer
    *
    * @return RateDrivenRolloutSettings
    */
    public function setDevicesPerOffer($val)
    {
        $this->_propDict["devicesPerOffer"] = $val;
        return $this;
    }
}
