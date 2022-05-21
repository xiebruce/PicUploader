<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkFeaturesConfiguration File
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
* TeamworkFeaturesConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkFeaturesConfiguration extends Entity
{
    /**
    * Gets the emailToSendLogsAndFeedback
    * Email address to send logs and feedback.
    *
    * @return string|null The emailToSendLogsAndFeedback
    */
    public function getEmailToSendLogsAndFeedback()
    {
        if (array_key_exists("emailToSendLogsAndFeedback", $this->_propDict)) {
            return $this->_propDict["emailToSendLogsAndFeedback"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailToSendLogsAndFeedback
    * Email address to send logs and feedback.
    *
    * @param string $val The value of the emailToSendLogsAndFeedback
    *
    * @return TeamworkFeaturesConfiguration
    */
    public function setEmailToSendLogsAndFeedback($val)
    {
        $this->_propDict["emailToSendLogsAndFeedback"] = $val;
        return $this;
    }
    /**
    * Gets the isAutoScreenShareEnabled
    * True if auto screen shared is enabled.
    *
    * @return bool|null The isAutoScreenShareEnabled
    */
    public function getIsAutoScreenShareEnabled()
    {
        if (array_key_exists("isAutoScreenShareEnabled", $this->_propDict)) {
            return $this->_propDict["isAutoScreenShareEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAutoScreenShareEnabled
    * True if auto screen shared is enabled.
    *
    * @param bool $val The value of the isAutoScreenShareEnabled
    *
    * @return TeamworkFeaturesConfiguration
    */
    public function setIsAutoScreenShareEnabled($val)
    {
        $this->_propDict["isAutoScreenShareEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isBluetoothBeaconingEnabled
    * True if Bluetooth beaconing is enabled.
    *
    * @return bool|null The isBluetoothBeaconingEnabled
    */
    public function getIsBluetoothBeaconingEnabled()
    {
        if (array_key_exists("isBluetoothBeaconingEnabled", $this->_propDict)) {
            return $this->_propDict["isBluetoothBeaconingEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBluetoothBeaconingEnabled
    * True if Bluetooth beaconing is enabled.
    *
    * @param bool $val The value of the isBluetoothBeaconingEnabled
    *
    * @return TeamworkFeaturesConfiguration
    */
    public function setIsBluetoothBeaconingEnabled($val)
    {
        $this->_propDict["isBluetoothBeaconingEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isHideMeetingNamesEnabled
    * True if hiding meeting names is enabled.
    *
    * @return bool|null The isHideMeetingNamesEnabled
    */
    public function getIsHideMeetingNamesEnabled()
    {
        if (array_key_exists("isHideMeetingNamesEnabled", $this->_propDict)) {
            return $this->_propDict["isHideMeetingNamesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHideMeetingNamesEnabled
    * True if hiding meeting names is enabled.
    *
    * @param bool $val The value of the isHideMeetingNamesEnabled
    *
    * @return TeamworkFeaturesConfiguration
    */
    public function setIsHideMeetingNamesEnabled($val)
    {
        $this->_propDict["isHideMeetingNamesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isSendLogsAndFeedbackEnabled
    * True if sending logs and feedback is enabled.
    *
    * @return bool|null The isSendLogsAndFeedbackEnabled
    */
    public function getIsSendLogsAndFeedbackEnabled()
    {
        if (array_key_exists("isSendLogsAndFeedbackEnabled", $this->_propDict)) {
            return $this->_propDict["isSendLogsAndFeedbackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSendLogsAndFeedbackEnabled
    * True if sending logs and feedback is enabled.
    *
    * @param bool $val The value of the isSendLogsAndFeedbackEnabled
    *
    * @return TeamworkFeaturesConfiguration
    */
    public function setIsSendLogsAndFeedbackEnabled($val)
    {
        $this->_propDict["isSendLogsAndFeedbackEnabled"] = $val;
        return $this;
    }
}
