<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceUpdateMessage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ServiceUpdateMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceUpdateMessage extends ServiceAnnouncementBase
{
    /**
    * Gets the actionRequiredByDateTime
    * The expected deadline of the action for the message.
    *
    * @return \DateTime|null The actionRequiredByDateTime
    */
    public function getActionRequiredByDateTime()
    {
        if (array_key_exists("actionRequiredByDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["actionRequiredByDateTime"], "\DateTime") || is_null($this->_propDict["actionRequiredByDateTime"])) {
                return $this->_propDict["actionRequiredByDateTime"];
            } else {
                $this->_propDict["actionRequiredByDateTime"] = new \DateTime($this->_propDict["actionRequiredByDateTime"]);
                return $this->_propDict["actionRequiredByDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the actionRequiredByDateTime
    * The expected deadline of the action for the message.
    *
    * @param \DateTime $val The actionRequiredByDateTime
    *
    * @return ServiceUpdateMessage
    */
    public function setActionRequiredByDateTime($val)
    {
        $this->_propDict["actionRequiredByDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the attachmentsArchive
    * The zip file that contains all attachments for a message.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The attachmentsArchive
    */
    public function getAttachmentsArchive()
    {
        if (array_key_exists("attachmentsArchive", $this->_propDict)) {
            if (is_a($this->_propDict["attachmentsArchive"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["attachmentsArchive"])) {
                return $this->_propDict["attachmentsArchive"];
            } else {
                $this->_propDict["attachmentsArchive"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["attachmentsArchive"]);
                return $this->_propDict["attachmentsArchive"];
            }
        }
        return null;
    }

    /**
    * Sets the attachmentsArchive
    * The zip file that contains all attachments for a message.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The attachmentsArchive
    *
    * @return ServiceUpdateMessage
    */
    public function setAttachmentsArchive($val)
    {
        $this->_propDict["attachmentsArchive"] = $val;
        return $this;
    }

    /**
    * Gets the body
    * The content type and content of the service message body.
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["body"])) {
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
    * The content type and content of the service message body.
    *
    * @param ItemBody $val The body
    *
    * @return ServiceUpdateMessage
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * The service message category. Possible values are: preventOrFixIssue, planForChange, stayInformed, unknownFutureValue.
    *
    * @return ServiceUpdateCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Microsoft\Graph\Model\ServiceUpdateCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new ServiceUpdateCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The service message category. Possible values are: preventOrFixIssue, planForChange, stayInformed, unknownFutureValue.
    *
    * @param ServiceUpdateCategory $val The category
    *
    * @return ServiceUpdateMessage
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the hasAttachments
    * Indicates whether the message has any attachment.
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
    * Indicates whether the message has any attachment.
    *
    * @param bool $val The hasAttachments
    *
    * @return ServiceUpdateMessage
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMajorChange
    * Indicates whether the message describes a major update for the service.
    *
    * @return bool|null The isMajorChange
    */
    public function getIsMajorChange()
    {
        if (array_key_exists("isMajorChange", $this->_propDict)) {
            return $this->_propDict["isMajorChange"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMajorChange
    * Indicates whether the message describes a major update for the service.
    *
    * @param bool $val The isMajorChange
    *
    * @return ServiceUpdateMessage
    */
    public function setIsMajorChange($val)
    {
        $this->_propDict["isMajorChange"] = boolval($val);
        return $this;
    }

    /**
    * Gets the services
    * The affected services by the service message.
    *
    * @return string|null The services
    */
    public function getServices()
    {
        if (array_key_exists("services", $this->_propDict)) {
            return $this->_propDict["services"];
        } else {
            return null;
        }
    }

    /**
    * Sets the services
    * The affected services by the service message.
    *
    * @param string $val The services
    *
    * @return ServiceUpdateMessage
    */
    public function setServices($val)
    {
        $this->_propDict["services"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * The severity of the service message. Possible values are: normal, high, critical, unknownFutureValue.
    *
    * @return ServiceUpdateSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Microsoft\Graph\Model\ServiceUpdateSeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new ServiceUpdateSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    * The severity of the service message. Possible values are: normal, high, critical, unknownFutureValue.
    *
    * @param ServiceUpdateSeverity $val The severity
    *
    * @return ServiceUpdateMessage
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the tags
    * A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
    *
    * @return string|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    * A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
    *
    * @param string $val The tags
    *
    * @return ServiceUpdateMessage
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

    /**
    * Gets the viewPoint
    * Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
    *
    * @return ServiceUpdateMessageViewpoint|null The viewPoint
    */
    public function getViewPoint()
    {
        if (array_key_exists("viewPoint", $this->_propDict)) {
            if (is_a($this->_propDict["viewPoint"], "\Microsoft\Graph\Model\ServiceUpdateMessageViewpoint") || is_null($this->_propDict["viewPoint"])) {
                return $this->_propDict["viewPoint"];
            } else {
                $this->_propDict["viewPoint"] = new ServiceUpdateMessageViewpoint($this->_propDict["viewPoint"]);
                return $this->_propDict["viewPoint"];
            }
        }
        return null;
    }

    /**
    * Sets the viewPoint
    * Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
    *
    * @param ServiceUpdateMessageViewpoint $val The viewPoint
    *
    * @return ServiceUpdateMessage
    */
    public function setViewPoint($val)
    {
        $this->_propDict["viewPoint"] = $val;
        return $this;
    }


     /**
     * Gets the attachments
    * A collection of serviceAnnouncementAttachments.
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
    * A collection of serviceAnnouncementAttachments.
    *
    * @param ServiceAnnouncementAttachment[] $val The attachments
    *
    * @return ServiceUpdateMessage
    */
    public function setAttachments($val)
    {
        $this->_propDict["attachments"] = $val;
        return $this;
    }

}
