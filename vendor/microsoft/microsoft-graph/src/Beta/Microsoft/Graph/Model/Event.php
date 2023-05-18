<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Event File
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
* Event class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Event extends OutlookItem
{
    /**
    * Gets the allowNewTimeProposals
    * true if the meeting organizer allows invitees to propose a new time when responding; otherwise false. Optional. Default is true.
    *
    * @return bool|null The allowNewTimeProposals
    */
    public function getAllowNewTimeProposals()
    {
        if (array_key_exists("allowNewTimeProposals", $this->_propDict)) {
            return $this->_propDict["allowNewTimeProposals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowNewTimeProposals
    * true if the meeting organizer allows invitees to propose a new time when responding; otherwise false. Optional. Default is true.
    *
    * @param bool $val The allowNewTimeProposals
    *
    * @return Event
    */
    public function setAllowNewTimeProposals($val)
    {
        $this->_propDict["allowNewTimeProposals"] = boolval($val);
        return $this;
    }


     /**
     * Gets the attendees
    * The collection of attendees for the event.
     *
     * @return array|null The attendees
     */
    public function getAttendees()
    {
        if (array_key_exists("attendees", $this->_propDict)) {
           return $this->_propDict["attendees"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attendees
    * The collection of attendees for the event.
    *
    * @param Attendee[] $val The attendees
    *
    * @return Event
    */
    public function setAttendees($val)
    {
        $this->_propDict["attendees"] = $val;
        return $this;
    }

    /**
    * Gets the body
    * The body of the message associated with the event. It can be in HTML or text format.
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["body"])) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }

    /**
    * Sets the body
    * The body of the message associated with the event. It can be in HTML or text format.
    *
    * @param ItemBody $val The body
    *
    * @return Event
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the bodyPreview
    * The preview of the message associated with the event. It is in text format.
    *
    * @return string|null The bodyPreview
    */
    public function getBodyPreview()
    {
        if (array_key_exists("bodyPreview", $this->_propDict)) {
            return $this->_propDict["bodyPreview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bodyPreview
    * The preview of the message associated with the event. It is in text format.
    *
    * @param string $val The bodyPreview
    *
    * @return Event
    */
    public function setBodyPreview($val)
    {
        $this->_propDict["bodyPreview"] = $val;
        return $this;
    }

    /**
    * Gets the cancelledOccurrences
    * Contains occurrenceId property values of cancelled instances in a recurring series, if the event is the series master. Instances in a recurring series that are cancelled are called cancelledOccurences.Returned only on $select in a Get operation which specifies the id of a series master event (that is, the seriesMasterId property value).
    *
    * @return array|null The cancelledOccurrences
    */
    public function getCancelledOccurrences()
    {
        if (array_key_exists("cancelledOccurrences", $this->_propDict)) {
            return $this->_propDict["cancelledOccurrences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cancelledOccurrences
    * Contains occurrenceId property values of cancelled instances in a recurring series, if the event is the series master. Instances in a recurring series that are cancelled are called cancelledOccurences.Returned only on $select in a Get operation which specifies the id of a series master event (that is, the seriesMasterId property value).
    *
    * @param string[] $val The cancelledOccurrences
    *
    * @return Event
    */
    public function setCancelledOccurrences($val)
    {
        $this->_propDict["cancelledOccurrences"] = $val;
        return $this;
    }

    /**
    * Gets the end
    * The date, time, and time zone that the event ends. By default, the end time is in UTC.
    *
    * @return DateTimeTimeZone|null The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["end"])) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new DateTimeTimeZone($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }

    /**
    * Sets the end
    * The date, time, and time zone that the event ends. By default, the end time is in UTC.
    *
    * @param DateTimeTimeZone $val The end
    *
    * @return Event
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
        return $this;
    }

    /**
    * Gets the hasAttachments
    * Set to true if the event has attachments.
    *
    * @return bool|null The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasAttachments
    * Set to true if the event has attachments.
    *
    * @param bool $val The hasAttachments
    *
    * @return Event
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the hideAttendees
    * When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
    *
    * @return bool|null The hideAttendees
    */
    public function getHideAttendees()
    {
        if (array_key_exists("hideAttendees", $this->_propDict)) {
            return $this->_propDict["hideAttendees"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideAttendees
    * When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
    *
    * @param bool $val The hideAttendees
    *
    * @return Event
    */
    public function setHideAttendees($val)
    {
        $this->_propDict["hideAttendees"] = boolval($val);
        return $this;
    }

    /**
    * Gets the importance
    *
    * @return Importance|null The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "\Beta\Microsoft\Graph\Model\Importance") || is_null($this->_propDict["importance"])) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new Importance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }

    /**
    * Sets the importance
    *
    * @param Importance $val The importance
    *
    * @return Event
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }

    /**
    * Gets the isAllDay
    *
    * @return bool|null The isAllDay
    */
    public function getIsAllDay()
    {
        if (array_key_exists("isAllDay", $this->_propDict)) {
            return $this->_propDict["isAllDay"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAllDay
    *
    * @param bool $val The isAllDay
    *
    * @return Event
    */
    public function setIsAllDay($val)
    {
        $this->_propDict["isAllDay"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isCancelled
    *
    * @return bool|null The isCancelled
    */
    public function getIsCancelled()
    {
        if (array_key_exists("isCancelled", $this->_propDict)) {
            return $this->_propDict["isCancelled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCancelled
    *
    * @param bool $val The isCancelled
    *
    * @return Event
    */
    public function setIsCancelled($val)
    {
        $this->_propDict["isCancelled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isDraft
    *
    * @return bool|null The isDraft
    */
    public function getIsDraft()
    {
        if (array_key_exists("isDraft", $this->_propDict)) {
            return $this->_propDict["isDraft"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDraft
    *
    * @param bool $val The isDraft
    *
    * @return Event
    */
    public function setIsDraft($val)
    {
        $this->_propDict["isDraft"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isOnlineMeeting
    *
    * @return bool|null The isOnlineMeeting
    */
    public function getIsOnlineMeeting()
    {
        if (array_key_exists("isOnlineMeeting", $this->_propDict)) {
            return $this->_propDict["isOnlineMeeting"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOnlineMeeting
    *
    * @param bool $val The isOnlineMeeting
    *
    * @return Event
    */
    public function setIsOnlineMeeting($val)
    {
        $this->_propDict["isOnlineMeeting"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isOrganizer
    *
    * @return bool|null The isOrganizer
    */
    public function getIsOrganizer()
    {
        if (array_key_exists("isOrganizer", $this->_propDict)) {
            return $this->_propDict["isOrganizer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOrganizer
    *
    * @param bool $val The isOrganizer
    *
    * @return Event
    */
    public function setIsOrganizer($val)
    {
        $this->_propDict["isOrganizer"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isReminderOn
    *
    * @return bool|null The isReminderOn
    */
    public function getIsReminderOn()
    {
        if (array_key_exists("isReminderOn", $this->_propDict)) {
            return $this->_propDict["isReminderOn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReminderOn
    *
    * @param bool $val The isReminderOn
    *
    * @return Event
    */
    public function setIsReminderOn($val)
    {
        $this->_propDict["isReminderOn"] = boolval($val);
        return $this;
    }

    /**
    * Gets the location
    *
    * @return Location|null The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\Location") || is_null($this->_propDict["location"])) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new Location($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }

    /**
    * Sets the location
    *
    * @param Location $val The location
    *
    * @return Event
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }


     /**
     * Gets the locations
     *
     * @return array|null The locations
     */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
           return $this->_propDict["locations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locations
    *
    * @param Location[] $val The locations
    *
    * @return Event
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
        return $this;
    }

    /**
    * Gets the occurrenceId
    *
    * @return string|null The occurrenceId
    */
    public function getOccurrenceId()
    {
        if (array_key_exists("occurrenceId", $this->_propDict)) {
            return $this->_propDict["occurrenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the occurrenceId
    *
    * @param string $val The occurrenceId
    *
    * @return Event
    */
    public function setOccurrenceId($val)
    {
        $this->_propDict["occurrenceId"] = $val;
        return $this;
    }

    /**
    * Gets the onlineMeeting
    *
    * @return OnlineMeetingInfo|null The onlineMeeting
    */
    public function getOnlineMeeting()
    {
        if (array_key_exists("onlineMeeting", $this->_propDict)) {
            if (is_a($this->_propDict["onlineMeeting"], "\Beta\Microsoft\Graph\Model\OnlineMeetingInfo") || is_null($this->_propDict["onlineMeeting"])) {
                return $this->_propDict["onlineMeeting"];
            } else {
                $this->_propDict["onlineMeeting"] = new OnlineMeetingInfo($this->_propDict["onlineMeeting"]);
                return $this->_propDict["onlineMeeting"];
            }
        }
        return null;
    }

    /**
    * Sets the onlineMeeting
    *
    * @param OnlineMeetingInfo $val The onlineMeeting
    *
    * @return Event
    */
    public function setOnlineMeeting($val)
    {
        $this->_propDict["onlineMeeting"] = $val;
        return $this;
    }

    /**
    * Gets the onlineMeetingProvider
    *
    * @return OnlineMeetingProviderType|null The onlineMeetingProvider
    */
    public function getOnlineMeetingProvider()
    {
        if (array_key_exists("onlineMeetingProvider", $this->_propDict)) {
            if (is_a($this->_propDict["onlineMeetingProvider"], "\Beta\Microsoft\Graph\Model\OnlineMeetingProviderType") || is_null($this->_propDict["onlineMeetingProvider"])) {
                return $this->_propDict["onlineMeetingProvider"];
            } else {
                $this->_propDict["onlineMeetingProvider"] = new OnlineMeetingProviderType($this->_propDict["onlineMeetingProvider"]);
                return $this->_propDict["onlineMeetingProvider"];
            }
        }
        return null;
    }

    /**
    * Sets the onlineMeetingProvider
    *
    * @param OnlineMeetingProviderType $val The onlineMeetingProvider
    *
    * @return Event
    */
    public function setOnlineMeetingProvider($val)
    {
        $this->_propDict["onlineMeetingProvider"] = $val;
        return $this;
    }

    /**
    * Gets the onlineMeetingUrl
    *
    * @return string|null The onlineMeetingUrl
    */
    public function getOnlineMeetingUrl()
    {
        if (array_key_exists("onlineMeetingUrl", $this->_propDict)) {
            return $this->_propDict["onlineMeetingUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onlineMeetingUrl
    *
    * @param string $val The onlineMeetingUrl
    *
    * @return Event
    */
    public function setOnlineMeetingUrl($val)
    {
        $this->_propDict["onlineMeetingUrl"] = $val;
        return $this;
    }

    /**
    * Gets the organizer
    *
    * @return Recipient|null The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "\Beta\Microsoft\Graph\Model\Recipient") || is_null($this->_propDict["organizer"])) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new Recipient($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }

    /**
    * Sets the organizer
    *
    * @param Recipient $val The organizer
    *
    * @return Event
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
        return $this;
    }

    /**
    * Gets the originalEndTimeZone
    *
    * @return string|null The originalEndTimeZone
    */
    public function getOriginalEndTimeZone()
    {
        if (array_key_exists("originalEndTimeZone", $this->_propDict)) {
            return $this->_propDict["originalEndTimeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originalEndTimeZone
    *
    * @param string $val The originalEndTimeZone
    *
    * @return Event
    */
    public function setOriginalEndTimeZone($val)
    {
        $this->_propDict["originalEndTimeZone"] = $val;
        return $this;
    }

    /**
    * Gets the originalStart
    *
    * @return \DateTime|null The originalStart
    */
    public function getOriginalStart()
    {
        if (array_key_exists("originalStart", $this->_propDict)) {
            if (is_a($this->_propDict["originalStart"], "\DateTime") || is_null($this->_propDict["originalStart"])) {
                return $this->_propDict["originalStart"];
            } else {
                $this->_propDict["originalStart"] = new \DateTime($this->_propDict["originalStart"]);
                return $this->_propDict["originalStart"];
            }
        }
        return null;
    }

    /**
    * Sets the originalStart
    *
    * @param \DateTime $val The originalStart
    *
    * @return Event
    */
    public function setOriginalStart($val)
    {
        $this->_propDict["originalStart"] = $val;
        return $this;
    }

    /**
    * Gets the originalStartTimeZone
    *
    * @return string|null The originalStartTimeZone
    */
    public function getOriginalStartTimeZone()
    {
        if (array_key_exists("originalStartTimeZone", $this->_propDict)) {
            return $this->_propDict["originalStartTimeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originalStartTimeZone
    *
    * @param string $val The originalStartTimeZone
    *
    * @return Event
    */
    public function setOriginalStartTimeZone($val)
    {
        $this->_propDict["originalStartTimeZone"] = $val;
        return $this;
    }

    /**
    * Gets the recurrence
    *
    * @return PatternedRecurrence|null The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\PatternedRecurrence") || is_null($this->_propDict["recurrence"])) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    *
    * @param PatternedRecurrence $val The recurrence
    *
    * @return Event
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
        return $this;
    }

    /**
    * Gets the reminderMinutesBeforeStart
    *
    * @return int|null The reminderMinutesBeforeStart
    */
    public function getReminderMinutesBeforeStart()
    {
        if (array_key_exists("reminderMinutesBeforeStart", $this->_propDict)) {
            return $this->_propDict["reminderMinutesBeforeStart"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reminderMinutesBeforeStart
    *
    * @param int $val The reminderMinutesBeforeStart
    *
    * @return Event
    */
    public function setReminderMinutesBeforeStart($val)
    {
        $this->_propDict["reminderMinutesBeforeStart"] = intval($val);
        return $this;
    }

    /**
    * Gets the responseRequested
    *
    * @return bool|null The responseRequested
    */
    public function getResponseRequested()
    {
        if (array_key_exists("responseRequested", $this->_propDict)) {
            return $this->_propDict["responseRequested"];
        } else {
            return null;
        }
    }

    /**
    * Sets the responseRequested
    *
    * @param bool $val The responseRequested
    *
    * @return Event
    */
    public function setResponseRequested($val)
    {
        $this->_propDict["responseRequested"] = boolval($val);
        return $this;
    }

    /**
    * Gets the responseStatus
    *
    * @return ResponseStatus|null The responseStatus
    */
    public function getResponseStatus()
    {
        if (array_key_exists("responseStatus", $this->_propDict)) {
            if (is_a($this->_propDict["responseStatus"], "\Beta\Microsoft\Graph\Model\ResponseStatus") || is_null($this->_propDict["responseStatus"])) {
                return $this->_propDict["responseStatus"];
            } else {
                $this->_propDict["responseStatus"] = new ResponseStatus($this->_propDict["responseStatus"]);
                return $this->_propDict["responseStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the responseStatus
    *
    * @param ResponseStatus $val The responseStatus
    *
    * @return Event
    */
    public function setResponseStatus($val)
    {
        $this->_propDict["responseStatus"] = $val;
        return $this;
    }

    /**
    * Gets the sensitivity
    *
    * @return Sensitivity|null The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivity"], "\Beta\Microsoft\Graph\Model\Sensitivity") || is_null($this->_propDict["sensitivity"])) {
                return $this->_propDict["sensitivity"];
            } else {
                $this->_propDict["sensitivity"] = new Sensitivity($this->_propDict["sensitivity"]);
                return $this->_propDict["sensitivity"];
            }
        }
        return null;
    }

    /**
    * Sets the sensitivity
    *
    * @param Sensitivity $val The sensitivity
    *
    * @return Event
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = $val;
        return $this;
    }

    /**
    * Gets the seriesMasterId
    *
    * @return string|null The seriesMasterId
    */
    public function getSeriesMasterId()
    {
        if (array_key_exists("seriesMasterId", $this->_propDict)) {
            return $this->_propDict["seriesMasterId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the seriesMasterId
    *
    * @param string $val The seriesMasterId
    *
    * @return Event
    */
    public function setSeriesMasterId($val)
    {
        $this->_propDict["seriesMasterId"] = $val;
        return $this;
    }

    /**
    * Gets the showAs
    *
    * @return FreeBusyStatus|null The showAs
    */
    public function getShowAs()
    {
        if (array_key_exists("showAs", $this->_propDict)) {
            if (is_a($this->_propDict["showAs"], "\Beta\Microsoft\Graph\Model\FreeBusyStatus") || is_null($this->_propDict["showAs"])) {
                return $this->_propDict["showAs"];
            } else {
                $this->_propDict["showAs"] = new FreeBusyStatus($this->_propDict["showAs"]);
                return $this->_propDict["showAs"];
            }
        }
        return null;
    }

    /**
    * Sets the showAs
    *
    * @param FreeBusyStatus $val The showAs
    *
    * @return Event
    */
    public function setShowAs($val)
    {
        $this->_propDict["showAs"] = $val;
        return $this;
    }

    /**
    * Gets the start
    *
    * @return DateTimeTimeZone|null The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["start"])) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new DateTimeTimeZone($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }

    /**
    * Sets the start
    *
    * @param DateTimeTimeZone $val The start
    *
    * @return Event
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return Event
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }

    /**
    * Gets the transactionId
    *
    * @return string|null The transactionId
    */
    public function getTransactionId()
    {
        if (array_key_exists("transactionId", $this->_propDict)) {
            return $this->_propDict["transactionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transactionId
    *
    * @param string $val The transactionId
    *
    * @return Event
    */
    public function setTransactionId($val)
    {
        $this->_propDict["transactionId"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return EventType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\EventType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new EventType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param EventType $val The type
    *
    * @return Event
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the uid
    *
    * @return string|null The uid
    */
    public function getUid()
    {
        if (array_key_exists("uid", $this->_propDict)) {
            return $this->_propDict["uid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uid
    *
    * @param string $val The uid
    *
    * @return Event
    */
    public function setUid($val)
    {
        $this->_propDict["uid"] = $val;
        return $this;
    }

    /**
    * Gets the webLink
    *
    * @return string|null The webLink
    */
    public function getWebLink()
    {
        if (array_key_exists("webLink", $this->_propDict)) {
            return $this->_propDict["webLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webLink
    *
    * @param string $val The webLink
    *
    * @return Event
    */
    public function setWebLink($val)
    {
        $this->_propDict["webLink"] = $val;
        return $this;
    }


     /**
     * Gets the attachments
    * The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     *
     * @return array|null The attachments
     */
    public function getAttachments()
    {
        if (array_key_exists("attachments", $this->_propDict)) {
           return $this->_propDict["attachments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attachments
    * The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
    *
    * @param Attachment[] $val The attachments
    *
    * @return Event
    */
    public function setAttachments($val)
    {
        $this->_propDict["attachments"] = $val;
        return $this;
    }

    /**
    * Gets the calendar
    * The calendar that contains the event. Navigation property. Read-only.
    *
    * @return Calendar|null The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "\Beta\Microsoft\Graph\Model\Calendar") || is_null($this->_propDict["calendar"])) {
                return $this->_propDict["calendar"];
            } else {
                $this->_propDict["calendar"] = new Calendar($this->_propDict["calendar"]);
                return $this->_propDict["calendar"];
            }
        }
        return null;
    }

    /**
    * Sets the calendar
    * The calendar that contains the event. Navigation property. Read-only.
    *
    * @param Calendar $val The calendar
    *
    * @return Event
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
        return $this;
    }


     /**
     * Gets the exceptionOccurrences
     *
     * @return array|null The exceptionOccurrences
     */
    public function getExceptionOccurrences()
    {
        if (array_key_exists("exceptionOccurrences", $this->_propDict)) {
           return $this->_propDict["exceptionOccurrences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exceptionOccurrences
    *
    * @param Event[] $val The exceptionOccurrences
    *
    * @return Event
    */
    public function setExceptionOccurrences($val)
    {
        $this->_propDict["exceptionOccurrences"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for the event. Nullable.
     *
     * @return array|null The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensions
    * The collection of open extensions defined for the event. Nullable.
    *
    * @param Extension[] $val The extensions
    *
    * @return Event
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }


     /**
     * Gets the instances
    * The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
     *
     * @return array|null The instances
     */
    public function getInstances()
    {
        if (array_key_exists("instances", $this->_propDict)) {
           return $this->_propDict["instances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the instances
    * The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
    *
    * @param Event[] $val The instances
    *
    * @return Event
    */
    public function setInstances($val)
    {
        $this->_propDict["instances"] = $val;
        return $this;
    }


     /**
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     *
     * @return array|null The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the event. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty[] $val The multiValueExtendedProperties
    *
    * @return Event
    */
    public function setMultiValueExtendedProperties($val)
    {
        $this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }


     /**
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the event. Read-only. Nullable.
     *
     * @return array|null The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the event. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty[] $val The singleValueExtendedProperties
    *
    * @return Event
    */
    public function setSingleValueExtendedProperties($val)
    {
        $this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }

}
