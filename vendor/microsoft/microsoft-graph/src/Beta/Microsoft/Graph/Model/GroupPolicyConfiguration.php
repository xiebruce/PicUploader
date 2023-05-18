<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyConfiguration File
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
* GroupPolicyConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyConfiguration extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time the object was created.
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
    * The date and time the object was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return GroupPolicyConfiguration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * User provided description for the resource object.
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
    * User provided description for the resource object.
    *
    * @param string $val The description
    *
    * @return GroupPolicyConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * User provided name for the resource object.
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
    * User provided name for the resource object.
    *
    * @param string $val The displayName
    *
    * @return GroupPolicyConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time the entity was last modified.
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
    * The date and time the entity was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GroupPolicyConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the policyConfigurationIngestionType
    * Type of definitions configured for this policy. Possible values are: unknown, custom, builtIn, mixed, unknownFutureValue.
    *
    * @return GroupPolicyConfigurationIngestionType|null The policyConfigurationIngestionType
    */
    public function getPolicyConfigurationIngestionType()
    {
        if (array_key_exists("policyConfigurationIngestionType", $this->_propDict)) {
            if (is_a($this->_propDict["policyConfigurationIngestionType"], "\Beta\Microsoft\Graph\Model\GroupPolicyConfigurationIngestionType") || is_null($this->_propDict["policyConfigurationIngestionType"])) {
                return $this->_propDict["policyConfigurationIngestionType"];
            } else {
                $this->_propDict["policyConfigurationIngestionType"] = new GroupPolicyConfigurationIngestionType($this->_propDict["policyConfigurationIngestionType"]);
                return $this->_propDict["policyConfigurationIngestionType"];
            }
        }
        return null;
    }

    /**
    * Sets the policyConfigurationIngestionType
    * Type of definitions configured for this policy. Possible values are: unknown, custom, builtIn, mixed, unknownFutureValue.
    *
    * @param GroupPolicyConfigurationIngestionType $val The policyConfigurationIngestionType
    *
    * @return GroupPolicyConfiguration
    */
    public function setPolicyConfigurationIngestionType($val)
    {
        $this->_propDict["policyConfigurationIngestionType"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * The list of scope tags for the configuration.
    *
    * @return array|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * The list of scope tags for the configuration.
    *
    * @param string[] $val The roleScopeTagIds
    *
    * @return GroupPolicyConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }


     /**
     * Gets the assignments
    * The list of group assignments for the configuration.
     *
     * @return array|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignments
    * The list of group assignments for the configuration.
    *
    * @param GroupPolicyConfigurationAssignment[] $val The assignments
    *
    * @return GroupPolicyConfiguration
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }


     /**
     * Gets the definitionValues
    * The list of enabled or disabled group policy definition values for the configuration.
     *
     * @return array|null The definitionValues
     */
    public function getDefinitionValues()
    {
        if (array_key_exists("definitionValues", $this->_propDict)) {
           return $this->_propDict["definitionValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the definitionValues
    * The list of enabled or disabled group policy definition values for the configuration.
    *
    * @param GroupPolicyDefinitionValue[] $val The definitionValues
    *
    * @return GroupPolicyConfiguration
    */
    public function setDefinitionValues($val)
    {
        $this->_propDict["definitionValues"] = $val;
        return $this;
    }

}
