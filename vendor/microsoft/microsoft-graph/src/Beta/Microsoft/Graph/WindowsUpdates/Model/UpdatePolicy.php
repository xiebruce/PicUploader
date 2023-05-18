<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UpdatePolicy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* UpdatePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UpdatePolicy extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the complianceChangeRules
    * Rules for governing the automatic creation of compliance changes.
     *
     * @return array|null The complianceChangeRules
     */
    public function getComplianceChangeRules()
    {
        if (array_key_exists("complianceChangeRules", $this->_propDict)) {
           return $this->_propDict["complianceChangeRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceChangeRules
    * Rules for governing the automatic creation of compliance changes.
    *
    * @param ComplianceChangeRule[] $val The complianceChangeRules
    *
    * @return UpdatePolicy
    */
    public function setComplianceChangeRules($val)
    {
        $this->_propDict["complianceChangeRules"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the update policy was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when the update policy was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return UpdatePolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentSettings
    * Settings for governing how to deploy content.
    *
    * @return DeploymentSettings|null The deploymentSettings
    */
    public function getDeploymentSettings()
    {
        if (array_key_exists("deploymentSettings", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSettings"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentSettings") || is_null($this->_propDict["deploymentSettings"])) {
                return $this->_propDict["deploymentSettings"];
            } else {
                $this->_propDict["deploymentSettings"] = new DeploymentSettings($this->_propDict["deploymentSettings"]);
                return $this->_propDict["deploymentSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentSettings
    * Settings for governing how to deploy content.
    *
    * @param DeploymentSettings $val The deploymentSettings
    *
    * @return UpdatePolicy
    */
    public function setDeploymentSettings($val)
    {
        $this->_propDict["deploymentSettings"] = $val;
        return $this;
    }

    /**
    * Gets the audience
    * Specifies the audience to target.
    *
    * @return DeploymentAudience|null The audience
    */
    public function getAudience()
    {
        if (array_key_exists("audience", $this->_propDict)) {
            if (is_a($this->_propDict["audience"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentAudience") || is_null($this->_propDict["audience"])) {
                return $this->_propDict["audience"];
            } else {
                $this->_propDict["audience"] = new DeploymentAudience($this->_propDict["audience"]);
                return $this->_propDict["audience"];
            }
        }
        return null;
    }

    /**
    * Sets the audience
    * Specifies the audience to target.
    *
    * @param DeploymentAudience $val The audience
    *
    * @return UpdatePolicy
    */
    public function setAudience($val)
    {
        $this->_propDict["audience"] = $val;
        return $this;
    }


     /**
     * Gets the complianceChanges
    * Compliance changes like content approvals which result in the automatic creation of deployments using the audience and deploymentSettings of the policy.
     *
     * @return array|null The complianceChanges
     */
    public function getComplianceChanges()
    {
        if (array_key_exists("complianceChanges", $this->_propDict)) {
           return $this->_propDict["complianceChanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceChanges
    * Compliance changes like content approvals which result in the automatic creation of deployments using the audience and deploymentSettings of the policy.
    *
    * @param ComplianceChange[] $val The complianceChanges
    *
    * @return UpdatePolicy
    */
    public function setComplianceChanges($val)
    {
        $this->_propDict["complianceChanges"] = $val;
        return $this;
    }

}
