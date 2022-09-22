<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyInboundTrust File
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
* CrossTenantAccessPolicyInboundTrust class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyInboundTrust extends Entity
{
    /**
    * Gets the isCompliantDeviceAccepted
    * Specifies whether compliant devices from external Azure AD organizations are trusted.
    *
    * @return bool|null The isCompliantDeviceAccepted
    */
    public function getIsCompliantDeviceAccepted()
    {
        if (array_key_exists("isCompliantDeviceAccepted", $this->_propDict)) {
            return $this->_propDict["isCompliantDeviceAccepted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCompliantDeviceAccepted
    * Specifies whether compliant devices from external Azure AD organizations are trusted.
    *
    * @param bool $val The value of the isCompliantDeviceAccepted
    *
    * @return CrossTenantAccessPolicyInboundTrust
    */
    public function setIsCompliantDeviceAccepted($val)
    {
        $this->_propDict["isCompliantDeviceAccepted"] = $val;
        return $this;
    }
    /**
    * Gets the isHybridAzureADJoinedDeviceAccepted
    * Specifies whether hybrid Azure AD joined devices from external Azure AD organizations are trusted.
    *
    * @return bool|null The isHybridAzureADJoinedDeviceAccepted
    */
    public function getIsHybridAzureADJoinedDeviceAccepted()
    {
        if (array_key_exists("isHybridAzureADJoinedDeviceAccepted", $this->_propDict)) {
            return $this->_propDict["isHybridAzureADJoinedDeviceAccepted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHybridAzureADJoinedDeviceAccepted
    * Specifies whether hybrid Azure AD joined devices from external Azure AD organizations are trusted.
    *
    * @param bool $val The value of the isHybridAzureADJoinedDeviceAccepted
    *
    * @return CrossTenantAccessPolicyInboundTrust
    */
    public function setIsHybridAzureADJoinedDeviceAccepted($val)
    {
        $this->_propDict["isHybridAzureADJoinedDeviceAccepted"] = $val;
        return $this;
    }
    /**
    * Gets the isMfaAccepted
    * Specifies whether MFA from external Azure AD organizations is trusted.
    *
    * @return bool|null The isMfaAccepted
    */
    public function getIsMfaAccepted()
    {
        if (array_key_exists("isMfaAccepted", $this->_propDict)) {
            return $this->_propDict["isMfaAccepted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMfaAccepted
    * Specifies whether MFA from external Azure AD organizations is trusted.
    *
    * @param bool $val The value of the isMfaAccepted
    *
    * @return CrossTenantAccessPolicyInboundTrust
    */
    public function setIsMfaAccepted($val)
    {
        $this->_propDict["isMfaAccepted"] = $val;
        return $this;
    }
}
