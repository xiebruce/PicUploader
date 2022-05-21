<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcRestorePointSetting File
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
* CloudPcRestorePointSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcRestorePointSetting extends Entity
{
    /**
    * Gets the frequencyInHours
    * The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are 4, 6, 12, 16, and 24. The default frequency is 12 hours.
    *
    * @return int|null The frequencyInHours
    */
    public function getFrequencyInHours()
    {
        if (array_key_exists("frequencyInHours", $this->_propDict)) {
            return $this->_propDict["frequencyInHours"];
        } else {
            return null;
        }
    }

    /**
    * Sets the frequencyInHours
    * The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are 4, 6, 12, 16, and 24. The default frequency is 12 hours.
    *
    * @param int $val The value of the frequencyInHours
    *
    * @return CloudPcRestorePointSetting
    */
    public function setFrequencyInHours($val)
    {
        $this->_propDict["frequencyInHours"] = $val;
        return $this;
    }
    /**
    * Gets the userRestoreEnabled
    * If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users cannot use snapshots to restore the Cloud PC.
    *
    * @return bool|null The userRestoreEnabled
    */
    public function getUserRestoreEnabled()
    {
        if (array_key_exists("userRestoreEnabled", $this->_propDict)) {
            return $this->_propDict["userRestoreEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userRestoreEnabled
    * If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users cannot use snapshots to restore the Cloud PC.
    *
    * @param bool $val The value of the userRestoreEnabled
    *
    * @return CloudPcRestorePointSetting
    */
    public function setUserRestoreEnabled($val)
    {
        $this->_propDict["userRestoreEnabled"] = $val;
        return $this;
    }
}
