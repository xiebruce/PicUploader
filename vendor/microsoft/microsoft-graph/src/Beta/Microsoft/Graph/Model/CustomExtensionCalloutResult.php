<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionCalloutResult File
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
* CustomExtensionCalloutResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionCalloutResult extends AuthenticationEventHandlerResult
{

    /**
    * Gets the calloutDateTime
    * When the API transaction was initiated, the date and time information uses ISO 8601 format and is always in UTC time. Example: midnight on Jan 1, 2014, is reported as 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The calloutDateTime
    */
    public function getCalloutDateTime()
    {
        if (array_key_exists("calloutDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["calloutDateTime"], "\DateTime") || is_null($this->_propDict["calloutDateTime"])) {
                return $this->_propDict["calloutDateTime"];
            } else {
                $this->_propDict["calloutDateTime"] = new \DateTime($this->_propDict["calloutDateTime"]);
                return $this->_propDict["calloutDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the calloutDateTime
    * When the API transaction was initiated, the date and time information uses ISO 8601 format and is always in UTC time. Example: midnight on Jan 1, 2014, is reported as 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the calloutDateTime
    *
    * @return CustomExtensionCalloutResult The CustomExtensionCalloutResult
    */
    public function setCalloutDateTime($val)
    {
        $this->_propDict["calloutDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the customExtensionId
    * Identifier of the custom extension that was called.
    *
    * @return string|null The customExtensionId
    */
    public function getCustomExtensionId()
    {
        if (array_key_exists("customExtensionId", $this->_propDict)) {
            return $this->_propDict["customExtensionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionId
    * Identifier of the custom extension that was called.
    *
    * @param string $val The value of the customExtensionId
    *
    * @return CustomExtensionCalloutResult
    */
    public function setCustomExtensionId($val)
    {
        $this->_propDict["customExtensionId"] = $val;
        return $this;
    }
    /**
    * Gets the errorCode
    * Error code that was returned when the last API attempt failed.
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
    * Error code that was returned when the last API attempt failed.
    *
    * @param int $val The value of the errorCode
    *
    * @return CustomExtensionCalloutResult
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    /**
    * Gets the httpStatus
    * The HTTP status code that was returned by the target API endpoint after the last API attempt.
    *
    * @return int|null The httpStatus
    */
    public function getHttpStatus()
    {
        if (array_key_exists("httpStatus", $this->_propDict)) {
            return $this->_propDict["httpStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the httpStatus
    * The HTTP status code that was returned by the target API endpoint after the last API attempt.
    *
    * @param int $val The value of the httpStatus
    *
    * @return CustomExtensionCalloutResult
    */
    public function setHttpStatus($val)
    {
        $this->_propDict["httpStatus"] = $val;
        return $this;
    }
    /**
    * Gets the numberOfAttempts
    * The number of API calls to the customer's API.
    *
    * @return int|null The numberOfAttempts
    */
    public function getNumberOfAttempts()
    {
        if (array_key_exists("numberOfAttempts", $this->_propDict)) {
            return $this->_propDict["numberOfAttempts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfAttempts
    * The number of API calls to the customer's API.
    *
    * @param int $val The value of the numberOfAttempts
    *
    * @return CustomExtensionCalloutResult
    */
    public function setNumberOfAttempts($val)
    {
        $this->_propDict["numberOfAttempts"] = $val;
        return $this;
    }
}
