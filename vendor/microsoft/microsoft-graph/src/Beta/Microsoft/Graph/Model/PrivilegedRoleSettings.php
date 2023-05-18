<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRoleSettings File
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
* PrivilegedRoleSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRoleSettings extends Entity
{
    /**
    * Gets the approvalOnElevation
    *
    * @return bool|null The approvalOnElevation
    */
    public function getApprovalOnElevation()
    {
        if (array_key_exists("approvalOnElevation", $this->_propDict)) {
            return $this->_propDict["approvalOnElevation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approvalOnElevation
    *
    * @param bool $val The approvalOnElevation
    *
    * @return PrivilegedRoleSettings
    */
    public function setApprovalOnElevation($val)
    {
        $this->_propDict["approvalOnElevation"] = boolval($val);
        return $this;
    }

    /**
    * Gets the approverIds
    *
    * @return array|null The approverIds
    */
    public function getApproverIds()
    {
        if (array_key_exists("approverIds", $this->_propDict)) {
            return $this->_propDict["approverIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approverIds
    *
    * @param string[] $val The approverIds
    *
    * @return PrivilegedRoleSettings
    */
    public function setApproverIds($val)
    {
        $this->_propDict["approverIds"] = $val;
        return $this;
    }

    /**
    * Gets the elevationDuration
    *
    * @return \DateInterval|null The elevationDuration
    */
    public function getElevationDuration()
    {
        if (array_key_exists("elevationDuration", $this->_propDict)) {
            if (is_a($this->_propDict["elevationDuration"], "\DateInterval") || is_null($this->_propDict["elevationDuration"])) {
                return $this->_propDict["elevationDuration"];
            } else {
                $this->_propDict["elevationDuration"] = new \DateInterval($this->_propDict["elevationDuration"]);
                return $this->_propDict["elevationDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the elevationDuration
    *
    * @param \DateInterval $val The elevationDuration
    *
    * @return PrivilegedRoleSettings
    */
    public function setElevationDuration($val)
    {
        $this->_propDict["elevationDuration"] = $val;
        return $this;
    }

    /**
    * Gets the isMfaOnElevationConfigurable
    *
    * @return bool|null The isMfaOnElevationConfigurable
    */
    public function getIsMfaOnElevationConfigurable()
    {
        if (array_key_exists("isMfaOnElevationConfigurable", $this->_propDict)) {
            return $this->_propDict["isMfaOnElevationConfigurable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMfaOnElevationConfigurable
    *
    * @param bool $val The isMfaOnElevationConfigurable
    *
    * @return PrivilegedRoleSettings
    */
    public function setIsMfaOnElevationConfigurable($val)
    {
        $this->_propDict["isMfaOnElevationConfigurable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastGlobalAdmin
    *
    * @return bool|null The lastGlobalAdmin
    */
    public function getLastGlobalAdmin()
    {
        if (array_key_exists("lastGlobalAdmin", $this->_propDict)) {
            return $this->_propDict["lastGlobalAdmin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastGlobalAdmin
    *
    * @param bool $val The lastGlobalAdmin
    *
    * @return PrivilegedRoleSettings
    */
    public function setLastGlobalAdmin($val)
    {
        $this->_propDict["lastGlobalAdmin"] = boolval($val);
        return $this;
    }

    /**
    * Gets the maxElavationDuration
    *
    * @return \DateInterval|null The maxElavationDuration
    */
    public function getMaxElavationDuration()
    {
        if (array_key_exists("maxElavationDuration", $this->_propDict)) {
            if (is_a($this->_propDict["maxElavationDuration"], "\DateInterval") || is_null($this->_propDict["maxElavationDuration"])) {
                return $this->_propDict["maxElavationDuration"];
            } else {
                $this->_propDict["maxElavationDuration"] = new \DateInterval($this->_propDict["maxElavationDuration"]);
                return $this->_propDict["maxElavationDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the maxElavationDuration
    *
    * @param \DateInterval $val The maxElavationDuration
    *
    * @return PrivilegedRoleSettings
    */
    public function setMaxElavationDuration($val)
    {
        $this->_propDict["maxElavationDuration"] = $val;
        return $this;
    }

    /**
    * Gets the mfaOnElevation
    *
    * @return bool|null The mfaOnElevation
    */
    public function getMfaOnElevation()
    {
        if (array_key_exists("mfaOnElevation", $this->_propDict)) {
            return $this->_propDict["mfaOnElevation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mfaOnElevation
    *
    * @param bool $val The mfaOnElevation
    *
    * @return PrivilegedRoleSettings
    */
    public function setMfaOnElevation($val)
    {
        $this->_propDict["mfaOnElevation"] = boolval($val);
        return $this;
    }

    /**
    * Gets the minElevationDuration
    *
    * @return \DateInterval|null The minElevationDuration
    */
    public function getMinElevationDuration()
    {
        if (array_key_exists("minElevationDuration", $this->_propDict)) {
            if (is_a($this->_propDict["minElevationDuration"], "\DateInterval") || is_null($this->_propDict["minElevationDuration"])) {
                return $this->_propDict["minElevationDuration"];
            } else {
                $this->_propDict["minElevationDuration"] = new \DateInterval($this->_propDict["minElevationDuration"]);
                return $this->_propDict["minElevationDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the minElevationDuration
    *
    * @param \DateInterval $val The minElevationDuration
    *
    * @return PrivilegedRoleSettings
    */
    public function setMinElevationDuration($val)
    {
        $this->_propDict["minElevationDuration"] = $val;
        return $this;
    }

    /**
    * Gets the notificationToUserOnElevation
    *
    * @return bool|null The notificationToUserOnElevation
    */
    public function getNotificationToUserOnElevation()
    {
        if (array_key_exists("notificationToUserOnElevation", $this->_propDict)) {
            return $this->_propDict["notificationToUserOnElevation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationToUserOnElevation
    *
    * @param bool $val The notificationToUserOnElevation
    *
    * @return PrivilegedRoleSettings
    */
    public function setNotificationToUserOnElevation($val)
    {
        $this->_propDict["notificationToUserOnElevation"] = boolval($val);
        return $this;
    }

    /**
    * Gets the ticketingInfoOnElevation
    *
    * @return bool|null The ticketingInfoOnElevation
    */
    public function getTicketingInfoOnElevation()
    {
        if (array_key_exists("ticketingInfoOnElevation", $this->_propDict)) {
            return $this->_propDict["ticketingInfoOnElevation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ticketingInfoOnElevation
    *
    * @param bool $val The ticketingInfoOnElevation
    *
    * @return PrivilegedRoleSettings
    */
    public function setTicketingInfoOnElevation($val)
    {
        $this->_propDict["ticketingInfoOnElevation"] = boolval($val);
        return $this;
    }

}
