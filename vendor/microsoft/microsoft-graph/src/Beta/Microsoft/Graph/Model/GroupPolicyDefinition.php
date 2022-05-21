<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyDefinition File
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
* GroupPolicyDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyDefinition extends Entity
{
    /**
    * Gets the categoryPath
    * The localized full category path for the policy.
    *
    * @return string|null The categoryPath
    */
    public function getCategoryPath()
    {
        if (array_key_exists("categoryPath", $this->_propDict)) {
            return $this->_propDict["categoryPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categoryPath
    * The localized full category path for the policy.
    *
    * @param string $val The categoryPath
    *
    * @return GroupPolicyDefinition
    */
    public function setCategoryPath($val)
    {
        $this->_propDict["categoryPath"] = $val;
        return $this;
    }

    /**
    * Gets the classType
    * Identifies the type of groups the policy can be applied to. Possible values are: user, machine.
    *
    * @return GroupPolicyDefinitionClassType|null The classType
    */
    public function getClassType()
    {
        if (array_key_exists("classType", $this->_propDict)) {
            if (is_a($this->_propDict["classType"], "\Beta\Microsoft\Graph\Model\GroupPolicyDefinitionClassType") || is_null($this->_propDict["classType"])) {
                return $this->_propDict["classType"];
            } else {
                $this->_propDict["classType"] = new GroupPolicyDefinitionClassType($this->_propDict["classType"]);
                return $this->_propDict["classType"];
            }
        }
        return null;
    }

    /**
    * Sets the classType
    * Identifies the type of groups the policy can be applied to. Possible values are: user, machine.
    *
    * @param GroupPolicyDefinitionClassType $val The classType
    *
    * @return GroupPolicyDefinition
    */
    public function setClassType($val)
    {
        $this->_propDict["classType"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The localized policy name.
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
    * The localized policy name.
    *
    * @param string $val The displayName
    *
    * @return GroupPolicyDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the explainText
    * The localized explanation or help text associated with the policy. The default value is empty.
    *
    * @return string|null The explainText
    */
    public function getExplainText()
    {
        if (array_key_exists("explainText", $this->_propDict)) {
            return $this->_propDict["explainText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the explainText
    * The localized explanation or help text associated with the policy. The default value is empty.
    *
    * @param string $val The explainText
    *
    * @return GroupPolicyDefinition
    */
    public function setExplainText($val)
    {
        $this->_propDict["explainText"] = $val;
        return $this;
    }

    /**
    * Gets the groupPolicyCategoryId
    * The category id of the parent category
    *
    * @return string|null The groupPolicyCategoryId
    */
    public function getGroupPolicyCategoryId()
    {
        if (array_key_exists("groupPolicyCategoryId", $this->_propDict)) {
            return $this->_propDict["groupPolicyCategoryId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupPolicyCategoryId
    * The category id of the parent category
    *
    * @param string $val The groupPolicyCategoryId
    *
    * @return GroupPolicyDefinition
    */
    public function setGroupPolicyCategoryId($val)
    {
        $this->_propDict["groupPolicyCategoryId"] = $val;
        return $this;
    }

    /**
    * Gets the hasRelatedDefinitions
    * Signifies whether or not there are related definitions to this definition
    *
    * @return bool|null The hasRelatedDefinitions
    */
    public function getHasRelatedDefinitions()
    {
        if (array_key_exists("hasRelatedDefinitions", $this->_propDict)) {
            return $this->_propDict["hasRelatedDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasRelatedDefinitions
    * Signifies whether or not there are related definitions to this definition
    *
    * @param bool $val The hasRelatedDefinitions
    *
    * @return GroupPolicyDefinition
    */
    public function setHasRelatedDefinitions($val)
    {
        $this->_propDict["hasRelatedDefinitions"] = boolval($val);
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
    * @return GroupPolicyDefinition
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the minDeviceCspVersion
    * Minimum required CSP version for device configuration in this definition
    *
    * @return string|null The minDeviceCspVersion
    */
    public function getMinDeviceCspVersion()
    {
        if (array_key_exists("minDeviceCspVersion", $this->_propDict)) {
            return $this->_propDict["minDeviceCspVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minDeviceCspVersion
    * Minimum required CSP version for device configuration in this definition
    *
    * @param string $val The minDeviceCspVersion
    *
    * @return GroupPolicyDefinition
    */
    public function setMinDeviceCspVersion($val)
    {
        $this->_propDict["minDeviceCspVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minUserCspVersion
    * Minimum required CSP version for user configuration in this definition
    *
    * @return string|null The minUserCspVersion
    */
    public function getMinUserCspVersion()
    {
        if (array_key_exists("minUserCspVersion", $this->_propDict)) {
            return $this->_propDict["minUserCspVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minUserCspVersion
    * Minimum required CSP version for user configuration in this definition
    *
    * @param string $val The minUserCspVersion
    *
    * @return GroupPolicyDefinition
    */
    public function setMinUserCspVersion($val)
    {
        $this->_propDict["minUserCspVersion"] = $val;
        return $this;
    }

    /**
    * Gets the policyType
    * Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
    *
    * @return GroupPolicyType|null The policyType
    */
    public function getPolicyType()
    {
        if (array_key_exists("policyType", $this->_propDict)) {
            if (is_a($this->_propDict["policyType"], "\Beta\Microsoft\Graph\Model\GroupPolicyType") || is_null($this->_propDict["policyType"])) {
                return $this->_propDict["policyType"];
            } else {
                $this->_propDict["policyType"] = new GroupPolicyType($this->_propDict["policyType"]);
                return $this->_propDict["policyType"];
            }
        }
        return null;
    }

    /**
    * Sets the policyType
    * Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
    *
    * @param GroupPolicyType $val The policyType
    *
    * @return GroupPolicyDefinition
    */
    public function setPolicyType($val)
    {
        $this->_propDict["policyType"] = $val;
        return $this;
    }

    /**
    * Gets the supportedOn
    * Localized string used to specify what operating system or application version is affected by the policy.
    *
    * @return string|null The supportedOn
    */
    public function getSupportedOn()
    {
        if (array_key_exists("supportedOn", $this->_propDict)) {
            return $this->_propDict["supportedOn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedOn
    * Localized string used to specify what operating system or application version is affected by the policy.
    *
    * @param string $val The supportedOn
    *
    * @return GroupPolicyDefinition
    */
    public function setSupportedOn($val)
    {
        $this->_propDict["supportedOn"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * Setting definition version
    *
    * @return string|null The version
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
    * Setting definition version
    *
    * @param string $val The version
    *
    * @return GroupPolicyDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

    /**
    * Gets the category
    * The group policy category associated with the definition.
    *
    * @return GroupPolicyCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Model\GroupPolicyCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new GroupPolicyCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * The group policy category associated with the definition.
    *
    * @param GroupPolicyCategory $val The category
    *
    * @return GroupPolicyDefinition
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the definitionFile
    * The group policy file associated with the definition.
    *
    * @return GroupPolicyDefinitionFile|null The definitionFile
    */
    public function getDefinitionFile()
    {
        if (array_key_exists("definitionFile", $this->_propDict)) {
            if (is_a($this->_propDict["definitionFile"], "\Beta\Microsoft\Graph\Model\GroupPolicyDefinitionFile") || is_null($this->_propDict["definitionFile"])) {
                return $this->_propDict["definitionFile"];
            } else {
                $this->_propDict["definitionFile"] = new GroupPolicyDefinitionFile($this->_propDict["definitionFile"]);
                return $this->_propDict["definitionFile"];
            }
        }
        return null;
    }

    /**
    * Sets the definitionFile
    * The group policy file associated with the definition.
    *
    * @param GroupPolicyDefinitionFile $val The definitionFile
    *
    * @return GroupPolicyDefinition
    */
    public function setDefinitionFile($val)
    {
        $this->_propDict["definitionFile"] = $val;
        return $this;
    }

    /**
    * Gets the nextVersionDefinition
    * Definition of the next version of this definition
    *
    * @return GroupPolicyDefinition|null The nextVersionDefinition
    */
    public function getNextVersionDefinition()
    {
        if (array_key_exists("nextVersionDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["nextVersionDefinition"], "\Beta\Microsoft\Graph\Model\GroupPolicyDefinition") || is_null($this->_propDict["nextVersionDefinition"])) {
                return $this->_propDict["nextVersionDefinition"];
            } else {
                $this->_propDict["nextVersionDefinition"] = new GroupPolicyDefinition($this->_propDict["nextVersionDefinition"]);
                return $this->_propDict["nextVersionDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the nextVersionDefinition
    * Definition of the next version of this definition
    *
    * @param GroupPolicyDefinition $val The nextVersionDefinition
    *
    * @return GroupPolicyDefinition
    */
    public function setNextVersionDefinition($val)
    {
        $this->_propDict["nextVersionDefinition"] = $val;
        return $this;
    }


     /**
     * Gets the presentations
    * The group policy presentations associated with the definition.
     *
     * @return array|null The presentations
     */
    public function getPresentations()
    {
        if (array_key_exists("presentations", $this->_propDict)) {
           return $this->_propDict["presentations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the presentations
    * The group policy presentations associated with the definition.
    *
    * @param GroupPolicyPresentation[] $val The presentations
    *
    * @return GroupPolicyDefinition
    */
    public function setPresentations($val)
    {
        $this->_propDict["presentations"] = $val;
        return $this;
    }

    /**
    * Gets the previousVersionDefinition
    * Definition of the previous version of this definition
    *
    * @return GroupPolicyDefinition|null The previousVersionDefinition
    */
    public function getPreviousVersionDefinition()
    {
        if (array_key_exists("previousVersionDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["previousVersionDefinition"], "\Beta\Microsoft\Graph\Model\GroupPolicyDefinition") || is_null($this->_propDict["previousVersionDefinition"])) {
                return $this->_propDict["previousVersionDefinition"];
            } else {
                $this->_propDict["previousVersionDefinition"] = new GroupPolicyDefinition($this->_propDict["previousVersionDefinition"]);
                return $this->_propDict["previousVersionDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the previousVersionDefinition
    * Definition of the previous version of this definition
    *
    * @param GroupPolicyDefinition $val The previousVersionDefinition
    *
    * @return GroupPolicyDefinition
    */
    public function setPreviousVersionDefinition($val)
    {
        $this->_propDict["previousVersionDefinition"] = $val;
        return $this;
    }

}
