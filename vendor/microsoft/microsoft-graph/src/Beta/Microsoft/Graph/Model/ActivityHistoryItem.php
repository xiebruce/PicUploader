<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActivityHistoryItem File
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
* ActivityHistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActivityHistoryItem extends Entity
{
    /**
    * Gets the activeDurationSeconds
    *
    * @return int|null The activeDurationSeconds
    */
    public function getActiveDurationSeconds()
    {
        if (array_key_exists("activeDurationSeconds", $this->_propDict)) {
            return $this->_propDict["activeDurationSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeDurationSeconds
    *
    * @param int $val The activeDurationSeconds
    *
    * @return ActivityHistoryItem
    */
    public function setActiveDurationSeconds($val)
    {
        $this->_propDict["activeDurationSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastActiveDateTime
    *
    * @return \DateTime|null The lastActiveDateTime
    */
    public function getLastActiveDateTime()
    {
        if (array_key_exists("lastActiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActiveDateTime"], "\DateTime") || is_null($this->_propDict["lastActiveDateTime"])) {
                return $this->_propDict["lastActiveDateTime"];
            } else {
                $this->_propDict["lastActiveDateTime"] = new \DateTime($this->_propDict["lastActiveDateTime"]);
                return $this->_propDict["lastActiveDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActiveDateTime
    *
    * @param \DateTime $val The lastActiveDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setLastActiveDateTime($val)
    {
        $this->_propDict["lastActiveDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the startedDateTime
    *
    * @return \DateTime|null The startedDateTime
    */
    public function getStartedDateTime()
    {
        if (array_key_exists("startedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startedDateTime"], "\DateTime") || is_null($this->_propDict["startedDateTime"])) {
                return $this->_propDict["startedDateTime"];
            } else {
                $this->_propDict["startedDateTime"] = new \DateTime($this->_propDict["startedDateTime"]);
                return $this->_propDict["startedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startedDateTime
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return Status|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\Status") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new Status($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param Status $val The status
    *
    * @return ActivityHistoryItem
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the userTimezone
    *
    * @return string|null The userTimezone
    */
    public function getUserTimezone()
    {
        if (array_key_exists("userTimezone", $this->_propDict)) {
            return $this->_propDict["userTimezone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userTimezone
    *
    * @param string $val The userTimezone
    *
    * @return ActivityHistoryItem
    */
    public function setUserTimezone($val)
    {
        $this->_propDict["userTimezone"] = $val;
        return $this;
    }

    /**
    * Gets the activity
    *
    * @return UserActivity|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "\Beta\Microsoft\Graph\Model\UserActivity") || is_null($this->_propDict["activity"])) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new UserActivity($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }

    /**
    * Sets the activity
    *
    * @param UserActivity $val The activity
    *
    * @return ActivityHistoryItem
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

}
