<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftAuthenticatorAuthenticationMethodClientAppName File
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
* MicrosoftAuthenticatorAuthenticationMethodClientAppName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftAuthenticatorAuthenticationMethodClientAppName extends Enum
{
    /**
    * The Enum MicrosoftAuthenticatorAuthenticationMethodClientAppName
    */
    const MICROSOFT_AUTHENTICATOR = "microsoftAuthenticator";
    const OUTLOOK_MOBILE = "outlookMobile";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
