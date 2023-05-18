<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateCollectionTenantSummary File
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
* ManagementTemplateCollectionTenantSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateCollectionTenantSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the completeStepsCount
    *
    * @return int|null The completeStepsCount
    */
    public function getCompleteStepsCount()
    {
        if (array_key_exists("completeStepsCount", $this->_propDict)) {
            return $this->_propDict["completeStepsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completeStepsCount
    *
    * @param int $val The completeStepsCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setCompleteStepsCount($val)
    {
        $this->_propDict["completeStepsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the completeUsersCount
    *
    * @return int|null The completeUsersCount
    */
    public function getCompleteUsersCount()
    {
        if (array_key_exists("completeUsersCount", $this->_propDict)) {
            return $this->_propDict["completeUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completeUsersCount
    *
    * @param int $val The completeUsersCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setCompleteUsersCount($val)
    {
        $this->_propDict["completeUsersCount"] = intval($val);
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
    * @return ManagementTemplateCollectionTenantSummary
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
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the dismissedStepsCount
    *
    * @return int|null The dismissedStepsCount
    */
    public function getDismissedStepsCount()
    {
        if (array_key_exists("dismissedStepsCount", $this->_propDict)) {
            return $this->_propDict["dismissedStepsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dismissedStepsCount
    *
    * @param int $val The dismissedStepsCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setDismissedStepsCount($val)
    {
        $this->_propDict["dismissedStepsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the excludedUsersCount
    *
    * @return int|null The excludedUsersCount
    */
    public function getExcludedUsersCount()
    {
        if (array_key_exists("excludedUsersCount", $this->_propDict)) {
            return $this->_propDict["excludedUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludedUsersCount
    *
    * @param int $val The excludedUsersCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setExcludedUsersCount($val)
    {
        $this->_propDict["excludedUsersCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the excludedUsersDistinctCount
    *
    * @return int|null The excludedUsersDistinctCount
    */
    public function getExcludedUsersDistinctCount()
    {
        if (array_key_exists("excludedUsersDistinctCount", $this->_propDict)) {
            return $this->_propDict["excludedUsersDistinctCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludedUsersDistinctCount
    *
    * @param int $val The excludedUsersDistinctCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setExcludedUsersDistinctCount($val)
    {
        $this->_propDict["excludedUsersDistinctCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the incompleteStepsCount
    *
    * @return int|null The incompleteStepsCount
    */
    public function getIncompleteStepsCount()
    {
        if (array_key_exists("incompleteStepsCount", $this->_propDict)) {
            return $this->_propDict["incompleteStepsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incompleteStepsCount
    *
    * @param int $val The incompleteStepsCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setIncompleteStepsCount($val)
    {
        $this->_propDict["incompleteStepsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the incompleteUsersCount
    *
    * @return int|null The incompleteUsersCount
    */
    public function getIncompleteUsersCount()
    {
        if (array_key_exists("incompleteUsersCount", $this->_propDict)) {
            return $this->_propDict["incompleteUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incompleteUsersCount
    *
    * @param int $val The incompleteUsersCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setIncompleteUsersCount($val)
    {
        $this->_propDict["incompleteUsersCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the ineligibleStepsCount
    *
    * @return int|null The ineligibleStepsCount
    */
    public function getIneligibleStepsCount()
    {
        if (array_key_exists("ineligibleStepsCount", $this->_propDict)) {
            return $this->_propDict["ineligibleStepsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ineligibleStepsCount
    *
    * @param int $val The ineligibleStepsCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setIneligibleStepsCount($val)
    {
        $this->_propDict["ineligibleStepsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the isComplete
    *
    * @return bool|null The isComplete
    */
    public function getIsComplete()
    {
        if (array_key_exists("isComplete", $this->_propDict)) {
            return $this->_propDict["isComplete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isComplete
    *
    * @param bool $val The isComplete
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setIsComplete($val)
    {
        $this->_propDict["isComplete"] = boolval($val);
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
    * @return ManagementTemplateCollectionTenantSummary
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
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplateCollectionDisplayName
    *
    * @return string|null The managementTemplateCollectionDisplayName
    */
    public function getManagementTemplateCollectionDisplayName()
    {
        if (array_key_exists("managementTemplateCollectionDisplayName", $this->_propDict)) {
            return $this->_propDict["managementTemplateCollectionDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateCollectionDisplayName
    *
    * @param string $val The managementTemplateCollectionDisplayName
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setManagementTemplateCollectionDisplayName($val)
    {
        $this->_propDict["managementTemplateCollectionDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplateCollectionId
    *
    * @return string|null The managementTemplateCollectionId
    */
    public function getManagementTemplateCollectionId()
    {
        if (array_key_exists("managementTemplateCollectionId", $this->_propDict)) {
            return $this->_propDict["managementTemplateCollectionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateCollectionId
    *
    * @param string $val The managementTemplateCollectionId
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setManagementTemplateCollectionId($val)
    {
        $this->_propDict["managementTemplateCollectionId"] = $val;
        return $this;
    }

    /**
    * Gets the regressedStepsCount
    *
    * @return int|null The regressedStepsCount
    */
    public function getRegressedStepsCount()
    {
        if (array_key_exists("regressedStepsCount", $this->_propDict)) {
            return $this->_propDict["regressedStepsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regressedStepsCount
    *
    * @param int $val The regressedStepsCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setRegressedStepsCount($val)
    {
        $this->_propDict["regressedStepsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the regressedUsersCount
    *
    * @return int|null The regressedUsersCount
    */
    public function getRegressedUsersCount()
    {
        if (array_key_exists("regressedUsersCount", $this->_propDict)) {
            return $this->_propDict["regressedUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regressedUsersCount
    *
    * @param int $val The regressedUsersCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setRegressedUsersCount($val)
    {
        $this->_propDict["regressedUsersCount"] = intval($val);
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
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the unlicensedUsersCount
    *
    * @return int|null The unlicensedUsersCount
    */
    public function getUnlicensedUsersCount()
    {
        if (array_key_exists("unlicensedUsersCount", $this->_propDict)) {
            return $this->_propDict["unlicensedUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unlicensedUsersCount
    *
    * @param int $val The unlicensedUsersCount
    *
    * @return ManagementTemplateCollectionTenantSummary
    */
    public function setUnlicensedUsersCount($val)
    {
        $this->_propDict["unlicensedUsersCount"] = intval($val);
        return $this;
    }

}
