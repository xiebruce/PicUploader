<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessDevices File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ConditionalAccessDevices class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessDevices extends Entity
{

    /**
    * Gets the deviceFilter
    * Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them.
    *
    * @return ConditionalAccessFilter|null The deviceFilter
    */
    public function getDeviceFilter()
    {
        if (array_key_exists("deviceFilter", $this->_propDict)) {
            if (is_a($this->_propDict["deviceFilter"], "\Microsoft\Graph\Model\ConditionalAccessFilter") || is_null($this->_propDict["deviceFilter"])) {
                return $this->_propDict["deviceFilter"];
            } else {
                $this->_propDict["deviceFilter"] = new ConditionalAccessFilter($this->_propDict["deviceFilter"]);
                return $this->_propDict["deviceFilter"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceFilter
    * Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them.
    *
    * @param ConditionalAccessFilter $val The value to assign to the deviceFilter
    *
    * @return ConditionalAccessDevices The ConditionalAccessDevices
    */
    public function setDeviceFilter($val)
    {
        $this->_propDict["deviceFilter"] = $val;
         return $this;
    }
}
