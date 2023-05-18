<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenantAlertRuleDefinition File
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
* ManagedTenantAlertRuleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenantAlertRuleDefinition extends \Beta\Microsoft\Graph\Model\Entity
{
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
    * @return ManagedTenantAlertRuleDefinition
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
    * @return ManagedTenantAlertRuleDefinition
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the definitionTemplate
    *
    * @return AlertRuleDefinitionTemplate|null The definitionTemplate
    */
    public function getDefinitionTemplate()
    {
        if (array_key_exists("definitionTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["definitionTemplate"], "\Beta\Microsoft\Graph\ManagedTenants\Model\AlertRuleDefinitionTemplate") || is_null($this->_propDict["definitionTemplate"])) {
                return $this->_propDict["definitionTemplate"];
            } else {
                $this->_propDict["definitionTemplate"] = new AlertRuleDefinitionTemplate($this->_propDict["definitionTemplate"]);
                return $this->_propDict["definitionTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the definitionTemplate
    *
    * @param AlertRuleDefinitionTemplate $val The definitionTemplate
    *
    * @return ManagedTenantAlertRuleDefinition
    */
    public function setDefinitionTemplate($val)
    {
        $this->_propDict["definitionTemplate"] = $val;
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
    * @return ManagedTenantAlertRuleDefinition
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
    * @return ManagedTenantAlertRuleDefinition
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
    * @return ManagedTenantAlertRuleDefinition
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the alertRules
     *
     * @return array|null The alertRules
     */
    public function getAlertRules()
    {
        if (array_key_exists("alertRules", $this->_propDict)) {
           return $this->_propDict["alertRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertRules
    *
    * @param ManagedTenantAlertRule[] $val The alertRules
    *
    * @return ManagedTenantAlertRuleDefinition
    */
    public function setAlertRules($val)
    {
        $this->_propDict["alertRules"] = $val;
        return $this;
    }

}
