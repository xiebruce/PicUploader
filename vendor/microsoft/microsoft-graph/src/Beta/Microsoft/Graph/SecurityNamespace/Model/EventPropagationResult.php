<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventPropagationResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* EventPropagationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EventPropagationResult extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the location
    * The name of the specific location in the workload associated with the event.
    *
    * @return string|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            return $this->_propDict["location"];
        } else {
            return null;
        }
    }

    /**
    * Sets the location
    * The name of the specific location in the workload associated with the event.
    *
    * @param string $val The value of the location
    *
    * @return EventPropagationResult
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    /**
    * Gets the serviceName
    * The name of the workload associated with the event.
    *
    * @return string|null The serviceName
    */
    public function getServiceName()
    {
        if (array_key_exists("serviceName", $this->_propDict)) {
            return $this->_propDict["serviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceName
    * The name of the workload associated with the event.
    *
    * @param string $val The value of the serviceName
    *
    * @return EventPropagationResult
    */
    public function setServiceName($val)
    {
        $this->_propDict["serviceName"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success.
    *
    * @return EventPropagationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EventPropagationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new EventPropagationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success.
    *
    * @param EventPropagationStatus $val The value to assign to the status
    *
    * @return EventPropagationResult The EventPropagationResult
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
    /**
    * Gets the statusInformation
    * Additional information about the status of the event creation request.
    *
    * @return string|null The statusInformation
    */
    public function getStatusInformation()
    {
        if (array_key_exists("statusInformation", $this->_propDict)) {
            return $this->_propDict["statusInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statusInformation
    * Additional information about the status of the event creation request.
    *
    * @param string $val The value of the statusInformation
    *
    * @return EventPropagationResult
    */
    public function setStatusInformation($val)
    {
        $this->_propDict["statusInformation"] = $val;
        return $this;
    }
}
