<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectorStatusDetails File
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
* ConnectorStatusDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectorStatusDetails extends Entity
{
    /**
    * Gets the connectorInstanceId
    * Connector Instance Id
    *
    * @return string|null The connectorInstanceId
    */
    public function getConnectorInstanceId()
    {
        if (array_key_exists("connectorInstanceId", $this->_propDict)) {
            return $this->_propDict["connectorInstanceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectorInstanceId
    * Connector Instance Id
    *
    * @param string $val The value of the connectorInstanceId
    *
    * @return ConnectorStatusDetails
    */
    public function setConnectorInstanceId($val)
    {
        $this->_propDict["connectorInstanceId"] = $val;
        return $this;
    }

    /**
    * Gets the connectorName
    * Connector name
    *
    * @return ConnectorName|null The connectorName
    */
    public function getConnectorName()
    {
        if (array_key_exists("connectorName", $this->_propDict)) {
            if (is_a($this->_propDict["connectorName"], "\Beta\Microsoft\Graph\Model\ConnectorName") || is_null($this->_propDict["connectorName"])) {
                return $this->_propDict["connectorName"];
            } else {
                $this->_propDict["connectorName"] = new ConnectorName($this->_propDict["connectorName"]);
                return $this->_propDict["connectorName"];
            }
        }
        return null;
    }

    /**
    * Sets the connectorName
    * Connector name
    *
    * @param ConnectorName $val The value to assign to the connectorName
    *
    * @return ConnectorStatusDetails The ConnectorStatusDetails
    */
    public function setConnectorName($val)
    {
        $this->_propDict["connectorName"] = $val;
         return $this;
    }

    /**
    * Gets the eventDateTime
    * Event datetime
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
    * Event datetime
    *
    * @param \DateTime $val The value to assign to the eventDateTime
    *
    * @return ConnectorStatusDetails The ConnectorStatusDetails
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * Connector health state
    *
    * @return ConnectorHealthState|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ConnectorHealthState") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ConnectorHealthState($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Connector health state
    *
    * @param ConnectorHealthState $val The value to assign to the status
    *
    * @return ConnectorStatusDetails The ConnectorStatusDetails
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
