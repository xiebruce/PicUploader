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
namespace Beta\Microsoft\Graph\Model;
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
    * Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them. Cannot be set if includeDevices or excludeDevices is set.
    *
    * @return ConditionalAccessFilter|null The deviceFilter
    */
    public function getDeviceFilter()
    {
        if (array_key_exists("deviceFilter", $this->_propDict)) {
            if (is_a($this->_propDict["deviceFilter"], "\Beta\Microsoft\Graph\Model\ConditionalAccessFilter") || is_null($this->_propDict["deviceFilter"])) {
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
    * Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them. Cannot be set if includeDevices or excludeDevices is set.
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
    /**
    * Gets the excludeDevices
    * States excluded from the scope of the policy. Possible values: Compliant, DomainJoined. Cannot be set if deviceFIlter is set.
    *
    * @return string|null The excludeDevices
    */
    public function getExcludeDevices()
    {
        if (array_key_exists("excludeDevices", $this->_propDict)) {
            return $this->_propDict["excludeDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeDevices
    * States excluded from the scope of the policy. Possible values: Compliant, DomainJoined. Cannot be set if deviceFIlter is set.
    *
    * @param string $val The value of the excludeDevices
    *
    * @return ConditionalAccessDevices
    */
    public function setExcludeDevices($val)
    {
        $this->_propDict["excludeDevices"] = $val;
        return $this;
    }
    /**
    * Gets the excludeDeviceStates
    *
    * @return string|null The excludeDeviceStates
    */
    public function getExcludeDeviceStates()
    {
        if (array_key_exists("excludeDeviceStates", $this->_propDict)) {
            return $this->_propDict["excludeDeviceStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeDeviceStates
    *
    * @param string $val The value of the excludeDeviceStates
    *
    * @return ConditionalAccessDevices
    */
    public function setExcludeDeviceStates($val)
    {
        $this->_propDict["excludeDeviceStates"] = $val;
        return $this;
    }
    /**
    * Gets the includeDevices
    * States in the scope of the policy. All is the only allowed value. Cannot be set if deviceFIlter is set.
    *
    * @return string|null The includeDevices
    */
    public function getIncludeDevices()
    {
        if (array_key_exists("includeDevices", $this->_propDict)) {
            return $this->_propDict["includeDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeDevices
    * States in the scope of the policy. All is the only allowed value. Cannot be set if deviceFIlter is set.
    *
    * @param string $val The value of the includeDevices
    *
    * @return ConditionalAccessDevices
    */
    public function setIncludeDevices($val)
    {
        $this->_propDict["includeDevices"] = $val;
        return $this;
    }
    /**
    * Gets the includeDeviceStates
    *
    * @return string|null The includeDeviceStates
    */
    public function getIncludeDeviceStates()
    {
        if (array_key_exists("includeDeviceStates", $this->_propDict)) {
            return $this->_propDict["includeDeviceStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeDeviceStates
    *
    * @param string $val The value of the includeDeviceStates
    *
    * @return ConditionalAccessDevices
    */
    public function setIncludeDeviceStates($val)
    {
        $this->_propDict["includeDeviceStates"] = $val;
        return $this;
    }
}
