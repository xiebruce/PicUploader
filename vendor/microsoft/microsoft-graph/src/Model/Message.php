<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Message File
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
* Message class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Message extends OutlookItem
{

     /**
     * Gets the bccRecipients
    * The Bcc: recipients for the message.
     *
     * @return array|null The bccRecipients
     */
    public function getBccRecipients()
    {
        if (array_key_exists("bccRecipients", $this->_propDict)) {
           return $this->_propDict["bccRecipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bccRecipients
    * The Bcc: recipients for the message.
    *
    * @param Recipient[] $val The bccRecipients
    *
    * @return Message
    */
    public function setBccRecipients($val)
    {
        $this->_propDict["bccRecipients"] = $val;
        return $this;
    }

    /**
    * Gets the body
    * The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
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
    * The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
    *
    * @param ItemBody $val The body
    *
    * @return Message
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the bodyPreview
    * The first 255 characters of the message body. It is in text format. If the message contains instances of mention, this property would contain a concatenation of these mentions as well.
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
    * The first 255 characters of the message body. It is in text format. If the message contains instances of mention, this property would contain a concatenation of these mentions as well.
    *
    * @param string $val The bodyPreview
    *
    * @return Message
    */
    public function setBodyPreview($val)
    {
        $this->_propDict["bodyPreview"] = $val;
        return $this;
    }


     /**
     * Gets the ccRecipients
    * The Cc: recipients for the message.
     *
     * @return array|null The ccRecipients
     */
    public function getCcRecipients()
    {
        if (array_key_exists("ccRecipients", $this->_propDict)) {
           return $this->_propDict["ccRecipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ccRecipients
    * The Cc: recipients for the message.
    *
    * @param Recipient[] $val The ccRecipients
    *
    * @return Message
    */
    public function setCcRecipients($val)
    {
        $this->_propDict["ccRecipients"] = $val;
        return $this;
    }

    /**
    * Gets the conversationId
    * The ID of the conversation the email belongs to.
    *
    * @return string|null The conversationId
    */
    public function getConversationId()
    {
        if (array_key_exists("conversationId", $this->_propDict)) {
            return $this->_propDict["conversationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conversationId
    * The ID of the conversation the email belongs to.
    *
    * @param string $val The conversationId
    *
    * @return Message
    */
    public function setConversationId($val)
    {
        $this->_propDict["conversationId"] = $val;
        return $this;
    }

    /**
    * Gets the conversationIndex
    * Indicates the position of the message within the conversation.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The conversationIndex
    */
    public function getConversationIndex()
    {
        if (array_key_exists("conversationIndex", $this->_propDict)) {
            if (is_a($this->_propDict["conversationIndex"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["conversationIndex"])) {
                return $this->_propDict["conversationIndex"];
            } else {
                $this->_propDict["conversationIndex"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["conversationIndex"]);
                return $this->_propDict["conversationIndex"];
            }
        }
        return null;
    }

    /**
    * Sets the conversationIndex
    * Indicates the position of the message within the conversation.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The conversationIndex
    *
    * @return Message
    */
    public function setConversationIndex($val)
    {
        $this->_propDict["conversationIndex"] = $val;
        return $this;
    }

    /**
    * Gets the flag
    * The flag value that indicates the status, start date, due date, or completion date for the message.
    *
    * @return FollowupFlag|null The flag
    */
    public function getFlag()
    {
        if (array_key_exists("flag", $this->_propDict)) {
            if (is_a($this->_propDict["flag"], "\Microsoft\Graph\Model\FollowupFlag") || is_null($this->_propDict["flag"])) {
                return $this->_propDict["flag"];
            } else {
                $this->_propDict["flag"] = new FollowupFlag($this->_propDict["flag"]);
                return $this->_propDict["flag"];
            }
        }
        return null;
    }

    /**
    * Sets the flag
    * The flag value that indicates the status, start date, due date, or completion date for the message.
    *
    * @param FollowupFlag $val The flag
    *
    * @return Message
    */
    public function setFlag($val)
    {
        $this->_propDict["flag"] = $val;
        return $this;
    }

    /**
    * Gets the from
    * The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
    *
    * @return Recipient|null The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "\Microsoft\Graph\Model\Recipient") || is_null($this->_propDict["from"])) {
                return $this->_propDict["from"];
            } else {
                $this->_propDict["from"] = new Recipient($this->_propDict["from"]);
                return $this->_propDict["from"];
            }
        }
        return null;
    }

    /**
    * Sets the from
    * The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
    *
    * @param Recipient $val The from
    *
    * @return Message
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }

    /**
    * Gets the hasAttachments
    * Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as &amp;lt;IMG src='cid:image001.jpg@01D26CD8.6C05F070'&amp;gt;.
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
    * Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as &amp;lt;IMG src='cid:image001.jpg@01D26CD8.6C05F070'&amp;gt;.
    *
    * @param bool $val The hasAttachments
    *
    * @return Message
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
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
            if (is_a($this->_propDict["importance"], "\Microsoft\Graph\Model\Importance") || is_null($this->_propDict["importance"])) {
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
    * @return Message
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }

    /**
    * Gets the inferenceClassification
    *
    * @return InferenceClassificationType|null The inferenceClassification
    */
    public function getInferenceClassification()
    {
        if (array_key_exists("inferenceClassification", $this->_propDict)) {
            if (is_a($this->_propDict["inferenceClassification"], "\Microsoft\Graph\Model\InferenceClassificationType") || is_null($this->_propDict["inferenceClassification"])) {
                return $this->_propDict["inferenceClassification"];
            } else {
                $this->_propDict["inferenceClassification"] = new InferenceClassificationType($this->_propDict["inferenceClassification"]);
                return $this->_propDict["inferenceClassification"];
            }
        }
        return null;
    }

    /**
    * Sets the inferenceClassification
    *
    * @param InferenceClassificationType $val The inferenceClassification
    *
    * @return Message
    */
    public function setInferenceClassification($val)
    {
        $this->_propDict["inferenceClassification"] = $val;
        return $this;
    }


     /**
     * Gets the internetMessageHeaders
     *
     * @return array|null The internetMessageHeaders
     */
    public function getInternetMessageHeaders()
    {
        if (array_key_exists("internetMessageHeaders", $this->_propDict)) {
           return $this->_propDict["internetMessageHeaders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internetMessageHeaders
    *
    * @param InternetMessageHeader[] $val The internetMessageHeaders
    *
    * @return Message
    */
    public function setInternetMessageHeaders($val)
    {
        $this->_propDict["internetMessageHeaders"] = $val;
        return $this;
    }

    /**
    * Gets the internetMessageId
    *
    * @return string|null The internetMessageId
    */
    public function getInternetMessageId()
    {
        if (array_key_exists("internetMessageId", $this->_propDict)) {
            return $this->_propDict["internetMessageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internetMessageId
    *
    * @param string $val The internetMessageId
    *
    * @return Message
    */
    public function setInternetMessageId($val)
    {
        $this->_propDict["internetMessageId"] = $val;
        return $this;
    }

    /**
    * Gets the isDeliveryReceiptRequested
    *
    * @return bool|null The isDeliveryReceiptRequested
    */
    public function getIsDeliveryReceiptRequested()
    {
        if (array_key_exists("isDeliveryReceiptRequested", $this->_propDict)) {
            return $this->_propDict["isDeliveryReceiptRequested"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDeliveryReceiptRequested
    *
    * @param bool $val The isDeliveryReceiptRequested
    *
    * @return Message
    */
    public function setIsDeliveryReceiptRequested($val)
    {
        $this->_propDict["isDeliveryReceiptRequested"] = boolval($val);
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
    * @return Message
    */
    public function setIsDraft($val)
    {
        $this->_propDict["isDraft"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isRead
    *
    * @return bool|null The isRead
    */
    public function getIsRead()
    {
        if (array_key_exists("isRead", $this->_propDict)) {
            return $this->_propDict["isRead"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRead
    *
    * @param bool $val The isRead
    *
    * @return Message
    */
    public function setIsRead($val)
    {
        $this->_propDict["isRead"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isReadReceiptRequested
    *
    * @return bool|null The isReadReceiptRequested
    */
    public function getIsReadReceiptRequested()
    {
        if (array_key_exists("isReadReceiptRequested", $this->_propDict)) {
            return $this->_propDict["isReadReceiptRequested"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReadReceiptRequested
    *
    * @param bool $val The isReadReceiptRequested
    *
    * @return Message
    */
    public function setIsReadReceiptRequested($val)
    {
        $this->_propDict["isReadReceiptRequested"] = boolval($val);
        return $this;
    }

    /**
    * Gets the parentFolderId
    *
    * @return string|null The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentFolderId
    *
    * @param string $val The parentFolderId
    *
    * @return Message
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }

    /**
    * Gets the receivedDateTime
    *
    * @return \DateTime|null The receivedDateTime
    */
    public function getReceivedDateTime()
    {
        if (array_key_exists("receivedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["receivedDateTime"], "\DateTime") || is_null($this->_propDict["receivedDateTime"])) {
                return $this->_propDict["receivedDateTime"];
            } else {
                $this->_propDict["receivedDateTime"] = new \DateTime($this->_propDict["receivedDateTime"]);
                return $this->_propDict["receivedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the receivedDateTime
    *
    * @param \DateTime $val The receivedDateTime
    *
    * @return Message
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the replyTo
     *
     * @return array|null The replyTo
     */
    public function getReplyTo()
    {
        if (array_key_exists("replyTo", $this->_propDict)) {
           return $this->_propDict["replyTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replyTo
    *
    * @param Recipient[] $val The replyTo
    *
    * @return Message
    */
    public function setReplyTo($val)
    {
        $this->_propDict["replyTo"] = $val;
        return $this;
    }

    /**
    * Gets the sender
    *
    * @return Recipient|null The sender
    */
    public function getSender()
    {
        if (array_key_exists("sender", $this->_propDict)) {
            if (is_a($this->_propDict["sender"], "\Microsoft\Graph\Model\Recipient") || is_null($this->_propDict["sender"])) {
                return $this->_propDict["sender"];
            } else {
                $this->_propDict["sender"] = new Recipient($this->_propDict["sender"]);
                return $this->_propDict["sender"];
            }
        }
        return null;
    }

    /**
    * Sets the sender
    *
    * @param Recipient $val The sender
    *
    * @return Message
    */
    public function setSender($val)
    {
        $this->_propDict["sender"] = $val;
        return $this;
    }

    /**
    * Gets the sentDateTime
    *
    * @return \DateTime|null The sentDateTime
    */
    public function getSentDateTime()
    {
        if (array_key_exists("sentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sentDateTime"], "\DateTime") || is_null($this->_propDict["sentDateTime"])) {
                return $this->_propDict["sentDateTime"];
            } else {
                $this->_propDict["sentDateTime"] = new \DateTime($this->_propDict["sentDateTime"]);
                return $this->_propDict["sentDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sentDateTime
    *
    * @param \DateTime $val The sentDateTime
    *
    * @return Message
    */
    public function setSentDateTime($val)
    {
        $this->_propDict["sentDateTime"] = $val;
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
    * @return Message
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }


     /**
     * Gets the toRecipients
     *
     * @return array|null The toRecipients
     */
    public function getToRecipients()
    {
        if (array_key_exists("toRecipients", $this->_propDict)) {
           return $this->_propDict["toRecipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the toRecipients
    *
    * @param Recipient[] $val The toRecipients
    *
    * @return Message
    */
    public function setToRecipients($val)
    {
        $this->_propDict["toRecipients"] = $val;
        return $this;
    }

    /**
    * Gets the uniqueBody
    *
    * @return ItemBody|null The uniqueBody
    */
    public function getUniqueBody()
    {
        if (array_key_exists("uniqueBody", $this->_propDict)) {
            if (is_a($this->_propDict["uniqueBody"], "\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["uniqueBody"])) {
                return $this->_propDict["uniqueBody"];
            } else {
                $this->_propDict["uniqueBody"] = new ItemBody($this->_propDict["uniqueBody"]);
                return $this->_propDict["uniqueBody"];
            }
        }
        return null;
    }

    /**
    * Sets the uniqueBody
    *
    * @param ItemBody $val The uniqueBody
    *
    * @return Message
    */
    public function setUniqueBody($val)
    {
        $this->_propDict["uniqueBody"] = $val;
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
    * @return Message
    */
    public function setWebLink($val)
    {
        $this->_propDict["webLink"] = $val;
        return $this;
    }


     /**
     * Gets the attachments
    * The fileAttachment and itemAttachment attachments for the message.
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
    * The fileAttachment and itemAttachment attachments for the message.
    *
    * @param Attachment[] $val The attachments
    *
    * @return Message
    */
    public function setAttachments($val)
    {
        $this->_propDict["attachments"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for the message. Nullable.
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
    * The collection of open extensions defined for the message. Nullable.
    *
    * @param Extension[] $val The extensions
    *
    * @return Message
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }


     /**
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the message. Nullable.
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
    * The collection of multi-value extended properties defined for the message. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty[] $val The multiValueExtendedProperties
    *
    * @return Message
    */
    public function setMultiValueExtendedProperties($val)
    {
        $this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }


     /**
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the message. Nullable.
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
    * The collection of single-value extended properties defined for the message. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty[] $val The singleValueExtendedProperties
    *
    * @return Message
    */
    public function setSingleValueExtendedProperties($val)
    {
        $this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }

}
