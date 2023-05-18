<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DriverUpdateCatalogEntry File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* DriverUpdateCatalogEntry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DriverUpdateCatalogEntry extends SoftwareUpdateCatalogEntry
{
    /**
    * Gets the description
    * The description of the content.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the content.
    *
    * @param string $val The description
    *
    * @return DriverUpdateCatalogEntry
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the driverClass
    * The classification of the driver.
    *
    * @return string|null The driverClass
    */
    public function getDriverClass()
    {
        if (array_key_exists("driverClass", $this->_propDict)) {
            return $this->_propDict["driverClass"];
        } else {
            return null;
        }
    }

    /**
    * Sets the driverClass
    * The classification of the driver.
    *
    * @param string $val The driverClass
    *
    * @return DriverUpdateCatalogEntry
    */
    public function setDriverClass($val)
    {
        $this->_propDict["driverClass"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The manufacturer of the driver.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * The manufacturer of the driver.
    *
    * @param string $val The manufacturer
    *
    * @return DriverUpdateCatalogEntry
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the provider
    * The provider of the driver.
    *
    * @return string|null The provider
    */
    public function getProvider()
    {
        if (array_key_exists("provider", $this->_propDict)) {
            return $this->_propDict["provider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provider
    * The provider of the driver.
    *
    * @param string $val The provider
    *
    * @return DriverUpdateCatalogEntry
    */
    public function setProvider($val)
    {
        $this->_propDict["provider"] = $val;
        return $this;
    }

    /**
    * Gets the setupInformationFile
    * The setup information file of the driver.
    *
    * @return string|null The setupInformationFile
    */
    public function getSetupInformationFile()
    {
        if (array_key_exists("setupInformationFile", $this->_propDict)) {
            return $this->_propDict["setupInformationFile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the setupInformationFile
    * The setup information file of the driver.
    *
    * @param string $val The setupInformationFile
    *
    * @return DriverUpdateCatalogEntry
    */
    public function setSetupInformationFile($val)
    {
        $this->_propDict["setupInformationFile"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The unique version of the content.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The unique version of the content.
    *
    * @param string $val The version
    *
    * @return DriverUpdateCatalogEntry
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

    /**
    * Gets the versionDateTime
    * The date and time when a new version of content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The versionDateTime
    */
    public function getVersionDateTime()
    {
        if (array_key_exists("versionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["versionDateTime"], "\DateTime") || is_null($this->_propDict["versionDateTime"])) {
                return $this->_propDict["versionDateTime"];
            } else {
                $this->_propDict["versionDateTime"] = new \DateTime($this->_propDict["versionDateTime"]);
                return $this->_propDict["versionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the versionDateTime
    * The date and time when a new version of content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The versionDateTime
    *
    * @return DriverUpdateCatalogEntry
    */
    public function setVersionDateTime($val)
    {
        $this->_propDict["versionDateTime"] = $val;
        return $this;
    }

}
