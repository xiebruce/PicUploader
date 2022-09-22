<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration File
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
* AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration extends DeviceConfiguration
{
    /**
    * Gets the certificateAccessType
    * Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
    *
    * @return AndroidDeviceOwnerCertificateAccessType|null The certificateAccessType
    */
    public function getCertificateAccessType()
    {
        if (array_key_exists("certificateAccessType", $this->_propDict)) {
            if (is_a($this->_propDict["certificateAccessType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerCertificateAccessType") || is_null($this->_propDict["certificateAccessType"])) {
                return $this->_propDict["certificateAccessType"];
            } else {
                $this->_propDict["certificateAccessType"] = new AndroidDeviceOwnerCertificateAccessType($this->_propDict["certificateAccessType"]);
                return $this->_propDict["certificateAccessType"];
            }
        }
        return null;
    }

    /**
    * Sets the certificateAccessType
    * Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
    *
    * @param AndroidDeviceOwnerCertificateAccessType $val The certificateAccessType
    *
    * @return AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration
    */
    public function setCertificateAccessType($val)
    {
        $this->_propDict["certificateAccessType"] = $val;
        return $this;
    }


     /**
     * Gets the silentCertificateAccessDetails
    * Certificate access information. This collection can contain a maximum of 50 elements.
     *
     * @return array|null The silentCertificateAccessDetails
     */
    public function getSilentCertificateAccessDetails()
    {
        if (array_key_exists("silentCertificateAccessDetails", $this->_propDict)) {
           return $this->_propDict["silentCertificateAccessDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the silentCertificateAccessDetails
    * Certificate access information. This collection can contain a maximum of 50 elements.
    *
    * @param AndroidDeviceOwnerSilentCertificateAccess[] $val The silentCertificateAccessDetails
    *
    * @return AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration
    */
    public function setSilentCertificateAccessDetails($val)
    {
        $this->_propDict["silentCertificateAccessDetails"] = $val;
        return $this;
    }

    /**
    * Gets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @return DeviceManagementDerivedCredentialSettings|null The derivedCredentialSettings
    */
    public function getDerivedCredentialSettings()
    {
        if (array_key_exists("derivedCredentialSettings", $this->_propDict)) {
            if (is_a($this->_propDict["derivedCredentialSettings"], "\Beta\Microsoft\Graph\Model\DeviceManagementDerivedCredentialSettings") || is_null($this->_propDict["derivedCredentialSettings"])) {
                return $this->_propDict["derivedCredentialSettings"];
            } else {
                $this->_propDict["derivedCredentialSettings"] = new DeviceManagementDerivedCredentialSettings($this->_propDict["derivedCredentialSettings"]);
                return $this->_propDict["derivedCredentialSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @param DeviceManagementDerivedCredentialSettings $val The derivedCredentialSettings
    *
    * @return AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration
    */
    public function setDerivedCredentialSettings($val)
    {
        $this->_propDict["derivedCredentialSettings"] = $val;
        return $this;
    }

}
