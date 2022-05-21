<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceActivity File
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
* TeamworkDeviceActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceActivity extends Entity
{
    /**
    * Gets the activePeripherals
    * The active peripheral devices attached to the device.
    *
    * @return TeamworkActivePeripherals|null The activePeripherals
    */
    public function getActivePeripherals()
    {
        if (array_key_exists("activePeripherals", $this->_propDict)) {
            if (is_a($this->_propDict["activePeripherals"], "\Beta\Microsoft\Graph\Model\TeamworkActivePeripherals") || is_null($this->_propDict["activePeripherals"])) {
                return $this->_propDict["activePeripherals"];
            } else {
                $this->_propDict["activePeripherals"] = new TeamworkActivePeripherals($this->_propDict["activePeripherals"]);
                return $this->_propDict["activePeripherals"];
            }
        }
        return null;
    }

    /**
    * Sets the activePeripherals
    * The active peripheral devices attached to the device.
    *
    * @param TeamworkActivePeripherals $val The activePeripherals
    *
    * @return TeamworkDeviceActivity
    */
    public function setActivePeripherals($val)
    {
        $this->_propDict["activePeripherals"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Identity of the user who created the device activity document.
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user who created the device activity document.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return TeamworkDeviceActivity
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The UTC date and time when the device activity document was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The UTC date and time when the device activity document was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TeamworkDeviceActivity
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user who last modified the device activity details.
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity of the user who last modified the device activity details.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return TeamworkDeviceActivity
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The UTC date and time when the device activity detail was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The UTC date and time when the device activity detail was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TeamworkDeviceActivity
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

}
