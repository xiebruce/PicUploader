<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10DeviceFirmwareConfigurationInterface File
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
* Windows10DeviceFirmwareConfigurationInterface class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10DeviceFirmwareConfigurationInterface extends DeviceConfiguration
{
    /**
    * Gets the bluetooth
    * Defines whether a user is allowed to enable Bluetooth. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The bluetooth
    */
    public function getBluetooth()
    {
        if (array_key_exists("bluetooth", $this->_propDict)) {
            if (is_a($this->_propDict["bluetooth"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["bluetooth"])) {
                return $this->_propDict["bluetooth"];
            } else {
                $this->_propDict["bluetooth"] = new Enablement($this->_propDict["bluetooth"]);
                return $this->_propDict["bluetooth"];
            }
        }
        return null;
    }

    /**
    * Sets the bluetooth
    * Defines whether a user is allowed to enable Bluetooth. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The bluetooth
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setBluetooth($val)
    {
        $this->_propDict["bluetooth"] = $val;
        return $this;
    }

    /**
    * Gets the bootFromBuiltInNetworkAdapters
    * Defines whether a user is allowed to boot from built-in network adapters. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The bootFromBuiltInNetworkAdapters
    */
    public function getBootFromBuiltInNetworkAdapters()
    {
        if (array_key_exists("bootFromBuiltInNetworkAdapters", $this->_propDict)) {
            if (is_a($this->_propDict["bootFromBuiltInNetworkAdapters"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["bootFromBuiltInNetworkAdapters"])) {
                return $this->_propDict["bootFromBuiltInNetworkAdapters"];
            } else {
                $this->_propDict["bootFromBuiltInNetworkAdapters"] = new Enablement($this->_propDict["bootFromBuiltInNetworkAdapters"]);
                return $this->_propDict["bootFromBuiltInNetworkAdapters"];
            }
        }
        return null;
    }

    /**
    * Sets the bootFromBuiltInNetworkAdapters
    * Defines whether a user is allowed to boot from built-in network adapters. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The bootFromBuiltInNetworkAdapters
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setBootFromBuiltInNetworkAdapters($val)
    {
        $this->_propDict["bootFromBuiltInNetworkAdapters"] = $val;
        return $this;
    }

    /**
    * Gets the bootFromExternalMedia
    * Defines whether a user is allowed to boot from external media. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The bootFromExternalMedia
    */
    public function getBootFromExternalMedia()
    {
        if (array_key_exists("bootFromExternalMedia", $this->_propDict)) {
            if (is_a($this->_propDict["bootFromExternalMedia"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["bootFromExternalMedia"])) {
                return $this->_propDict["bootFromExternalMedia"];
            } else {
                $this->_propDict["bootFromExternalMedia"] = new Enablement($this->_propDict["bootFromExternalMedia"]);
                return $this->_propDict["bootFromExternalMedia"];
            }
        }
        return null;
    }

    /**
    * Sets the bootFromExternalMedia
    * Defines whether a user is allowed to boot from external media. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The bootFromExternalMedia
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setBootFromExternalMedia($val)
    {
        $this->_propDict["bootFromExternalMedia"] = $val;
        return $this;
    }

    /**
    * Gets the cameras
    * Defines whether built-in cameras are enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The cameras
    */
    public function getCameras()
    {
        if (array_key_exists("cameras", $this->_propDict)) {
            if (is_a($this->_propDict["cameras"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["cameras"])) {
                return $this->_propDict["cameras"];
            } else {
                $this->_propDict["cameras"] = new Enablement($this->_propDict["cameras"]);
                return $this->_propDict["cameras"];
            }
        }
        return null;
    }

    /**
    * Sets the cameras
    * Defines whether built-in cameras are enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The cameras
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setCameras($val)
    {
        $this->_propDict["cameras"] = $val;
        return $this;
    }

    /**
    * Gets the changeUefiSettingsPermission
    * Defines the permission level granted to users to change UEFI settings. Possible values are: notConfiguredOnly, none.
    *
    * @return ChangeUefiSettingsPermission|null The changeUefiSettingsPermission
    */
    public function getChangeUefiSettingsPermission()
    {
        if (array_key_exists("changeUefiSettingsPermission", $this->_propDict)) {
            if (is_a($this->_propDict["changeUefiSettingsPermission"], "\Beta\Microsoft\Graph\Model\ChangeUefiSettingsPermission") || is_null($this->_propDict["changeUefiSettingsPermission"])) {
                return $this->_propDict["changeUefiSettingsPermission"];
            } else {
                $this->_propDict["changeUefiSettingsPermission"] = new ChangeUefiSettingsPermission($this->_propDict["changeUefiSettingsPermission"]);
                return $this->_propDict["changeUefiSettingsPermission"];
            }
        }
        return null;
    }

    /**
    * Sets the changeUefiSettingsPermission
    * Defines the permission level granted to users to change UEFI settings. Possible values are: notConfiguredOnly, none.
    *
    * @param ChangeUefiSettingsPermission $val The changeUefiSettingsPermission
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setChangeUefiSettingsPermission($val)
    {
        $this->_propDict["changeUefiSettingsPermission"] = $val;
        return $this;
    }

    /**
    * Gets the frontCamera
    * Defines whether a user is allowed to enable Front Camera. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The frontCamera
    */
    public function getFrontCamera()
    {
        if (array_key_exists("frontCamera", $this->_propDict)) {
            if (is_a($this->_propDict["frontCamera"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["frontCamera"])) {
                return $this->_propDict["frontCamera"];
            } else {
                $this->_propDict["frontCamera"] = new Enablement($this->_propDict["frontCamera"]);
                return $this->_propDict["frontCamera"];
            }
        }
        return null;
    }

    /**
    * Sets the frontCamera
    * Defines whether a user is allowed to enable Front Camera. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The frontCamera
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setFrontCamera($val)
    {
        $this->_propDict["frontCamera"] = $val;
        return $this;
    }

    /**
    * Gets the infraredCamera
    * Defines whether a user is allowed to enable Infrared camera. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The infraredCamera
    */
    public function getInfraredCamera()
    {
        if (array_key_exists("infraredCamera", $this->_propDict)) {
            if (is_a($this->_propDict["infraredCamera"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["infraredCamera"])) {
                return $this->_propDict["infraredCamera"];
            } else {
                $this->_propDict["infraredCamera"] = new Enablement($this->_propDict["infraredCamera"]);
                return $this->_propDict["infraredCamera"];
            }
        }
        return null;
    }

    /**
    * Sets the infraredCamera
    * Defines whether a user is allowed to enable Infrared camera. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The infraredCamera
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setInfraredCamera($val)
    {
        $this->_propDict["infraredCamera"] = $val;
        return $this;
    }

    /**
    * Gets the microphone
    * Defines whether a user is allowed to enable Microphone. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The microphone
    */
    public function getMicrophone()
    {
        if (array_key_exists("microphone", $this->_propDict)) {
            if (is_a($this->_propDict["microphone"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["microphone"])) {
                return $this->_propDict["microphone"];
            } else {
                $this->_propDict["microphone"] = new Enablement($this->_propDict["microphone"]);
                return $this->_propDict["microphone"];
            }
        }
        return null;
    }

    /**
    * Sets the microphone
    * Defines whether a user is allowed to enable Microphone. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The microphone
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setMicrophone($val)
    {
        $this->_propDict["microphone"] = $val;
        return $this;
    }

    /**
    * Gets the microphonesAndSpeakers
    * Defines whether built-in microphones or speakers are enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The microphonesAndSpeakers
    */
    public function getMicrophonesAndSpeakers()
    {
        if (array_key_exists("microphonesAndSpeakers", $this->_propDict)) {
            if (is_a($this->_propDict["microphonesAndSpeakers"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["microphonesAndSpeakers"])) {
                return $this->_propDict["microphonesAndSpeakers"];
            } else {
                $this->_propDict["microphonesAndSpeakers"] = new Enablement($this->_propDict["microphonesAndSpeakers"]);
                return $this->_propDict["microphonesAndSpeakers"];
            }
        }
        return null;
    }

    /**
    * Sets the microphonesAndSpeakers
    * Defines whether built-in microphones or speakers are enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The microphonesAndSpeakers
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setMicrophonesAndSpeakers($val)
    {
        $this->_propDict["microphonesAndSpeakers"] = $val;
        return $this;
    }

    /**
    * Gets the nearFieldCommunication
    * Defines whether a user is allowed to enable Near Field Communication. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The nearFieldCommunication
    */
    public function getNearFieldCommunication()
    {
        if (array_key_exists("nearFieldCommunication", $this->_propDict)) {
            if (is_a($this->_propDict["nearFieldCommunication"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["nearFieldCommunication"])) {
                return $this->_propDict["nearFieldCommunication"];
            } else {
                $this->_propDict["nearFieldCommunication"] = new Enablement($this->_propDict["nearFieldCommunication"]);
                return $this->_propDict["nearFieldCommunication"];
            }
        }
        return null;
    }

    /**
    * Sets the nearFieldCommunication
    * Defines whether a user is allowed to enable Near Field Communication. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The nearFieldCommunication
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setNearFieldCommunication($val)
    {
        $this->_propDict["nearFieldCommunication"] = $val;
        return $this;
    }

    /**
    * Gets the radios
    * Defines whether built-in radios e.g. WIFI, NFC, Bluetooth, are enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The radios
    */
    public function getRadios()
    {
        if (array_key_exists("radios", $this->_propDict)) {
            if (is_a($this->_propDict["radios"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["radios"])) {
                return $this->_propDict["radios"];
            } else {
                $this->_propDict["radios"] = new Enablement($this->_propDict["radios"]);
                return $this->_propDict["radios"];
            }
        }
        return null;
    }

    /**
    * Sets the radios
    * Defines whether built-in radios e.g. WIFI, NFC, Bluetooth, are enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The radios
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setRadios($val)
    {
        $this->_propDict["radios"] = $val;
        return $this;
    }

    /**
    * Gets the rearCamera
    * Defines whether a user is allowed to enable rear camera. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The rearCamera
    */
    public function getRearCamera()
    {
        if (array_key_exists("rearCamera", $this->_propDict)) {
            if (is_a($this->_propDict["rearCamera"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["rearCamera"])) {
                return $this->_propDict["rearCamera"];
            } else {
                $this->_propDict["rearCamera"] = new Enablement($this->_propDict["rearCamera"]);
                return $this->_propDict["rearCamera"];
            }
        }
        return null;
    }

    /**
    * Sets the rearCamera
    * Defines whether a user is allowed to enable rear camera. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The rearCamera
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setRearCamera($val)
    {
        $this->_propDict["rearCamera"] = $val;
        return $this;
    }

    /**
    * Gets the sdCard
    * Defines whether a user is allowed to enable SD Card Port. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The sdCard
    */
    public function getSdCard()
    {
        if (array_key_exists("sdCard", $this->_propDict)) {
            if (is_a($this->_propDict["sdCard"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["sdCard"])) {
                return $this->_propDict["sdCard"];
            } else {
                $this->_propDict["sdCard"] = new Enablement($this->_propDict["sdCard"]);
                return $this->_propDict["sdCard"];
            }
        }
        return null;
    }

    /**
    * Sets the sdCard
    * Defines whether a user is allowed to enable SD Card Port. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The sdCard
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setSdCard($val)
    {
        $this->_propDict["sdCard"] = $val;
        return $this;
    }

    /**
    * Gets the simultaneousMultiThreading
    * Defines whether a user is allowed to enable Simultaneous MultiThreading. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The simultaneousMultiThreading
    */
    public function getSimultaneousMultiThreading()
    {
        if (array_key_exists("simultaneousMultiThreading", $this->_propDict)) {
            if (is_a($this->_propDict["simultaneousMultiThreading"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["simultaneousMultiThreading"])) {
                return $this->_propDict["simultaneousMultiThreading"];
            } else {
                $this->_propDict["simultaneousMultiThreading"] = new Enablement($this->_propDict["simultaneousMultiThreading"]);
                return $this->_propDict["simultaneousMultiThreading"];
            }
        }
        return null;
    }

    /**
    * Sets the simultaneousMultiThreading
    * Defines whether a user is allowed to enable Simultaneous MultiThreading. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The simultaneousMultiThreading
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setSimultaneousMultiThreading($val)
    {
        $this->_propDict["simultaneousMultiThreading"] = $val;
        return $this;
    }

    /**
    * Gets the usbTypeAPort
    * Defines whether a user is allowed to enable USB Type A Port. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The usbTypeAPort
    */
    public function getUsbTypeAPort()
    {
        if (array_key_exists("usbTypeAPort", $this->_propDict)) {
            if (is_a($this->_propDict["usbTypeAPort"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["usbTypeAPort"])) {
                return $this->_propDict["usbTypeAPort"];
            } else {
                $this->_propDict["usbTypeAPort"] = new Enablement($this->_propDict["usbTypeAPort"]);
                return $this->_propDict["usbTypeAPort"];
            }
        }
        return null;
    }

    /**
    * Sets the usbTypeAPort
    * Defines whether a user is allowed to enable USB Type A Port. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The usbTypeAPort
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setUsbTypeAPort($val)
    {
        $this->_propDict["usbTypeAPort"] = $val;
        return $this;
    }

    /**
    * Gets the virtualizationOfCpuAndIO
    * Defines whether CPU and IO virtualization is enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The virtualizationOfCpuAndIO
    */
    public function getVirtualizationOfCpuAndIO()
    {
        if (array_key_exists("virtualizationOfCpuAndIO", $this->_propDict)) {
            if (is_a($this->_propDict["virtualizationOfCpuAndIO"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["virtualizationOfCpuAndIO"])) {
                return $this->_propDict["virtualizationOfCpuAndIO"];
            } else {
                $this->_propDict["virtualizationOfCpuAndIO"] = new Enablement($this->_propDict["virtualizationOfCpuAndIO"]);
                return $this->_propDict["virtualizationOfCpuAndIO"];
            }
        }
        return null;
    }

    /**
    * Sets the virtualizationOfCpuAndIO
    * Defines whether CPU and IO virtualization is enabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The virtualizationOfCpuAndIO
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setVirtualizationOfCpuAndIO($val)
    {
        $this->_propDict["virtualizationOfCpuAndIO"] = $val;
        return $this;
    }

    /**
    * Gets the wakeOnLAN
    * Defines whether a user is allowed to enable Wake on LAN. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The wakeOnLAN
    */
    public function getWakeOnLAN()
    {
        if (array_key_exists("wakeOnLAN", $this->_propDict)) {
            if (is_a($this->_propDict["wakeOnLAN"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["wakeOnLAN"])) {
                return $this->_propDict["wakeOnLAN"];
            } else {
                $this->_propDict["wakeOnLAN"] = new Enablement($this->_propDict["wakeOnLAN"]);
                return $this->_propDict["wakeOnLAN"];
            }
        }
        return null;
    }

    /**
    * Sets the wakeOnLAN
    * Defines whether a user is allowed to enable Wake on LAN. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The wakeOnLAN
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setWakeOnLAN($val)
    {
        $this->_propDict["wakeOnLAN"] = $val;
        return $this;
    }

    /**
    * Gets the wakeOnPower
    * Defines whether a user is allowed to enable Wake On Power. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The wakeOnPower
    */
    public function getWakeOnPower()
    {
        if (array_key_exists("wakeOnPower", $this->_propDict)) {
            if (is_a($this->_propDict["wakeOnPower"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["wakeOnPower"])) {
                return $this->_propDict["wakeOnPower"];
            } else {
                $this->_propDict["wakeOnPower"] = new Enablement($this->_propDict["wakeOnPower"]);
                return $this->_propDict["wakeOnPower"];
            }
        }
        return null;
    }

    /**
    * Sets the wakeOnPower
    * Defines whether a user is allowed to enable Wake On Power. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The wakeOnPower
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setWakeOnPower($val)
    {
        $this->_propDict["wakeOnPower"] = $val;
        return $this;
    }

    /**
    * Gets the wiFi
    * Defines whether a user is allowed to enable WiFi. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The wiFi
    */
    public function getWiFi()
    {
        if (array_key_exists("wiFi", $this->_propDict)) {
            if (is_a($this->_propDict["wiFi"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["wiFi"])) {
                return $this->_propDict["wiFi"];
            } else {
                $this->_propDict["wiFi"] = new Enablement($this->_propDict["wiFi"]);
                return $this->_propDict["wiFi"];
            }
        }
        return null;
    }

    /**
    * Sets the wiFi
    * Defines whether a user is allowed to enable WiFi. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The wiFi
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setWiFi($val)
    {
        $this->_propDict["wiFi"] = $val;
        return $this;
    }

    /**
    * Gets the windowsPlatformBinaryTable
    * Defines whether a user is allowed to enable Windows Platform Binary Table. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The windowsPlatformBinaryTable
    */
    public function getWindowsPlatformBinaryTable()
    {
        if (array_key_exists("windowsPlatformBinaryTable", $this->_propDict)) {
            if (is_a($this->_propDict["windowsPlatformBinaryTable"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["windowsPlatformBinaryTable"])) {
                return $this->_propDict["windowsPlatformBinaryTable"];
            } else {
                $this->_propDict["windowsPlatformBinaryTable"] = new Enablement($this->_propDict["windowsPlatformBinaryTable"]);
                return $this->_propDict["windowsPlatformBinaryTable"];
            }
        }
        return null;
    }

    /**
    * Sets the windowsPlatformBinaryTable
    * Defines whether a user is allowed to enable Windows Platform Binary Table. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The windowsPlatformBinaryTable
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setWindowsPlatformBinaryTable($val)
    {
        $this->_propDict["windowsPlatformBinaryTable"] = $val;
        return $this;
    }

    /**
    * Gets the wirelessWideAreaNetwork
    * Defines whether a user is allowed to enable Wireless Wide Area Network. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement|null The wirelessWideAreaNetwork
    */
    public function getWirelessWideAreaNetwork()
    {
        if (array_key_exists("wirelessWideAreaNetwork", $this->_propDict)) {
            if (is_a($this->_propDict["wirelessWideAreaNetwork"], "\Beta\Microsoft\Graph\Model\Enablement") || is_null($this->_propDict["wirelessWideAreaNetwork"])) {
                return $this->_propDict["wirelessWideAreaNetwork"];
            } else {
                $this->_propDict["wirelessWideAreaNetwork"] = new Enablement($this->_propDict["wirelessWideAreaNetwork"]);
                return $this->_propDict["wirelessWideAreaNetwork"];
            }
        }
        return null;
    }

    /**
    * Sets the wirelessWideAreaNetwork
    * Defines whether a user is allowed to enable Wireless Wide Area Network. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The wirelessWideAreaNetwork
    *
    * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public function setWirelessWideAreaNetwork($val)
    {
        $this->_propDict["wirelessWideAreaNetwork"] = $val;
        return $this;
    }

}
