<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SequentialActivationRenewalsAlertIncident File
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
* SequentialActivationRenewalsAlertIncident class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SequentialActivationRenewalsAlertIncident extends UnifiedRoleManagementAlertIncident
{
    /**
    * Gets the activationCount
    *
    * @return int|null The activationCount
    */
    public function getActivationCount()
    {
        if (array_key_exists("activationCount", $this->_propDict)) {
            return $this->_propDict["activationCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activationCount
    *
    * @param int $val The activationCount
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setActivationCount($val)
    {
        $this->_propDict["activationCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the assigneeDisplayName
    *
    * @return string|null The assigneeDisplayName
    */
    public function getAssigneeDisplayName()
    {
        if (array_key_exists("assigneeDisplayName", $this->_propDict)) {
            return $this->_propDict["assigneeDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeDisplayName
    *
    * @param string $val The assigneeDisplayName
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setAssigneeDisplayName($val)
    {
        $this->_propDict["assigneeDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the assigneeId
    *
    * @return string|null The assigneeId
    */
    public function getAssigneeId()
    {
        if (array_key_exists("assigneeId", $this->_propDict)) {
            return $this->_propDict["assigneeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeId
    *
    * @param string $val The assigneeId
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setAssigneeId($val)
    {
        $this->_propDict["assigneeId"] = $val;
        return $this;
    }

    /**
    * Gets the assigneeUserPrincipalName
    *
    * @return string|null The assigneeUserPrincipalName
    */
    public function getAssigneeUserPrincipalName()
    {
        if (array_key_exists("assigneeUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["assigneeUserPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeUserPrincipalName
    *
    * @param string $val The assigneeUserPrincipalName
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setAssigneeUserPrincipalName($val)
    {
        $this->_propDict["assigneeUserPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinitionId
    *
    * @return string|null The roleDefinitionId
    */
    public function getRoleDefinitionId()
    {
        if (array_key_exists("roleDefinitionId", $this->_propDict)) {
            return $this->_propDict["roleDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDefinitionId
    *
    * @param string $val The roleDefinitionId
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the roleDisplayName
    *
    * @return string|null The roleDisplayName
    */
    public function getRoleDisplayName()
    {
        if (array_key_exists("roleDisplayName", $this->_propDict)) {
            return $this->_propDict["roleDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDisplayName
    *
    * @param string $val The roleDisplayName
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setRoleDisplayName($val)
    {
        $this->_propDict["roleDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the roleTemplateId
    *
    * @return string|null The roleTemplateId
    */
    public function getRoleTemplateId()
    {
        if (array_key_exists("roleTemplateId", $this->_propDict)) {
            return $this->_propDict["roleTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleTemplateId
    *
    * @param string $val The roleTemplateId
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setRoleTemplateId($val)
    {
        $this->_propDict["roleTemplateId"] = $val;
        return $this;
    }

    /**
    * Gets the sequenceEndDateTime
    *
    * @return \DateTime|null The sequenceEndDateTime
    */
    public function getSequenceEndDateTime()
    {
        if (array_key_exists("sequenceEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sequenceEndDateTime"], "\DateTime") || is_null($this->_propDict["sequenceEndDateTime"])) {
                return $this->_propDict["sequenceEndDateTime"];
            } else {
                $this->_propDict["sequenceEndDateTime"] = new \DateTime($this->_propDict["sequenceEndDateTime"]);
                return $this->_propDict["sequenceEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sequenceEndDateTime
    *
    * @param \DateTime $val The sequenceEndDateTime
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setSequenceEndDateTime($val)
    {
        $this->_propDict["sequenceEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the sequenceStartDateTime
    *
    * @return \DateTime|null The sequenceStartDateTime
    */
    public function getSequenceStartDateTime()
    {
        if (array_key_exists("sequenceStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sequenceStartDateTime"], "\DateTime") || is_null($this->_propDict["sequenceStartDateTime"])) {
                return $this->_propDict["sequenceStartDateTime"];
            } else {
                $this->_propDict["sequenceStartDateTime"] = new \DateTime($this->_propDict["sequenceStartDateTime"]);
                return $this->_propDict["sequenceStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sequenceStartDateTime
    *
    * @param \DateTime $val The sequenceStartDateTime
    *
    * @return SequentialActivationRenewalsAlertIncident
    */
    public function setSequenceStartDateTime($val)
    {
        $this->_propDict["sequenceStartDateTime"] = $val;
        return $this;
    }

}
