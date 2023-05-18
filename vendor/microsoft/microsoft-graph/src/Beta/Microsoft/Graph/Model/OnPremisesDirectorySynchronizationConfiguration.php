<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesDirectorySynchronizationConfiguration File
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
* OnPremisesDirectorySynchronizationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesDirectorySynchronizationConfiguration extends Entity
{

    /**
    * Gets the accidentalDeletionPrevention
    * Contains the accidental deletion prevention configuration for a tenant.
    *
    * @return OnPremisesAccidentalDeletionPrevention|null The accidentalDeletionPrevention
    */
    public function getAccidentalDeletionPrevention()
    {
        if (array_key_exists("accidentalDeletionPrevention", $this->_propDict)) {
            if (is_a($this->_propDict["accidentalDeletionPrevention"], "\Beta\Microsoft\Graph\Model\OnPremisesAccidentalDeletionPrevention") || is_null($this->_propDict["accidentalDeletionPrevention"])) {
                return $this->_propDict["accidentalDeletionPrevention"];
            } else {
                $this->_propDict["accidentalDeletionPrevention"] = new OnPremisesAccidentalDeletionPrevention($this->_propDict["accidentalDeletionPrevention"]);
                return $this->_propDict["accidentalDeletionPrevention"];
            }
        }
        return null;
    }

    /**
    * Sets the accidentalDeletionPrevention
    * Contains the accidental deletion prevention configuration for a tenant.
    *
    * @param OnPremisesAccidentalDeletionPrevention $val The value to assign to the accidentalDeletionPrevention
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setAccidentalDeletionPrevention($val)
    {
        $this->_propDict["accidentalDeletionPrevention"] = $val;
         return $this;
    }
    /**
    * Gets the anchorAttribute
    * The anchor attribute allows customers to customize the property used to create source anchors for synchronization enabled objects.
    *
    * @return string|null The anchorAttribute
    */
    public function getAnchorAttribute()
    {
        if (array_key_exists("anchorAttribute", $this->_propDict)) {
            return $this->_propDict["anchorAttribute"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anchorAttribute
    * The anchor attribute allows customers to customize the property used to create source anchors for synchronization enabled objects.
    *
    * @param string $val The value of the anchorAttribute
    *
    * @return OnPremisesDirectorySynchronizationConfiguration
    */
    public function setAnchorAttribute($val)
    {
        $this->_propDict["anchorAttribute"] = $val;
        return $this;
    }
    /**
    * Gets the applicationId
    * The identifier of the on-premises directory synchronization client application that is configured for the tenant.
    *
    * @return string|null The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationId
    * The identifier of the on-premises directory synchronization client application that is configured for the tenant.
    *
    * @param string $val The value of the applicationId
    *
    * @return OnPremisesDirectorySynchronizationConfiguration
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }

    /**
    * Gets the currentExportData
    * Data for the current export run.
    *
    * @return OnPremisesCurrentExportData|null The currentExportData
    */
    public function getCurrentExportData()
    {
        if (array_key_exists("currentExportData", $this->_propDict)) {
            if (is_a($this->_propDict["currentExportData"], "\Beta\Microsoft\Graph\Model\OnPremisesCurrentExportData") || is_null($this->_propDict["currentExportData"])) {
                return $this->_propDict["currentExportData"];
            } else {
                $this->_propDict["currentExportData"] = new OnPremisesCurrentExportData($this->_propDict["currentExportData"]);
                return $this->_propDict["currentExportData"];
            }
        }
        return null;
    }

    /**
    * Sets the currentExportData
    * Data for the current export run.
    *
    * @param OnPremisesCurrentExportData $val The value to assign to the currentExportData
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setCurrentExportData($val)
    {
        $this->_propDict["currentExportData"] = $val;
         return $this;
    }

    /**
    * Gets the customerRequestedSynchronizationInterval
    * Interval of time that the customer requested the sync client waits between sync cycles.
    *
    * @return \DateInterval|null The customerRequestedSynchronizationInterval
    */
    public function getCustomerRequestedSynchronizationInterval()
    {
        if (array_key_exists("customerRequestedSynchronizationInterval", $this->_propDict)) {
            if (is_a($this->_propDict["customerRequestedSynchronizationInterval"], "\DateInterval") || is_null($this->_propDict["customerRequestedSynchronizationInterval"])) {
                return $this->_propDict["customerRequestedSynchronizationInterval"];
            } else {
                $this->_propDict["customerRequestedSynchronizationInterval"] = new \DateInterval($this->_propDict["customerRequestedSynchronizationInterval"]);
                return $this->_propDict["customerRequestedSynchronizationInterval"];
            }
        }
        return null;
    }

    /**
    * Sets the customerRequestedSynchronizationInterval
    * Interval of time that the customer requested the sync client waits between sync cycles.
    *
    * @param \DateInterval $val The value to assign to the customerRequestedSynchronizationInterval
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setCustomerRequestedSynchronizationInterval($val)
    {
        $this->_propDict["customerRequestedSynchronizationInterval"] = $val;
         return $this;
    }
    /**
    * Gets the synchronizationClientVersion
    * Indicates the version of the on-premises directory synchronization application.
    *
    * @return string|null The synchronizationClientVersion
    */
    public function getSynchronizationClientVersion()
    {
        if (array_key_exists("synchronizationClientVersion", $this->_propDict)) {
            return $this->_propDict["synchronizationClientVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the synchronizationClientVersion
    * Indicates the version of the on-premises directory synchronization application.
    *
    * @param string $val The value of the synchronizationClientVersion
    *
    * @return OnPremisesDirectorySynchronizationConfiguration
    */
    public function setSynchronizationClientVersion($val)
    {
        $this->_propDict["synchronizationClientVersion"] = $val;
        return $this;
    }

    /**
    * Gets the synchronizationInterval
    * Interval of time the sync client should honor between sync cycles
    *
    * @return \DateInterval|null The synchronizationInterval
    */
    public function getSynchronizationInterval()
    {
        if (array_key_exists("synchronizationInterval", $this->_propDict)) {
            if (is_a($this->_propDict["synchronizationInterval"], "\DateInterval") || is_null($this->_propDict["synchronizationInterval"])) {
                return $this->_propDict["synchronizationInterval"];
            } else {
                $this->_propDict["synchronizationInterval"] = new \DateInterval($this->_propDict["synchronizationInterval"]);
                return $this->_propDict["synchronizationInterval"];
            }
        }
        return null;
    }

    /**
    * Sets the synchronizationInterval
    * Interval of time the sync client should honor between sync cycles
    *
    * @param \DateInterval $val The value to assign to the synchronizationInterval
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setSynchronizationInterval($val)
    {
        $this->_propDict["synchronizationInterval"] = $val;
         return $this;
    }

    /**
    * Gets the writebackConfiguration
    * Configuration to control how cloud created or owned objects are synchronized back to the on-premises directory.
    *
    * @return OnPremisesWritebackConfiguration|null The writebackConfiguration
    */
    public function getWritebackConfiguration()
    {
        if (array_key_exists("writebackConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["writebackConfiguration"], "\Beta\Microsoft\Graph\Model\OnPremisesWritebackConfiguration") || is_null($this->_propDict["writebackConfiguration"])) {
                return $this->_propDict["writebackConfiguration"];
            } else {
                $this->_propDict["writebackConfiguration"] = new OnPremisesWritebackConfiguration($this->_propDict["writebackConfiguration"]);
                return $this->_propDict["writebackConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the writebackConfiguration
    * Configuration to control how cloud created or owned objects are synchronized back to the on-premises directory.
    *
    * @param OnPremisesWritebackConfiguration $val The value to assign to the writebackConfiguration
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setWritebackConfiguration($val)
    {
        $this->_propDict["writebackConfiguration"] = $val;
         return $this;
    }
}
