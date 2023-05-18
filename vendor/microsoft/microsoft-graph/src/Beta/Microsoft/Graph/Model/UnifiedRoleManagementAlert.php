<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementAlert File
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
* UnifiedRoleManagementAlert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementAlert extends Entity
{
    /**
    * Gets the alertDefinitionId
    *
    * @return string|null The alertDefinitionId
    */
    public function getAlertDefinitionId()
    {
        if (array_key_exists("alertDefinitionId", $this->_propDict)) {
            return $this->_propDict["alertDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertDefinitionId
    *
    * @param string $val The alertDefinitionId
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertDefinitionId($val)
    {
        $this->_propDict["alertDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the incidentCount
    *
    * @return int|null The incidentCount
    */
    public function getIncidentCount()
    {
        if (array_key_exists("incidentCount", $this->_propDict)) {
            return $this->_propDict["incidentCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incidentCount
    *
    * @param int $val The incidentCount
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setIncidentCount($val)
    {
        $this->_propDict["incidentCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the isActive
    *
    * @return bool|null The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    *
    * @param bool $val The isActive
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastScannedDateTime
    *
    * @return \DateTime|null The lastScannedDateTime
    */
    public function getLastScannedDateTime()
    {
        if (array_key_exists("lastScannedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastScannedDateTime"], "\DateTime") || is_null($this->_propDict["lastScannedDateTime"])) {
                return $this->_propDict["lastScannedDateTime"];
            } else {
                $this->_propDict["lastScannedDateTime"] = new \DateTime($this->_propDict["lastScannedDateTime"]);
                return $this->_propDict["lastScannedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastScannedDateTime
    *
    * @param \DateTime $val The lastScannedDateTime
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setLastScannedDateTime($val)
    {
        $this->_propDict["lastScannedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the scopeId
    *
    * @return string|null The scopeId
    */
    public function getScopeId()
    {
        if (array_key_exists("scopeId", $this->_propDict)) {
            return $this->_propDict["scopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeId
    *
    * @param string $val The scopeId
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setScopeId($val)
    {
        $this->_propDict["scopeId"] = $val;
        return $this;
    }

    /**
    * Gets the scopeType
    *
    * @return string|null The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            return $this->_propDict["scopeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeType
    *
    * @param string $val The scopeType
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }

    /**
    * Gets the alertConfiguration
    *
    * @return UnifiedRoleManagementAlertConfiguration|null The alertConfiguration
    */
    public function getAlertConfiguration()
    {
        if (array_key_exists("alertConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["alertConfiguration"], "\Beta\Microsoft\Graph\Model\UnifiedRoleManagementAlertConfiguration") || is_null($this->_propDict["alertConfiguration"])) {
                return $this->_propDict["alertConfiguration"];
            } else {
                $this->_propDict["alertConfiguration"] = new UnifiedRoleManagementAlertConfiguration($this->_propDict["alertConfiguration"]);
                return $this->_propDict["alertConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the alertConfiguration
    *
    * @param UnifiedRoleManagementAlertConfiguration $val The alertConfiguration
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertConfiguration($val)
    {
        $this->_propDict["alertConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the alertDefinition
    *
    * @return UnifiedRoleManagementAlertDefinition|null The alertDefinition
    */
    public function getAlertDefinition()
    {
        if (array_key_exists("alertDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["alertDefinition"], "\Beta\Microsoft\Graph\Model\UnifiedRoleManagementAlertDefinition") || is_null($this->_propDict["alertDefinition"])) {
                return $this->_propDict["alertDefinition"];
            } else {
                $this->_propDict["alertDefinition"] = new UnifiedRoleManagementAlertDefinition($this->_propDict["alertDefinition"]);
                return $this->_propDict["alertDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the alertDefinition
    *
    * @param UnifiedRoleManagementAlertDefinition $val The alertDefinition
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertDefinition($val)
    {
        $this->_propDict["alertDefinition"] = $val;
        return $this;
    }


     /**
     * Gets the alertIncidents
     *
     * @return array|null The alertIncidents
     */
    public function getAlertIncidents()
    {
        if (array_key_exists("alertIncidents", $this->_propDict)) {
           return $this->_propDict["alertIncidents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertIncidents
    *
    * @param UnifiedRoleManagementAlertIncident[] $val The alertIncidents
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertIncidents($val)
    {
        $this->_propDict["alertIncidents"] = $val;
        return $this;
    }

}
