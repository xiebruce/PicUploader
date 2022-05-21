<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenantExecutionError File
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
* ManagedTenantExecutionError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenantExecutionError extends ManagedTenantOperationError
{
    /**
    * Gets the errorDetails
    * Additional error information for the exception. Optional. Read-only.
    *
    * @return string|null The errorDetails
    */
    public function getErrorDetails()
    {
        if (array_key_exists("errorDetails", $this->_propDict)) {
            return $this->_propDict["errorDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDetails
    * Additional error information for the exception. Optional. Read-only.
    *
    * @param string $val The value of the errorDetails
    *
    * @return ManagedTenantExecutionError
    */
    public function setErrorDetails($val)
    {
        $this->_propDict["errorDetails"] = $val;
        return $this;
    }
    /**
    * Gets the nodeId
    * The node identifier where the exception occurred. Required. Read-only.
    *
    * @return int|null The nodeId
    */
    public function getNodeId()
    {
        if (array_key_exists("nodeId", $this->_propDict)) {
            return $this->_propDict["nodeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nodeId
    * The node identifier where the exception occurred. Required. Read-only.
    *
    * @param int $val The value of the nodeId
    *
    * @return ManagedTenantExecutionError
    */
    public function setNodeId($val)
    {
        $this->_propDict["nodeId"] = $val;
        return $this;
    }
    /**
    * Gets the rawToken
    * The token for the exception. Optional. Read-only.
    *
    * @return string|null The rawToken
    */
    public function getRawToken()
    {
        if (array_key_exists("rawToken", $this->_propDict)) {
            return $this->_propDict["rawToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rawToken
    * The token for the exception. Optional. Read-only.
    *
    * @param string $val The value of the rawToken
    *
    * @return ManagedTenantExecutionError
    */
    public function setRawToken($val)
    {
        $this->_propDict["rawToken"] = $val;
        return $this;
    }
    /**
    * Gets the statementIndex
    * The statement index for the exception. Required. Read-only.
    *
    * @return int|null The statementIndex
    */
    public function getStatementIndex()
    {
        if (array_key_exists("statementIndex", $this->_propDict)) {
            return $this->_propDict["statementIndex"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statementIndex
    * The statement index for the exception. Required. Read-only.
    *
    * @param int $val The value of the statementIndex
    *
    * @return ManagedTenantExecutionError
    */
    public function setStatementIndex($val)
    {
        $this->_propDict["statementIndex"] = $val;
        return $this;
    }
}
