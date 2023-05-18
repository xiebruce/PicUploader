<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementAlertDefinition File
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
* UnifiedRoleManagementAlertDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementAlertDefinition extends Entity
{
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
    * @return UnifiedRoleManagementAlertDefinition
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
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the howToPrevent
    *
    * @return string|null The howToPrevent
    */
    public function getHowToPrevent()
    {
        if (array_key_exists("howToPrevent", $this->_propDict)) {
            return $this->_propDict["howToPrevent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the howToPrevent
    *
    * @param string $val The howToPrevent
    *
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setHowToPrevent($val)
    {
        $this->_propDict["howToPrevent"] = $val;
        return $this;
    }

    /**
    * Gets the isConfigurable
    *
    * @return bool|null The isConfigurable
    */
    public function getIsConfigurable()
    {
        if (array_key_exists("isConfigurable", $this->_propDict)) {
            return $this->_propDict["isConfigurable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isConfigurable
    *
    * @param bool $val The isConfigurable
    *
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setIsConfigurable($val)
    {
        $this->_propDict["isConfigurable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isRemediatable
    *
    * @return bool|null The isRemediatable
    */
    public function getIsRemediatable()
    {
        if (array_key_exists("isRemediatable", $this->_propDict)) {
            return $this->_propDict["isRemediatable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRemediatable
    *
    * @param bool $val The isRemediatable
    *
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setIsRemediatable($val)
    {
        $this->_propDict["isRemediatable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the mitigationSteps
    *
    * @return string|null The mitigationSteps
    */
    public function getMitigationSteps()
    {
        if (array_key_exists("mitigationSteps", $this->_propDict)) {
            return $this->_propDict["mitigationSteps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mitigationSteps
    *
    * @param string $val The mitigationSteps
    *
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setMitigationSteps($val)
    {
        $this->_propDict["mitigationSteps"] = $val;
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
    * @return UnifiedRoleManagementAlertDefinition
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
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }

    /**
    * Gets the securityImpact
    *
    * @return string|null The securityImpact
    */
    public function getSecurityImpact()
    {
        if (array_key_exists("securityImpact", $this->_propDict)) {
            return $this->_propDict["securityImpact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityImpact
    *
    * @param string $val The securityImpact
    *
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setSecurityImpact($val)
    {
        $this->_propDict["securityImpact"] = $val;
        return $this;
    }

    /**
    * Gets the severityLevel
    *
    * @return AlertSeverity|null The severityLevel
    */
    public function getSeverityLevel()
    {
        if (array_key_exists("severityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["severityLevel"], "\Beta\Microsoft\Graph\Model\AlertSeverity") || is_null($this->_propDict["severityLevel"])) {
                return $this->_propDict["severityLevel"];
            } else {
                $this->_propDict["severityLevel"] = new AlertSeverity($this->_propDict["severityLevel"]);
                return $this->_propDict["severityLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the severityLevel
    *
    * @param AlertSeverity $val The severityLevel
    *
    * @return UnifiedRoleManagementAlertDefinition
    */
    public function setSeverityLevel($val)
    {
        $this->_propDict["severityLevel"] = $val;
        return $this;
    }

}
