<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentConfiguration File
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
* DeviceEnrollmentConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentConfiguration extends Entity
{
    /**
    * Gets the createdDateTime
    * Created date time in UTC of the device enrollment configuration
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
    * Created date time in UTC of the device enrollment configuration
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the device enrollment configuration
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
    * The description of the device enrollment configuration
    *
    * @param string $val The description
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the deviceEnrollmentConfigurationType
    * Support for Enrollment Configuration Type
    *
    * @return DeviceEnrollmentConfigurationType|null The deviceEnrollmentConfigurationType
    */
    public function getDeviceEnrollmentConfigurationType()
    {
        if (array_key_exists("deviceEnrollmentConfigurationType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceEnrollmentConfigurationType"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentConfigurationType") || is_null($this->_propDict["deviceEnrollmentConfigurationType"])) {
                return $this->_propDict["deviceEnrollmentConfigurationType"];
            } else {
                $this->_propDict["deviceEnrollmentConfigurationType"] = new DeviceEnrollmentConfigurationType($this->_propDict["deviceEnrollmentConfigurationType"]);
                return $this->_propDict["deviceEnrollmentConfigurationType"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceEnrollmentConfigurationType
    * Support for Enrollment Configuration Type
    *
    * @param DeviceEnrollmentConfigurationType $val The deviceEnrollmentConfigurationType
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setDeviceEnrollmentConfigurationType($val)
    {
        $this->_propDict["deviceEnrollmentConfigurationType"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the device enrollment configuration
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
    * The display name of the device enrollment configuration
    *
    * @param string $val The displayName
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Last modified date time in UTC of the device enrollment configuration
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
    * Last modified date time in UTC of the device enrollment configuration
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the priority
    * Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
    *
    * @param int $val The priority
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * Optional role scope tags for the enrollment restrictions.
    *
    * @return array|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * Optional role scope tags for the enrollment restrictions.
    *
    * @param string[] $val The roleScopeTagIds
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The version of the device enrollment configuration
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The version of the device enrollment configuration
    *
    * @param int $val The version
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }


     /**
     * Gets the assignments
    * The list of group assignments for the device configuration profile
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
    * The list of group assignments for the device configuration profile
    *
    * @param EnrollmentConfigurationAssignment[] $val The assignments
    *
    * @return DeviceEnrollmentConfiguration
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }

}
