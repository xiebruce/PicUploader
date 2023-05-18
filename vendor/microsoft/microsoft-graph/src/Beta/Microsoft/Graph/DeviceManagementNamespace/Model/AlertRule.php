<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertRule File
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
* AlertRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertRule extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the alertRuleTemplate
    * The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
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
    * The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
    *
    * @param AlertRuleTemplate $val The alertRuleTemplate
    *
    * @return AlertRule
    */
    public function setAlertRuleTemplate($val)
    {
        $this->_propDict["alertRuleTemplate"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The rule description.
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
    * The rule description.
    *
    * @param string $val The description
    *
    * @return AlertRule
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the rule.
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
    * The display name of the rule.
    *
    * @param string $val The displayName
    *
    * @return AlertRule
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the enabled
    * The status of the rule that indicates whether the rule is enabled or disabled. If true, the rule is enabled; otherwise, the rule is disabled.
    *
    * @return bool|null The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    * The status of the rule that indicates whether the rule is enabled or disabled. If true, the rule is enabled; otherwise, the rule is disabled.
    *
    * @param bool $val The enabled
    *
    * @return AlertRule
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSystemRule
    * Indicates whether the rule is a system rule. If true, the rule is a system rule; otherwise, the rule is a custom defined rule and can be edited. System rules are built-in and only a few properties can be edited.
    *
    * @return bool|null The isSystemRule
    */
    public function getIsSystemRule()
    {
        if (array_key_exists("isSystemRule", $this->_propDict)) {
            return $this->_propDict["isSystemRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSystemRule
    * Indicates whether the rule is a system rule. If true, the rule is a system rule; otherwise, the rule is a custom defined rule and can be edited. System rules are built-in and only a few properties can be edited.
    *
    * @param bool $val The isSystemRule
    *
    * @return AlertRule
    */
    public function setIsSystemRule($val)
    {
        $this->_propDict["isSystemRule"] = boolval($val);
        return $this;
    }


     /**
     * Gets the notificationChannels
    * The notification channels of the rule selected by the user.
     *
     * @return array|null The notificationChannels
     */
    public function getNotificationChannels()
    {
        if (array_key_exists("notificationChannels", $this->_propDict)) {
           return $this->_propDict["notificationChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationChannels
    * The notification channels of the rule selected by the user.
    *
    * @param NotificationChannel[] $val The notificationChannels
    *
    * @return AlertRule
    */
    public function setNotificationChannels($val)
    {
        $this->_propDict["notificationChannels"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * The severity of the rule. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
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
    * The severity of the rule. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
    *
    * @param RuleSeverityType $val The severity
    *
    * @return AlertRule
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the threshold
    * The conditions to send alerts. For example, send alert when provisioning has failed for greater than or equal to 6 Cloud PCs.
    *
    * @return RuleThreshold|null The threshold
    */
    public function getThreshold()
    {
        if (array_key_exists("threshold", $this->_propDict)) {
            if (is_a($this->_propDict["threshold"], "\Beta\Microsoft\Graph\DeviceManagementNamespace\Model\RuleThreshold") || is_null($this->_propDict["threshold"])) {
                return $this->_propDict["threshold"];
            } else {
                $this->_propDict["threshold"] = new RuleThreshold($this->_propDict["threshold"]);
                return $this->_propDict["threshold"];
            }
        }
        return null;
    }

    /**
    * Sets the threshold
    * The conditions to send alerts. For example, send alert when provisioning has failed for greater than or equal to 6 Cloud PCs.
    *
    * @param RuleThreshold $val The threshold
    *
    * @return AlertRule
    */
    public function setThreshold($val)
    {
        $this->_propDict["threshold"] = $val;
        return $this;
    }

}
