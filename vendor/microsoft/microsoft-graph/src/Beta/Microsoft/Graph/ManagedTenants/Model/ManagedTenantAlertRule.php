<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenantAlertRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* ManagedTenantAlertRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenantAlertRule extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the alertDisplayName
    *
    * @return string|null The alertDisplayName
    */
    public function getAlertDisplayName()
    {
        if (array_key_exists("alertDisplayName", $this->_propDict)) {
            return $this->_propDict["alertDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertDisplayName
    *
    * @param string $val The alertDisplayName
    *
    * @return ManagedTenantAlertRule
    */
    public function setAlertDisplayName($val)
    {
        $this->_propDict["alertDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the alertTTL
    *
    * @return int|null The alertTTL
    */
    public function getAlertTTL()
    {
        if (array_key_exists("alertTTL", $this->_propDict)) {
            return $this->_propDict["alertTTL"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertTTL
    *
    * @param int $val The alertTTL
    *
    * @return ManagedTenantAlertRule
    */
    public function setAlertTTL($val)
    {
        $this->_propDict["alertTTL"] = intval($val);
        return $this;
    }

    /**
    * Gets the createdByUserId
    *
    * @return string|null The createdByUserId
    */
    public function getCreatedByUserId()
    {
        if (array_key_exists("createdByUserId", $this->_propDict)) {
            return $this->_propDict["createdByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdByUserId
    *
    * @param string $val The createdByUserId
    *
    * @return ManagedTenantAlertRule
    */
    public function setCreatedByUserId($val)
    {
        $this->_propDict["createdByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ManagedTenantAlertRule
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return ManagedTenantAlertRule
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
    * @return ManagedTenantAlertRule
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionByUserId
    *
    * @return string|null The lastActionByUserId
    */
    public function getLastActionByUserId()
    {
        if (array_key_exists("lastActionByUserId", $this->_propDict)) {
            return $this->_propDict["lastActionByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastActionByUserId
    *
    * @param string $val The lastActionByUserId
    *
    * @return ManagedTenantAlertRule
    */
    public function setLastActionByUserId($val)
    {
        $this->_propDict["lastActionByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionDateTime
    *
    * @return \DateTime|null The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime") || is_null($this->_propDict["lastActionDateTime"])) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActionDateTime
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return ManagedTenantAlertRule
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastRunDateTime
    *
    * @return \DateTime|null The lastRunDateTime
    */
    public function getLastRunDateTime()
    {
        if (array_key_exists("lastRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRunDateTime"], "\DateTime") || is_null($this->_propDict["lastRunDateTime"])) {
                return $this->_propDict["lastRunDateTime"];
            } else {
                $this->_propDict["lastRunDateTime"] = new \DateTime($this->_propDict["lastRunDateTime"]);
                return $this->_propDict["lastRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRunDateTime
    *
    * @param \DateTime $val The lastRunDateTime
    *
    * @return ManagedTenantAlertRule
    */
    public function setLastRunDateTime($val)
    {
        $this->_propDict["lastRunDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notificationFinalDestinations
    *
    * @return NotificationDestination|null The notificationFinalDestinations
    */
    public function getNotificationFinalDestinations()
    {
        if (array_key_exists("notificationFinalDestinations", $this->_propDict)) {
            if (is_a($this->_propDict["notificationFinalDestinations"], "\Beta\Microsoft\Graph\ManagedTenants\Model\NotificationDestination") || is_null($this->_propDict["notificationFinalDestinations"])) {
                return $this->_propDict["notificationFinalDestinations"];
            } else {
                $this->_propDict["notificationFinalDestinations"] = new NotificationDestination($this->_propDict["notificationFinalDestinations"]);
                return $this->_propDict["notificationFinalDestinations"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationFinalDestinations
    *
    * @param NotificationDestination $val The notificationFinalDestinations
    *
    * @return ManagedTenantAlertRule
    */
    public function setNotificationFinalDestinations($val)
    {
        $this->_propDict["notificationFinalDestinations"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    *
    * @return AlertSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\ManagedTenants\Model\AlertSeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new AlertSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    *
    * @param AlertSeverity $val The severity
    *
    * @return ManagedTenantAlertRule
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }


     /**
     * Gets the targets
     *
     * @return array|null The targets
     */
    public function getTargets()
    {
        if (array_key_exists("targets", $this->_propDict)) {
           return $this->_propDict["targets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targets
    *
    * @param NotificationTarget[] $val The targets
    *
    * @return ManagedTenantAlertRule
    */
    public function setTargets($val)
    {
        $this->_propDict["targets"] = $val;
        return $this;
    }


     /**
     * Gets the tenantIds
     *
     * @return array|null The tenantIds
     */
    public function getTenantIds()
    {
        if (array_key_exists("tenantIds", $this->_propDict)) {
           return $this->_propDict["tenantIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantIds
    *
    * @param TenantInfo[] $val The tenantIds
    *
    * @return ManagedTenantAlertRule
    */
    public function setTenantIds($val)
    {
        $this->_propDict["tenantIds"] = $val;
        return $this;
    }


     /**
     * Gets the alerts
     *
     * @return array|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alerts
    *
    * @param ManagedTenantAlert[] $val The alerts
    *
    * @return ManagedTenantAlertRule
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }

    /**
    * Gets the ruleDefinition
    *
    * @return ManagedTenantAlertRuleDefinition|null The ruleDefinition
    */
    public function getRuleDefinition()
    {
        if (array_key_exists("ruleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["ruleDefinition"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenantAlertRuleDefinition") || is_null($this->_propDict["ruleDefinition"])) {
                return $this->_propDict["ruleDefinition"];
            } else {
                $this->_propDict["ruleDefinition"] = new ManagedTenantAlertRuleDefinition($this->_propDict["ruleDefinition"]);
                return $this->_propDict["ruleDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleDefinition
    *
    * @param ManagedTenantAlertRuleDefinition $val The ruleDefinition
    *
    * @return ManagedTenantAlertRule
    */
    public function setRuleDefinition($val)
    {
        $this->_propDict["ruleDefinition"] = $val;
        return $this;
    }

}
