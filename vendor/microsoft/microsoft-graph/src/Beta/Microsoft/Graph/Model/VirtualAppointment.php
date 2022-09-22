<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualAppointment File
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
* VirtualAppointment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualAppointment extends Entity
{
    /**
    * Gets the appointmentClientJoinWebUrl
    * The join web URL of the virtual appointment for clients with waiting room and browser join. Optional.
    *
    * @return string|null The appointmentClientJoinWebUrl
    */
    public function getAppointmentClientJoinWebUrl()
    {
        if (array_key_exists("appointmentClientJoinWebUrl", $this->_propDict)) {
            return $this->_propDict["appointmentClientJoinWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appointmentClientJoinWebUrl
    * The join web URL of the virtual appointment for clients with waiting room and browser join. Optional.
    *
    * @param string $val The appointmentClientJoinWebUrl
    *
    * @return VirtualAppointment
    */
    public function setAppointmentClientJoinWebUrl($val)
    {
        $this->_propDict["appointmentClientJoinWebUrl"] = $val;
        return $this;
    }


     /**
     * Gets the appointmentClients
    * The client information for the virtual appointment, including name, email, and SMS phone number. Optional.
     *
     * @return array|null The appointmentClients
     */
    public function getAppointmentClients()
    {
        if (array_key_exists("appointmentClients", $this->_propDict)) {
           return $this->_propDict["appointmentClients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appointmentClients
    * The client information for the virtual appointment, including name, email, and SMS phone number. Optional.
    *
    * @param VirtualAppointmentUser[] $val The appointmentClients
    *
    * @return VirtualAppointment
    */
    public function setAppointmentClients($val)
    {
        $this->_propDict["appointmentClients"] = $val;
        return $this;
    }

    /**
    * Gets the externalAppointmentId
    * The identifier of the appointment from the scheduling system, associated with the current virtual appointment. Optional.
    *
    * @return string|null The externalAppointmentId
    */
    public function getExternalAppointmentId()
    {
        if (array_key_exists("externalAppointmentId", $this->_propDict)) {
            return $this->_propDict["externalAppointmentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalAppointmentId
    * The identifier of the appointment from the scheduling system, associated with the current virtual appointment. Optional.
    *
    * @param string $val The externalAppointmentId
    *
    * @return VirtualAppointment
    */
    public function setExternalAppointmentId($val)
    {
        $this->_propDict["externalAppointmentId"] = $val;
        return $this;
    }

    /**
    * Gets the externalAppointmentUrl
    * The URL of the appointment resource from the scheduling system, associated with the current virtual appointment. Optional.
    *
    * @return string|null The externalAppointmentUrl
    */
    public function getExternalAppointmentUrl()
    {
        if (array_key_exists("externalAppointmentUrl", $this->_propDict)) {
            return $this->_propDict["externalAppointmentUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalAppointmentUrl
    * The URL of the appointment resource from the scheduling system, associated with the current virtual appointment. Optional.
    *
    * @param string $val The externalAppointmentUrl
    *
    * @return VirtualAppointment
    */
    public function setExternalAppointmentUrl($val)
    {
        $this->_propDict["externalAppointmentUrl"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    * The settings associated with the virtual appointment resource. Optional.
    *
    * @return VirtualAppointmentSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\VirtualAppointmentSettings") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new VirtualAppointmentSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    * The settings associated with the virtual appointment resource. Optional.
    *
    * @param VirtualAppointmentSettings $val The settings
    *
    * @return VirtualAppointment
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

}
