<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceRegistrationPolicy File
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
* DeviceRegistrationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceRegistrationPolicy extends Entity
{
    /**
    * Gets the azureADJoin
    * Specifies the authorization policy for controlling registration of new devices using Azure AD Join within your organization. Required. For more information, see What is a device identity?.
    *
    * @return AzureAdJoinPolicy|null The azureADJoin
    */
    public function getAzureADJoin()
    {
        if (array_key_exists("azureADJoin", $this->_propDict)) {
            if (is_a($this->_propDict["azureADJoin"], "\Beta\Microsoft\Graph\Model\AzureAdJoinPolicy") || is_null($this->_propDict["azureADJoin"])) {
                return $this->_propDict["azureADJoin"];
            } else {
                $this->_propDict["azureADJoin"] = new AzureAdJoinPolicy($this->_propDict["azureADJoin"]);
                return $this->_propDict["azureADJoin"];
            }
        }
        return null;
    }

    /**
    * Sets the azureADJoin
    * Specifies the authorization policy for controlling registration of new devices using Azure AD Join within your organization. Required. For more information, see What is a device identity?.
    *
    * @param AzureAdJoinPolicy $val The azureADJoin
    *
    * @return DeviceRegistrationPolicy
    */
    public function setAzureADJoin($val)
    {
        $this->_propDict["azureADJoin"] = $val;
        return $this;
    }

    /**
    * Gets the azureADRegistration
    * Specifies the authorization policy for controlling registration of new devices using Azure AD registered within your organization. Required. For more information, see What is a device identity?.
    *
    * @return AzureADRegistrationPolicy|null The azureADRegistration
    */
    public function getAzureADRegistration()
    {
        if (array_key_exists("azureADRegistration", $this->_propDict)) {
            if (is_a($this->_propDict["azureADRegistration"], "\Beta\Microsoft\Graph\Model\AzureADRegistrationPolicy") || is_null($this->_propDict["azureADRegistration"])) {
                return $this->_propDict["azureADRegistration"];
            } else {
                $this->_propDict["azureADRegistration"] = new AzureADRegistrationPolicy($this->_propDict["azureADRegistration"]);
                return $this->_propDict["azureADRegistration"];
            }
        }
        return null;
    }

    /**
    * Sets the azureADRegistration
    * Specifies the authorization policy for controlling registration of new devices using Azure AD registered within your organization. Required. For more information, see What is a device identity?.
    *
    * @param AzureADRegistrationPolicy $val The azureADRegistration
    *
    * @return DeviceRegistrationPolicy
    */
    public function setAzureADRegistration($val)
    {
        $this->_propDict["azureADRegistration"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the device registration policy. It is always set to Tenant-wide policy that manages intial provisioning controls using quota restrictions, additional authentication and authorization checks. Read-only.
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
    * The description of the device registration policy. It is always set to Tenant-wide policy that manages intial provisioning controls using quota restrictions, additional authentication and authorization checks. Read-only.
    *
    * @param string $val The description
    *
    * @return DeviceRegistrationPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the device registration policy. It is always set to Device Registration Policy. Read-only.
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
    * The name of the device registration policy. It is always set to Device Registration Policy. Read-only.
    *
    * @param string $val The displayName
    *
    * @return DeviceRegistrationPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the localAdminPassword
    * Specifies the setting for Local Admin Password Solution (LAPS) within your organization.
    *
    * @return LocalAdminPasswordSettings|null The localAdminPassword
    */
    public function getLocalAdminPassword()
    {
        if (array_key_exists("localAdminPassword", $this->_propDict)) {
            if (is_a($this->_propDict["localAdminPassword"], "\Beta\Microsoft\Graph\Model\LocalAdminPasswordSettings") || is_null($this->_propDict["localAdminPassword"])) {
                return $this->_propDict["localAdminPassword"];
            } else {
                $this->_propDict["localAdminPassword"] = new LocalAdminPasswordSettings($this->_propDict["localAdminPassword"]);
                return $this->_propDict["localAdminPassword"];
            }
        }
        return null;
    }

    /**
    * Sets the localAdminPassword
    * Specifies the setting for Local Admin Password Solution (LAPS) within your organization.
    *
    * @param LocalAdminPasswordSettings $val The localAdminPassword
    *
    * @return DeviceRegistrationPolicy
    */
    public function setLocalAdminPassword($val)
    {
        $this->_propDict["localAdminPassword"] = $val;
        return $this;
    }

    /**
    * Gets the multiFactorAuthConfiguration
    * Specifies the authentication policy for a user to complete registration using Azure AD Join or Azure AD registered within your organization. The possible values are: 0 (meaning notRequired), 1 (meaning required), and 2 (meaning unknownFutureValue). The default value is 0.
    *
    * @return MultiFactorAuthConfiguration|null The multiFactorAuthConfiguration
    */
    public function getMultiFactorAuthConfiguration()
    {
        if (array_key_exists("multiFactorAuthConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["multiFactorAuthConfiguration"], "\Beta\Microsoft\Graph\Model\MultiFactorAuthConfiguration") || is_null($this->_propDict["multiFactorAuthConfiguration"])) {
                return $this->_propDict["multiFactorAuthConfiguration"];
            } else {
                $this->_propDict["multiFactorAuthConfiguration"] = new MultiFactorAuthConfiguration($this->_propDict["multiFactorAuthConfiguration"]);
                return $this->_propDict["multiFactorAuthConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the multiFactorAuthConfiguration
    * Specifies the authentication policy for a user to complete registration using Azure AD Join or Azure AD registered within your organization. The possible values are: 0 (meaning notRequired), 1 (meaning required), and 2 (meaning unknownFutureValue). The default value is 0.
    *
    * @param MultiFactorAuthConfiguration $val The multiFactorAuthConfiguration
    *
    * @return DeviceRegistrationPolicy
    */
    public function setMultiFactorAuthConfiguration($val)
    {
        $this->_propDict["multiFactorAuthConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the userDeviceQuota
    * Specifies the maximum number of devices that a user can have within your organization before blocking new device registrations. The default value is set to 50. If this property is not specified during the policy update operation, it is automatically reset to 0 to indicate that users are not allowed to join any devices.
    *
    * @return int|null The userDeviceQuota
    */
    public function getUserDeviceQuota()
    {
        if (array_key_exists("userDeviceQuota", $this->_propDict)) {
            return $this->_propDict["userDeviceQuota"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDeviceQuota
    * Specifies the maximum number of devices that a user can have within your organization before blocking new device registrations. The default value is set to 50. If this property is not specified during the policy update operation, it is automatically reset to 0 to indicate that users are not allowed to join any devices.
    *
    * @param int $val The userDeviceQuota
    *
    * @return DeviceRegistrationPolicy
    */
    public function setUserDeviceQuota($val)
    {
        $this->_propDict["userDeviceQuota"] = intval($val);
        return $this;
    }

}
