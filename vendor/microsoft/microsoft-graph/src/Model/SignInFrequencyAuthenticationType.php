<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInFrequencyAuthenticationType File
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
* SignInFrequencyAuthenticationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInFrequencyAuthenticationType extends Enum
{
    /**
    * The Enum SignInFrequencyAuthenticationType
    */
    const PRIMARY_AND_SECONDARY_AUTHENTICATION = "primaryAndSecondaryAuthentication";
    const SECONDARY_AUTHENTICATION = "secondaryAuthentication";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
