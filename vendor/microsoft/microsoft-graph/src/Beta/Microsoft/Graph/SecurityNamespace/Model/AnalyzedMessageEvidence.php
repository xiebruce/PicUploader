<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AnalyzedMessageEvidence File
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
* AnalyzedMessageEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AnalyzedMessageEvidence extends AlertEvidence
{
    /**
    * Gets the antiSpamDirection
    * Direction of the email relative to your network. The possible values are: inbound, outbound or intraorg.
    *
    * @return string|null The antiSpamDirection
    */
    public function getAntiSpamDirection()
    {
        if (array_key_exists("antiSpamDirection", $this->_propDict)) {
            return $this->_propDict["antiSpamDirection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the antiSpamDirection
    * Direction of the email relative to your network. The possible values are: inbound, outbound or intraorg.
    *
    * @param string $val The value of the antiSpamDirection
    *
    * @return AnalyzedMessageEvidence
    */
    public function setAntiSpamDirection($val)
    {
        $this->_propDict["antiSpamDirection"] = $val;
        return $this;
    }
    /**
    * Gets the attachmentsCount
    * Number of attachments in the email.
    *
    * @return int|null The attachmentsCount
    */
    public function getAttachmentsCount()
    {
        if (array_key_exists("attachmentsCount", $this->_propDict)) {
            return $this->_propDict["attachmentsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attachmentsCount
    * Number of attachments in the email.
    *
    * @param int $val The value of the attachmentsCount
    *
    * @return AnalyzedMessageEvidence
    */
    public function setAttachmentsCount($val)
    {
        $this->_propDict["attachmentsCount"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryAction
    * Delivery action of the email. The possible values are: delivered, deliveredAsSpam, junked, blocked, or replaced.
    *
    * @return string|null The deliveryAction
    */
    public function getDeliveryAction()
    {
        if (array_key_exists("deliveryAction", $this->_propDict)) {
            return $this->_propDict["deliveryAction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryAction
    * Delivery action of the email. The possible values are: delivered, deliveredAsSpam, junked, blocked, or replaced.
    *
    * @param string $val The value of the deliveryAction
    *
    * @return AnalyzedMessageEvidence
    */
    public function setDeliveryAction($val)
    {
        $this->_propDict["deliveryAction"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryLocation
    * Location where the email was delivered. The possible values are: inbox, external, junkFolder, quarantine, failed, dropped, deletedFolder or forwarded.
    *
    * @return string|null The deliveryLocation
    */
    public function getDeliveryLocation()
    {
        if (array_key_exists("deliveryLocation", $this->_propDict)) {
            return $this->_propDict["deliveryLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryLocation
    * Location where the email was delivered. The possible values are: inbox, external, junkFolder, quarantine, failed, dropped, deletedFolder or forwarded.
    *
    * @param string $val The value of the deliveryLocation
    *
    * @return AnalyzedMessageEvidence
    */
    public function setDeliveryLocation($val)
    {
        $this->_propDict["deliveryLocation"] = $val;
        return $this;
    }
    /**
    * Gets the internetMessageId
    * Public-facing identifier for the email that is set by the sending email system.
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
    * Public-facing identifier for the email that is set by the sending email system.
    *
    * @param string $val The value of the internetMessageId
    *
    * @return AnalyzedMessageEvidence
    */
    public function setInternetMessageId($val)
    {
        $this->_propDict["internetMessageId"] = $val;
        return $this;
    }
    /**
    * Gets the language
    * Detected language of the email content.
    *
    * @return string|null The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    * Detected language of the email content.
    *
    * @param string $val The value of the language
    *
    * @return AnalyzedMessageEvidence
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    /**
    * Gets the networkMessageId
    * Unique identifier for the email, generated by Microsoft 365.
    *
    * @return string|null The networkMessageId
    */
    public function getNetworkMessageId()
    {
        if (array_key_exists("networkMessageId", $this->_propDict)) {
            return $this->_propDict["networkMessageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkMessageId
    * Unique identifier for the email, generated by Microsoft 365.
    *
    * @param string $val The value of the networkMessageId
    *
    * @return AnalyzedMessageEvidence
    */
    public function setNetworkMessageId($val)
    {
        $this->_propDict["networkMessageId"] = $val;
        return $this;
    }

    /**
    * Gets the p1Sender
    * The P1 sender.
    *
    * @return EmailSender|null The p1Sender
    */
    public function getP1Sender()
    {
        if (array_key_exists("p1Sender", $this->_propDict)) {
            if (is_a($this->_propDict["p1Sender"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EmailSender") || is_null($this->_propDict["p1Sender"])) {
                return $this->_propDict["p1Sender"];
            } else {
                $this->_propDict["p1Sender"] = new EmailSender($this->_propDict["p1Sender"]);
                return $this->_propDict["p1Sender"];
            }
        }
        return null;
    }

    /**
    * Sets the p1Sender
    * The P1 sender.
    *
    * @param EmailSender $val The value to assign to the p1Sender
    *
    * @return AnalyzedMessageEvidence The AnalyzedMessageEvidence
    */
    public function setP1Sender($val)
    {
        $this->_propDict["p1Sender"] = $val;
         return $this;
    }

    /**
    * Gets the p2Sender
    * The P2 sender.
    *
    * @return EmailSender|null The p2Sender
    */
    public function getP2Sender()
    {
        if (array_key_exists("p2Sender", $this->_propDict)) {
            if (is_a($this->_propDict["p2Sender"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EmailSender") || is_null($this->_propDict["p2Sender"])) {
                return $this->_propDict["p2Sender"];
            } else {
                $this->_propDict["p2Sender"] = new EmailSender($this->_propDict["p2Sender"]);
                return $this->_propDict["p2Sender"];
            }
        }
        return null;
    }

    /**
    * Sets the p2Sender
    * The P2 sender.
    *
    * @param EmailSender $val The value to assign to the p2Sender
    *
    * @return AnalyzedMessageEvidence The AnalyzedMessageEvidence
    */
    public function setP2Sender($val)
    {
        $this->_propDict["p2Sender"] = $val;
         return $this;
    }

    /**
    * Gets the receivedDateTime
    * Date and time when the email was received.
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
    * Date and time when the email was received.
    *
    * @param \DateTime $val The value to assign to the receivedDateTime
    *
    * @return AnalyzedMessageEvidence The AnalyzedMessageEvidence
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the recipientEmailAddress
    * Email address of the recipient, or email address of the recipient after distribution list expansion.
    *
    * @return string|null The recipientEmailAddress
    */
    public function getRecipientEmailAddress()
    {
        if (array_key_exists("recipientEmailAddress", $this->_propDict)) {
            return $this->_propDict["recipientEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipientEmailAddress
    * Email address of the recipient, or email address of the recipient after distribution list expansion.
    *
    * @param string $val The value of the recipientEmailAddress
    *
    * @return AnalyzedMessageEvidence
    */
    public function setRecipientEmailAddress($val)
    {
        $this->_propDict["recipientEmailAddress"] = $val;
        return $this;
    }
    /**
    * Gets the senderIp
    * IP address of the last detected mail server that relayed the message.
    *
    * @return string|null The senderIp
    */
    public function getSenderIp()
    {
        if (array_key_exists("senderIp", $this->_propDict)) {
            return $this->_propDict["senderIp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderIp
    * IP address of the last detected mail server that relayed the message.
    *
    * @param string $val The value of the senderIp
    *
    * @return AnalyzedMessageEvidence
    */
    public function setSenderIp($val)
    {
        $this->_propDict["senderIp"] = $val;
        return $this;
    }
    /**
    * Gets the subject
    * Subject of the email.
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
    * Subject of the email.
    *
    * @param string $val The value of the subject
    *
    * @return AnalyzedMessageEvidence
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    /**
    * Gets the threatDetectionMethods
    * Collection of methods used to detect malware, phishing, or other threats found in the email.
    *
    * @return string|null The threatDetectionMethods
    */
    public function getThreatDetectionMethods()
    {
        if (array_key_exists("threatDetectionMethods", $this->_propDict)) {
            return $this->_propDict["threatDetectionMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threatDetectionMethods
    * Collection of methods used to detect malware, phishing, or other threats found in the email.
    *
    * @param string $val The value of the threatDetectionMethods
    *
    * @return AnalyzedMessageEvidence
    */
    public function setThreatDetectionMethods($val)
    {
        $this->_propDict["threatDetectionMethods"] = $val;
        return $this;
    }
    /**
    * Gets the threats
    * Collection of detection names for malware or other threats found.
    *
    * @return string|null The threats
    */
    public function getThreats()
    {
        if (array_key_exists("threats", $this->_propDict)) {
            return $this->_propDict["threats"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threats
    * Collection of detection names for malware or other threats found.
    *
    * @param string $val The value of the threats
    *
    * @return AnalyzedMessageEvidence
    */
    public function setThreats($val)
    {
        $this->_propDict["threats"] = $val;
        return $this;
    }
    /**
    * Gets the urlCount
    * Number of embedded URLs in the email.
    *
    * @return int|null The urlCount
    */
    public function getUrlCount()
    {
        if (array_key_exists("urlCount", $this->_propDict)) {
            return $this->_propDict["urlCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urlCount
    * Number of embedded URLs in the email.
    *
    * @param int $val The value of the urlCount
    *
    * @return AnalyzedMessageEvidence
    */
    public function setUrlCount($val)
    {
        $this->_propDict["urlCount"] = $val;
        return $this;
    }
    /**
    * Gets the urls
    * Collection of the URLs contained in this email.
    *
    * @return string|null The urls
    */
    public function getUrls()
    {
        if (array_key_exists("urls", $this->_propDict)) {
            return $this->_propDict["urls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urls
    * Collection of the URLs contained in this email.
    *
    * @param string $val The value of the urls
    *
    * @return AnalyzedMessageEvidence
    */
    public function setUrls($val)
    {
        $this->_propDict["urls"] = $val;
        return $this;
    }
    /**
    * Gets the urn
    * Uniform resource name (URN) of the automated investigation where the cluster was identified.
    *
    * @return string|null The urn
    */
    public function getUrn()
    {
        if (array_key_exists("urn", $this->_propDict)) {
            return $this->_propDict["urn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urn
    * Uniform resource name (URN) of the automated investigation where the cluster was identified.
    *
    * @param string $val The value of the urn
    *
    * @return AnalyzedMessageEvidence
    */
    public function setUrn($val)
    {
        $this->_propDict["urn"] = $val;
        return $this;
    }
}
