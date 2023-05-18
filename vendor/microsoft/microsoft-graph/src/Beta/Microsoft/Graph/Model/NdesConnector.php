<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NdesConnector File
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
* NdesConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NdesConnector extends Entity
{
    /**
    * Gets the connectorVersion
    * The build version of the Ndes Connector.
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
    * The build version of the Ndes Connector.
    *
    * @param string $val The connectorVersion
    *
    * @return NdesConnector
    */
    public function setConnectorVersion($val)
    {
        $this->_propDict["connectorVersion"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The friendly name of the Ndes Connector.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The friendly name of the Ndes Connector.
    *
    * @param string $val The displayName
    *
    * @return NdesConnector
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the enrolledDateTime
    * Timestamp when on-prem certificate connector was enrolled in Intune.
    *
    * @return \DateTime|null The enrolledDateTime
    */
    public function getEnrolledDateTime()
    {
        if (array_key_exists("enrolledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["enrolledDateTime"], "\DateTime") || is_null($this->_propDict["enrolledDateTime"])) {
                return $this->_propDict["enrolledDateTime"];
            } else {
                $this->_propDict["enrolledDateTime"] = new \DateTime($this->_propDict["enrolledDateTime"]);
                return $this->_propDict["enrolledDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the enrolledDateTime
    * Timestamp when on-prem certificate connector was enrolled in Intune.
    *
    * @param \DateTime $val The enrolledDateTime
    *
    * @return NdesConnector
    */
    public function setEnrolledDateTime($val)
    {
        $this->_propDict["enrolledDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastConnectionDateTime
    * Last connection time for the Ndes Connector
    *
    * @return \DateTime|null The lastConnectionDateTime
    */
    public function getLastConnectionDateTime()
    {
        if (array_key_exists("lastConnectionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConnectionDateTime"], "\DateTime") || is_null($this->_propDict["lastConnectionDateTime"])) {
                return $this->_propDict["lastConnectionDateTime"];
            } else {
                $this->_propDict["lastConnectionDateTime"] = new \DateTime($this->_propDict["lastConnectionDateTime"]);
                return $this->_propDict["lastConnectionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastConnectionDateTime
    * Last connection time for the Ndes Connector
    *
    * @param \DateTime $val The lastConnectionDateTime
    *
    * @return NdesConnector
    */
    public function setLastConnectionDateTime($val)
    {
        $this->_propDict["lastConnectionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the machineName
    * Name of the machine running on-prem certificate connector service.
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
    * Name of the machine running on-prem certificate connector service.
    *
    * @param string $val The machineName
    *
    * @return NdesConnector
    */
    public function setMachineName($val)
    {
        $this->_propDict["machineName"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return array|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string[] $val The roleScopeTagIds
    *
    * @return NdesConnector
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * Ndes Connector Status. Possible values are: none, active, inactive.
    *
    * @return NdesConnectorState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\NdesConnectorState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new NdesConnectorState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Ndes Connector Status. Possible values are: none, active, inactive.
    *
    * @param NdesConnectorState $val The state
    *
    * @return NdesConnector
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
