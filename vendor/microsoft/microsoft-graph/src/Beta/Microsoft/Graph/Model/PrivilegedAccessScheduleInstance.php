<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccessScheduleInstance File
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
* PrivilegedAccessScheduleInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccessScheduleInstance extends Entity
{
    /**
    * Gets the endDateTime
    * When the schedule instance ends. Required.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * When the schedule instance ends. Required.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return PrivilegedAccessScheduleInstance
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * When this instance starts. Required.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * When this instance starts. Required.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return PrivilegedAccessScheduleInstance
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

}
