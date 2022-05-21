<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceScope File
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
* UserExperienceAnalyticsDeviceScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceScope extends Entity
{
    /**
    * Gets the createdDateTime
    * Indicates the creation date and time for the custom device scope.
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
    * Indicates the creation date and time for the custom device scope.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deviceScopeName
    * The name of the user experience analytics device Scope configuration.
    *
    * @return string|null The deviceScopeName
    */
    public function getDeviceScopeName()
    {
        if (array_key_exists("deviceScopeName", $this->_propDict)) {
            return $this->_propDict["deviceScopeName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceScopeName
    * The name of the user experience analytics device Scope configuration.
    *
    * @param string $val The deviceScopeName
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setDeviceScopeName($val)
    {
        $this->_propDict["deviceScopeName"] = $val;
        return $this;
    }

    /**
    * Gets the enabled
    * Indicates whether a device scope is enabled or disabled. When TRUE, the device scope is enabled. When FALSE, the device scope is disabled. Default value is FALSE.
    *
    * @return bool|null The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    * Indicates whether a device scope is enabled or disabled. When TRUE, the device scope is enabled. When FALSE, the device scope is disabled. Default value is FALSE.
    *
    * @param bool $val The enabled
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isBuiltIn
    * Indicates whether the device scope configuration is built-in or custom. When TRUE, the device scope configuration is built-in. When FALSE, the device scope configuration is custom. Default value is FALSE.
    *
    * @return bool|null The isBuiltIn
    */
    public function getIsBuiltIn()
    {
        if (array_key_exists("isBuiltIn", $this->_propDict)) {
            return $this->_propDict["isBuiltIn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBuiltIn
    * Indicates whether the device scope configuration is built-in or custom. When TRUE, the device scope configuration is built-in. When FALSE, the device scope configuration is custom. Default value is FALSE.
    *
    * @param bool $val The isBuiltIn
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setIsBuiltIn($val)
    {
        $this->_propDict["isBuiltIn"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Indicates the last updated date and time for the custom device scope.
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
    * Indicates the last updated date and time for the custom device scope.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the operator
    * Device scope configuration query operator. Possible values are: equals, notEquals, contains, notContains, greaterThan, lessThan. Default value: equals.
    *
    * @return DeviceScopeOperator|null The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\Model\DeviceScopeOperator") || is_null($this->_propDict["operator"])) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new DeviceScopeOperator($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * Device scope configuration query operator. Possible values are: equals, notEquals, contains, notContains, greaterThan, lessThan. Default value: equals.
    *
    * @param DeviceScopeOperator $val The operator
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
        return $this;
    }

    /**
    * Gets the ownerId
    * The unique identifier of the person (admin) who created the device scope configuration.
    *
    * @return string|null The ownerId
    */
    public function getOwnerId()
    {
        if (array_key_exists("ownerId", $this->_propDict)) {
            return $this->_propDict["ownerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownerId
    * The unique identifier of the person (admin) who created the device scope configuration.
    *
    * @param string $val The ownerId
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setOwnerId($val)
    {
        $this->_propDict["ownerId"] = $val;
        return $this;
    }

    /**
    * Gets the parameter
    * Device scope configuration parameter. It will be extended in future to add more parameter. Eg: device scope parameter can be OS version, Disk Type, Device manufacturer, device model or Scope tag. Default value: scopeTag.
    *
    * @return DeviceScopeParameter|null The parameter
    */
    public function getParameter()
    {
        if (array_key_exists("parameter", $this->_propDict)) {
            if (is_a($this->_propDict["parameter"], "\Beta\Microsoft\Graph\Model\DeviceScopeParameter") || is_null($this->_propDict["parameter"])) {
                return $this->_propDict["parameter"];
            } else {
                $this->_propDict["parameter"] = new DeviceScopeParameter($this->_propDict["parameter"]);
                return $this->_propDict["parameter"];
            }
        }
        return null;
    }

    /**
    * Sets the parameter
    * Device scope configuration parameter. It will be extended in future to add more parameter. Eg: device scope parameter can be OS version, Disk Type, Device manufacturer, device model or Scope tag. Default value: scopeTag.
    *
    * @param DeviceScopeParameter $val The parameter
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setParameter($val)
    {
        $this->_propDict["parameter"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates the device scope status after the device scope has been enabled. Possible values are: none, computing, insufficientData or completed. Default value is none.
    *
    * @return DeviceScopeStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DeviceScopeStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DeviceScopeStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the device scope status after the device scope has been enabled. Possible values are: none, computing, insufficientData or completed. Default value is none.
    *
    * @param DeviceScopeStatus $val The status
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the value
    * The device scope configuration query clause value.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The device scope configuration query clause value.
    *
    * @param string $val The value
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }

    /**
    * Gets the valueObjectId
    * The unique identifier for a user device scope tag Id used for the creation of device scope configuration.
    *
    * @return string|null The valueObjectId
    */
    public function getValueObjectId()
    {
        if (array_key_exists("valueObjectId", $this->_propDict)) {
            return $this->_propDict["valueObjectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the valueObjectId
    * The unique identifier for a user device scope tag Id used for the creation of device scope configuration.
    *
    * @param string $val The valueObjectId
    *
    * @return UserExperienceAnalyticsDeviceScope
    */
    public function setValueObjectId($val)
    {
        $this->_propDict["valueObjectId"] = $val;
        return $this;
    }

}
