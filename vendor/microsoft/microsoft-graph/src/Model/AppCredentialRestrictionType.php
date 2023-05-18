<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppCredentialRestrictionType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AppCredentialRestrictionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppCredentialRestrictionType extends Enum
{
    /**
    * The Enum AppCredentialRestrictionType
    */
    const PASSWORD_ADDITION = "passwordAddition";
    const PASSWORD_LIFETIME = "passwordLifetime";
    const SYMMETRIC_KEY_ADDITION = "symmetricKeyAddition";
    const SYMMETRIC_KEY_LIFETIME = "symmetricKeyLifetime";
    const CUSTOM_PASSWORD_ADDITION = "customPasswordAddition";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
