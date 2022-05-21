<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPCConnectivityIssue File
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
* CloudPCConnectivityIssue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPCConnectivityIssue extends Entity
{
    /**
    * Gets the deviceId
    * The Intune DeviceId of the device the connection is associated with.
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
    * The Intune DeviceId of the device the connection is associated with.
    *
    * @param string $val The deviceId
    *
    * @return CloudPCConnectivityIssue
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the errorCode
    * The error code of the connectivity issue.
    *
    * @return string|null The errorCode
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
    * The error code of the connectivity issue.
    *
    * @param string $val The errorCode
    *
    * @return CloudPCConnectivityIssue
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }

    /**
    * Gets the errorDateTime
    * The time that the connection initiated. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time.
    *
    * @return \DateTime|null The errorDateTime
    */
    public function getErrorDateTime()
    {
        if (array_key_exists("errorDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["errorDateTime"], "\DateTime") || is_null($this->_propDict["errorDateTime"])) {
                return $this->_propDict["errorDateTime"];
            } else {
                $this->_propDict["errorDateTime"] = new \DateTime($this->_propDict["errorDateTime"]);
                return $this->_propDict["errorDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the errorDateTime
    * The time that the connection initiated. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time.
    *
    * @param \DateTime $val The errorDateTime
    *
    * @return CloudPCConnectivityIssue
    */
    public function setErrorDateTime($val)
    {
        $this->_propDict["errorDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the errorDescription
    * The detailed description of what went wrong.
    *
    * @return string|null The errorDescription
    */
    public function getErrorDescription()
    {
        if (array_key_exists("errorDescription", $this->_propDict)) {
            return $this->_propDict["errorDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDescription
    * The detailed description of what went wrong.
    *
    * @param string $val The errorDescription
    *
    * @return CloudPCConnectivityIssue
    */
    public function setErrorDescription($val)
    {
        $this->_propDict["errorDescription"] = $val;
        return $this;
    }

    /**
    * Gets the recommendedAction
    * The recommended action to fix the corresponding error.
    *
    * @return string|null The recommendedAction
    */
    public function getRecommendedAction()
    {
        if (array_key_exists("recommendedAction", $this->_propDict)) {
            return $this->_propDict["recommendedAction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendedAction
    * The recommended action to fix the corresponding error.
    *
    * @param string $val The recommendedAction
    *
    * @return CloudPCConnectivityIssue
    */
    public function setRecommendedAction($val)
    {
        $this->_propDict["recommendedAction"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    * The unique id of user who initialize the connection.
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * The unique id of user who initialize the connection.
    *
    * @param string $val The userId
    *
    * @return CloudPCConnectivityIssue
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

}
