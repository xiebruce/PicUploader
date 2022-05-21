<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcAuditEvent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* CloudPcAuditEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcAuditEvent extends Entity
{
    /**
    * Gets the activity
    * Friendly name of the activity. Optional.
    *
    * @return string|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            return $this->_propDict["activity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activity
    * Friendly name of the activity. Optional.
    *
    * @param string $val The activity
    *
    * @return CloudPcAuditEvent
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

    /**
    * Gets the activityDateTime
    * The date time in UTC when the activity was performed. Read-only.
    *
    * @return \DateTime|null The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime") || is_null($this->_propDict["activityDateTime"])) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the activityDateTime
    * The date time in UTC when the activity was performed. Read-only.
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return CloudPcAuditEvent
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the activityOperationType
    * The HTTP operation type of the activity. Possible values include create, delete, patch and other. Read-only.
    *
    * @return CloudPcAuditActivityOperationType|null The activityOperationType
    */
    public function getActivityOperationType()
    {
        if (array_key_exists("activityOperationType", $this->_propDict)) {
            if (is_a($this->_propDict["activityOperationType"], "\Beta\Microsoft\Graph\Model\CloudPcAuditActivityOperationType") || is_null($this->_propDict["activityOperationType"])) {
                return $this->_propDict["activityOperationType"];
            } else {
                $this->_propDict["activityOperationType"] = new CloudPcAuditActivityOperationType($this->_propDict["activityOperationType"]);
                return $this->_propDict["activityOperationType"];
            }
        }
        return null;
    }

    /**
    * Sets the activityOperationType
    * The HTTP operation type of the activity. Possible values include create, delete, patch and other. Read-only.
    *
    * @param CloudPcAuditActivityOperationType $val The activityOperationType
    *
    * @return CloudPcAuditEvent
    */
    public function setActivityOperationType($val)
    {
        $this->_propDict["activityOperationType"] = $val;
        return $this;
    }

    /**
    * Gets the activityResult
    * The result of the activity. Read-only.
    *
    * @return CloudPcAuditActivityResult|null The activityResult
    */
    public function getActivityResult()
    {
        if (array_key_exists("activityResult", $this->_propDict)) {
            if (is_a($this->_propDict["activityResult"], "\Beta\Microsoft\Graph\Model\CloudPcAuditActivityResult") || is_null($this->_propDict["activityResult"])) {
                return $this->_propDict["activityResult"];
            } else {
                $this->_propDict["activityResult"] = new CloudPcAuditActivityResult($this->_propDict["activityResult"]);
                return $this->_propDict["activityResult"];
            }
        }
        return null;
    }

    /**
    * Sets the activityResult
    * The result of the activity. Read-only.
    *
    * @param CloudPcAuditActivityResult $val The activityResult
    *
    * @return CloudPcAuditEvent
    */
    public function setActivityResult($val)
    {
        $this->_propDict["activityResult"] = $val;
        return $this;
    }

    /**
    * Gets the activityType
    * The type of activity that was performed. Read-only.
    *
    * @return string|null The activityType
    */
    public function getActivityType()
    {
        if (array_key_exists("activityType", $this->_propDict)) {
            return $this->_propDict["activityType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityType
    * The type of activity that was performed. Read-only.
    *
    * @param string $val The activityType
    *
    * @return CloudPcAuditEvent
    */
    public function setActivityType($val)
    {
        $this->_propDict["activityType"] = $val;
        return $this;
    }

    /**
    * Gets the actor
    * Azure AD user and application associated with the audit event. Read-only.
    *
    * @return CloudPcAuditActor|null The actor
    */
    public function getActor()
    {
        if (array_key_exists("actor", $this->_propDict)) {
            if (is_a($this->_propDict["actor"], "\Beta\Microsoft\Graph\Model\CloudPcAuditActor") || is_null($this->_propDict["actor"])) {
                return $this->_propDict["actor"];
            } else {
                $this->_propDict["actor"] = new CloudPcAuditActor($this->_propDict["actor"]);
                return $this->_propDict["actor"];
            }
        }
        return null;
    }

    /**
    * Sets the actor
    * Azure AD user and application associated with the audit event. Read-only.
    *
    * @param CloudPcAuditActor $val The actor
    *
    * @return CloudPcAuditEvent
    */
    public function setActor($val)
    {
        $this->_propDict["actor"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * Audit category. Read-only.
    *
    * @return CloudPcAuditCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Model\CloudPcAuditCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new CloudPcAuditCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * Audit category. Read-only.
    *
    * @param CloudPcAuditCategory $val The category
    *
    * @return CloudPcAuditEvent
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the componentName
    * Component name. Read-only.
    *
    * @return string|null The componentName
    */
    public function getComponentName()
    {
        if (array_key_exists("componentName", $this->_propDict)) {
            return $this->_propDict["componentName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the componentName
    * Component name. Read-only.
    *
    * @param string $val The componentName
    *
    * @return CloudPcAuditEvent
    */
    public function setComponentName($val)
    {
        $this->_propDict["componentName"] = $val;
        return $this;
    }

    /**
    * Gets the correlationId
    * The client request identifier, used to correlate activity within the system. Read-only.
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
    * The client request identifier, used to correlate activity within the system. Read-only.
    *
    * @param string $val The correlationId
    *
    * @return CloudPcAuditEvent
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Event display name. Read-only.
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
    * Event display name. Read-only.
    *
    * @param string $val The displayName
    *
    * @return CloudPcAuditEvent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the resources
    * List of cloudPcAuditResource objects. Read-only.
     *
     * @return array|null The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resources
    * List of cloudPcAuditResource objects. Read-only.
    *
    * @param CloudPcAuditResource[] $val The resources
    *
    * @return CloudPcAuditEvent
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }

}
