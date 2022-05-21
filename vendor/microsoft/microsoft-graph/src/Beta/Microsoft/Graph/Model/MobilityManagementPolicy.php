<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobilityManagementPolicy File
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
* MobilityManagementPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobilityManagementPolicy extends Entity
{
    /**
    * Gets the appliesTo
    * Indicates the user scope of the mobility management policy. Possible values are: none, all, selected.
    *
    * @return PolicyScope|null The appliesTo
    */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
            if (is_a($this->_propDict["appliesTo"], "\Beta\Microsoft\Graph\Model\PolicyScope") || is_null($this->_propDict["appliesTo"])) {
                return $this->_propDict["appliesTo"];
            } else {
                $this->_propDict["appliesTo"] = new PolicyScope($this->_propDict["appliesTo"]);
                return $this->_propDict["appliesTo"];
            }
        }
        return null;
    }

    /**
    * Sets the appliesTo
    * Indicates the user scope of the mobility management policy. Possible values are: none, all, selected.
    *
    * @param PolicyScope $val The appliesTo
    *
    * @return MobilityManagementPolicy
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
        return $this;
    }

    /**
    * Gets the complianceUrl
    * Compliance URL of the mobility management application.
    *
    * @return string|null The complianceUrl
    */
    public function getComplianceUrl()
    {
        if (array_key_exists("complianceUrl", $this->_propDict)) {
            return $this->_propDict["complianceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceUrl
    * Compliance URL of the mobility management application.
    *
    * @param string $val The complianceUrl
    *
    * @return MobilityManagementPolicy
    */
    public function setComplianceUrl($val)
    {
        $this->_propDict["complianceUrl"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the mobility management application.
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
    * Description of the mobility management application.
    *
    * @param string $val The description
    *
    * @return MobilityManagementPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the discoveryUrl
    * Discovery URL of the mobility management application.
    *
    * @return string|null The discoveryUrl
    */
    public function getDiscoveryUrl()
    {
        if (array_key_exists("discoveryUrl", $this->_propDict)) {
            return $this->_propDict["discoveryUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the discoveryUrl
    * Discovery URL of the mobility management application.
    *
    * @param string $val The discoveryUrl
    *
    * @return MobilityManagementPolicy
    */
    public function setDiscoveryUrl($val)
    {
        $this->_propDict["discoveryUrl"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the mobility management application.
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
    * Display name of the mobility management application.
    *
    * @param string $val The displayName
    *
    * @return MobilityManagementPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isValid
    * Whether policy is valid. Invalid policies may not be updated and should be deleted.
    *
    * @return bool|null The isValid
    */
    public function getIsValid()
    {
        if (array_key_exists("isValid", $this->_propDict)) {
            return $this->_propDict["isValid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isValid
    * Whether policy is valid. Invalid policies may not be updated and should be deleted.
    *
    * @param bool $val The isValid
    *
    * @return MobilityManagementPolicy
    */
    public function setIsValid($val)
    {
        $this->_propDict["isValid"] = boolval($val);
        return $this;
    }

    /**
    * Gets the termsOfUseUrl
    * Terms of Use URL of the mobility management application.
    *
    * @return string|null The termsOfUseUrl
    */
    public function getTermsOfUseUrl()
    {
        if (array_key_exists("termsOfUseUrl", $this->_propDict)) {
            return $this->_propDict["termsOfUseUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the termsOfUseUrl
    * Terms of Use URL of the mobility management application.
    *
    * @param string $val The termsOfUseUrl
    *
    * @return MobilityManagementPolicy
    */
    public function setTermsOfUseUrl($val)
    {
        $this->_propDict["termsOfUseUrl"] = $val;
        return $this;
    }


     /**
     * Gets the includedGroups
    * Azure AD groups under the scope of the mobility management application if appliesTo is selected
     *
     * @return array|null The includedGroups
     */
    public function getIncludedGroups()
    {
        if (array_key_exists("includedGroups", $this->_propDict)) {
           return $this->_propDict["includedGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includedGroups
    * Azure AD groups under the scope of the mobility management application if appliesTo is selected
    *
    * @param Group[] $val The includedGroups
    *
    * @return MobilityManagementPolicy
    */
    public function setIncludedGroups($val)
    {
        $this->_propDict["includedGroups"] = $val;
        return $this;
    }

}
