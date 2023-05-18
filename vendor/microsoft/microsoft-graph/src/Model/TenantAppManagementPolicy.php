<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantAppManagementPolicy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* TenantAppManagementPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantAppManagementPolicy extends PolicyBase
{
    /**
    * Gets the applicationRestrictions
    * Restrictions that apply as default to all application objects in the tenant.
    *
    * @return AppManagementConfiguration|null The applicationRestrictions
    */
    public function getApplicationRestrictions()
    {
        if (array_key_exists("applicationRestrictions", $this->_propDict)) {
            if (is_a($this->_propDict["applicationRestrictions"], "\Microsoft\Graph\Model\AppManagementConfiguration") || is_null($this->_propDict["applicationRestrictions"])) {
                return $this->_propDict["applicationRestrictions"];
            } else {
                $this->_propDict["applicationRestrictions"] = new AppManagementConfiguration($this->_propDict["applicationRestrictions"]);
                return $this->_propDict["applicationRestrictions"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationRestrictions
    * Restrictions that apply as default to all application objects in the tenant.
    *
    * @param AppManagementConfiguration $val The applicationRestrictions
    *
    * @return TenantAppManagementPolicy
    */
    public function setApplicationRestrictions($val)
    {
        $this->_propDict["applicationRestrictions"] = $val;
        return $this;
    }

    /**
    * Gets the isEnabled
    * Denotes whether the policy is enabled. Default value is false.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Denotes whether the policy is enabled. Default value is false.
    *
    * @param bool $val The isEnabled
    *
    * @return TenantAppManagementPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the servicePrincipalRestrictions
    * Restrictions that apply as default to all service principal objects in the tenant.
    *
    * @return AppManagementConfiguration|null The servicePrincipalRestrictions
    */
    public function getServicePrincipalRestrictions()
    {
        if (array_key_exists("servicePrincipalRestrictions", $this->_propDict)) {
            if (is_a($this->_propDict["servicePrincipalRestrictions"], "\Microsoft\Graph\Model\AppManagementConfiguration") || is_null($this->_propDict["servicePrincipalRestrictions"])) {
                return $this->_propDict["servicePrincipalRestrictions"];
            } else {
                $this->_propDict["servicePrincipalRestrictions"] = new AppManagementConfiguration($this->_propDict["servicePrincipalRestrictions"]);
                return $this->_propDict["servicePrincipalRestrictions"];
            }
        }
        return null;
    }

    /**
    * Sets the servicePrincipalRestrictions
    * Restrictions that apply as default to all service principal objects in the tenant.
    *
    * @param AppManagementConfiguration $val The servicePrincipalRestrictions
    *
    * @return TenantAppManagementPolicy
    */
    public function setServicePrincipalRestrictions($val)
    {
        $this->_propDict["servicePrincipalRestrictions"] = $val;
        return $this;
    }

}
