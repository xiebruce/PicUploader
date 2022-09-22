<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;

/**
* AlertRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertRecord extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the alertImpact
    *
    * @return AlertImpact|null The alertImpact
    */
    public function getAlertImpact()
    {
        if (array_key_exists("alertImpact", $this->_propDict)) {
            if (is_a($this->_propDict["alertImpact"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\AlertImpact") || is_null($this->_propDict["alertImpact"])) {
                return $this->_propDict["alertImpact"];
            } else {
                $this->_propDict["alertImpact"] = new AlertImpact($this->_propDict["alertImpact"]);
                return $this->_propDict["alertImpact"];
            }
        }
        return null;
    }

    /**
    * Sets the alertImpact
    *
    * @param AlertImpact $val The alertImpact
    *
    * @return AlertRecord
    */
    public function setAlertImpact($val)
    {
        $this->_propDict["alertImpact"] = $val;
        return $this;
    }

    /**
    * Gets the alertRuleId
    *
    * @return string|null The alertRuleId
    */
    public function getAlertRuleId()
    {
        if (array_key_exists("alertRuleId", $this->_propDict)) {
            return $this->_propDict["alertRuleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertRuleId
    *
    * @param string $val The alertRuleId
    *
    * @return AlertRecord
    */
    public function setAlertRuleId($val)
    {
        $this->_propDict["alertRuleId"] = $val;
        return $this;
    }

    /**
    * Gets the alertRuleTemplate
    *
    * @return AlertRuleTemplate|null The alertRuleTemplate
    */
    public function getAlertRuleTemplate()
    {
        if (array_key_exists("alertRuleTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["alertRuleTemplate"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\AlertRuleTemplate") || is_null($this->_propDict["alertRuleTemplate"])) {
                return $this->_propDict["alertRuleTemplate"];
            } else {
                $this->_propDict["alertRuleTemplate"] = new AlertRuleTemplate($this->_propDict["alertRuleTemplate"]);
                return $this->_propDict["alertRuleTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the alertRuleTemplate
    *
    * @param AlertRuleTemplate $val The alertRuleTemplate
    *
    * @return AlertRecord
    */
    public function setAlertRuleTemplate($val)
    {
        $this->_propDict["alertRuleTemplate"] = $val;
        return $this;
    }

    /**
    * Gets the detectedDateTime
    *
    * @return \DateTime|null The detectedDateTime
    */
    public function getDetectedDateTime()
    {
        if (array_key_exists("detectedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["detectedDateTime"], "\DateTime") || is_null($this->_propDict["detectedDateTime"])) {
                return $this->_propDict["detectedDateTime"];
            } else {
                $this->_propDict["detectedDateTime"] = new \DateTime($this->_propDict["detectedDateTime"]);
                return $this->_propDict["detectedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the detectedDateTime
    *
    * @param \DateTime $val The detectedDateTime
    *
    * @return AlertRecord
    */
    public function setDetectedDateTime($val)
    {
        $this->_propDict["detectedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return AlertRecord
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return AlertRecord
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the resolvedDateTime
    *
    * @return \DateTime|null The resolvedDateTime
    */
    public function getResolvedDateTime()
    {
        if (array_key_exists("resolvedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["resolvedDateTime"], "\DateTime") || is_null($this->_propDict["resolvedDateTime"])) {
                return $this->_propDict["resolvedDateTime"];
            } else {
                $this->_propDict["resolvedDateTime"] = new \DateTime($this->_propDict["resolvedDateTime"]);
                return $this->_propDict["resolvedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the resolvedDateTime
    *
    * @param \DateTime $val The resolvedDateTime
    *
    * @return AlertRecord
    */
    public function setResolvedDateTime($val)
    {
        $this->_propDict["resolvedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    *
    * @return RuleSeverityType|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\RuleSeverityType") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new RuleSeverityType($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    *
    * @param RuleSeverityType $val The severity
    *
    * @return AlertRecord
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return AlertStatusType|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\AlertStatusType") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AlertStatusType($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param AlertStatusType $val The status
    *
    * @return AlertRecord
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
