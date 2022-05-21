<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClientCredentialType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ClientCredentialType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClientCredentialType extends Enum
{
    /**
    * The Enum ClientCredentialType
    */
    const NONE = "none";
    const CLIENT_SECRET = "clientSecret";
    const CLIENT_ASSERTION = "clientAssertion";
    const FEDERATED_IDENTITY_CREDENTIAL = "federatedIdentityCredential";
    const MANAGED_IDENTITY = "managedIdentity";
    const CERTIFICATE = "certificate";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
