<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetentionEvent File
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
* RetentionEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetentionEvent extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdBy
    * The user who created the retentionEvent.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * The user who created the retentionEvent.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The createdBy
    *
    * @return RetentionEvent
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date time when the retentionEvent was created.
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
    * The date time when the retentionEvent was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return RetentionEvent
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Optional information about the event.
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
    * Optional information about the event.
    *
    * @param string $val The description
    *
    * @return RetentionEvent
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Name of the event.
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
    * Name of the event.
    *
    * @param string $val The displayName
    *
    * @return RetentionEvent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the eventPropagationResults
     *
     * @return array|null The eventPropagationResults
     */
    public function getEventPropagationResults()
    {
        if (array_key_exists("eventPropagationResults", $this->_propDict)) {
           return $this->_propDict["eventPropagationResults"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventPropagationResults
    *
    * @param EventPropagationResult[] $val The eventPropagationResults
    *
    * @return RetentionEvent
    */
    public function setEventPropagationResults($val)
    {
        $this->_propDict["eventPropagationResults"] = $val;
        return $this;
    }


     /**
     * Gets the eventQueries
    * Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
     *
     * @return array|null The eventQueries
     */
    public function getEventQueries()
    {
        if (array_key_exists("eventQueries", $this->_propDict)) {
           return $this->_propDict["eventQueries"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventQueries
    * Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
    *
    * @param EventQuery[] $val The eventQueries
    *
    * @return RetentionEvent
    */
    public function setEventQueries($val)
    {
        $this->_propDict["eventQueries"] = $val;
        return $this;
    }

    /**
    * Gets the eventStatus
    *
    * @return RetentionEventStatus|null The eventStatus
    */
    public function getEventStatus()
    {
        if (array_key_exists("eventStatus", $this->_propDict)) {
            if (is_a($this->_propDict["eventStatus"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RetentionEventStatus") || is_null($this->_propDict["eventStatus"])) {
                return $this->_propDict["eventStatus"];
            } else {
                $this->_propDict["eventStatus"] = new RetentionEventStatus($this->_propDict["eventStatus"]);
                return $this->_propDict["eventStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the eventStatus
    *
    * @param RetentionEventStatus $val The eventStatus
    *
    * @return RetentionEvent
    */
    public function setEventStatus($val)
    {
        $this->_propDict["eventStatus"] = $val;
        return $this;
    }

    /**
    * Gets the eventTriggerDateTime
    * Optional time when the event should be triggered.
    *
    * @return \DateTime|null The eventTriggerDateTime
    */
    public function getEventTriggerDateTime()
    {
        if (array_key_exists("eventTriggerDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventTriggerDateTime"], "\DateTime") || is_null($this->_propDict["eventTriggerDateTime"])) {
                return $this->_propDict["eventTriggerDateTime"];
            } else {
                $this->_propDict["eventTriggerDateTime"] = new \DateTime($this->_propDict["eventTriggerDateTime"]);
                return $this->_propDict["eventTriggerDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventTriggerDateTime
    * Optional time when the event should be triggered.
    *
    * @param \DateTime $val The eventTriggerDateTime
    *
    * @return RetentionEvent
    */
    public function setEventTriggerDateTime($val)
    {
        $this->_propDict["eventTriggerDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The user who last modified the retentionEvent.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * The user who last modified the retentionEvent.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The lastModifiedBy
    *
    * @return RetentionEvent
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The latest date time when the retentionEvent was modified.
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
    * The latest date time when the retentionEvent was modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return RetentionEvent
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastStatusUpdateDateTime
    * Last time the status of the event was updated.
    *
    * @return \DateTime|null The lastStatusUpdateDateTime
    */
    public function getLastStatusUpdateDateTime()
    {
        if (array_key_exists("lastStatusUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastStatusUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastStatusUpdateDateTime"])) {
                return $this->_propDict["lastStatusUpdateDateTime"];
            } else {
                $this->_propDict["lastStatusUpdateDateTime"] = new \DateTime($this->_propDict["lastStatusUpdateDateTime"]);
                return $this->_propDict["lastStatusUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastStatusUpdateDateTime
    * Last time the status of the event was updated.
    *
    * @param \DateTime $val The lastStatusUpdateDateTime
    *
    * @return RetentionEvent
    */
    public function setLastStatusUpdateDateTime($val)
    {
        $this->_propDict["lastStatusUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the retentionEventType
    * Specifies the event that will start the retention period for labels that use this event type when an event is created.
    *
    * @return RetentionEventType|null The retentionEventType
    */
    public function getRetentionEventType()
    {
        if (array_key_exists("retentionEventType", $this->_propDict)) {
            if (is_a($this->_propDict["retentionEventType"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RetentionEventType") || is_null($this->_propDict["retentionEventType"])) {
                return $this->_propDict["retentionEventType"];
            } else {
                $this->_propDict["retentionEventType"] = new RetentionEventType($this->_propDict["retentionEventType"]);
                return $this->_propDict["retentionEventType"];
            }
        }
        return null;
    }

    /**
    * Sets the retentionEventType
    * Specifies the event that will start the retention period for labels that use this event type when an event is created.
    *
    * @param RetentionEventType $val The retentionEventType
    *
    * @return RetentionEvent
    */
    public function setRetentionEventType($val)
    {
        $this->_propDict["retentionEventType"] = $val;
        return $this;
    }

}
