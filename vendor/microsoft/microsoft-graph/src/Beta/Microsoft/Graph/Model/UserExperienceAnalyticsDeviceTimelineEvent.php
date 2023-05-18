<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceTimelineEvent File
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
* UserExperienceAnalyticsDeviceTimelineEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceTimelineEvent extends Entity
{
    /**
    * Gets the deviceId
    * The id of the device where the event occurred.
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
    * The id of the device where the event occurred.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsDeviceTimelineEvent
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the eventDateTime
    * The time the event occured.
    *
    * @return \DateTime|null The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime") || is_null($this->_propDict["eventDateTime"])) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventDateTime
    * The time the event occured.
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return UserExperienceAnalyticsDeviceTimelineEvent
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the eventDetails
    * The details provided by the event, format depends on event type.
    *
    * @return string|null The eventDetails
    */
    public function getEventDetails()
    {
        if (array_key_exists("eventDetails", $this->_propDict)) {
            return $this->_propDict["eventDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventDetails
    * The details provided by the event, format depends on event type.
    *
    * @param string $val The eventDetails
    *
    * @return UserExperienceAnalyticsDeviceTimelineEvent
    */
    public function setEventDetails($val)
    {
        $this->_propDict["eventDetails"] = $val;
        return $this;
    }

    /**
    * Gets the eventLevel
    * The severity level of the event enum. Possible values are: none, verbose, information, warning, error ,critical. Default value: none. Possible values are: none, verbose, information, warning, error, critical, unknownFutureValue.
    *
    * @return DeviceEventLevel|null The eventLevel
    */
    public function getEventLevel()
    {
        if (array_key_exists("eventLevel", $this->_propDict)) {
            if (is_a($this->_propDict["eventLevel"], "\Beta\Microsoft\Graph\Model\DeviceEventLevel") || is_null($this->_propDict["eventLevel"])) {
                return $this->_propDict["eventLevel"];
            } else {
                $this->_propDict["eventLevel"] = new DeviceEventLevel($this->_propDict["eventLevel"]);
                return $this->_propDict["eventLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the eventLevel
    * The severity level of the event enum. Possible values are: none, verbose, information, warning, error ,critical. Default value: none. Possible values are: none, verbose, information, warning, error, critical, unknownFutureValue.
    *
    * @param DeviceEventLevel $val The eventLevel
    *
    * @return UserExperienceAnalyticsDeviceTimelineEvent
    */
    public function setEventLevel($val)
    {
        $this->_propDict["eventLevel"] = $val;
        return $this;
    }

    /**
    * Gets the eventName
    * The name of the event. Examples include: BootEvent, LogonEvent, AppCrashEvent, AppHangEvent.
    *
    * @return string|null The eventName
    */
    public function getEventName()
    {
        if (array_key_exists("eventName", $this->_propDict)) {
            return $this->_propDict["eventName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventName
    * The name of the event. Examples include: BootEvent, LogonEvent, AppCrashEvent, AppHangEvent.
    *
    * @param string $val The eventName
    *
    * @return UserExperienceAnalyticsDeviceTimelineEvent
    */
    public function setEventName($val)
    {
        $this->_propDict["eventName"] = $val;
        return $this;
    }

    /**
    * Gets the eventSource
    * The source of the event. Examples include: Intune, Sccm.
    *
    * @return string|null The eventSource
    */
    public function getEventSource()
    {
        if (array_key_exists("eventSource", $this->_propDict)) {
            return $this->_propDict["eventSource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventSource
    * The source of the event. Examples include: Intune, Sccm.
    *
    * @param string $val The eventSource
    *
    * @return UserExperienceAnalyticsDeviceTimelineEvent
    */
    public function setEventSource($val)
    {
        $this->_propDict["eventSource"] = $val;
        return $this;
    }

}
