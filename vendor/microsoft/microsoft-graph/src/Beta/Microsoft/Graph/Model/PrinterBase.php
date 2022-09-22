<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterBase File
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
* PrinterBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterBase extends Entity
{
    /**
    * Gets the capabilities
    *
    * @return PrinterCapabilities|null The capabilities
    */
    public function getCapabilities()
    {
        if (array_key_exists("capabilities", $this->_propDict)) {
            if (is_a($this->_propDict["capabilities"], "\Beta\Microsoft\Graph\Model\PrinterCapabilities") || is_null($this->_propDict["capabilities"])) {
                return $this->_propDict["capabilities"];
            } else {
                $this->_propDict["capabilities"] = new PrinterCapabilities($this->_propDict["capabilities"]);
                return $this->_propDict["capabilities"];
            }
        }
        return null;
    }

    /**
    * Sets the capabilities
    *
    * @param PrinterCapabilities $val The capabilities
    *
    * @return PrinterBase
    */
    public function setCapabilities($val)
    {
        $this->_propDict["capabilities"] = $val;
        return $this;
    }

    /**
    * Gets the defaults
    *
    * @return PrinterDefaults|null The defaults
    */
    public function getDefaults()
    {
        if (array_key_exists("defaults", $this->_propDict)) {
            if (is_a($this->_propDict["defaults"], "\Beta\Microsoft\Graph\Model\PrinterDefaults") || is_null($this->_propDict["defaults"])) {
                return $this->_propDict["defaults"];
            } else {
                $this->_propDict["defaults"] = new PrinterDefaults($this->_propDict["defaults"]);
                return $this->_propDict["defaults"];
            }
        }
        return null;
    }

    /**
    * Sets the defaults
    *
    * @param PrinterDefaults $val The defaults
    *
    * @return PrinterBase
    */
    public function setDefaults($val)
    {
        $this->_propDict["defaults"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return PrinterBase
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isAcceptingJobs
    *
    * @return bool|null The isAcceptingJobs
    */
    public function getIsAcceptingJobs()
    {
        if (array_key_exists("isAcceptingJobs", $this->_propDict)) {
            return $this->_propDict["isAcceptingJobs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAcceptingJobs
    *
    * @param bool $val The isAcceptingJobs
    *
    * @return PrinterBase
    */
    public function setIsAcceptingJobs($val)
    {
        $this->_propDict["isAcceptingJobs"] = boolval($val);
        return $this;
    }

    /**
    * Gets the location
    *
    * @return PrinterLocation|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\PrinterLocation") || is_null($this->_propDict["location"])) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new PrinterLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }

    /**
    * Sets the location
    *
    * @param PrinterLocation $val The location
    *
    * @return PrinterBase
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
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
    *
    * @param string $val The manufacturer
    *
    * @return PrinterBase
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    *
    * @return string|null The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    *
    * @param string $val The model
    *
    * @return PrinterBase
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return PrinterBase
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return PrinterStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\PrinterStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new PrinterStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param PrinterStatus $val The status
    *
    * @return PrinterBase
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the jobs
     *
     * @return array|null The jobs
     */
    public function getJobs()
    {
        if (array_key_exists("jobs", $this->_propDict)) {
           return $this->_propDict["jobs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the jobs
    *
    * @param PrintJob[] $val The jobs
    *
    * @return PrinterBase
    */
    public function setJobs($val)
    {
        $this->_propDict["jobs"] = $val;
        return $this;
    }

}
