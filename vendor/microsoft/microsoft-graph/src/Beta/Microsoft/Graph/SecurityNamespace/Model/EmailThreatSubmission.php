<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailThreatSubmission File
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
* EmailThreatSubmission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailThreatSubmission extends ThreatSubmission
{
    /**
    * Gets the attackSimulationInfo
    * If the email is phishing simulation, this field will not be null.
    *
    * @return AttackSimulationInfo|null The attackSimulationInfo
    */
    public function getAttackSimulationInfo()
    {
        if (array_key_exists("attackSimulationInfo", $this->_propDict)) {
            if (is_a($this->_propDict["attackSimulationInfo"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AttackSimulationInfo") || is_null($this->_propDict["attackSimulationInfo"])) {
                return $this->_propDict["attackSimulationInfo"];
            } else {
                $this->_propDict["attackSimulationInfo"] = new AttackSimulationInfo($this->_propDict["attackSimulationInfo"]);
                return $this->_propDict["attackSimulationInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the attackSimulationInfo
    * If the email is phishing simulation, this field will not be null.
    *
    * @param AttackSimulationInfo $val The attackSimulationInfo
    *
    * @return EmailThreatSubmission
    */
    public function setAttackSimulationInfo($val)
    {
        $this->_propDict["attackSimulationInfo"] = $val;
        return $this;
    }

    /**
    * Gets the internetMessageId
    * Specifies the internet message id of the email being submitted. This information is present in the email header.
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
    * Specifies the internet message id of the email being submitted. This information is present in the email header.
    *
    * @param string $val The internetMessageId
    *
    * @return EmailThreatSubmission
    */
    public function setInternetMessageId($val)
    {
        $this->_propDict["internetMessageId"] = $val;
        return $this;
    }

    /**
    * Gets the originalCategory
    * The original category of the submission. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
    *
    * @return SubmissionCategory|null The originalCategory
    */
    public function getOriginalCategory()
    {
        if (array_key_exists("originalCategory", $this->_propDict)) {
            if (is_a($this->_propDict["originalCategory"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionCategory") || is_null($this->_propDict["originalCategory"])) {
                return $this->_propDict["originalCategory"];
            } else {
                $this->_propDict["originalCategory"] = new SubmissionCategory($this->_propDict["originalCategory"]);
                return $this->_propDict["originalCategory"];
            }
        }
        return null;
    }

    /**
    * Sets the originalCategory
    * The original category of the submission. The possible values are: notJunk, spam, phishing, malware and unkownFutureValue.
    *
    * @param SubmissionCategory $val The originalCategory
    *
    * @return EmailThreatSubmission
    */
    public function setOriginalCategory($val)
    {
        $this->_propDict["originalCategory"] = $val;
        return $this;
    }

    /**
    * Gets the receivedDateTime
    * Specifies the date and time stamp when the email was received.
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
    * Specifies the date and time stamp when the email was received.
    *
    * @param \DateTime $val The receivedDateTime
    *
    * @return EmailThreatSubmission
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the recipientEmailAddress
    * Specifies the email address (in smtp format) of the recipient who received the email.
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
    * Specifies the email address (in smtp format) of the recipient who received the email.
    *
    * @param string $val The recipientEmailAddress
    *
    * @return EmailThreatSubmission
    */
    public function setRecipientEmailAddress($val)
    {
        $this->_propDict["recipientEmailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the sender
    * Specifies the email address of the sender.
    *
    * @return string|null The sender
    */
    public function getSender()
    {
        if (array_key_exists("sender", $this->_propDict)) {
            return $this->_propDict["sender"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sender
    * Specifies the email address of the sender.
    *
    * @param string $val The sender
    *
    * @return EmailThreatSubmission
    */
    public function setSender($val)
    {
        $this->_propDict["sender"] = $val;
        return $this;
    }

    /**
    * Gets the senderIP
    * Specifies the IP address of the sender.
    *
    * @return string|null The senderIP
    */
    public function getSenderIP()
    {
        if (array_key_exists("senderIP", $this->_propDict)) {
            return $this->_propDict["senderIP"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderIP
    * Specifies the IP address of the sender.
    *
    * @param string $val The senderIP
    *
    * @return EmailThreatSubmission
    */
    public function setSenderIP($val)
    {
        $this->_propDict["senderIP"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    * Specifies the subject of the email .
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
    * Specifies the subject of the email .
    *
    * @param string $val The subject
    *
    * @return EmailThreatSubmission
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }

    /**
    * Gets the tenantAllowOrBlockListAction
    * It is used to automatically add allows for the components such as URL, file, sender; which are deemed bad by Microsoft so that similar messages in the future can be allowed.
    *
    * @return TenantAllowOrBlockListAction|null The tenantAllowOrBlockListAction
    */
    public function getTenantAllowOrBlockListAction()
    {
        if (array_key_exists("tenantAllowOrBlockListAction", $this->_propDict)) {
            if (is_a($this->_propDict["tenantAllowOrBlockListAction"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\TenantAllowOrBlockListAction") || is_null($this->_propDict["tenantAllowOrBlockListAction"])) {
                return $this->_propDict["tenantAllowOrBlockListAction"];
            } else {
                $this->_propDict["tenantAllowOrBlockListAction"] = new TenantAllowOrBlockListAction($this->_propDict["tenantAllowOrBlockListAction"]);
                return $this->_propDict["tenantAllowOrBlockListAction"];
            }
        }
        return null;
    }

    /**
    * Sets the tenantAllowOrBlockListAction
    * It is used to automatically add allows for the components such as URL, file, sender; which are deemed bad by Microsoft so that similar messages in the future can be allowed.
    *
    * @param TenantAllowOrBlockListAction $val The tenantAllowOrBlockListAction
    *
    * @return EmailThreatSubmission
    */
    public function setTenantAllowOrBlockListAction($val)
    {
        $this->_propDict["tenantAllowOrBlockListAction"] = $val;
        return $this;
    }

}
