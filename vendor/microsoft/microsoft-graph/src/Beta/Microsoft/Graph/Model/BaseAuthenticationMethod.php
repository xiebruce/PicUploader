<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BaseAuthenticationMethod File
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
* BaseAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BaseAuthenticationMethod extends Enum
{
    /**
    * The Enum BaseAuthenticationMethod
    */
    const PASSWORD = "password";
    const VOICE = "voice";
    const HARDWARE_OATH = "hardwareOath";
    const SOFTWARE_OATH = "softwareOath";
    const SMS = "sms";
    const FIDO2 = "fido2";
    const WINDOWS_HELLO_FOR_BUSINESS = "windowsHelloForBusiness";
    const MICROSOFT_AUTHENTICATOR = "microsoftAuthenticator";
    const TEMPORARY_ACCESS_PASS = "temporaryAccessPass";
    const EMAIL = "email";
    const X509_CERTIFICATE = "x509Certificate";
    const FEDERATION = "federation";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
