<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaConnector File
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
* ZebraFotaConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaConnector extends Entity
{
    /**
    * Gets the enrollmentAuthorizationUrl
    * Complete account enrollment authorization URL. This corresponds to verification_uri_complete in the Zebra API documentations.
    *
    * @return string|null The enrollmentAuthorizationUrl
    */
    public function getEnrollmentAuthorizationUrl()
    {
        if (array_key_exists("enrollmentAuthorizationUrl", $this->_propDict)) {
            return $this->_propDict["enrollmentAuthorizationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrollmentAuthorizationUrl
    * Complete account enrollment authorization URL. This corresponds to verification_uri_complete in the Zebra API documentations.
    *
    * @param string $val The enrollmentAuthorizationUrl
    *
    * @return ZebraFotaConnector
    */
    public function setEnrollmentAuthorizationUrl($val)
    {
        $this->_propDict["enrollmentAuthorizationUrl"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentToken
    * Tenant enrollment token from Zebra. The token is used to enroll Zebra devices in the FOTA Service via app config.
    *
    * @return string|null The enrollmentToken
    */
    public function getEnrollmentToken()
    {
        if (array_key_exists("enrollmentToken", $this->_propDict)) {
            return $this->_propDict["enrollmentToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrollmentToken
    * Tenant enrollment token from Zebra. The token is used to enroll Zebra devices in the FOTA Service via app config.
    *
    * @param string $val The enrollmentToken
    *
    * @return ZebraFotaConnector
    */
    public function setEnrollmentToken($val)
    {
        $this->_propDict["enrollmentToken"] = $val;
        return $this;
    }

    /**
    * Gets the fotaAppsApproved
    * Flag indicating if required Firmware Over-the-Air (FOTA) Apps have been approved.
    *
    * @return bool|null The fotaAppsApproved
    */
    public function getFotaAppsApproved()
    {
        if (array_key_exists("fotaAppsApproved", $this->_propDict)) {
            return $this->_propDict["fotaAppsApproved"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fotaAppsApproved
    * Flag indicating if required Firmware Over-the-Air (FOTA) Apps have been approved.
    *
    * @param bool $val The fotaAppsApproved
    *
    * @return ZebraFotaConnector
    */
    public function setFotaAppsApproved($val)
    {
        $this->_propDict["fotaAppsApproved"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastSyncDateTime
    * Date and time when the account was last synched with Zebra
    *
    * @return \DateTime|null The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime") || is_null($this->_propDict["lastSyncDateTime"])) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSyncDateTime
    * Date and time when the account was last synched with Zebra
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return ZebraFotaConnector
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The Zebra connector state.
    *
    * @return ZebraFotaConnectorState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\ZebraFotaConnectorState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ZebraFotaConnectorState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The Zebra connector state.
    *
    * @param ZebraFotaConnectorState $val The state
    *
    * @return ZebraFotaConnector
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
