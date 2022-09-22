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
    * @return AlertRule
    */
    public function setAlertRuleTemplate($val)
    {
        $this->_propDict["alertRuleTemplate"] = $val;
        return $this;
    }

    /**
    * Gets the description
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
    * @return AlertRule
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the enabled
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
    * @return AlertRule
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the threshold
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
