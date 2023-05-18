<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerEnrollmentProfile File
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
* AndroidDeviceOwnerEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerEnrollmentProfile extends Entity
{
    /**
    * Gets the accountId
    * Tenant GUID the enrollment profile belongs to.
    *
    * @return string|null The accountId
    */
    public function getAccountId()
    {
        if (array_key_exists("accountId", $this->_propDict)) {
            return $this->_propDict["accountId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountId
    * Tenant GUID the enrollment profile belongs to.
    *
    * @param string $val The accountId
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setAccountId($val)
    {
        $this->_propDict["accountId"] = $val;
        return $this;
    }

    /**
    * Gets the configureWifi
    * Boolean that indicates that the Wi-Fi network should be configured during device provisioning. When set to TRUE, device provisioning will use Wi-Fi related properties to automatically connect to Wi-Fi networks. When set to FALSE or undefined, other Wi-Fi related properties will be ignored. Default value is TRUE. Returned by default.
    *
    * @return bool|null The configureWifi
    */
    public function getConfigureWifi()
    {
        if (array_key_exists("configureWifi", $this->_propDict)) {
            return $this->_propDict["configureWifi"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configureWifi
    * Boolean that indicates that the Wi-Fi network should be configured during device provisioning. When set to TRUE, device provisioning will use Wi-Fi related properties to automatically connect to Wi-Fi networks. When set to FALSE or undefined, other Wi-Fi related properties will be ignored. Default value is TRUE. Returned by default.
    *
    * @param bool $val The configureWifi
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setConfigureWifi($val)
    {
        $this->_propDict["configureWifi"] = boolval($val);
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date time the enrollment profile was created.
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
    * Date time the enrollment profile was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description for the enrollment profile.
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
    * Description for the enrollment profile.
    *
    * @param string $val The description
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name for the enrollment profile.
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
    * Display name for the enrollment profile.
    *
    * @param string $val The displayName
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the enrolledDeviceCount
    * Total number of Android devices that have enrolled using this enrollment profile.
    *
    * @return int|null The enrolledDeviceCount
    */
    public function getEnrolledDeviceCount()
    {
        if (array_key_exists("enrolledDeviceCount", $this->_propDict)) {
            return $this->_propDict["enrolledDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrolledDeviceCount
    * Total number of Android devices that have enrolled using this enrollment profile.
    *
    * @param int $val The enrolledDeviceCount
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setEnrolledDeviceCount($val)
    {
        $this->_propDict["enrolledDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the enrollmentMode
    * The enrollment mode of devices that use this enrollment profile. Possible values are: corporateOwnedDedicatedDevice, corporateOwnedFullyManaged, corporateOwnedWorkProfile, corporateOwnedAOSPUserlessDevice, corporateOwnedAOSPUserAssociatedDevice.
    *
    * @return AndroidDeviceOwnerEnrollmentMode|null The enrollmentMode
    */
    public function getEnrollmentMode()
    {
        if (array_key_exists("enrollmentMode", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentMode"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerEnrollmentMode") || is_null($this->_propDict["enrollmentMode"])) {
                return $this->_propDict["enrollmentMode"];
            } else {
                $this->_propDict["enrollmentMode"] = new AndroidDeviceOwnerEnrollmentMode($this->_propDict["enrollmentMode"]);
                return $this->_propDict["enrollmentMode"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentMode
    * The enrollment mode of devices that use this enrollment profile. Possible values are: corporateOwnedDedicatedDevice, corporateOwnedFullyManaged, corporateOwnedWorkProfile, corporateOwnedAOSPUserlessDevice, corporateOwnedAOSPUserAssociatedDevice.
    *
    * @param AndroidDeviceOwnerEnrollmentMode $val The enrollmentMode
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setEnrollmentMode($val)
    {
        $this->_propDict["enrollmentMode"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentTokenType
    * The enrollment token type for an enrollment profile. Possible values are: default, corporateOwnedDedicatedDeviceWithAzureADSharedMode.
    *
    * @return AndroidDeviceOwnerEnrollmentTokenType|null The enrollmentTokenType
    */
    public function getEnrollmentTokenType()
    {
        if (array_key_exists("enrollmentTokenType", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentTokenType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerEnrollmentTokenType") || is_null($this->_propDict["enrollmentTokenType"])) {
                return $this->_propDict["enrollmentTokenType"];
            } else {
                $this->_propDict["enrollmentTokenType"] = new AndroidDeviceOwnerEnrollmentTokenType($this->_propDict["enrollmentTokenType"]);
                return $this->_propDict["enrollmentTokenType"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentTokenType
    * The enrollment token type for an enrollment profile. Possible values are: default, corporateOwnedDedicatedDeviceWithAzureADSharedMode.
    *
    * @param AndroidDeviceOwnerEnrollmentTokenType $val The enrollmentTokenType
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setEnrollmentTokenType($val)
    {
        $this->_propDict["enrollmentTokenType"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentTokenUsageCount
    * Total number of AOSP devices that have enrolled using the current token.
    *
    * @return int|null The enrollmentTokenUsageCount
    */
    public function getEnrollmentTokenUsageCount()
    {
        if (array_key_exists("enrollmentTokenUsageCount", $this->_propDict)) {
            return $this->_propDict["enrollmentTokenUsageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrollmentTokenUsageCount
    * Total number of AOSP devices that have enrolled using the current token.
    *
    * @param int $val The enrollmentTokenUsageCount
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setEnrollmentTokenUsageCount($val)
    {
        $this->_propDict["enrollmentTokenUsageCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the isTeamsDeviceProfile
    * Boolean indicating if this profile is an Android AOSP for Teams device profile.
    *
    * @return bool|null The isTeamsDeviceProfile
    */
    public function getIsTeamsDeviceProfile()
    {
        if (array_key_exists("isTeamsDeviceProfile", $this->_propDict)) {
            return $this->_propDict["isTeamsDeviceProfile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTeamsDeviceProfile
    * Boolean indicating if this profile is an Android AOSP for Teams device profile.
    *
    * @param bool $val The isTeamsDeviceProfile
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setIsTeamsDeviceProfile($val)
    {
        $this->_propDict["isTeamsDeviceProfile"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date time the enrollment profile was last modified.
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
    * Date time the enrollment profile was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the qrCodeContent
    * String used to generate a QR code for the token.
    *
    * @return string|null The qrCodeContent
    */
    public function getQrCodeContent()
    {
        if (array_key_exists("qrCodeContent", $this->_propDict)) {
            return $this->_propDict["qrCodeContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qrCodeContent
    * String used to generate a QR code for the token.
    *
    * @param string $val The qrCodeContent
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setQrCodeContent($val)
    {
        $this->_propDict["qrCodeContent"] = $val;
        return $this;
    }

    /**
    * Gets the qrCodeImage
    * String used to generate a QR code for the token.
    *
    * @return MimeContent|null The qrCodeImage
    */
    public function getQrCodeImage()
    {
        if (array_key_exists("qrCodeImage", $this->_propDict)) {
            if (is_a($this->_propDict["qrCodeImage"], "\Beta\Microsoft\Graph\Model\MimeContent") || is_null($this->_propDict["qrCodeImage"])) {
                return $this->_propDict["qrCodeImage"];
            } else {
                $this->_propDict["qrCodeImage"] = new MimeContent($this->_propDict["qrCodeImage"]);
                return $this->_propDict["qrCodeImage"];
            }
        }
        return null;
    }

    /**
    * Sets the qrCodeImage
    * String used to generate a QR code for the token.
    *
    * @param MimeContent $val The qrCodeImage
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setQrCodeImage($val)
    {
        $this->_propDict["qrCodeImage"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
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
    * List of Scope Tags for this Entity instance.
    *
    * @param string[] $val The roleScopeTagIds
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

    /**
    * Gets the tokenCreationDateTime
    * Date time the most recently created token was created.
    *
    * @return \DateTime|null The tokenCreationDateTime
    */
    public function getTokenCreationDateTime()
    {
        if (array_key_exists("tokenCreationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["tokenCreationDateTime"], "\DateTime") || is_null($this->_propDict["tokenCreationDateTime"])) {
                return $this->_propDict["tokenCreationDateTime"];
            } else {
                $this->_propDict["tokenCreationDateTime"] = new \DateTime($this->_propDict["tokenCreationDateTime"]);
                return $this->_propDict["tokenCreationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the tokenCreationDateTime
    * Date time the most recently created token was created.
    *
    * @param \DateTime $val The tokenCreationDateTime
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setTokenCreationDateTime($val)
    {
        $this->_propDict["tokenCreationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the tokenExpirationDateTime
    * Date time the most recently created token will expire.
    *
    * @return \DateTime|null The tokenExpirationDateTime
    */
    public function getTokenExpirationDateTime()
    {
        if (array_key_exists("tokenExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["tokenExpirationDateTime"], "\DateTime") || is_null($this->_propDict["tokenExpirationDateTime"])) {
                return $this->_propDict["tokenExpirationDateTime"];
            } else {
                $this->_propDict["tokenExpirationDateTime"] = new \DateTime($this->_propDict["tokenExpirationDateTime"]);
                return $this->_propDict["tokenExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the tokenExpirationDateTime
    * Date time the most recently created token will expire.
    *
    * @param \DateTime $val The tokenExpirationDateTime
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setTokenExpirationDateTime($val)
    {
        $this->_propDict["tokenExpirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the tokenValue
    * Value of the most recently created token for this enrollment profile.
    *
    * @return string|null The tokenValue
    */
    public function getTokenValue()
    {
        if (array_key_exists("tokenValue", $this->_propDict)) {
            return $this->_propDict["tokenValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenValue
    * Value of the most recently created token for this enrollment profile.
    *
    * @param string $val The tokenValue
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setTokenValue($val)
    {
        $this->_propDict["tokenValue"] = $val;
        return $this;
    }

    /**
    * Gets the wifiHidden
    * Boolean that indicates if hidden wifi networks are enabled
    *
    * @return bool|null The wifiHidden
    */
    public function getWifiHidden()
    {
        if (array_key_exists("wifiHidden", $this->_propDict)) {
            return $this->_propDict["wifiHidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiHidden
    * Boolean that indicates if hidden wifi networks are enabled
    *
    * @param bool $val The wifiHidden
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setWifiHidden($val)
    {
        $this->_propDict["wifiHidden"] = boolval($val);
        return $this;
    }

    /**
    * Gets the wifiPassword
    * String that contains the wi-fi login password
    *
    * @return string|null The wifiPassword
    */
    public function getWifiPassword()
    {
        if (array_key_exists("wifiPassword", $this->_propDict)) {
            return $this->_propDict["wifiPassword"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiPassword
    * String that contains the wi-fi login password
    *
    * @param string $val The wifiPassword
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setWifiPassword($val)
    {
        $this->_propDict["wifiPassword"] = $val;
        return $this;
    }

    /**
    * Gets the wifiSecurityType
    * String that contains the wi-fi security type. Possible values are: none, wpa, wep.
    *
    * @return AospWifiSecurityType|null The wifiSecurityType
    */
    public function getWifiSecurityType()
    {
        if (array_key_exists("wifiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wifiSecurityType"], "\Beta\Microsoft\Graph\Model\AospWifiSecurityType") || is_null($this->_propDict["wifiSecurityType"])) {
                return $this->_propDict["wifiSecurityType"];
            } else {
                $this->_propDict["wifiSecurityType"] = new AospWifiSecurityType($this->_propDict["wifiSecurityType"]);
                return $this->_propDict["wifiSecurityType"];
            }
        }
        return null;
    }

    /**
    * Sets the wifiSecurityType
    * String that contains the wi-fi security type. Possible values are: none, wpa, wep.
    *
    * @param AospWifiSecurityType $val The wifiSecurityType
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setWifiSecurityType($val)
    {
        $this->_propDict["wifiSecurityType"] = $val;
        return $this;
    }

    /**
    * Gets the wifiSsid
    * String that contains the wi-fi login ssid
    *
    * @return string|null The wifiSsid
    */
    public function getWifiSsid()
    {
        if (array_key_exists("wifiSsid", $this->_propDict)) {
            return $this->_propDict["wifiSsid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiSsid
    * String that contains the wi-fi login ssid
    *
    * @param string $val The wifiSsid
    *
    * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function setWifiSsid($val)
    {
        $this->_propDict["wifiSsid"] = $val;
        return $this;
    }

}
