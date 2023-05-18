<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateStepTenantSummary File
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
* ManagementTemplateStepTenantSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateStepTenantSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the assignedTenantsCount
    *
    * @return int|null The assignedTenantsCount
    */
    public function getAssignedTenantsCount()
    {
        if (array_key_exists("assignedTenantsCount", $this->_propDict)) {
            return $this->_propDict["assignedTenantsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedTenantsCount
    *
    * @param int $val The assignedTenantsCount
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setAssignedTenantsCount($val)
    {
        $this->_propDict["assignedTenantsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the compliantTenantsCount
    *
    * @return int|null The compliantTenantsCount
    */
    public function getCompliantTenantsCount()
    {
        if (array_key_exists("compliantTenantsCount", $this->_propDict)) {
            return $this->_propDict["compliantTenantsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliantTenantsCount
    *
    * @param int $val The compliantTenantsCount
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setCompliantTenantsCount($val)
    {
        $this->_propDict["compliantTenantsCount"] = intval($val);
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
    * @return ManagementTemplateStepTenantSummary
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
    * @return ManagementTemplateStepTenantSummary
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the dismissedTenantsCount
    *
    * @return int|null The dismissedTenantsCount
    */
    public function getDismissedTenantsCount()
    {
        if (array_key_exists("dismissedTenantsCount", $this->_propDict)) {
            return $this->_propDict["dismissedTenantsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dismissedTenantsCount
    *
    * @param int $val The dismissedTenantsCount
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setDismissedTenantsCount($val)
    {
        $this->_propDict["dismissedTenantsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the ineligibleTenantsCount
    *
    * @return int|null The ineligibleTenantsCount
    */
    public function getIneligibleTenantsCount()
    {
        if (array_key_exists("ineligibleTenantsCount", $this->_propDict)) {
            return $this->_propDict["ineligibleTenantsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ineligibleTenantsCount
    *
    * @param int $val The ineligibleTenantsCount
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setIneligibleTenantsCount($val)
    {
        $this->_propDict["ineligibleTenantsCount"] = intval($val);
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
    * @return ManagementTemplateStepTenantSummary
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
    * @return ManagementTemplateStepTenantSummary
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
    * @return ManagementTemplateStepTenantSummary
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
    * @return ManagementTemplateStepTenantSummary
    */
    public function setManagementTemplateCollectionId($val)
    {
        $this->_propDict["managementTemplateCollectionId"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplateDisplayName
    *
    * @return string|null The managementTemplateDisplayName
    */
    public function getManagementTemplateDisplayName()
    {
        if (array_key_exists("managementTemplateDisplayName", $this->_propDict)) {
            return $this->_propDict["managementTemplateDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateDisplayName
    *
    * @param string $val The managementTemplateDisplayName
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setManagementTemplateDisplayName($val)
    {
        $this->_propDict["managementTemplateDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplateId
    *
    * @return string|null The managementTemplateId
    */
    public function getManagementTemplateId()
    {
        if (array_key_exists("managementTemplateId", $this->_propDict)) {
            return $this->_propDict["managementTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateId
    *
    * @param string $val The managementTemplateId
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setManagementTemplateId($val)
    {
        $this->_propDict["managementTemplateId"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplateStepDisplayName
    *
    * @return string|null The managementTemplateStepDisplayName
    */
    public function getManagementTemplateStepDisplayName()
    {
        if (array_key_exists("managementTemplateStepDisplayName", $this->_propDict)) {
            return $this->_propDict["managementTemplateStepDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateStepDisplayName
    *
    * @param string $val The managementTemplateStepDisplayName
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setManagementTemplateStepDisplayName($val)
    {
        $this->_propDict["managementTemplateStepDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplateStepId
    *
    * @return string|null The managementTemplateStepId
    */
    public function getManagementTemplateStepId()
    {
        if (array_key_exists("managementTemplateStepId", $this->_propDict)) {
            return $this->_propDict["managementTemplateStepId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateStepId
    *
    * @param string $val The managementTemplateStepId
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setManagementTemplateStepId($val)
    {
        $this->_propDict["managementTemplateStepId"] = $val;
        return $this;
    }

    /**
    * Gets the notCompliantTenantsCount
    *
    * @return int|null The notCompliantTenantsCount
    */
    public function getNotCompliantTenantsCount()
    {
        if (array_key_exists("notCompliantTenantsCount", $this->_propDict)) {
            return $this->_propDict["notCompliantTenantsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notCompliantTenantsCount
    *
    * @param int $val The notCompliantTenantsCount
    *
    * @return ManagementTemplateStepTenantSummary
    */
    public function setNotCompliantTenantsCount($val)
    {
        $this->_propDict["notCompliantTenantsCount"] = intval($val);
        return $this;
    }

}
