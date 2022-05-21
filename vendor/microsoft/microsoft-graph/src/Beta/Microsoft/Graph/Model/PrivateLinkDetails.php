<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivateLinkDetails File
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
* PrivateLinkDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivateLinkDetails extends Entity
{
    /**
    * Gets the policyId
    * The unique identifier for the Private Link policy.
    *
    * @return string|null The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    * The unique identifier for the Private Link policy.
    *
    * @param string $val The value of the policyId
    *
    * @return PrivateLinkDetails
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }
    /**
    * Gets the policyName
    * The name of the Private Link policy in Azure AD.
    *
    * @return string|null The policyName
    */
    public function getPolicyName()
    {
        if (array_key_exists("policyName", $this->_propDict)) {
            return $this->_propDict["policyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyName
    * The name of the Private Link policy in Azure AD.
    *
    * @param string $val The value of the policyName
    *
    * @return PrivateLinkDetails
    */
    public function setPolicyName($val)
    {
        $this->_propDict["policyName"] = $val;
        return $this;
    }
    /**
    * Gets the policyTenantId
    * The tenant identifier of the Azure AD tenant the Private Link policy belongs to.
    *
    * @return string|null The policyTenantId
    */
    public function getPolicyTenantId()
    {
        if (array_key_exists("policyTenantId", $this->_propDict)) {
            return $this->_propDict["policyTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyTenantId
    * The tenant identifier of the Azure AD tenant the Private Link policy belongs to.
    *
    * @param string $val The value of the policyTenantId
    *
    * @return PrivateLinkDetails
    */
    public function setPolicyTenantId($val)
    {
        $this->_propDict["policyTenantId"] = $val;
        return $this;
    }
    /**
    * Gets the resourceId
    * The Azure Resource Manager (ARM) path for the Private Link policy resource.
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * The Azure Resource Manager (ARM) path for the Private Link policy resource.
    *
    * @param string $val The value of the resourceId
    *
    * @return PrivateLinkDetails
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
}
