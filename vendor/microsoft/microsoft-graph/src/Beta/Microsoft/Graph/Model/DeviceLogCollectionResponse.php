<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceLogCollectionResponse File
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
* DeviceLogCollectionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceLogCollectionResponse extends Entity
{
    /**
    * Gets the enrolledByUser
    * The User Principal Name (UPN) of the user that enrolled the device.
    *
    * @return string|null The enrolledByUser
    */
    public function getEnrolledByUser()
    {
        if (array_key_exists("enrolledByUser", $this->_propDict)) {
            return $this->_propDict["enrolledByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrolledByUser
    * The User Principal Name (UPN) of the user that enrolled the device.
    *
    * @param string $val The enrolledByUser
    *
    * @return DeviceLogCollectionResponse
    */
    public function setEnrolledByUser($val)
    {
        $this->_propDict["enrolledByUser"] = $val;
        return $this;
    }

    /**
    * Gets the errorCode
    * The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
    *
    * @return int|null The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    * The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
    *
    * @param int $val The errorCode
    *
    * @return DeviceLogCollectionResponse
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = intval($val);
        return $this;
    }

    /**
    * Gets the expirationDateTimeUTC
    * The DateTime of the expiration of the logs.
    *
    * @return \DateTime|null The expirationDateTimeUTC
    */
    public function getExpirationDateTimeUTC()
    {
        if (array_key_exists("expirationDateTimeUTC", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTimeUTC"], "\DateTime") || is_null($this->_propDict["expirationDateTimeUTC"])) {
                return $this->_propDict["expirationDateTimeUTC"];
            } else {
                $this->_propDict["expirationDateTimeUTC"] = new \DateTime($this->_propDict["expirationDateTimeUTC"]);
                return $this->_propDict["expirationDateTimeUTC"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTimeUTC
    * The DateTime of the expiration of the logs.
    *
    * @param \DateTime $val The expirationDateTimeUTC
    *
    * @return DeviceLogCollectionResponse
    */
    public function setExpirationDateTimeUTC($val)
    {
        $this->_propDict["expirationDateTimeUTC"] = $val;
        return $this;
    }

    /**
    * Gets the initiatedByUserPrincipalName
    * The UPN for who initiated the request.
    *
    * @return string|null The initiatedByUserPrincipalName
    */
    public function getInitiatedByUserPrincipalName()
    {
        if (array_key_exists("initiatedByUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["initiatedByUserPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the initiatedByUserPrincipalName
    * The UPN for who initiated the request.
    *
    * @param string $val The initiatedByUserPrincipalName
    *
    * @return DeviceLogCollectionResponse
    */
    public function setInitiatedByUserPrincipalName($val)
    {
        $this->_propDict["initiatedByUserPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceId
    * Indicates Intune device unique identifier.
    *
    * @return string|null The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceId
    * Indicates Intune device unique identifier.
    *
    * @param string $val The managedDeviceId
    *
    * @return DeviceLogCollectionResponse
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the receivedDateTimeUTC
    * The DateTime the request was received.
    *
    * @return \DateTime|null The receivedDateTimeUTC
    */
    public function getReceivedDateTimeUTC()
    {
        if (array_key_exists("receivedDateTimeUTC", $this->_propDict)) {
            if (is_a($this->_propDict["receivedDateTimeUTC"], "\DateTime") || is_null($this->_propDict["receivedDateTimeUTC"])) {
                return $this->_propDict["receivedDateTimeUTC"];
            } else {
                $this->_propDict["receivedDateTimeUTC"] = new \DateTime($this->_propDict["receivedDateTimeUTC"]);
                return $this->_propDict["receivedDateTimeUTC"];
            }
        }
        return null;
    }

    /**
    * Sets the receivedDateTimeUTC
    * The DateTime the request was received.
    *
    * @param \DateTime $val The receivedDateTimeUTC
    *
    * @return DeviceLogCollectionResponse
    */
    public function setReceivedDateTimeUTC($val)
    {
        $this->_propDict["receivedDateTimeUTC"] = $val;
        return $this;
    }

    /**
    * Gets the requestedDateTimeUTC
    * The DateTime of the request.
    *
    * @return \DateTime|null The requestedDateTimeUTC
    */
    public function getRequestedDateTimeUTC()
    {
        if (array_key_exists("requestedDateTimeUTC", $this->_propDict)) {
            if (is_a($this->_propDict["requestedDateTimeUTC"], "\DateTime") || is_null($this->_propDict["requestedDateTimeUTC"])) {
                return $this->_propDict["requestedDateTimeUTC"];
            } else {
                $this->_propDict["requestedDateTimeUTC"] = new \DateTime($this->_propDict["requestedDateTimeUTC"]);
                return $this->_propDict["requestedDateTimeUTC"];
            }
        }
        return null;
    }

    /**
    * Sets the requestedDateTimeUTC
    * The DateTime of the request.
    *
    * @param \DateTime $val The requestedDateTimeUTC
    *
    * @return DeviceLogCollectionResponse
    */
    public function setRequestedDateTimeUTC($val)
    {
        $this->_propDict["requestedDateTimeUTC"] = $val;
        return $this;
    }

    /**
    * Gets the size
    * The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    * The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The size
    *
    * @return DeviceLogCollectionResponse
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = floatval($val);
        return $this;
    }

    /**
    * Gets the sizeInKB
    * The size of the logs in KB. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The sizeInKB
    */
    public function getSizeInKB()
    {
        if (array_key_exists("sizeInKB", $this->_propDict)) {
            return $this->_propDict["sizeInKB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sizeInKB
    * The size of the logs in KB. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The sizeInKB
    *
    * @return DeviceLogCollectionResponse
    */
    public function setSizeInKB($val)
    {
        $this->_propDict["sizeInKB"] = floatval($val);
        return $this;
    }

    /**
    * Gets the status
    * Indicates the status for the app log collection request if it is pending, completed or failed, Default is pending. Possible values are: pending, completed, failed, unknownFutureValue.
    *
    * @return AppLogUploadState|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AppLogUploadState") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AppLogUploadState($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the status for the app log collection request if it is pending, completed or failed, Default is pending. Possible values are: pending, completed, failed, unknownFutureValue.
    *
    * @param AppLogUploadState $val The status
    *
    * @return DeviceLogCollectionResponse
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
