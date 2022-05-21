<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkloadActionDeploymentStatus File
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
* WorkloadActionDeploymentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkloadActionDeploymentStatus extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the actionId
    * The unique identifier for the workload action. Required. Read-only.
    *
    * @return string|null The actionId
    */
    public function getActionId()
    {
        if (array_key_exists("actionId", $this->_propDict)) {
            return $this->_propDict["actionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionId
    * The unique identifier for the workload action. Required. Read-only.
    *
    * @param string $val The value of the actionId
    *
    * @return WorkloadActionDeploymentStatus
    */
    public function setActionId($val)
    {
        $this->_propDict["actionId"] = $val;
        return $this;
    }
    /**
    * Gets the deployedPolicyId
    * The identifier of any policy that was created by applying the workload action. Optional. Read-only.
    *
    * @return string|null The deployedPolicyId
    */
    public function getDeployedPolicyId()
    {
        if (array_key_exists("deployedPolicyId", $this->_propDict)) {
            return $this->_propDict["deployedPolicyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deployedPolicyId
    * The identifier of any policy that was created by applying the workload action. Optional. Read-only.
    *
    * @param string $val The value of the deployedPolicyId
    *
    * @return WorkloadActionDeploymentStatus
    */
    public function setDeployedPolicyId($val)
    {
        $this->_propDict["deployedPolicyId"] = $val;
        return $this;
    }

    /**
    * Gets the error
    * The detailed information for exceptions that occur when deploying the workload action. Optional. Required.
    *
    * @return \Beta\Microsoft\Graph\Model\GenericError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Beta\Microsoft\Graph\Model\GenericError") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new \Beta\Microsoft\Graph\Model\GenericError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * The detailed information for exceptions that occur when deploying the workload action. Optional. Required.
    *
    * @param \Beta\Microsoft\Graph\Model\GenericError $val The value to assign to the error
    *
    * @return WorkloadActionDeploymentStatus The WorkloadActionDeploymentStatus
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }
    /**
    * Gets the excludeGroups
    *
    * @return string|null The excludeGroups
    */
    public function getExcludeGroups()
    {
        if (array_key_exists("excludeGroups", $this->_propDict)) {
            return $this->_propDict["excludeGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeGroups
    *
    * @param string $val The value of the excludeGroups
    *
    * @return WorkloadActionDeploymentStatus
    */
    public function setExcludeGroups($val)
    {
        $this->_propDict["excludeGroups"] = $val;
        return $this;
    }
    /**
    * Gets the includeAllUsers
    *
    * @return bool|null The includeAllUsers
    */
    public function getIncludeAllUsers()
    {
        if (array_key_exists("includeAllUsers", $this->_propDict)) {
            return $this->_propDict["includeAllUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeAllUsers
    *
    * @param bool $val The value of the includeAllUsers
    *
    * @return WorkloadActionDeploymentStatus
    */
    public function setIncludeAllUsers($val)
    {
        $this->_propDict["includeAllUsers"] = $val;
        return $this;
    }
    /**
    * Gets the includeGroups
    *
    * @return string|null The includeGroups
    */
    public function getIncludeGroups()
    {
        if (array_key_exists("includeGroups", $this->_propDict)) {
            return $this->_propDict["includeGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeGroups
    *
    * @param string $val The value of the includeGroups
    *
    * @return WorkloadActionDeploymentStatus
    */
    public function setIncludeGroups($val)
    {
        $this->_propDict["includeGroups"] = $val;
        return $this;
    }

    /**
    * Gets the lastDeploymentDateTime
    * The date and time the workload action was last deployed. Optional.
    *
    * @return \DateTime|null The lastDeploymentDateTime
    */
    public function getLastDeploymentDateTime()
    {
        if (array_key_exists("lastDeploymentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastDeploymentDateTime"], "\DateTime") || is_null($this->_propDict["lastDeploymentDateTime"])) {
                return $this->_propDict["lastDeploymentDateTime"];
            } else {
                $this->_propDict["lastDeploymentDateTime"] = new \DateTime($this->_propDict["lastDeploymentDateTime"]);
                return $this->_propDict["lastDeploymentDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastDeploymentDateTime
    * The date and time the workload action was last deployed. Optional.
    *
    * @param \DateTime $val The value to assign to the lastDeploymentDateTime
    *
    * @return WorkloadActionDeploymentStatus The WorkloadActionDeploymentStatus
    */
    public function setLastDeploymentDateTime($val)
    {
        $this->_propDict["lastDeploymentDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * The status of the workload action deployment. Possible values are: toAddress, completed, error, timeOut, inProgress, unknownFutureValue. Required. Read-only.
    *
    * @return WorkloadActionStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\ManagedTenants\Model\WorkloadActionStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new WorkloadActionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the workload action deployment. Possible values are: toAddress, completed, error, timeOut, inProgress, unknownFutureValue. Required. Read-only.
    *
    * @param WorkloadActionStatus $val The value to assign to the status
    *
    * @return WorkloadActionDeploymentStatus The WorkloadActionDeploymentStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
