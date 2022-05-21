<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcAuditActor File
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
* CloudPcAuditActor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcAuditActor extends Entity
{
    /**
    * Gets the applicationDisplayName
    * Name of the application.
    *
    * @return string|null The applicationDisplayName
    */
    public function getApplicationDisplayName()
    {
        if (array_key_exists("applicationDisplayName", $this->_propDict)) {
            return $this->_propDict["applicationDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationDisplayName
    * Name of the application.
    *
    * @param string $val The value of the applicationDisplayName
    *
    * @return CloudPcAuditActor
    */
    public function setApplicationDisplayName($val)
    {
        $this->_propDict["applicationDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the applicationId
    * Azure AD application ID.
    *
    * @return string|null The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationId
    * Azure AD application ID.
    *
    * @param string $val The value of the applicationId
    *
    * @return CloudPcAuditActor
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * IP address.
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * IP address.
    *
    * @param string $val The value of the ipAddress
    *
    * @return CloudPcAuditActor
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the remoteTenantId
    * The delegated partner tenant ID.
    *
    * @return string|null The remoteTenantId
    */
    public function getRemoteTenantId()
    {
        if (array_key_exists("remoteTenantId", $this->_propDict)) {
            return $this->_propDict["remoteTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remoteTenantId
    * The delegated partner tenant ID.
    *
    * @param string $val The value of the remoteTenantId
    *
    * @return CloudPcAuditActor
    */
    public function setRemoteTenantId($val)
    {
        $this->_propDict["remoteTenantId"] = $val;
        return $this;
    }
    /**
    * Gets the remoteUserId
    * The delegated partner user ID.
    *
    * @return string|null The remoteUserId
    */
    public function getRemoteUserId()
    {
        if (array_key_exists("remoteUserId", $this->_propDict)) {
            return $this->_propDict["remoteUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remoteUserId
    * The delegated partner user ID.
    *
    * @param string $val The value of the remoteUserId
    *
    * @return CloudPcAuditActor
    */
    public function setRemoteUserId($val)
    {
        $this->_propDict["remoteUserId"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalName
    * Service Principal Name (SPN).
    *
    * @return string|null The servicePrincipalName
    */
    public function getServicePrincipalName()
    {
        if (array_key_exists("servicePrincipalName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalName
    * Service Principal Name (SPN).
    *
    * @param string $val The value of the servicePrincipalName
    *
    * @return CloudPcAuditActor
    */
    public function setServicePrincipalName($val)
    {
        $this->_propDict["servicePrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The actor type. Possible values include ItPro, Application, Partner and Unknown.
    *
    * @return CloudPcAuditActorType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\CloudPcAuditActorType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CloudPcAuditActorType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The actor type. Possible values include ItPro, Application, Partner and Unknown.
    *
    * @param CloudPcAuditActorType $val The value to assign to the type
    *
    * @return CloudPcAuditActor The CloudPcAuditActor
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the userId
    * Azure AD user ID.
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * Azure AD user ID.
    *
    * @param string $val The value of the userId
    *
    * @return CloudPcAuditActor
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPermissions
    * List of user permissions and application permissions when the audit event was performed.
    *
    * @return string|null The userPermissions
    */
    public function getUserPermissions()
    {
        if (array_key_exists("userPermissions", $this->_propDict)) {
            return $this->_propDict["userPermissions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPermissions
    * List of user permissions and application permissions when the audit event was performed.
    *
    * @param string $val The value of the userPermissions
    *
    * @return CloudPcAuditActor
    */
    public function setUserPermissions($val)
    {
        $this->_propDict["userPermissions"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * User Principal Name (UPN).
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * User Principal Name (UPN).
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return CloudPcAuditActor
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the userRoleScopeTags
    * List of role scope tags.
    *
    * @return CloudPcUserRoleScopeTagInfo|null The userRoleScopeTags
    */
    public function getUserRoleScopeTags()
    {
        if (array_key_exists("userRoleScopeTags", $this->_propDict)) {
            if (is_a($this->_propDict["userRoleScopeTags"], "\Beta\Microsoft\Graph\Model\CloudPcUserRoleScopeTagInfo") || is_null($this->_propDict["userRoleScopeTags"])) {
                return $this->_propDict["userRoleScopeTags"];
            } else {
                $this->_propDict["userRoleScopeTags"] = new CloudPcUserRoleScopeTagInfo($this->_propDict["userRoleScopeTags"]);
                return $this->_propDict["userRoleScopeTags"];
            }
        }
        return null;
    }

    /**
    * Sets the userRoleScopeTags
    * List of role scope tags.
    *
    * @param CloudPcUserRoleScopeTagInfo $val The value to assign to the userRoleScopeTags
    *
    * @return CloudPcAuditActor The CloudPcAuditActor
    */
    public function setUserRoleScopeTags($val)
    {
        $this->_propDict["userRoleScopeTags"] = $val;
         return $this;
    }
}
