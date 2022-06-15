<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceScopeActionResult File
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
* DeviceScopeActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceScopeActionResult extends Entity
{

    /**
    * Gets the deviceScopeAction
    * The triggered action name. Possible values are: .
    *
    * @return DeviceScopeAction|null The deviceScopeAction
    */
    public function getDeviceScopeAction()
    {
        if (array_key_exists("deviceScopeAction", $this->_propDict)) {
            if (is_a($this->_propDict["deviceScopeAction"], "\Beta\Microsoft\Graph\Model\DeviceScopeAction") || is_null($this->_propDict["deviceScopeAction"])) {
                return $this->_propDict["deviceScopeAction"];
            } else {
                $this->_propDict["deviceScopeAction"] = new DeviceScopeAction($this->_propDict["deviceScopeAction"]);
                return $this->_propDict["deviceScopeAction"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceScopeAction
    * The triggered action name. Possible values are: .
    *
    * @param DeviceScopeAction $val The value to assign to the deviceScopeAction
    *
    * @return DeviceScopeActionResult The DeviceScopeActionResult
    */
    public function setDeviceScopeAction($val)
    {
        $this->_propDict["deviceScopeAction"] = $val;
         return $this;
    }
    /**
    * Gets the deviceScopeId
    * The unique identifier of the device scope the action was triggered on.
    *
    * @return string|null The deviceScopeId
    */
    public function getDeviceScopeId()
    {
        if (array_key_exists("deviceScopeId", $this->_propDict)) {
            return $this->_propDict["deviceScopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceScopeId
    * The unique identifier of the device scope the action was triggered on.
    *
    * @param string $val The value of the deviceScopeId
    *
    * @return DeviceScopeActionResult
    */
    public function setDeviceScopeId($val)
    {
        $this->_propDict["deviceScopeId"] = $val;
        return $this;
    }
    /**
    * Gets the failedMessage
    * The message indicates the reason the device scope action failed to trigger.
    *
    * @return string|null The failedMessage
    */
    public function getFailedMessage()
    {
        if (array_key_exists("failedMessage", $this->_propDict)) {
            return $this->_propDict["failedMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedMessage
    * The message indicates the reason the device scope action failed to trigger.
    *
    * @param string $val The value of the failedMessage
    *
    * @return DeviceScopeActionResult
    */
    public function setFailedMessage($val)
    {
        $this->_propDict["failedMessage"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates the status of the attempt device scope action. When succeeded, the action was succeessfully triggered, When failed, the action was failed to trigger. Possible values are: failed, succeeded, unknownFutureValue.
    *
    * @return DeviceScopeActionStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DeviceScopeActionStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DeviceScopeActionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the status of the attempt device scope action. When succeeded, the action was succeessfully triggered, When failed, the action was failed to trigger. Possible values are: failed, succeeded, unknownFutureValue.
    *
    * @param DeviceScopeActionStatus $val The value to assign to the status
    *
    * @return DeviceScopeActionResult The DeviceScopeActionResult
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
