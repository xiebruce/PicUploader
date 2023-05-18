<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceLocalCredentialInfo File
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
* DeviceLocalCredentialInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceLocalCredentialInfo extends Entity
{

     /**
     * Gets the credentials
    * The credentials of the device's local administrator account backed up to Azure Active Directory.
     *
     * @return array|null The credentials
     */
    public function getCredentials()
    {
        if (array_key_exists("credentials", $this->_propDict)) {
           return $this->_propDict["credentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentials
    * The credentials of the device's local administrator account backed up to Azure Active Directory.
    *
    * @param DeviceLocalCredential[] $val The credentials
    *
    * @return DeviceLocalCredentialInfo
    */
    public function setCredentials($val)
    {
        $this->_propDict["credentials"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * Display name of the device that the local credentials are associated with.
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * Display name of the device that the local credentials are associated with.
    *
    * @param string $val The deviceName
    *
    * @return DeviceLocalCredentialInfo
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the lastBackupDateTime
    * When the local administrator account credential was backed up to Azure Active Directory.
    *
    * @return \DateTime|null The lastBackupDateTime
    */
    public function getLastBackupDateTime()
    {
        if (array_key_exists("lastBackupDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastBackupDateTime"], "\DateTime") || is_null($this->_propDict["lastBackupDateTime"])) {
                return $this->_propDict["lastBackupDateTime"];
            } else {
                $this->_propDict["lastBackupDateTime"] = new \DateTime($this->_propDict["lastBackupDateTime"]);
                return $this->_propDict["lastBackupDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastBackupDateTime
    * When the local administrator account credential was backed up to Azure Active Directory.
    *
    * @param \DateTime $val The lastBackupDateTime
    *
    * @return DeviceLocalCredentialInfo
    */
    public function setLastBackupDateTime($val)
    {
        $this->_propDict["lastBackupDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the refreshDateTime
    * When the local administrator account credential will be refreshed and backed up to Azure Active Directory.
    *
    * @return \DateTime|null The refreshDateTime
    */
    public function getRefreshDateTime()
    {
        if (array_key_exists("refreshDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["refreshDateTime"], "\DateTime") || is_null($this->_propDict["refreshDateTime"])) {
                return $this->_propDict["refreshDateTime"];
            } else {
                $this->_propDict["refreshDateTime"] = new \DateTime($this->_propDict["refreshDateTime"]);
                return $this->_propDict["refreshDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the refreshDateTime
    * When the local administrator account credential will be refreshed and backed up to Azure Active Directory.
    *
    * @param \DateTime $val The refreshDateTime
    *
    * @return DeviceLocalCredentialInfo
    */
    public function setRefreshDateTime($val)
    {
        $this->_propDict["refreshDateTime"] = $val;
        return $this;
    }

}
