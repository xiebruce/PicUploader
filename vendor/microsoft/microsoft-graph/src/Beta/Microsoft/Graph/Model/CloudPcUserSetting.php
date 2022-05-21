<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcUserSetting File
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
* CloudPcUserSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcUserSetting extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time the setting was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time the setting was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CloudPcUserSetting
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The setting name displayed in the user interface.
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
    * The setting name displayed in the user interface.
    *
    * @param string $val The displayName
    *
    * @return CloudPcUserSetting
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The last date and time the setting was modified. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The last date and time the setting was modified. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CloudPcUserSetting
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the localAdminEnabled
    * Indicates whether the local admin option is enabled. Default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
    *
    * @return bool|null The localAdminEnabled
    */
    public function getLocalAdminEnabled()
    {
        if (array_key_exists("localAdminEnabled", $this->_propDict)) {
            return $this->_propDict["localAdminEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localAdminEnabled
    * Indicates whether the local admin option is enabled. Default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device.
    *
    * @param bool $val The localAdminEnabled
    *
    * @return CloudPcUserSetting
    */
    public function setLocalAdminEnabled($val)
    {
        $this->_propDict["localAdminEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the restorePointSetting
    * Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
    *
    * @return CloudPcRestorePointSetting|null The restorePointSetting
    */
    public function getRestorePointSetting()
    {
        if (array_key_exists("restorePointSetting", $this->_propDict)) {
            if (is_a($this->_propDict["restorePointSetting"], "\Beta\Microsoft\Graph\Model\CloudPcRestorePointSetting") || is_null($this->_propDict["restorePointSetting"])) {
                return $this->_propDict["restorePointSetting"];
            } else {
                $this->_propDict["restorePointSetting"] = new CloudPcRestorePointSetting($this->_propDict["restorePointSetting"]);
                return $this->_propDict["restorePointSetting"];
            }
        }
        return null;
    }

    /**
    * Sets the restorePointSetting
    * Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
    *
    * @param CloudPcRestorePointSetting $val The restorePointSetting
    *
    * @return CloudPcUserSetting
    */
    public function setRestorePointSetting($val)
    {
        $this->_propDict["restorePointSetting"] = $val;
        return $this;
    }

    /**
    * Gets the selfServiceEnabled
    * Indicates whether the self-service option is enabled. Default value is false. To enable the self-service option, change the setting to true. If the self-service option is enabled, the end user is allowed to perform some self-service operations, such as upgrading the Cloud PC through the end user portal.
    *
    * @return bool|null The selfServiceEnabled
    */
    public function getSelfServiceEnabled()
    {
        if (array_key_exists("selfServiceEnabled", $this->_propDict)) {
            return $this->_propDict["selfServiceEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the selfServiceEnabled
    * Indicates whether the self-service option is enabled. Default value is false. To enable the self-service option, change the setting to true. If the self-service option is enabled, the end user is allowed to perform some self-service operations, such as upgrading the Cloud PC through the end user portal.
    *
    * @param bool $val The selfServiceEnabled
    *
    * @return CloudPcUserSetting
    */
    public function setSelfServiceEnabled($val)
    {
        $this->_propDict["selfServiceEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the assignments
    * Represents the set of Microsoft 365 groups and security groups in Azure AD that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSettingample.
     *
     * @return array|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignments
    * Represents the set of Microsoft 365 groups and security groups in Azure AD that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSettingample.
    *
    * @param CloudPcUserSettingAssignment[] $val The assignments
    *
    * @return CloudPcUserSetting
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }

}
