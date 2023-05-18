<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcDiskEncryptionState File
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
* CloudPcDiskEncryptionState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcDiskEncryptionState extends Enum
{
    /**
    * The Enum CloudPcDiskEncryptionState
    */
    const NOT_AVAILABLE = "notAvailable";
    const NOT_ENCRYPTED = "notEncrypted";
    const ENCRYPTED_USING_PLATFORM_MANAGED_KEY = "encryptedUsingPlatformManagedKey";
    const ENCRYPTED_USING_CUSTOMER_MANAGED_KEY = "encryptedUsingCustomerManagedKey";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
