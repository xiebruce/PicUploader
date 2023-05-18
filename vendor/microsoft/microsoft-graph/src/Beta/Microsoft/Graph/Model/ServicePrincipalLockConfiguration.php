<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipalLockConfiguration File
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
* ServicePrincipalLockConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipalLockConfiguration extends Entity
{
    /**
    * Gets the allProperties
    * Enables locking all sensitive properties. The sensitive properties are keyCredentials, passwordCredentials, and tokenEncryptionKeyId.
    *
    * @return bool|null The allProperties
    */
    public function getAllProperties()
    {
        if (array_key_exists("allProperties", $this->_propDict)) {
            return $this->_propDict["allProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allProperties
    * Enables locking all sensitive properties. The sensitive properties are keyCredentials, passwordCredentials, and tokenEncryptionKeyId.
    *
    * @param bool $val The value of the allProperties
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setAllProperties($val)
    {
        $this->_propDict["allProperties"] = $val;
        return $this;
    }
    /**
    * Gets the credentialsWithUsageSign
    * Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Sign.
    *
    * @return bool|null The credentialsWithUsageSign
    */
    public function getCredentialsWithUsageSign()
    {
        if (array_key_exists("credentialsWithUsageSign", $this->_propDict)) {
            return $this->_propDict["credentialsWithUsageSign"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialsWithUsageSign
    * Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Sign.
    *
    * @param bool $val The value of the credentialsWithUsageSign
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setCredentialsWithUsageSign($val)
    {
        $this->_propDict["credentialsWithUsageSign"] = $val;
        return $this;
    }
    /**
    * Gets the credentialsWithUsageVerify
    * Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Verify. This locks OAuth service principals.
    *
    * @return bool|null The credentialsWithUsageVerify
    */
    public function getCredentialsWithUsageVerify()
    {
        if (array_key_exists("credentialsWithUsageVerify", $this->_propDict)) {
            return $this->_propDict["credentialsWithUsageVerify"];
        } else {
            return null;
        }
    }

    /**
    * Sets the credentialsWithUsageVerify
    * Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Verify. This locks OAuth service principals.
    *
    * @param bool $val The value of the credentialsWithUsageVerify
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setCredentialsWithUsageVerify($val)
    {
        $this->_propDict["credentialsWithUsageVerify"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabled
    * Enables or disables service principal lock configuration. To allow the sensitive properties to be updated, update this property to false to disable the lock on the service principal.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Enables or disables service principal lock configuration. To allow the sensitive properties to be updated, update this property to false to disable the lock on the service principal.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the tokenEncryptionKeyId
    * Locks the tokenEncryptionKeyId property for modification on the service principal.
    *
    * @return bool|null The tokenEncryptionKeyId
    */
    public function getTokenEncryptionKeyId()
    {
        if (array_key_exists("tokenEncryptionKeyId", $this->_propDict)) {
            return $this->_propDict["tokenEncryptionKeyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenEncryptionKeyId
    * Locks the tokenEncryptionKeyId property for modification on the service principal.
    *
    * @param bool $val The value of the tokenEncryptionKeyId
    *
    * @return ServicePrincipalLockConfiguration
    */
    public function setTokenEncryptionKeyId($val)
    {
        $this->_propDict["tokenEncryptionKeyId"] = $val;
        return $this;
    }
}
