<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkloadAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* WorkloadAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkloadAction extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the actionId
    * The unique identifier for the workload action. Required. Read-only.
    *
    * @return string|null The actionId
    */
    public function getActionId()
    {
        if (array_key_exists("actionId", $this->_propDict)) {
            return $this->_propDict["actionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionId
    * The unique identifier for the workload action. Required. Read-only.
    *
    * @param string $val The value of the actionId
    *
    * @return WorkloadAction
    */
    public function setActionId($val)
    {
        $this->_propDict["actionId"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * The category for the workload action. Possible values are: automated, manual, unknownFutureValue. Optional. Read-only.
    *
    * @return WorkloadActionCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\ManagedTenants\Model\WorkloadActionCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new WorkloadActionCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The category for the workload action. Possible values are: automated, manual, unknownFutureValue. Optional. Read-only.
    *
    * @param WorkloadActionCategory $val The value to assign to the category
    *
    * @return WorkloadAction The WorkloadAction
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
         return $this;
    }
    /**
    * Gets the description
    * The description for the workload action. Optional. Read-only.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description for the workload action. Optional. Read-only.
    *
    * @param string $val The value of the description
    *
    * @return WorkloadAction
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name for the workload action. Optional. Read-only.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name for the workload action. Optional. Read-only.
    *
    * @param string $val The value of the displayName
    *
    * @return WorkloadAction
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the licenses
    *
    * @return string|null The licenses
    */
    public function getLicenses()
    {
        if (array_key_exists("licenses", $this->_propDict)) {
            return $this->_propDict["licenses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the licenses
    *
    * @param string $val The value of the licenses
    *
    * @return WorkloadAction
    */
    public function setLicenses($val)
    {
        $this->_propDict["licenses"] = $val;
        return $this;
    }
    /**
    * Gets the service
    * The service associated with workload action. Optional. Read-only.
    *
    * @return string|null The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    * The service associated with workload action. Optional. Read-only.
    *
    * @param string $val The value of the service
    *
    * @return WorkloadAction
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    * The collection of settings associated with the workload action. Optional. Read-only.
    *
    * @return Setting|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\ManagedTenants\Model\Setting") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new Setting($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    * The collection of settings associated with the workload action. Optional. Read-only.
    *
    * @param Setting $val The value to assign to the settings
    *
    * @return WorkloadAction The WorkloadAction
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
         return $this;
    }
}
