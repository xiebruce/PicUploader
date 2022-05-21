<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateStep File
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
* ManagementTemplateStep class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateStep extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the category
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
    *
    * @param ManagementCategory $val The category
    *
    * @return ManagementTemplateStep
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
    * @return ManagementTemplateStep
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
    * @return ManagementTemplateStep
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
    * @return ManagementTemplateStep
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
    * @return ManagementTemplateStep
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
    * @return ManagementTemplateStep
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
    * @return ManagementTemplateStep
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the portalLink
    *
    * @return \Beta\Microsoft\Graph\Model\ActionUrl|null The portalLink
    */
    public function getPortalLink()
    {
        if (array_key_exists("portalLink", $this->_propDict)) {
            if (is_a($this->_propDict["portalLink"], "\Beta\Microsoft\Graph\Model\ActionUrl") || is_null($this->_propDict["portalLink"])) {
                return $this->_propDict["portalLink"];
            } else {
                $this->_propDict["portalLink"] = new \Beta\Microsoft\Graph\Model\ActionUrl($this->_propDict["portalLink"]);
                return $this->_propDict["portalLink"];
            }
        }
        return null;
    }

    /**
    * Sets the portalLink
    *
    * @param \Beta\Microsoft\Graph\Model\ActionUrl $val The portalLink
    *
    * @return ManagementTemplateStep
    */
    public function setPortalLink($val)
    {
        $this->_propDict["portalLink"] = $val;
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
    * @return ManagementTemplateStep
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

    /**
    * Gets the acceptedVersion
    *
    * @return ManagementTemplateStepVersion|null The acceptedVersion
    */
    public function getAcceptedVersion()
    {
        if (array_key_exists("acceptedVersion", $this->_propDict)) {
            if (is_a($this->_propDict["acceptedVersion"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplateStepVersion") || is_null($this->_propDict["acceptedVersion"])) {
                return $this->_propDict["acceptedVersion"];
            } else {
                $this->_propDict["acceptedVersion"] = new ManagementTemplateStepVersion($this->_propDict["acceptedVersion"]);
                return $this->_propDict["acceptedVersion"];
            }
        }
        return null;
    }

    /**
    * Sets the acceptedVersion
    *
    * @param ManagementTemplateStepVersion $val The acceptedVersion
    *
    * @return ManagementTemplateStep
    */
    public function setAcceptedVersion($val)
    {
        $this->_propDict["acceptedVersion"] = $val;
        return $this;
    }

    /**
    * Gets the managementTemplate
    *
    * @return ManagementTemplate|null The managementTemplate
    */
    public function getManagementTemplate()
    {
        if (array_key_exists("managementTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["managementTemplate"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplate") || is_null($this->_propDict["managementTemplate"])) {
                return $this->_propDict["managementTemplate"];
            } else {
                $this->_propDict["managementTemplate"] = new ManagementTemplate($this->_propDict["managementTemplate"]);
                return $this->_propDict["managementTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the managementTemplate
    *
    * @param ManagementTemplate $val The managementTemplate
    *
    * @return ManagementTemplateStep
    */
    public function setManagementTemplate($val)
    {
        $this->_propDict["managementTemplate"] = $val;
        return $this;
    }


     /**
     * Gets the versions
     *
     * @return array|null The versions
     */
    public function getVersions()
    {
        if (array_key_exists("versions", $this->_propDict)) {
           return $this->_propDict["versions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versions
    *
    * @param ManagementTemplateStepVersion[] $val The versions
    *
    * @return ManagementTemplateStep
    */
    public function setVersions($val)
    {
        $this->_propDict["versions"] = $val;
        return $this;
    }

}
