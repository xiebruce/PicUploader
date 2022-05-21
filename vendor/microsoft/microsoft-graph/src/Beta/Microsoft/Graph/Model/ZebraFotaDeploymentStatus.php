<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaDeploymentStatus File
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
* ZebraFotaDeploymentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaDeploymentStatus extends Entity
{
    /**
    * Gets the cancelRequested
    * A boolean that indicates if a cancellation was requested on the deployment. NOTE: A cancellation request does not guarantee that the deployment was canceled.
    *
    * @return bool|null The cancelRequested
    */
    public function getCancelRequested()
    {
        if (array_key_exists("cancelRequested", $this->_propDict)) {
            return $this->_propDict["cancelRequested"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cancelRequested
    * A boolean that indicates if a cancellation was requested on the deployment. NOTE: A cancellation request does not guarantee that the deployment was canceled.
    *
    * @param bool $val The value of the cancelRequested
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setCancelRequested($val)
    {
        $this->_propDict["cancelRequested"] = $val;
        return $this;
    }

    /**
    * Gets the completeOrCanceledDateTime
    * The date and time when this deployment was completed or canceled. The actual date time is determined by the value of state. If the state is canceled, this property holds the cancellation date/time. If the the state is completed, this property holds the completion date/time. If the deployment is not completed before the deployment end date, then completed date/time and end date/time are the same. This is always in the deployment timezone. Note: An installation that is in progress can continue past the deployment end date.
    *
    * @return \DateTime|null The completeOrCanceledDateTime
    */
    public function getCompleteOrCanceledDateTime()
    {
        if (array_key_exists("completeOrCanceledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completeOrCanceledDateTime"], "\DateTime") || is_null($this->_propDict["completeOrCanceledDateTime"])) {
                return $this->_propDict["completeOrCanceledDateTime"];
            } else {
                $this->_propDict["completeOrCanceledDateTime"] = new \DateTime($this->_propDict["completeOrCanceledDateTime"]);
                return $this->_propDict["completeOrCanceledDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completeOrCanceledDateTime
    * The date and time when this deployment was completed or canceled. The actual date time is determined by the value of state. If the state is canceled, this property holds the cancellation date/time. If the the state is completed, this property holds the completion date/time. If the deployment is not completed before the deployment end date, then completed date/time and end date/time are the same. This is always in the deployment timezone. Note: An installation that is in progress can continue past the deployment end date.
    *
    * @param \DateTime $val The value to assign to the completeOrCanceledDateTime
    *
    * @return ZebraFotaDeploymentStatus The ZebraFotaDeploymentStatus
    */
    public function setCompleteOrCanceledDateTime($val)
    {
        $this->_propDict["completeOrCanceledDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * Date and time when the deployment status was updated from Zebra
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * Date and time when the deployment status was updated from Zebra
    *
    * @param \DateTime $val The value to assign to the lastUpdatedDateTime
    *
    * @return ZebraFotaDeploymentStatus The ZebraFotaDeploymentStatus
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * See zebraFotaDeploymentState enum for possible values. Possible values are: pendingCreation, createFailed, created, inProgress, completed, pendingCancel, canceled, unknownFutureValue.
    *
    * @return ZebraFotaDeploymentState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\ZebraFotaDeploymentState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ZebraFotaDeploymentState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * See zebraFotaDeploymentState enum for possible values. Possible values are: pendingCreation, createFailed, created, inProgress, completed, pendingCancel, canceled, unknownFutureValue.
    *
    * @param ZebraFotaDeploymentState $val The value to assign to the state
    *
    * @return ZebraFotaDeploymentStatus The ZebraFotaDeploymentStatus
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
    /**
    * Gets the totalAwaitingInstall
    * An integer that indicates the total number of devices where installation was successful.
    *
    * @return int|null The totalAwaitingInstall
    */
    public function getTotalAwaitingInstall()
    {
        if (array_key_exists("totalAwaitingInstall", $this->_propDict)) {
            return $this->_propDict["totalAwaitingInstall"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalAwaitingInstall
    * An integer that indicates the total number of devices where installation was successful.
    *
    * @param int $val The value of the totalAwaitingInstall
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalAwaitingInstall($val)
    {
        $this->_propDict["totalAwaitingInstall"] = $val;
        return $this;
    }
    /**
    * Gets the totalCanceled
    * An integer that indicates the total number of devices where installation was canceled.
    *
    * @return int|null The totalCanceled
    */
    public function getTotalCanceled()
    {
        if (array_key_exists("totalCanceled", $this->_propDict)) {
            return $this->_propDict["totalCanceled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCanceled
    * An integer that indicates the total number of devices where installation was canceled.
    *
    * @param int $val The value of the totalCanceled
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalCanceled($val)
    {
        $this->_propDict["totalCanceled"] = $val;
        return $this;
    }
    /**
    * Gets the totalCreated
    * An integer that indicates the total number of devices that have a job in the CREATED state. Typically indicates jobs that did not reach the devices.
    *
    * @return int|null The totalCreated
    */
    public function getTotalCreated()
    {
        if (array_key_exists("totalCreated", $this->_propDict)) {
            return $this->_propDict["totalCreated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCreated
    * An integer that indicates the total number of devices that have a job in the CREATED state. Typically indicates jobs that did not reach the devices.
    *
    * @param int $val The value of the totalCreated
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalCreated($val)
    {
        $this->_propDict["totalCreated"] = $val;
        return $this;
    }
    /**
    * Gets the totalDevices
    * An integer that indicates the total number of devices in the deployment.
    *
    * @return int|null The totalDevices
    */
    public function getTotalDevices()
    {
        if (array_key_exists("totalDevices", $this->_propDict)) {
            return $this->_propDict["totalDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDevices
    * An integer that indicates the total number of devices in the deployment.
    *
    * @param int $val The value of the totalDevices
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalDevices($val)
    {
        $this->_propDict["totalDevices"] = $val;
        return $this;
    }
    /**
    * Gets the totalDownloading
    * An integer that indicates the total number of devices where installation was successful.
    *
    * @return int|null The totalDownloading
    */
    public function getTotalDownloading()
    {
        if (array_key_exists("totalDownloading", $this->_propDict)) {
            return $this->_propDict["totalDownloading"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDownloading
    * An integer that indicates the total number of devices where installation was successful.
    *
    * @param int $val The value of the totalDownloading
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalDownloading($val)
    {
        $this->_propDict["totalDownloading"] = $val;
        return $this;
    }
    /**
    * Gets the totalFailedDownload
    * An integer that indicates the total number of devices that have failed to download the new OS file.
    *
    * @return int|null The totalFailedDownload
    */
    public function getTotalFailedDownload()
    {
        if (array_key_exists("totalFailedDownload", $this->_propDict)) {
            return $this->_propDict["totalFailedDownload"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalFailedDownload
    * An integer that indicates the total number of devices that have failed to download the new OS file.
    *
    * @param int $val The value of the totalFailedDownload
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalFailedDownload($val)
    {
        $this->_propDict["totalFailedDownload"] = $val;
        return $this;
    }
    /**
    * Gets the totalFailedInstall
    * An integer that indicates the total number of devices that have failed to install the new OS file.
    *
    * @return int|null The totalFailedInstall
    */
    public function getTotalFailedInstall()
    {
        if (array_key_exists("totalFailedInstall", $this->_propDict)) {
            return $this->_propDict["totalFailedInstall"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalFailedInstall
    * An integer that indicates the total number of devices that have failed to install the new OS file.
    *
    * @param int $val The value of the totalFailedInstall
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalFailedInstall($val)
    {
        $this->_propDict["totalFailedInstall"] = $val;
        return $this;
    }
    /**
    * Gets the totalScheduled
    * An integer that indicates the total number of devices that received the json and are scheduled.
    *
    * @return int|null The totalScheduled
    */
    public function getTotalScheduled()
    {
        if (array_key_exists("totalScheduled", $this->_propDict)) {
            return $this->_propDict["totalScheduled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalScheduled
    * An integer that indicates the total number of devices that received the json and are scheduled.
    *
    * @param int $val The value of the totalScheduled
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalScheduled($val)
    {
        $this->_propDict["totalScheduled"] = $val;
        return $this;
    }
    /**
    * Gets the totalSucceededInstall
    * An integer that indicates the total number of devices where installation was successful.
    *
    * @return int|null The totalSucceededInstall
    */
    public function getTotalSucceededInstall()
    {
        if (array_key_exists("totalSucceededInstall", $this->_propDict)) {
            return $this->_propDict["totalSucceededInstall"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalSucceededInstall
    * An integer that indicates the total number of devices where installation was successful.
    *
    * @param int $val The value of the totalSucceededInstall
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalSucceededInstall($val)
    {
        $this->_propDict["totalSucceededInstall"] = $val;
        return $this;
    }
    /**
    * Gets the totalUnknown
    * An integer that indicates the total number of devices where no deployment status or end state has not received, even after the scheduled end date was reached.
    *
    * @return int|null The totalUnknown
    */
    public function getTotalUnknown()
    {
        if (array_key_exists("totalUnknown", $this->_propDict)) {
            return $this->_propDict["totalUnknown"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUnknown
    * An integer that indicates the total number of devices where no deployment status or end state has not received, even after the scheduled end date was reached.
    *
    * @param int $val The value of the totalUnknown
    *
    * @return ZebraFotaDeploymentStatus
    */
    public function setTotalUnknown($val)
    {
        $this->_propDict["totalUnknown"] = $val;
        return $this;
    }
}
