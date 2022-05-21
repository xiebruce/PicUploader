<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedWindowsAutopilotDeviceIdentity File
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
* ImportedWindowsAutopilotDeviceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImportedWindowsAutopilotDeviceIdentity extends Entity
{
    /**
    * Gets the assignedUserPrincipalName
    * UPN of the user the device will be assigned
    *
    * @return string|null The assignedUserPrincipalName
    */
    public function getAssignedUserPrincipalName()
    {
        if (array_key_exists("assignedUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["assignedUserPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedUserPrincipalName
    * UPN of the user the device will be assigned
    *
    * @param string $val The assignedUserPrincipalName
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setAssignedUserPrincipalName($val)
    {
        $this->_propDict["assignedUserPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the groupTag
    * Group Tag of the Windows autopilot device.
    *
    * @return string|null The groupTag
    */
    public function getGroupTag()
    {
        if (array_key_exists("groupTag", $this->_propDict)) {
            return $this->_propDict["groupTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupTag
    * Group Tag of the Windows autopilot device.
    *
    * @param string $val The groupTag
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setGroupTag($val)
    {
        $this->_propDict["groupTag"] = $val;
        return $this;
    }

    /**
    * Gets the hardwareIdentifier
    * Hardware Blob of the Windows autopilot device.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The hardwareIdentifier
    */
    public function getHardwareIdentifier()
    {
        if (array_key_exists("hardwareIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["hardwareIdentifier"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["hardwareIdentifier"])) {
                return $this->_propDict["hardwareIdentifier"];
            } else {
                $this->_propDict["hardwareIdentifier"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["hardwareIdentifier"]);
                return $this->_propDict["hardwareIdentifier"];
            }
        }
        return null;
    }

    /**
    * Sets the hardwareIdentifier
    * Hardware Blob of the Windows autopilot device.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The hardwareIdentifier
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setHardwareIdentifier($val)
    {
        $this->_propDict["hardwareIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the importId
    * The Import Id of the Windows autopilot device.
    *
    * @return string|null The importId
    */
    public function getImportId()
    {
        if (array_key_exists("importId", $this->_propDict)) {
            return $this->_propDict["importId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the importId
    * The Import Id of the Windows autopilot device.
    *
    * @param string $val The importId
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setImportId($val)
    {
        $this->_propDict["importId"] = $val;
        return $this;
    }

    /**
    * Gets the productKey
    * Product Key of the Windows autopilot device.
    *
    * @return string|null The productKey
    */
    public function getProductKey()
    {
        if (array_key_exists("productKey", $this->_propDict)) {
            return $this->_propDict["productKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productKey
    * Product Key of the Windows autopilot device.
    *
    * @param string $val The productKey
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }

    /**
    * Gets the serialNumber
    * Serial number of the Windows autopilot device.
    *
    * @return string|null The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    * Serial number of the Windows autopilot device.
    *
    * @param string $val The serialNumber
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * Current state of the imported device.
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\ImportedWindowsAutopilotDeviceIdentityState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ImportedWindowsAutopilotDeviceIdentityState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Current state of the imported device.
    *
    * @param ImportedWindowsAutopilotDeviceIdentityState $val The state
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
