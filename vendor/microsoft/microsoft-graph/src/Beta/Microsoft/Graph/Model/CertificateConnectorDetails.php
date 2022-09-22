<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateConnectorDetails File
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
* CertificateConnectorDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateConnectorDetails extends Entity
{
    /**
    * Gets the connectorName
    * Connector name (set during enrollment).
    *
    * @return string|null The connectorName
    */
    public function getConnectorName()
    {
        if (array_key_exists("connectorName", $this->_propDict)) {
            return $this->_propDict["connectorName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectorName
    * Connector name (set during enrollment).
    *
    * @param string $val The connectorName
    *
    * @return CertificateConnectorDetails
    */
    public function setConnectorName($val)
    {
        $this->_propDict["connectorName"] = $val;
        return $this;
    }

    /**
    * Gets the connectorVersion
    * Version of the connector installed.
    *
    * @return string|null The connectorVersion
    */
    public function getConnectorVersion()
    {
        if (array_key_exists("connectorVersion", $this->_propDict)) {
            return $this->_propDict["connectorVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectorVersion
    * Version of the connector installed.
    *
    * @param string $val The connectorVersion
    *
    * @return CertificateConnectorDetails
    */
    public function setConnectorVersion($val)
    {
        $this->_propDict["connectorVersion"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentDateTime
    * Date/time when this connector was enrolled.
    *
    * @return \DateTime|null The enrollmentDateTime
    */
    public function getEnrollmentDateTime()
    {
        if (array_key_exists("enrollmentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentDateTime"], "\DateTime") || is_null($this->_propDict["enrollmentDateTime"])) {
                return $this->_propDict["enrollmentDateTime"];
            } else {
                $this->_propDict["enrollmentDateTime"] = new \DateTime($this->_propDict["enrollmentDateTime"]);
                return $this->_propDict["enrollmentDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentDateTime
    * Date/time when this connector was enrolled.
    *
    * @param \DateTime $val The enrollmentDateTime
    *
    * @return CertificateConnectorDetails
    */
    public function setEnrollmentDateTime($val)
    {
        $this->_propDict["enrollmentDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastCheckinDateTime
    * Date/time when this connector last connected to the service.
    *
    * @return \DateTime|null The lastCheckinDateTime
    */
    public function getLastCheckinDateTime()
    {
        if (array_key_exists("lastCheckinDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckinDateTime"], "\DateTime") || is_null($this->_propDict["lastCheckinDateTime"])) {
                return $this->_propDict["lastCheckinDateTime"];
            } else {
                $this->_propDict["lastCheckinDateTime"] = new \DateTime($this->_propDict["lastCheckinDateTime"]);
                return $this->_propDict["lastCheckinDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCheckinDateTime
    * Date/time when this connector last connected to the service.
    *
    * @param \DateTime $val The lastCheckinDateTime
    *
    * @return CertificateConnectorDetails
    */
    public function setLastCheckinDateTime($val)
    {
        $this->_propDict["lastCheckinDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the machineName
    * Name of the machine hosting this connector service.
    *
    * @return string|null The machineName
    */
    public function getMachineName()
    {
        if (array_key_exists("machineName", $this->_propDict)) {
            return $this->_propDict["machineName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the machineName
    * Name of the machine hosting this connector service.
    *
    * @param string $val The machineName
    *
    * @return CertificateConnectorDetails
    */
    public function setMachineName($val)
    {
        $this->_propDict["machineName"] = $val;
        return $this;
    }

}
