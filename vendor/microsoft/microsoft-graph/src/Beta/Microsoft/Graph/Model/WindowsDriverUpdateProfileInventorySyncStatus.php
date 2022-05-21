<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDriverUpdateProfileInventorySyncStatus File
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
* WindowsDriverUpdateProfileInventorySyncStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDriverUpdateProfileInventorySyncStatus extends Entity
{

    /**
    * Gets the driverInventorySyncState
    * The state of the latest sync. Possible values are: pending, success, failure.
    *
    * @return WindowsDriverUpdateProfileInventorySyncState|null The driverInventorySyncState
    */
    public function getDriverInventorySyncState()
    {
        if (array_key_exists("driverInventorySyncState", $this->_propDict)) {
            if (is_a($this->_propDict["driverInventorySyncState"], "\Beta\Microsoft\Graph\Model\WindowsDriverUpdateProfileInventorySyncState") || is_null($this->_propDict["driverInventorySyncState"])) {
                return $this->_propDict["driverInventorySyncState"];
            } else {
                $this->_propDict["driverInventorySyncState"] = new WindowsDriverUpdateProfileInventorySyncState($this->_propDict["driverInventorySyncState"]);
                return $this->_propDict["driverInventorySyncState"];
            }
        }
        return null;
    }

    /**
    * Sets the driverInventorySyncState
    * The state of the latest sync. Possible values are: pending, success, failure.
    *
    * @param WindowsDriverUpdateProfileInventorySyncState $val The value to assign to the driverInventorySyncState
    *
    * @return WindowsDriverUpdateProfileInventorySyncStatus The WindowsDriverUpdateProfileInventorySyncStatus
    */
    public function setDriverInventorySyncState($val)
    {
        $this->_propDict["driverInventorySyncState"] = $val;
         return $this;
    }

    /**
    * Gets the lastSuccessfulSyncDateTime
    * The last successful sync date and time in UTC.
    *
    * @return \DateTime|null The lastSuccessfulSyncDateTime
    */
    public function getLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("lastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSuccessfulSyncDateTime"], "\DateTime") || is_null($this->_propDict["lastSuccessfulSyncDateTime"])) {
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["lastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["lastSuccessfulSyncDateTime"]);
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSuccessfulSyncDateTime
    * The last successful sync date and time in UTC.
    *
    * @param \DateTime $val The value to assign to the lastSuccessfulSyncDateTime
    *
    * @return WindowsDriverUpdateProfileInventorySyncStatus The WindowsDriverUpdateProfileInventorySyncStatus
    */
    public function setLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["lastSuccessfulSyncDateTime"] = $val;
         return $this;
    }
}
