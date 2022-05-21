<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplate File
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
* ManagementTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplate extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the category
    * The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
    *
    * @return ManagementCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new ManagementCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
    *
    * @param ManagementCategory $val The category
    *
    * @return ManagementTemplate
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
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
    * @return ManagementTemplate
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
    * @return ManagementTemplate
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description for the management template. Optional. Read-only.
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
    * The description for the management template. Optional. Read-only.
    *
    * @param string $val The description
    *
    * @return ManagementTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the management template. Required. Read-only.
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
    * The display name for the management template. Required. Read-only.
    *
    * @param string $val The displayName
    *
    * @return ManagementTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the informationLinks
     *
     * @return array|null The informationLinks
     */
    public function getInformationLinks()
    {
        if (array_key_exists("informationLinks", $this->_propDict)) {
           return $this->_propDict["informationLinks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the informationLinks
    *
    * @param \Beta\Microsoft\Graph\Model\ActionUrl[] $val The informationLinks
    *
    * @return ManagementTemplate
    */
    public function setInformationLinks($val)
    {
        $this->_propDict["informationLinks"] = $val;
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
    * @return ManagementTemplate
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
    * @return ManagementTemplate
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the parameters
    * The collection of parameters used by the management template. Optional. Read-only.
     *
     * @return array|null The parameters
     */
    public function getParameters()
    {
        if (array_key_exists("parameters", $this->_propDict)) {
           return $this->_propDict["parameters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parameters
    * The collection of parameters used by the management template. Optional. Read-only.
    *
    * @param TemplateParameter[] $val The parameters
    *
    * @return ManagementTemplate
    */
    public function setParameters($val)
    {
        $this->_propDict["parameters"] = $val;
        return $this;
    }

    /**
    * Gets the priority
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    *
    * @param int $val The priority
    *
    * @return ManagementTemplate
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

    /**
    * Gets the provider
    *
    * @return ManagementProvider|null The provider
    */
    public function getProvider()
    {
        if (array_key_exists("provider", $this->_propDict)) {
            if (is_a($this->_propDict["provider"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementProvider") || is_null($this->_propDict["provider"])) {
                return $this->_propDict["provider"];
            } else {
                $this->_propDict["provider"] = new ManagementProvider($this->_propDict["provider"]);
                return $this->_propDict["provider"];
            }
        }
        return null;
    }

    /**
    * Sets the provider
    *
    * @param ManagementProvider $val The provider
    *
    * @return ManagementTemplate
    */
    public function setProvider($val)
    {
        $this->_propDict["provider"] = $val;
        return $this;
    }

    /**
    * Gets the userImpact
    *
    * @return string|null The userImpact
    */
    public function getUserImpact()
    {
        if (array_key_exists("userImpact", $this->_propDict)) {
            return $this->_propDict["userImpact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userImpact
    *
    * @param string $val The userImpact
    *
    * @return ManagementTemplate
    */
    public function setUserImpact($val)
    {
        $this->_propDict["userImpact"] = $val;
        return $this;
    }

    /**
    * Gets the version
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    *
    * @param int $val The version
    *
    * @return ManagementTemplate
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }


     /**
     * Gets the workloadActions
    * The collection of workload actions associated with the management template. Optional. Read-only.
     *
     * @return array|null The workloadActions
     */
    public function getWorkloadActions()
    {
        if (array_key_exists("workloadActions", $this->_propDict)) {
           return $this->_propDict["workloadActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workloadActions
    * The collection of workload actions associated with the management template. Optional. Read-only.
    *
    * @param WorkloadAction[] $val The workloadActions
    *
    * @return ManagementTemplate
    */
    public function setWorkloadActions($val)
    {
        $this->_propDict["workloadActions"] = $val;
        return $this;
    }


     /**
     * Gets the managementTemplateCollections
     *
     * @return array|null The managementTemplateCollections
     */
    public function getManagementTemplateCollections()
    {
        if (array_key_exists("managementTemplateCollections", $this->_propDict)) {
           return $this->_propDict["managementTemplateCollections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateCollections
    *
    * @param ManagementTemplateCollection[] $val The managementTemplateCollections
    *
    * @return ManagementTemplate
    */
    public function setManagementTemplateCollections($val)
    {
        $this->_propDict["managementTemplateCollections"] = $val;
        return $this;
    }


     /**
     * Gets the managementTemplateSteps
     *
     * @return array|null The managementTemplateSteps
     */
    public function getManagementTemplateSteps()
    {
        if (array_key_exists("managementTemplateSteps", $this->_propDict)) {
           return $this->_propDict["managementTemplateSteps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateSteps
    *
    * @param ManagementTemplateStep[] $val The managementTemplateSteps
    *
    * @return ManagementTemplate
    */
    public function setManagementTemplateSteps($val)
    {
        $this->_propDict["managementTemplateSteps"] = $val;
        return $this;
    }

}
