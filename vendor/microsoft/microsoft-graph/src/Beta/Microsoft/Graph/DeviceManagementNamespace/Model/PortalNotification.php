<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PortalNotification File
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
* PortalNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PortalNotification extends \Beta\Microsoft\Graph\Model\Entity
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
    * @param AlertImpact $val The value to assign to the alertImpact
    *
    * @return PortalNotification The PortalNotification
    */
    public function setAlertImpact($val)
    {
        $this->_propDict["alertImpact"] = $val;
         return $this;
    }
    /**
    * Gets the alertRecordId
    *
    * @return string|null The alertRecordId
    */
    public function getAlertRecordId()
    {
        if (array_key_exists("alertRecordId", $this->_propDict)) {
            return $this->_propDict["alertRecordId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertRecordId
    *
    * @param string $val The value of the alertRecordId
    *
    * @return PortalNotification
    */
    public function setAlertRecordId($val)
    {
        $this->_propDict["alertRecordId"] = $val;
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
    * @param string $val The value of the alertRuleId
    *
    * @return PortalNotification
    */
    public function setAlertRuleId($val)
    {
        $this->_propDict["alertRuleId"] = $val;
        return $this;
    }
    /**
    * Gets the alertRuleName
    *
    * @return string|null The alertRuleName
    */
    public function getAlertRuleName()
    {
        if (array_key_exists("alertRuleName", $this->_propDict)) {
            return $this->_propDict["alertRuleName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertRuleName
    *
    * @param string $val The value of the alertRuleName
    *
    * @return PortalNotification
    */
    public function setAlertRuleName($val)
    {
        $this->_propDict["alertRuleName"] = $val;
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
    * @param AlertRuleTemplate $val The value to assign to the alertRuleTemplate
    *
    * @return PortalNotification The PortalNotification
    */
    public function setAlertRuleTemplate($val)
    {
        $this->_propDict["alertRuleTemplate"] = $val;
         return $this;
    }
    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return PortalNotification
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isPortalNotificationSent
    *
    * @return bool|null The isPortalNotificationSent
    */
    public function getIsPortalNotificationSent()
    {
        if (array_key_exists("isPortalNotificationSent", $this->_propDict)) {
            return $this->_propDict["isPortalNotificationSent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPortalNotificationSent
    *
    * @param bool $val The value of the isPortalNotificationSent
    *
    * @return PortalNotification
    */
    public function setIsPortalNotificationSent($val)
    {
        $this->_propDict["isPortalNotificationSent"] = $val;
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
    * @param RuleSeverityType $val The value to assign to the severity
    *
    * @return PortalNotification The PortalNotification
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
         return $this;
    }
}
