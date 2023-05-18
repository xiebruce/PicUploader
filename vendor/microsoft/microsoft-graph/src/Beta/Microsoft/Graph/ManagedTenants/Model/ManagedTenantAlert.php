<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenantAlert File
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
* ManagedTenantAlert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenantAlert extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the alertData
    *
    * @return AlertData|null The alertData
    */
    public function getAlertData()
    {
        if (array_key_exists("alertData", $this->_propDict)) {
            if (is_a($this->_propDict["alertData"], "\Beta\Microsoft\Graph\ManagedTenants\Model\AlertData") || is_null($this->_propDict["alertData"])) {
                return $this->_propDict["alertData"];
            } else {
                $this->_propDict["alertData"] = new AlertData($this->_propDict["alertData"]);
                return $this->_propDict["alertData"];
            }
        }
        return null;
    }

    /**
    * Sets the alertData
    *
    * @param AlertData $val The alertData
    *
    * @return ManagedTenantAlert
    */
    public function setAlertData($val)
    {
        $this->_propDict["alertData"] = $val;
        return $this;
    }


     /**
     * Gets the alertDataReferenceStrings
     *
     * @return array|null The alertDataReferenceStrings
     */
    public function getAlertDataReferenceStrings()
    {
        if (array_key_exists("alertDataReferenceStrings", $this->_propDict)) {
           return $this->_propDict["alertDataReferenceStrings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertDataReferenceStrings
    *
    * @param AlertDataReferenceString[] $val The alertDataReferenceStrings
    *
    * @return ManagedTenantAlert
    */
    public function setAlertDataReferenceStrings($val)
    {
        $this->_propDict["alertDataReferenceStrings"] = $val;
        return $this;
    }

    /**
    * Gets the alertRuleDisplayName
    *
    * @return string|null The alertRuleDisplayName
    */
    public function getAlertRuleDisplayName()
    {
        if (array_key_exists("alertRuleDisplayName", $this->_propDict)) {
            return $this->_propDict["alertRuleDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertRuleDisplayName
    *
    * @param string $val The alertRuleDisplayName
    *
    * @return ManagedTenantAlert
    */
    public function setAlertRuleDisplayName($val)
    {
        $this->_propDict["alertRuleDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the assignedToUserId
    *
    * @return string|null The assignedToUserId
    */
    public function getAssignedToUserId()
    {
        if (array_key_exists("assignedToUserId", $this->_propDict)) {
            return $this->_propDict["assignedToUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedToUserId
    *
    * @param string $val The assignedToUserId
    *
    * @return ManagedTenantAlert
    */
    public function setAssignedToUserId($val)
    {
        $this->_propDict["assignedToUserId"] = $val;
        return $this;
    }

    /**
    * Gets the correlationCount
    *
    * @return int|null The correlationCount
    */
    public function getCorrelationCount()
    {
        if (array_key_exists("correlationCount", $this->_propDict)) {
            return $this->_propDict["correlationCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationCount
    *
    * @param int $val The correlationCount
    *
    * @return ManagedTenantAlert
    */
    public function setCorrelationCount($val)
    {
        $this->_propDict["correlationCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the correlationId
    *
    * @return string|null The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationId
    *
    * @param string $val The correlationId
    *
    * @return ManagedTenantAlert
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
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
    * @return ManagedTenantAlert
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
    * @return ManagedTenantAlert
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return ManagedTenantAlert
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
    * @return ManagedTenantAlert
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the message
    *
    * @return string|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    *
    * @param string $val The message
    *
    * @return ManagedTenantAlert
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
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
    * @return ManagedTenantAlert
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return AlertStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\ManagedTenants\Model\AlertStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AlertStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param AlertStatus $val The status
    *
    * @return ManagedTenantAlert
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return ManagedTenantAlert
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the title
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return ManagedTenantAlert
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }


     /**
     * Gets the alertLogs
     *
     * @return array|null The alertLogs
     */
    public function getAlertLogs()
    {
        if (array_key_exists("alertLogs", $this->_propDict)) {
           return $this->_propDict["alertLogs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertLogs
    *
    * @param ManagedTenantAlertLog[] $val The alertLogs
    *
    * @return ManagedTenantAlert
    */
    public function setAlertLogs($val)
    {
        $this->_propDict["alertLogs"] = $val;
        return $this;
    }

    /**
    * Gets the alertRule
    *
    * @return ManagedTenantAlertRule|null The alertRule
    */
    public function getAlertRule()
    {
        if (array_key_exists("alertRule", $this->_propDict)) {
            if (is_a($this->_propDict["alertRule"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenantAlertRule") || is_null($this->_propDict["alertRule"])) {
                return $this->_propDict["alertRule"];
            } else {
                $this->_propDict["alertRule"] = new ManagedTenantAlertRule($this->_propDict["alertRule"]);
                return $this->_propDict["alertRule"];
            }
        }
        return null;
    }

    /**
    * Sets the alertRule
    *
    * @param ManagedTenantAlertRule $val The alertRule
    *
    * @return ManagedTenantAlert
    */
    public function setAlertRule($val)
    {
        $this->_propDict["alertRule"] = $val;
        return $this;
    }


     /**
     * Gets the apiNotifications
     *
     * @return array|null The apiNotifications
     */
    public function getApiNotifications()
    {
        if (array_key_exists("apiNotifications", $this->_propDict)) {
           return $this->_propDict["apiNotifications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the apiNotifications
    *
    * @param ManagedTenantApiNotification[] $val The apiNotifications
    *
    * @return ManagedTenantAlert
    */
    public function setApiNotifications($val)
    {
        $this->_propDict["apiNotifications"] = $val;
        return $this;
    }


     /**
     * Gets the emailNotifications
     *
     * @return array|null The emailNotifications
     */
    public function getEmailNotifications()
    {
        if (array_key_exists("emailNotifications", $this->_propDict)) {
           return $this->_propDict["emailNotifications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailNotifications
    *
    * @param ManagedTenantEmailNotification[] $val The emailNotifications
    *
    * @return ManagedTenantAlert
    */
    public function setEmailNotifications($val)
    {
        $this->_propDict["emailNotifications"] = $val;
        return $this;
    }

}
