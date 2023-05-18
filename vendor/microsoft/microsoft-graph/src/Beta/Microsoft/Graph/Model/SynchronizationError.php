<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationError File
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
* SynchronizationError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationError extends Entity
{
    /**
    * Gets the code
    * The error code. For example, AzureDirectoryB2BManagementPolicyCheckFailure.
    *
    * @return string|null The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    * The error code. For example, AzureDirectoryB2BManagementPolicyCheckFailure.
    *
    * @param string $val The value of the code
    *
    * @return SynchronizationError
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the message
    * The error message. For example, Policy permitting auto-redemption of invitations not configured.
    *
    * @return string|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * The error message. For example, Policy permitting auto-redemption of invitations not configured.
    *
    * @param string $val The value of the message
    *
    * @return SynchronizationError
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the tenantActionable
    * The action to take to resolve the error. For example, false.
    *
    * @return bool|null The tenantActionable
    */
    public function getTenantActionable()
    {
        if (array_key_exists("tenantActionable", $this->_propDict)) {
            return $this->_propDict["tenantActionable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantActionable
    * The action to take to resolve the error. For example, false.
    *
    * @param bool $val The value of the tenantActionable
    *
    * @return SynchronizationError
    */
    public function setTenantActionable($val)
    {
        $this->_propDict["tenantActionable"] = $val;
        return $this;
    }
}
