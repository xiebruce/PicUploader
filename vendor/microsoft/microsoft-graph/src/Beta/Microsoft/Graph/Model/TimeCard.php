<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeCard File
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
* TimeCard class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeCard extends ChangeTrackedEntity
{

     /**
     * Gets the breaks
    * The list of breaks associated with the timeCard.
     *
     * @return array|null The breaks
     */
    public function getBreaks()
    {
        if (array_key_exists("breaks", $this->_propDict)) {
           return $this->_propDict["breaks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the breaks
    * The list of breaks associated with the timeCard.
    *
    * @param TimeCardBreak[] $val The breaks
    *
    * @return TimeCard
    */
    public function setBreaks($val)
    {
        $this->_propDict["breaks"] = $val;
        return $this;
    }

    /**
    * Gets the clockInEvent
    * The clock-in event of the timeCard.
    *
    * @return TimeCardEvent|null The clockInEvent
    */
    public function getClockInEvent()
    {
        if (array_key_exists("clockInEvent", $this->_propDict)) {
            if (is_a($this->_propDict["clockInEvent"], "\Beta\Microsoft\Graph\Model\TimeCardEvent") || is_null($this->_propDict["clockInEvent"])) {
                return $this->_propDict["clockInEvent"];
            } else {
                $this->_propDict["clockInEvent"] = new TimeCardEvent($this->_propDict["clockInEvent"]);
                return $this->_propDict["clockInEvent"];
            }
        }
        return null;
    }

    /**
    * Sets the clockInEvent
    * The clock-in event of the timeCard.
    *
    * @param TimeCardEvent $val The clockInEvent
    *
    * @return TimeCard
    */
    public function setClockInEvent($val)
    {
        $this->_propDict["clockInEvent"] = $val;
        return $this;
    }

    /**
    * Gets the clockOutEvent
    * The clock-out event of the timeCard.
    *
    * @return TimeCardEvent|null The clockOutEvent
    */
    public function getClockOutEvent()
    {
        if (array_key_exists("clockOutEvent", $this->_propDict)) {
            if (is_a($this->_propDict["clockOutEvent"], "\Beta\Microsoft\Graph\Model\TimeCardEvent") || is_null($this->_propDict["clockOutEvent"])) {
                return $this->_propDict["clockOutEvent"];
            } else {
                $this->_propDict["clockOutEvent"] = new TimeCardEvent($this->_propDict["clockOutEvent"]);
                return $this->_propDict["clockOutEvent"];
            }
        }
        return null;
    }

    /**
    * Sets the clockOutEvent
    * The clock-out event of the timeCard.
    *
    * @param TimeCardEvent $val The clockOutEvent
    *
    * @return TimeCard
    */
    public function setClockOutEvent($val)
    {
        $this->_propDict["clockOutEvent"] = $val;
        return $this;
    }

    /**
    * Gets the confirmedBy
    * Indicate if this timeCard entry is confirmed. Possible values are none, user, manager, unknownFutureValue.
    *
    * @return ConfirmedBy|null The confirmedBy
    */
    public function getConfirmedBy()
    {
        if (array_key_exists("confirmedBy", $this->_propDict)) {
            if (is_a($this->_propDict["confirmedBy"], "\Beta\Microsoft\Graph\Model\ConfirmedBy") || is_null($this->_propDict["confirmedBy"])) {
                return $this->_propDict["confirmedBy"];
            } else {
                $this->_propDict["confirmedBy"] = new ConfirmedBy($this->_propDict["confirmedBy"]);
                return $this->_propDict["confirmedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the confirmedBy
    * Indicate if this timeCard entry is confirmed. Possible values are none, user, manager, unknownFutureValue.
    *
    * @param ConfirmedBy $val The confirmedBy
    *
    * @return TimeCard
    */
    public function setConfirmedBy($val)
    {
        $this->_propDict["confirmedBy"] = $val;
        return $this;
    }

    /**
    * Gets the notes
    * Notes about the timeCard.
    *
    * @return ItemBody|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            if (is_a($this->_propDict["notes"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["notes"])) {
                return $this->_propDict["notes"];
            } else {
                $this->_propDict["notes"] = new ItemBody($this->_propDict["notes"]);
                return $this->_propDict["notes"];
            }
        }
        return null;
    }

    /**
    * Sets the notes
    * Notes about the timeCard.
    *
    * @param ItemBody $val The notes
    *
    * @return TimeCard
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the originalEntry
    * The original timeCardEntry of the timeCard, before user edits.
    *
    * @return TimeCardEntry|null The originalEntry
    */
    public function getOriginalEntry()
    {
        if (array_key_exists("originalEntry", $this->_propDict)) {
            if (is_a($this->_propDict["originalEntry"], "\Beta\Microsoft\Graph\Model\TimeCardEntry") || is_null($this->_propDict["originalEntry"])) {
                return $this->_propDict["originalEntry"];
            } else {
                $this->_propDict["originalEntry"] = new TimeCardEntry($this->_propDict["originalEntry"]);
                return $this->_propDict["originalEntry"];
            }
        }
        return null;
    }

    /**
    * Sets the originalEntry
    * The original timeCardEntry of the timeCard, before user edits.
    *
    * @param TimeCardEntry $val The originalEntry
    *
    * @return TimeCard
    */
    public function setOriginalEntry($val)
    {
        $this->_propDict["originalEntry"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The current state of the timeCard during its life cycle.Possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
    *
    * @return TimeCardState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\TimeCardState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new TimeCardState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The current state of the timeCard during its life cycle.Possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
    *
    * @param TimeCardState $val The state
    *
    * @return TimeCard
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    * User ID to which  the timeCard belongs.
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * User ID to which  the timeCard belongs.
    *
    * @param string $val The userId
    *
    * @return TimeCard
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

}
