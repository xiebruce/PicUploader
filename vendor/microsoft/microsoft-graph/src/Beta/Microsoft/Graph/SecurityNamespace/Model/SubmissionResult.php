<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubmissionResult File
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
* SubmissionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubmissionResult extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the category
    * The submission result category. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable and unkownFutureValue.
    *
    * @return SubmissionResultCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionResultCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new SubmissionResultCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The submission result category. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable and unkownFutureValue.
    *
    * @param SubmissionResultCategory $val The value to assign to the category
    *
    * @return SubmissionResult The SubmissionResult
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
         return $this;
    }

    /**
    * Gets the detail
    * Specifies the additional details provided by Microsoft to substantiate their analysis result.
    *
    * @return SubmissionResultDetail|null The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionResultDetail") || is_null($this->_propDict["detail"])) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new SubmissionResultDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }

    /**
    * Sets the detail
    * Specifies the additional details provided by Microsoft to substantiate their analysis result.
    *
    * @param SubmissionResultDetail $val The value to assign to the detail
    *
    * @return SubmissionResult The SubmissionResult
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
         return $this;
    }

    /**
    * Gets the detectedFiles
    * Specifies the files detected by Microsoft in the submitted emails.
    *
    * @return SubmissionDetectedFile|null The detectedFiles
    */
    public function getDetectedFiles()
    {
        if (array_key_exists("detectedFiles", $this->_propDict)) {
            if (is_a($this->_propDict["detectedFiles"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SubmissionDetectedFile") || is_null($this->_propDict["detectedFiles"])) {
                return $this->_propDict["detectedFiles"];
            } else {
                $this->_propDict["detectedFiles"] = new SubmissionDetectedFile($this->_propDict["detectedFiles"]);
                return $this->_propDict["detectedFiles"];
            }
        }
        return null;
    }

    /**
    * Sets the detectedFiles
    * Specifies the files detected by Microsoft in the submitted emails.
    *
    * @param SubmissionDetectedFile $val The value to assign to the detectedFiles
    *
    * @return SubmissionResult The SubmissionResult
    */
    public function setDetectedFiles($val)
    {
        $this->_propDict["detectedFiles"] = $val;
         return $this;
    }
    /**
    * Gets the detectedUrls
    * Specifes the URLs detected by Microsoft in the submitted email.
    *
    * @return string|null The detectedUrls
    */
    public function getDetectedUrls()
    {
        if (array_key_exists("detectedUrls", $this->_propDict)) {
            return $this->_propDict["detectedUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectedUrls
    * Specifes the URLs detected by Microsoft in the submitted email.
    *
    * @param string $val The value of the detectedUrls
    *
    * @return SubmissionResult
    */
    public function setDetectedUrls($val)
    {
        $this->_propDict["detectedUrls"] = $val;
        return $this;
    }

    /**
    * Gets the userMailboxSetting
    * Specifies the setting for user mailbox denoted by a comma-separated string.
    *
    * @return UserMailboxSetting|null The userMailboxSetting
    */
    public function getUserMailboxSetting()
    {
        if (array_key_exists("userMailboxSetting", $this->_propDict)) {
            if (is_a($this->_propDict["userMailboxSetting"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\UserMailboxSetting") || is_null($this->_propDict["userMailboxSetting"])) {
                return $this->_propDict["userMailboxSetting"];
            } else {
                $this->_propDict["userMailboxSetting"] = new UserMailboxSetting($this->_propDict["userMailboxSetting"]);
                return $this->_propDict["userMailboxSetting"];
            }
        }
        return null;
    }

    /**
    * Sets the userMailboxSetting
    * Specifies the setting for user mailbox denoted by a comma-separated string.
    *
    * @param UserMailboxSetting $val The value to assign to the userMailboxSetting
    *
    * @return SubmissionResult The SubmissionResult
    */
    public function setUserMailboxSetting($val)
    {
        $this->_propDict["userMailboxSetting"] = $val;
         return $this;
    }
}
