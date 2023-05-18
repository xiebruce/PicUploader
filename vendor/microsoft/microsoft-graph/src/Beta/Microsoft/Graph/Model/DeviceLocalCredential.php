<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceLocalCredential File
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
* DeviceLocalCredential class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceLocalCredential extends Entity
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceLocalCredential");
    }

    /**
    * Gets the accountName
    * The name of the local admin account for which LAPS is enabled.
    *
    * @return string|null The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountName
    * The name of the local admin account for which LAPS is enabled.
    *
    * @param string $val The value of the accountName
    *
    * @return DeviceLocalCredential
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    /**
    * Gets the accountSid
    * The SID of the local admin account for which LAPS is enabled.
    *
    * @return string|null The accountSid
    */
    public function getAccountSid()
    {
        if (array_key_exists("accountSid", $this->_propDict)) {
            return $this->_propDict["accountSid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountSid
    * The SID of the local admin account for which LAPS is enabled.
    *
    * @param string $val The value of the accountSid
    *
    * @return DeviceLocalCredential
    */
    public function setAccountSid($val)
    {
        $this->_propDict["accountSid"] = $val;
        return $this;
    }

    /**
    * Gets the backupDateTime
    * When the local adminstrator account credential for the device object was backed up to Azure Active Directory.
    *
    * @return \DateTime|null The backupDateTime
    */
    public function getBackupDateTime()
    {
        if (array_key_exists("backupDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["backupDateTime"], "\DateTime") || is_null($this->_propDict["backupDateTime"])) {
                return $this->_propDict["backupDateTime"];
            } else {
                $this->_propDict["backupDateTime"] = new \DateTime($this->_propDict["backupDateTime"]);
                return $this->_propDict["backupDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the backupDateTime
    * When the local adminstrator account credential for the device object was backed up to Azure Active Directory.
    *
    * @param \DateTime $val The value to assign to the backupDateTime
    *
    * @return DeviceLocalCredential The DeviceLocalCredential
    */
    public function setBackupDateTime($val)
    {
        $this->_propDict["backupDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the passwordBase64
    * The password for the local administrator account that is backed up to Azure Active Directory and returned as a base 64 encoded value.
    *
    * @return string|null The passwordBase64
    */
    public function getPasswordBase64()
    {
        if (array_key_exists("passwordBase64", $this->_propDict)) {
            return $this->_propDict["passwordBase64"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordBase64
    * The password for the local administrator account that is backed up to Azure Active Directory and returned as a base 64 encoded value.
    *
    * @param string $val The value of the passwordBase64
    *
    * @return DeviceLocalCredential
    */
    public function setPasswordBase64($val)
    {
        $this->_propDict["passwordBase64"] = $val;
        return $this;
    }
}
