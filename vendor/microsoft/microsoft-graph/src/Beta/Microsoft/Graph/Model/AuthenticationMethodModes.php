<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodModes File
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
* AuthenticationMethodModes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodModes extends Enum
{
    /**
    * The Enum AuthenticationMethodModes
    */
    const PASSWORD = "password";
    const VOICE = "voice";
    const HARDWARE_OATH = "hardwareOath";
    const SOFTWARE_OATH = "softwareOath";
    const SMS = "sms";
    const FIDO2 = "fido2";
    const WINDOWS_HELLO_FOR_BUSINESS = "windowsHelloForBusiness";
    const MICROSOFT_AUTHENTICATOR_PUSH = "microsoftAuthenticatorPush";
    const DEVICE_BASED_PUSH = "deviceBasedPush";
    const TEMPORARY_ACCESS_PASS_ONE_TIME = "temporaryAccessPassOneTime";
    const TEMPORARY_ACCESS_PASS_MULTI_USE = "temporaryAccessPassMultiUse";
    const EMAIL = "email";
    const X509_CERTIFICATE_SINGLE_FACTOR = "x509CertificateSingleFactor";
    const X509_CERTIFICATE_MULTI_FACTOR = "x509CertificateMultiFactor";
    const FEDERATED_SINGLE_FACTOR = "federatedSingleFactor";
    const FEDERATED_MULTI_FACTOR = "federatedMultiFactor";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
