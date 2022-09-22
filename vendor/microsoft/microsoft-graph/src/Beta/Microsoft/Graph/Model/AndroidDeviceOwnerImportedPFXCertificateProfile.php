<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerImportedPFXCertificateProfile File
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
* AndroidDeviceOwnerImportedPFXCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerImportedPFXCertificateProfile extends AndroidDeviceOwnerCertificateProfileBase
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
    * @return AndroidDeviceOwnerImportedPFXCertificateProfile
    */
    public function setCertificateAccessType($val)
    {
        $this->_propDict["certificateAccessType"] = $val;
        return $this;
    }

    /**
    * Gets the intendedPurpose
    * Intended Purpose of the Certificate Profile - which could be Unassigned, SmimeEncryption, SmimeSigning etc. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @return IntendedPurpose|null The intendedPurpose
    */
    public function getIntendedPurpose()
    {
        if (array_key_exists("intendedPurpose", $this->_propDict)) {
            if (is_a($this->_propDict["intendedPurpose"], "\Beta\Microsoft\Graph\Model\IntendedPurpose") || is_null($this->_propDict["intendedPurpose"])) {
                return $this->_propDict["intendedPurpose"];
            } else {
                $this->_propDict["intendedPurpose"] = new IntendedPurpose($this->_propDict["intendedPurpose"]);
                return $this->_propDict["intendedPurpose"];
            }
        }
        return null;
    }

    /**
    * Sets the intendedPurpose
    * Intended Purpose of the Certificate Profile - which could be Unassigned, SmimeEncryption, SmimeSigning etc. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @param IntendedPurpose $val The intendedPurpose
    *
    * @return AndroidDeviceOwnerImportedPFXCertificateProfile
    */
    public function setIntendedPurpose($val)
    {
        $this->_propDict["intendedPurpose"] = $val;
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
    * @return AndroidDeviceOwnerImportedPFXCertificateProfile
    */
    public function setSilentCertificateAccessDetails($val)
    {
        $this->_propDict["silentCertificateAccessDetails"] = $val;
        return $this;
    }


     /**
     * Gets the managedDeviceCertificateStates
    * Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *
     * @return array|null The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists("managedDeviceCertificateStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceCertificateStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceCertificateStates
    * Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    *
    * @param ManagedDeviceCertificateState[] $val The managedDeviceCertificateStates
    *
    * @return AndroidDeviceOwnerImportedPFXCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
        $this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }

}
