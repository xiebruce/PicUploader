<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StrongAuthenticationPhoneAppDetail File
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
* StrongAuthenticationPhoneAppDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StrongAuthenticationPhoneAppDetail extends Entity
{
    /**
    * Gets the authenticationType
    *
    * @return string|null The authenticationType
    */
    public function getAuthenticationType()
    {
        if (array_key_exists("authenticationType", $this->_propDict)) {
            return $this->_propDict["authenticationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationType
    *
    * @param string $val The authenticationType
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setAuthenticationType($val)
    {
        $this->_propDict["authenticationType"] = $val;
        return $this;
    }

    /**
    * Gets the authenticatorFlavor
    *
    * @return string|null The authenticatorFlavor
    */
    public function getAuthenticatorFlavor()
    {
        if (array_key_exists("authenticatorFlavor", $this->_propDict)) {
            return $this->_propDict["authenticatorFlavor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticatorFlavor
    *
    * @param string $val The authenticatorFlavor
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setAuthenticatorFlavor($val)
    {
        $this->_propDict["authenticatorFlavor"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    *
    * @param string $val The deviceId
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
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
    *
    * @param string $val The deviceName
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceTag
    *
    * @return string|null The deviceTag
    */
    public function getDeviceTag()
    {
        if (array_key_exists("deviceTag", $this->_propDict)) {
            return $this->_propDict["deviceTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceTag
    *
    * @param string $val The deviceTag
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setDeviceTag($val)
    {
        $this->_propDict["deviceTag"] = $val;
        return $this;
    }

    /**
    * Gets the deviceToken
    *
    * @return string|null The deviceToken
    */
    public function getDeviceToken()
    {
        if (array_key_exists("deviceToken", $this->_propDict)) {
            return $this->_propDict["deviceToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceToken
    *
    * @param string $val The deviceToken
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setDeviceToken($val)
    {
        $this->_propDict["deviceToken"] = $val;
        return $this;
    }

    /**
    * Gets the hashFunction
    *
    * @return string|null The hashFunction
    */
    public function getHashFunction()
    {
        if (array_key_exists("hashFunction", $this->_propDict)) {
            return $this->_propDict["hashFunction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hashFunction
    *
    * @param string $val The hashFunction
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setHashFunction($val)
    {
        $this->_propDict["hashFunction"] = $val;
        return $this;
    }

    /**
    * Gets the lastAuthenticatedDateTime
    *
    * @return \DateTime|null The lastAuthenticatedDateTime
    */
    public function getLastAuthenticatedDateTime()
    {
        if (array_key_exists("lastAuthenticatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAuthenticatedDateTime"], "\DateTime") || is_null($this->_propDict["lastAuthenticatedDateTime"])) {
                return $this->_propDict["lastAuthenticatedDateTime"];
            } else {
                $this->_propDict["lastAuthenticatedDateTime"] = new \DateTime($this->_propDict["lastAuthenticatedDateTime"]);
                return $this->_propDict["lastAuthenticatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastAuthenticatedDateTime
    *
    * @param \DateTime $val The lastAuthenticatedDateTime
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setLastAuthenticatedDateTime($val)
    {
        $this->_propDict["lastAuthenticatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notificationType
    *
    * @return string|null The notificationType
    */
    public function getNotificationType()
    {
        if (array_key_exists("notificationType", $this->_propDict)) {
            return $this->_propDict["notificationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationType
    *
    * @param string $val The notificationType
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setNotificationType($val)
    {
        $this->_propDict["notificationType"] = $val;
        return $this;
    }

    /**
    * Gets the oathSecretKey
    *
    * @return string|null The oathSecretKey
    */
    public function getOathSecretKey()
    {
        if (array_key_exists("oathSecretKey", $this->_propDict)) {
            return $this->_propDict["oathSecretKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oathSecretKey
    *
    * @param string $val The oathSecretKey
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setOathSecretKey($val)
    {
        $this->_propDict["oathSecretKey"] = $val;
        return $this;
    }

    /**
    * Gets the oathTokenMetadata
    *
    * @return OathTokenMetadata|null The oathTokenMetadata
    */
    public function getOathTokenMetadata()
    {
        if (array_key_exists("oathTokenMetadata", $this->_propDict)) {
            if (is_a($this->_propDict["oathTokenMetadata"], "\Beta\Microsoft\Graph\Model\OathTokenMetadata") || is_null($this->_propDict["oathTokenMetadata"])) {
                return $this->_propDict["oathTokenMetadata"];
            } else {
                $this->_propDict["oathTokenMetadata"] = new OathTokenMetadata($this->_propDict["oathTokenMetadata"]);
                return $this->_propDict["oathTokenMetadata"];
            }
        }
        return null;
    }

    /**
    * Sets the oathTokenMetadata
    *
    * @param OathTokenMetadata $val The oathTokenMetadata
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setOathTokenMetadata($val)
    {
        $this->_propDict["oathTokenMetadata"] = $val;
        return $this;
    }

    /**
    * Gets the oathTokenTimeDriftInSeconds
    *
    * @return int|null The oathTokenTimeDriftInSeconds
    */
    public function getOathTokenTimeDriftInSeconds()
    {
        if (array_key_exists("oathTokenTimeDriftInSeconds", $this->_propDict)) {
            return $this->_propDict["oathTokenTimeDriftInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oathTokenTimeDriftInSeconds
    *
    * @param int $val The oathTokenTimeDriftInSeconds
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setOathTokenTimeDriftInSeconds($val)
    {
        $this->_propDict["oathTokenTimeDriftInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the phoneAppVersion
    *
    * @return string|null The phoneAppVersion
    */
    public function getPhoneAppVersion()
    {
        if (array_key_exists("phoneAppVersion", $this->_propDict)) {
            return $this->_propDict["phoneAppVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phoneAppVersion
    *
    * @param string $val The phoneAppVersion
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setPhoneAppVersion($val)
    {
        $this->_propDict["phoneAppVersion"] = $val;
        return $this;
    }

    /**
    * Gets the tenantDeviceId
    *
    * @return string|null The tenantDeviceId
    */
    public function getTenantDeviceId()
    {
        if (array_key_exists("tenantDeviceId", $this->_propDict)) {
            return $this->_propDict["tenantDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantDeviceId
    *
    * @param string $val The tenantDeviceId
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setTenantDeviceId($val)
    {
        $this->_propDict["tenantDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the tokenGenerationIntervalInSeconds
    *
    * @return int|null The tokenGenerationIntervalInSeconds
    */
    public function getTokenGenerationIntervalInSeconds()
    {
        if (array_key_exists("tokenGenerationIntervalInSeconds", $this->_propDict)) {
            return $this->_propDict["tokenGenerationIntervalInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenGenerationIntervalInSeconds
    *
    * @param int $val The tokenGenerationIntervalInSeconds
    *
    * @return StrongAuthenticationPhoneAppDetail
    */
    public function setTokenGenerationIntervalInSeconds($val)
    {
        $this->_propDict["tokenGenerationIntervalInSeconds"] = intval($val);
        return $this;
    }

}
