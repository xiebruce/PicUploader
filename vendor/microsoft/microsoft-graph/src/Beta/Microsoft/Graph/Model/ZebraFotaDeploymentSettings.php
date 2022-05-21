<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaDeploymentSettings File
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
* ZebraFotaDeploymentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaDeploymentSettings extends Entity
{
    /**
    * Gets the batteryRuleMinimumBatteryLevelPercentage
    * Minimum battery level (%) required for both download and installation. Default: -1 (System defaults). Maximum is 100.
    *
    * @return int|null The batteryRuleMinimumBatteryLevelPercentage
    */
    public function getBatteryRuleMinimumBatteryLevelPercentage()
    {
        if (array_key_exists("batteryRuleMinimumBatteryLevelPercentage", $this->_propDict)) {
            return $this->_propDict["batteryRuleMinimumBatteryLevelPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryRuleMinimumBatteryLevelPercentage
    * Minimum battery level (%) required for both download and installation. Default: -1 (System defaults). Maximum is 100.
    *
    * @param int $val The value of the batteryRuleMinimumBatteryLevelPercentage
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setBatteryRuleMinimumBatteryLevelPercentage($val)
    {
        $this->_propDict["batteryRuleMinimumBatteryLevelPercentage"] = $val;
        return $this;
    }
    /**
    * Gets the batteryRuleRequireCharger
    * Flag indicating if charger is required. When set to false, the client can install updates whether the device is in or out of the charger. Applied only for installation. Defaults to false.
    *
    * @return bool|null The batteryRuleRequireCharger
    */
    public function getBatteryRuleRequireCharger()
    {
        if (array_key_exists("batteryRuleRequireCharger", $this->_propDict)) {
            return $this->_propDict["batteryRuleRequireCharger"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryRuleRequireCharger
    * Flag indicating if charger is required. When set to false, the client can install updates whether the device is in or out of the charger. Applied only for installation. Defaults to false.
    *
    * @param bool $val The value of the batteryRuleRequireCharger
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setBatteryRuleRequireCharger($val)
    {
        $this->_propDict["batteryRuleRequireCharger"] = $val;
        return $this;
    }
    /**
    * Gets the deviceModel
    * Deploy update for devices with this model only.
    *
    * @return string|null The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModel
    * Deploy update for devices with this model only.
    *
    * @param string $val The value of the deviceModel
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }

    /**
    * Gets the downloadRuleNetworkType
    * Download network type as described in 'zebraFotaNetworkType'. Default: any. Possible values are: any, wifi, cellular, wifiAndCellular, unknownFutureValue.
    *
    * @return ZebraFotaNetworkType|null The downloadRuleNetworkType
    */
    public function getDownloadRuleNetworkType()
    {
        if (array_key_exists("downloadRuleNetworkType", $this->_propDict)) {
            if (is_a($this->_propDict["downloadRuleNetworkType"], "\Beta\Microsoft\Graph\Model\ZebraFotaNetworkType") || is_null($this->_propDict["downloadRuleNetworkType"])) {
                return $this->_propDict["downloadRuleNetworkType"];
            } else {
                $this->_propDict["downloadRuleNetworkType"] = new ZebraFotaNetworkType($this->_propDict["downloadRuleNetworkType"]);
                return $this->_propDict["downloadRuleNetworkType"];
            }
        }
        return null;
    }

    /**
    * Sets the downloadRuleNetworkType
    * Download network type as described in 'zebraFotaNetworkType'. Default: any. Possible values are: any, wifi, cellular, wifiAndCellular, unknownFutureValue.
    *
    * @param ZebraFotaNetworkType $val The value to assign to the downloadRuleNetworkType
    *
    * @return ZebraFotaDeploymentSettings The ZebraFotaDeploymentSettings
    */
    public function setDownloadRuleNetworkType($val)
    {
        $this->_propDict["downloadRuleNetworkType"] = $val;
         return $this;
    }

    /**
    * Gets the downloadRuleStartDateTime
    * Date and time in the device time zone when the download will start (e.g., 2018-07-25T10:20:32). The default value is UTC now and the maximum is 10 days from deployment creation.
    *
    * @return \DateTime|null The downloadRuleStartDateTime
    */
    public function getDownloadRuleStartDateTime()
    {
        if (array_key_exists("downloadRuleStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["downloadRuleStartDateTime"], "\DateTime") || is_null($this->_propDict["downloadRuleStartDateTime"])) {
                return $this->_propDict["downloadRuleStartDateTime"];
            } else {
                $this->_propDict["downloadRuleStartDateTime"] = new \DateTime($this->_propDict["downloadRuleStartDateTime"]);
                return $this->_propDict["downloadRuleStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the downloadRuleStartDateTime
    * Date and time in the device time zone when the download will start (e.g., 2018-07-25T10:20:32). The default value is UTC now and the maximum is 10 days from deployment creation.
    *
    * @param \DateTime $val The value to assign to the downloadRuleStartDateTime
    *
    * @return ZebraFotaDeploymentSettings The ZebraFotaDeploymentSettings
    */
    public function setDownloadRuleStartDateTime($val)
    {
        $this->_propDict["downloadRuleStartDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the firmwareTargetBoardSupportPackageVersion
    * Deployment's Board Support Package (BSP. E.g.: '01.18.02.00'). Required only for custom update type.
    *
    * @return string|null The firmwareTargetBoardSupportPackageVersion
    */
    public function getFirmwareTargetBoardSupportPackageVersion()
    {
        if (array_key_exists("firmwareTargetBoardSupportPackageVersion", $this->_propDict)) {
            return $this->_propDict["firmwareTargetBoardSupportPackageVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firmwareTargetBoardSupportPackageVersion
    * Deployment's Board Support Package (BSP. E.g.: '01.18.02.00'). Required only for custom update type.
    *
    * @param string $val The value of the firmwareTargetBoardSupportPackageVersion
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setFirmwareTargetBoardSupportPackageVersion($val)
    {
        $this->_propDict["firmwareTargetBoardSupportPackageVersion"] = $val;
        return $this;
    }
    /**
    * Gets the firmwareTargetOsVersion
    * Target OS Version (e.g.: '8.1.0'). Required only for custom update type.
    *
    * @return string|null The firmwareTargetOsVersion
    */
    public function getFirmwareTargetOsVersion()
    {
        if (array_key_exists("firmwareTargetOsVersion", $this->_propDict)) {
            return $this->_propDict["firmwareTargetOsVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firmwareTargetOsVersion
    * Target OS Version (e.g.: '8.1.0'). Required only for custom update type.
    *
    * @param string $val The value of the firmwareTargetOsVersion
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setFirmwareTargetOsVersion($val)
    {
        $this->_propDict["firmwareTargetOsVersion"] = $val;
        return $this;
    }
    /**
    * Gets the firmwareTargetPatch
    * Target patch name (e.g.: 'U06'). Required only for custom update type.
    *
    * @return string|null The firmwareTargetPatch
    */
    public function getFirmwareTargetPatch()
    {
        if (array_key_exists("firmwareTargetPatch", $this->_propDict)) {
            return $this->_propDict["firmwareTargetPatch"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firmwareTargetPatch
    * Target patch name (e.g.: 'U06'). Required only for custom update type.
    *
    * @param string $val The value of the firmwareTargetPatch
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setFirmwareTargetPatch($val)
    {
        $this->_propDict["firmwareTargetPatch"] = $val;
        return $this;
    }

    /**
    * Gets the installRuleStartDateTime
    * Date and time in device time zone when the install will start. Default - download startDate if configured, otherwise defaults to NOW. Ignored when deployment update type was set to auto.
    *
    * @return \DateTime|null The installRuleStartDateTime
    */
    public function getInstallRuleStartDateTime()
    {
        if (array_key_exists("installRuleStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["installRuleStartDateTime"], "\DateTime") || is_null($this->_propDict["installRuleStartDateTime"])) {
                return $this->_propDict["installRuleStartDateTime"];
            } else {
                $this->_propDict["installRuleStartDateTime"] = new \DateTime($this->_propDict["installRuleStartDateTime"]);
                return $this->_propDict["installRuleStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the installRuleStartDateTime
    * Date and time in device time zone when the install will start. Default - download startDate if configured, otherwise defaults to NOW. Ignored when deployment update type was set to auto.
    *
    * @param \DateTime $val The value to assign to the installRuleStartDateTime
    *
    * @return ZebraFotaDeploymentSettings The ZebraFotaDeploymentSettings
    */
    public function setInstallRuleStartDateTime($val)
    {
        $this->_propDict["installRuleStartDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the installRuleWindowEndTime
    * Time of day after which the install cannot start. Possible range is 00:30:00 to 23:59:59. Should be greater than 'installRuleWindowStartTime' by 30 mins. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 23:59:59. Respected for all values of update type, including AUTO.
    *
    * @return TimeOfDay|null The installRuleWindowEndTime
    */
    public function getInstallRuleWindowEndTime()
    {
        if (array_key_exists("installRuleWindowEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["installRuleWindowEndTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["installRuleWindowEndTime"])) {
                return $this->_propDict["installRuleWindowEndTime"];
            } else {
                $this->_propDict["installRuleWindowEndTime"] = new TimeOfDay($this->_propDict["installRuleWindowEndTime"]);
                return $this->_propDict["installRuleWindowEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the installRuleWindowEndTime
    * Time of day after which the install cannot start. Possible range is 00:30:00 to 23:59:59. Should be greater than 'installRuleWindowStartTime' by 30 mins. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 23:59:59. Respected for all values of update type, including AUTO.
    *
    * @param TimeOfDay $val The value to assign to the installRuleWindowEndTime
    *
    * @return ZebraFotaDeploymentSettings The ZebraFotaDeploymentSettings
    */
    public function setInstallRuleWindowEndTime($val)
    {
        $this->_propDict["installRuleWindowEndTime"] = $val;
         return $this;
    }

    /**
    * Gets the installRuleWindowStartTime
    * Time of day (00:00:00 - 23:30:00) when installation should begin. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 00:00:00. Respected for all values of update type, including AUTO.
    *
    * @return TimeOfDay|null The installRuleWindowStartTime
    */
    public function getInstallRuleWindowStartTime()
    {
        if (array_key_exists("installRuleWindowStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["installRuleWindowStartTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["installRuleWindowStartTime"])) {
                return $this->_propDict["installRuleWindowStartTime"];
            } else {
                $this->_propDict["installRuleWindowStartTime"] = new TimeOfDay($this->_propDict["installRuleWindowStartTime"]);
                return $this->_propDict["installRuleWindowStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the installRuleWindowStartTime
    * Time of day (00:00:00 - 23:30:00) when installation should begin. The time is expressed in a 24-hour format, as hh:mm, and is in the device time zone. Default - 00:00:00. Respected for all values of update type, including AUTO.
    *
    * @param TimeOfDay $val The value to assign to the installRuleWindowStartTime
    *
    * @return ZebraFotaDeploymentSettings The ZebraFotaDeploymentSettings
    */
    public function setInstallRuleWindowStartTime($val)
    {
        $this->_propDict["installRuleWindowStartTime"] = $val;
         return $this;
    }
    /**
    * Gets the scheduleDurationInDays
    * Maximum 28 days. Default is 28 days. Sequence of dates are: 1) Download start date. 2) Install start date. 3) Schedule end date. If any of the values are not provided, the date provided in the preceding step of the sequence is used. If no values are provided, the string value of the current UTC is used.
    *
    * @return int|null The scheduleDurationInDays
    */
    public function getScheduleDurationInDays()
    {
        if (array_key_exists("scheduleDurationInDays", $this->_propDict)) {
            return $this->_propDict["scheduleDurationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scheduleDurationInDays
    * Maximum 28 days. Default is 28 days. Sequence of dates are: 1) Download start date. 2) Install start date. 3) Schedule end date. If any of the values are not provided, the date provided in the preceding step of the sequence is used. If no values are provided, the string value of the current UTC is used.
    *
    * @param int $val The value of the scheduleDurationInDays
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setScheduleDurationInDays($val)
    {
        $this->_propDict["scheduleDurationInDays"] = $val;
        return $this;
    }

    /**
    * Gets the scheduleMode
    * Deployment installation schedule mode. Default is installNow. All scheduled deployments date and time are in the device’s timezone. For Install Now, the date and time are in UTC (same date and time anywhere in the world). Possible values are: installNow, scheduled, unknownFutureValue.
    *
    * @return ZebraFotaScheduleMode|null The scheduleMode
    */
    public function getScheduleMode()
    {
        if (array_key_exists("scheduleMode", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleMode"], "\Beta\Microsoft\Graph\Model\ZebraFotaScheduleMode") || is_null($this->_propDict["scheduleMode"])) {
                return $this->_propDict["scheduleMode"];
            } else {
                $this->_propDict["scheduleMode"] = new ZebraFotaScheduleMode($this->_propDict["scheduleMode"]);
                return $this->_propDict["scheduleMode"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduleMode
    * Deployment installation schedule mode. Default is installNow. All scheduled deployments date and time are in the device’s timezone. For Install Now, the date and time are in UTC (same date and time anywhere in the world). Possible values are: installNow, scheduled, unknownFutureValue.
    *
    * @param ZebraFotaScheduleMode $val The value to assign to the scheduleMode
    *
    * @return ZebraFotaDeploymentSettings The ZebraFotaDeploymentSettings
    */
    public function setScheduleMode($val)
    {
        $this->_propDict["scheduleMode"] = $val;
         return $this;
    }
    /**
    * Gets the timeZoneOffsetInMinutes
    * This attribute indicates the deployment time offset (e.g.180 represents an offset of +03:00, and -270 represents an offset of -04:30). The time offset is the time timezone where the devices are located. The deployment start and end data uses this timezone
    *
    * @return int|null The timeZoneOffsetInMinutes
    */
    public function getTimeZoneOffsetInMinutes()
    {
        if (array_key_exists("timeZoneOffsetInMinutes", $this->_propDict)) {
            return $this->_propDict["timeZoneOffsetInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZoneOffsetInMinutes
    * This attribute indicates the deployment time offset (e.g.180 represents an offset of +03:00, and -270 represents an offset of -04:30). The time offset is the time timezone where the devices are located. The deployment start and end data uses this timezone
    *
    * @param int $val The value of the timeZoneOffsetInMinutes
    *
    * @return ZebraFotaDeploymentSettings
    */
    public function setTimeZoneOffsetInMinutes($val)
    {
        $this->_propDict["timeZoneOffsetInMinutes"] = $val;
        return $this;
    }

    /**
    * Gets the updateType
    * The deployment's update type. Possible values are custom, latest, and auto. When custom mode is set, the request must provide artifact values. When latest type is set, the latest released update becomes the target OS. If latest is specified, the firmware target values are not required. Note: latest may update the device to a new Android version. When the value is set to auto, the device always looks for the latest package available and tries to update whenever a new package is available. This continues until the admin cancels the auto update. While other modes return an ID starting with FOTA-x, auto mode returns an ID starting with AUTO-x. Possible values are: custom, latest, auto, unknownFutureValue.
    *
    * @return ZebraFotaUpdateType|null The updateType
    */
    public function getUpdateType()
    {
        if (array_key_exists("updateType", $this->_propDict)) {
            if (is_a($this->_propDict["updateType"], "\Beta\Microsoft\Graph\Model\ZebraFotaUpdateType") || is_null($this->_propDict["updateType"])) {
                return $this->_propDict["updateType"];
            } else {
                $this->_propDict["updateType"] = new ZebraFotaUpdateType($this->_propDict["updateType"]);
                return $this->_propDict["updateType"];
            }
        }
        return null;
    }

    /**
    * Sets the updateType
    * The deployment's update type. Possible values are custom, latest, and auto. When custom mode is set, the request must provide artifact values. When latest type is set, the latest released update becomes the target OS. If latest is specified, the firmware target values are not required. Note: latest may update the device to a new Android version. When the value is set to auto, the device always looks for the latest package available and tries to update whenever a new package is available. This continues until the admin cancels the auto update. While other modes return an ID starting with FOTA-x, auto mode returns an ID starting with AUTO-x. Possible values are: custom, latest, auto, unknownFutureValue.
    *
    * @param ZebraFotaUpdateType $val The value to assign to the updateType
    *
    * @return ZebraFotaDeploymentSettings The ZebraFotaDeploymentSettings
    */
    public function setUpdateType($val)
    {
        $this->_propDict["updateType"] = $val;
         return $this;
    }
}
