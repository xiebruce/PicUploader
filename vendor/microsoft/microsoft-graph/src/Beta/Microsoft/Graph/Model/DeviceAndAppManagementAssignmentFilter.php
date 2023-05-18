<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAndAppManagementAssignmentFilter File
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
* DeviceAndAppManagementAssignmentFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAndAppManagementAssignmentFilter extends Entity
{
    /**
    * Gets the assignmentFilterManagementType
    * Indicates filter is applied to either 'devices' or 'apps' management type. Possible values are devices, apps. Default filter will be applied to 'devices'. Possible values are: devices, apps, unknownFutureValue.
    *
    * @return AssignmentFilterManagementType|null The assignmentFilterManagementType
    */
    public function getAssignmentFilterManagementType()
    {
        if (array_key_exists("assignmentFilterManagementType", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentFilterManagementType"], "\Beta\Microsoft\Graph\Model\AssignmentFilterManagementType") || is_null($this->_propDict["assignmentFilterManagementType"])) {
                return $this->_propDict["assignmentFilterManagementType"];
            } else {
                $this->_propDict["assignmentFilterManagementType"] = new AssignmentFilterManagementType($this->_propDict["assignmentFilterManagementType"]);
                return $this->_propDict["assignmentFilterManagementType"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentFilterManagementType
    * Indicates filter is applied to either 'devices' or 'apps' management type. Possible values are devices, apps. Default filter will be applied to 'devices'. Possible values are: devices, apps, unknownFutureValue.
    *
    * @param AssignmentFilterManagementType $val The assignmentFilterManagementType
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setAssignmentFilterManagementType($val)
    {
        $this->_propDict["assignmentFilterManagementType"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The creation time of the assignment filter. The value cannot be modified and is automatically populated during new assignment filter process. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'.
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
    * The creation time of the assignment filter. The value cannot be modified and is automatically populated during new assignment filter process. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Optional description of the Assignment Filter.
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
    * Optional description of the Assignment Filter.
    *
    * @param string $val The description
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the Assignment Filter.
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
    * The name of the Assignment Filter.
    *
    * @param string $val The displayName
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Last modified time of the Assignment Filter. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
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
    * Last modified time of the Assignment Filter. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the payloads
    * Indicates associated assignments for a specific filter.
     *
     * @return array|null The payloads
     */
    public function getPayloads()
    {
        if (array_key_exists("payloads", $this->_propDict)) {
           return $this->_propDict["payloads"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloads
    * Indicates associated assignments for a specific filter.
    *
    * @param PayloadByFilter[] $val The payloads
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setPayloads($val)
    {
        $this->_propDict["payloads"] = $val;
        return $this;
    }

    /**
    * Gets the platform
    * Indicates filter is applied to which flatform. Possible values are android,androidForWork,iOS,macOS,windowsPhone81,windows81AndLater,windows10AndLater,androidWorkProfile, unknown, androidAOSP,androidMobileApplicationManagement, iOSMobileApplicationManagement. Default filter will be applied to 'unknown'. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown, androidAOSP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
    *
    * @return DevicePlatformType|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\DevicePlatformType") || is_null($this->_propDict["platform"])) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new DevicePlatformType($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * Indicates filter is applied to which flatform. Possible values are android,androidForWork,iOS,macOS,windowsPhone81,windows81AndLater,windows10AndLater,androidWorkProfile, unknown, androidAOSP,androidMobileApplicationManagement, iOSMobileApplicationManagement. Default filter will be applied to 'unknown'. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown, androidAOSP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
    *
    * @param DevicePlatformType $val The platform
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTags
    * Indicates role scope tags assigned for the assignment filter.
    *
    * @return array|null The roleScopeTags
    */
    public function getRoleScopeTags()
    {
        if (array_key_exists("roleScopeTags", $this->_propDict)) {
            return $this->_propDict["roleScopeTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTags
    * Indicates role scope tags assigned for the assignment filter.
    *
    * @param string[] $val The roleScopeTags
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setRoleScopeTags($val)
    {
        $this->_propDict["roleScopeTags"] = $val;
        return $this;
    }

    /**
    * Gets the rule
    * Rule definition of the assignment filter.
    *
    * @return string|null The rule
    */
    public function getRule()
    {
        if (array_key_exists("rule", $this->_propDict)) {
            return $this->_propDict["rule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rule
    * Rule definition of the assignment filter.
    *
    * @param string $val The rule
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setRule($val)
    {
        $this->_propDict["rule"] = $val;
        return $this;
    }

}
