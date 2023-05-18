<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpAddress File
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
* IpAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpAddress extends Host
{
    /**
    * Gets the autonomousSystem
    * The details about the autonomous system to which this IP address belongs.
    *
    * @return AutonomousSystem|null The autonomousSystem
    */
    public function getAutonomousSystem()
    {
        if (array_key_exists("autonomousSystem", $this->_propDict)) {
            if (is_a($this->_propDict["autonomousSystem"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AutonomousSystem") || is_null($this->_propDict["autonomousSystem"])) {
                return $this->_propDict["autonomousSystem"];
            } else {
                $this->_propDict["autonomousSystem"] = new AutonomousSystem($this->_propDict["autonomousSystem"]);
                return $this->_propDict["autonomousSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the autonomousSystem
    * The details about the autonomous system to which this IP address belongs.
    *
    * @param AutonomousSystem $val The autonomousSystem
    *
    * @return IpAddress
    */
    public function setAutonomousSystem($val)
    {
        $this->_propDict["autonomousSystem"] = $val;
        return $this;
    }

    /**
    * Gets the countryOrRegion
    * The country or region for this IP address.
    *
    * @return string|null The countryOrRegion
    */
    public function getCountryOrRegion()
    {
        if (array_key_exists("countryOrRegion", $this->_propDict)) {
            return $this->_propDict["countryOrRegion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryOrRegion
    * The country or region for this IP address.
    *
    * @param string $val The countryOrRegion
    *
    * @return IpAddress
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }

    /**
    * Gets the hostingProvider
    * The hosting company listed for this host.
    *
    * @return string|null The hostingProvider
    */
    public function getHostingProvider()
    {
        if (array_key_exists("hostingProvider", $this->_propDict)) {
            return $this->_propDict["hostingProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostingProvider
    * The hosting company listed for this host.
    *
    * @param string $val The hostingProvider
    *
    * @return IpAddress
    */
    public function setHostingProvider($val)
    {
        $this->_propDict["hostingProvider"] = $val;
        return $this;
    }

    /**
    * Gets the netblock
    * The block of IP addresses this IP address belongs to.
    *
    * @return string|null The netblock
    */
    public function getNetblock()
    {
        if (array_key_exists("netblock", $this->_propDict)) {
            return $this->_propDict["netblock"];
        } else {
            return null;
        }
    }

    /**
    * Sets the netblock
    * The block of IP addresses this IP address belongs to.
    *
    * @param string $val The netblock
    *
    * @return IpAddress
    */
    public function setNetblock($val)
    {
        $this->_propDict["netblock"] = $val;
        return $this;
    }

}
