<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcLaunchInfo File
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
* CloudPcLaunchInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcLaunchInfo extends Entity
{
    /**
    * Gets the cloudPcId
    * The unique identifier of the Cloud PC.
    *
    * @return string|null The cloudPcId
    */
    public function getCloudPcId()
    {
        if (array_key_exists("cloudPcId", $this->_propDict)) {
            return $this->_propDict["cloudPcId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcId
    * The unique identifier of the Cloud PC.
    *
    * @param string $val The value of the cloudPcId
    *
    * @return CloudPcLaunchInfo
    */
    public function setCloudPcId($val)
    {
        $this->_propDict["cloudPcId"] = $val;
        return $this;
    }
    /**
    * Gets the cloudPcLaunchUrl
    * The connect URL of the Cloud PC.
    *
    * @return string|null The cloudPcLaunchUrl
    */
    public function getCloudPcLaunchUrl()
    {
        if (array_key_exists("cloudPcLaunchUrl", $this->_propDict)) {
            return $this->_propDict["cloudPcLaunchUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcLaunchUrl
    * The connect URL of the Cloud PC.
    *
    * @param string $val The value of the cloudPcLaunchUrl
    *
    * @return CloudPcLaunchInfo
    */
    public function setCloudPcLaunchUrl($val)
    {
        $this->_propDict["cloudPcLaunchUrl"] = $val;
        return $this;
    }
    /**
    * Gets the windows365SwitchCompatible
    * Indicates whether the Cloud PC supports switch functionality. If the value is true, it supports switch functionality; otherwise,  false.
    *
    * @return bool|null The windows365SwitchCompatible
    */
    public function getWindows365SwitchCompatible()
    {
        if (array_key_exists("windows365SwitchCompatible", $this->_propDict)) {
            return $this->_propDict["windows365SwitchCompatible"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows365SwitchCompatible
    * Indicates whether the Cloud PC supports switch functionality. If the value is true, it supports switch functionality; otherwise,  false.
    *
    * @param bool $val The value of the windows365SwitchCompatible
    *
    * @return CloudPcLaunchInfo
    */
    public function setWindows365SwitchCompatible($val)
    {
        $this->_propDict["windows365SwitchCompatible"] = $val;
        return $this;
    }
    /**
    * Gets the windows365SwitchNotCompatibleReason
    * Indicates the reason the Cloud PC doesn't support switch. CPCOsVersionNotMeetRequirement indicates that the user needs to update their Cloud PC operation system version. CPCHardwareNotMeetRequirement indicates that the Cloud PC needs more CPU or RAM to support the functionality.
    *
    * @return string|null The windows365SwitchNotCompatibleReason
    */
    public function getWindows365SwitchNotCompatibleReason()
    {
        if (array_key_exists("windows365SwitchNotCompatibleReason", $this->_propDict)) {
            return $this->_propDict["windows365SwitchNotCompatibleReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows365SwitchNotCompatibleReason
    * Indicates the reason the Cloud PC doesn't support switch. CPCOsVersionNotMeetRequirement indicates that the user needs to update their Cloud PC operation system version. CPCHardwareNotMeetRequirement indicates that the Cloud PC needs more CPU or RAM to support the functionality.
    *
    * @param string $val The value of the windows365SwitchNotCompatibleReason
    *
    * @return CloudPcLaunchInfo
    */
    public function setWindows365SwitchNotCompatibleReason($val)
    {
        $this->_propDict["windows365SwitchNotCompatibleReason"] = $val;
        return $this;
    }
}
