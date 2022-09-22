<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailThreatSubmissionPolicy File
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
* EmailThreatSubmissionPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailThreatSubmissionPolicy extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the customizedNotificationSenderEmailAddress
    * Specifies the email address of the sender from which email notifications will be sent to end users to inform them whether an email is spam, phish or clean. The default value is null. Optional for creation.
    *
    * @return string|null The customizedNotificationSenderEmailAddress
    */
    public function getCustomizedNotificationSenderEmailAddress()
    {
        if (array_key_exists("customizedNotificationSenderEmailAddress", $this->_propDict)) {
            return $this->_propDict["customizedNotificationSenderEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customizedNotificationSenderEmailAddress
    * Specifies the email address of the sender from which email notifications will be sent to end users to inform them whether an email is spam, phish or clean. The default value is null. Optional for creation.
    *
    * @param string $val The customizedNotificationSenderEmailAddress
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setCustomizedNotificationSenderEmailAddress($val)
    {
        $this->_propDict["customizedNotificationSenderEmailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the customizedReportRecipientEmailAddress
    * Specifies the destination where the reported messages from end users will land whenever they report something as phish, junk or not junk. The default value is null. Optional for creation.
    *
    * @return string|null The customizedReportRecipientEmailAddress
    */
    public function getCustomizedReportRecipientEmailAddress()
    {
        if (array_key_exists("customizedReportRecipientEmailAddress", $this->_propDict)) {
            return $this->_propDict["customizedReportRecipientEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customizedReportRecipientEmailAddress
    * Specifies the destination where the reported messages from end users will land whenever they report something as phish, junk or not junk. The default value is null. Optional for creation.
    *
    * @param string $val The customizedReportRecipientEmailAddress
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setCustomizedReportRecipientEmailAddress($val)
    {
        $this->_propDict["customizedReportRecipientEmailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the isAlwaysReportEnabledForUsers
    * Indicates whether end users can report a message as spam, phish or junk directly without a confirmation(popup). The default value is true.  Optional for creation.
    *
    * @return bool|null The isAlwaysReportEnabledForUsers
    */
    public function getIsAlwaysReportEnabledForUsers()
    {
        if (array_key_exists("isAlwaysReportEnabledForUsers", $this->_propDict)) {
            return $this->_propDict["isAlwaysReportEnabledForUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAlwaysReportEnabledForUsers
    * Indicates whether end users can report a message as spam, phish or junk directly without a confirmation(popup). The default value is true.  Optional for creation.
    *
    * @param bool $val The isAlwaysReportEnabledForUsers
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsAlwaysReportEnabledForUsers($val)
    {
        $this->_propDict["isAlwaysReportEnabledForUsers"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isAskMeEnabledForUsers
    * Indicates whether end users can confirm using a popup before reporting messages as spam, phish or not junk. The default value is true.  Optional for creation.
    *
    * @return bool|null The isAskMeEnabledForUsers
    */
    public function getIsAskMeEnabledForUsers()
    {
        if (array_key_exists("isAskMeEnabledForUsers", $this->_propDict)) {
            return $this->_propDict["isAskMeEnabledForUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAskMeEnabledForUsers
    * Indicates whether end users can confirm using a popup before reporting messages as spam, phish or not junk. The default value is true.  Optional for creation.
    *
    * @param bool $val The isAskMeEnabledForUsers
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsAskMeEnabledForUsers($val)
    {
        $this->_propDict["isAskMeEnabledForUsers"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isCustomizedMessageEnabled
    * Indicates whether the email notifications sent to end users to inform them if an email is phish, spam or junk is customized or not. The default value is false. Optional for creation.
    *
    * @return bool|null The isCustomizedMessageEnabled
    */
    public function getIsCustomizedMessageEnabled()
    {
        if (array_key_exists("isCustomizedMessageEnabled", $this->_propDict)) {
            return $this->_propDict["isCustomizedMessageEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCustomizedMessageEnabled
    * Indicates whether the email notifications sent to end users to inform them if an email is phish, spam or junk is customized or not. The default value is false. Optional for creation.
    *
    * @param bool $val The isCustomizedMessageEnabled
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsCustomizedMessageEnabled($val)
    {
        $this->_propDict["isCustomizedMessageEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isCustomizedMessageEnabledForPhishing
    * If enabled, customized message only shows when email is reported as phishing. The default value is false. Optional for creation.
    *
    * @return bool|null The isCustomizedMessageEnabledForPhishing
    */
    public function getIsCustomizedMessageEnabledForPhishing()
    {
        if (array_key_exists("isCustomizedMessageEnabledForPhishing", $this->_propDict)) {
            return $this->_propDict["isCustomizedMessageEnabledForPhishing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCustomizedMessageEnabledForPhishing
    * If enabled, customized message only shows when email is reported as phishing. The default value is false. Optional for creation.
    *
    * @param bool $val The isCustomizedMessageEnabledForPhishing
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsCustomizedMessageEnabledForPhishing($val)
    {
        $this->_propDict["isCustomizedMessageEnabledForPhishing"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isCustomizedNotificationSenderEnabled
    * Indicates whether to use the sender email address set using customizedNotificationSenderEmailAddress for sending email notifications to end users. The default value is false. Optional for creation.
    *
    * @return bool|null The isCustomizedNotificationSenderEnabled
    */
    public function getIsCustomizedNotificationSenderEnabled()
    {
        if (array_key_exists("isCustomizedNotificationSenderEnabled", $this->_propDict)) {
            return $this->_propDict["isCustomizedNotificationSenderEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCustomizedNotificationSenderEnabled
    * Indicates whether to use the sender email address set using customizedNotificationSenderEmailAddress for sending email notifications to end users. The default value is false. Optional for creation.
    *
    * @param bool $val The isCustomizedNotificationSenderEnabled
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsCustomizedNotificationSenderEnabled($val)
    {
        $this->_propDict["isCustomizedNotificationSenderEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isNeverReportEnabledForUsers
    * Indicates whether end users can simply move the message from one folder to another based on the action of spam, phish or not junk without actually reporting it. The default value is true. Optional for creation.
    *
    * @return bool|null The isNeverReportEnabledForUsers
    */
    public function getIsNeverReportEnabledForUsers()
    {
        if (array_key_exists("isNeverReportEnabledForUsers", $this->_propDict)) {
            return $this->_propDict["isNeverReportEnabledForUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isNeverReportEnabledForUsers
    * Indicates whether end users can simply move the message from one folder to another based on the action of spam, phish or not junk without actually reporting it. The default value is true. Optional for creation.
    *
    * @param bool $val The isNeverReportEnabledForUsers
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsNeverReportEnabledForUsers($val)
    {
        $this->_propDict["isNeverReportEnabledForUsers"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isOrganizationBrandingEnabled
    * Indicates whether the branding logo should be used in the email notifications sent to end users. The default value is false. Optional for creation.
    *
    * @return bool|null The isOrganizationBrandingEnabled
    */
    public function getIsOrganizationBrandingEnabled()
    {
        if (array_key_exists("isOrganizationBrandingEnabled", $this->_propDict)) {
            return $this->_propDict["isOrganizationBrandingEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOrganizationBrandingEnabled
    * Indicates whether the branding logo should be used in the email notifications sent to end users. The default value is false. Optional for creation.
    *
    * @param bool $val The isOrganizationBrandingEnabled
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsOrganizationBrandingEnabled($val)
    {
        $this->_propDict["isOrganizationBrandingEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isReportFromQuarantineEnabled
    * Indicates whether end users can submit from the quarantine page. The default value is true. Optional for creation.
    *
    * @return bool|null The isReportFromQuarantineEnabled
    */
    public function getIsReportFromQuarantineEnabled()
    {
        if (array_key_exists("isReportFromQuarantineEnabled", $this->_propDict)) {
            return $this->_propDict["isReportFromQuarantineEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReportFromQuarantineEnabled
    * Indicates whether end users can submit from the quarantine page. The default value is true. Optional for creation.
    *
    * @param bool $val The isReportFromQuarantineEnabled
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsReportFromQuarantineEnabled($val)
    {
        $this->_propDict["isReportFromQuarantineEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isReportToCustomizedEmailAddressEnabled
    * Indicates whether emails reported by end users should be send to the custom mailbox configured using customizedReportRecipientEmailAddress.  The default value is false. Optional for creation.
    *
    * @return bool|null The isReportToCustomizedEmailAddressEnabled
    */
    public function getIsReportToCustomizedEmailAddressEnabled()
    {
        if (array_key_exists("isReportToCustomizedEmailAddressEnabled", $this->_propDict)) {
            return $this->_propDict["isReportToCustomizedEmailAddressEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReportToCustomizedEmailAddressEnabled
    * Indicates whether emails reported by end users should be send to the custom mailbox configured using customizedReportRecipientEmailAddress.  The default value is false. Optional for creation.
    *
    * @param bool $val The isReportToCustomizedEmailAddressEnabled
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsReportToCustomizedEmailAddressEnabled($val)
    {
        $this->_propDict["isReportToCustomizedEmailAddressEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isReportToMicrosoftEnabled
    * If enabled, the email will be sent to Microsoft for analysis. The default value is false. Required for creation.
    *
    * @return bool|null The isReportToMicrosoftEnabled
    */
    public function getIsReportToMicrosoftEnabled()
    {
        if (array_key_exists("isReportToMicrosoftEnabled", $this->_propDict)) {
            return $this->_propDict["isReportToMicrosoftEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReportToMicrosoftEnabled
    * If enabled, the email will be sent to Microsoft for analysis. The default value is false. Required for creation.
    *
    * @param bool $val The isReportToMicrosoftEnabled
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsReportToMicrosoftEnabled($val)
    {
        $this->_propDict["isReportToMicrosoftEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isReviewEmailNotificationEnabled
    * Indicates whether an email notification is sent to the end user who reported the email when it has been reviewed by the admin. The default value is false. Optional for creation.
    *
    * @return bool|null The isReviewEmailNotificationEnabled
    */
    public function getIsReviewEmailNotificationEnabled()
    {
        if (array_key_exists("isReviewEmailNotificationEnabled", $this->_propDict)) {
            return $this->_propDict["isReviewEmailNotificationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReviewEmailNotificationEnabled
    * Indicates whether an email notification is sent to the end user who reported the email when it has been reviewed by the admin. The default value is false. Optional for creation.
    *
    * @param bool $val The isReviewEmailNotificationEnabled
    *
    * @return EmailThreatSubmissionPolicy
    */
    public function setIsReviewEmailNotificationEnabled($val)
    {
        $this->_propDict["isReviewEmailNotificationEnabled"] = boolval($val);
        return $this;
    }

}
