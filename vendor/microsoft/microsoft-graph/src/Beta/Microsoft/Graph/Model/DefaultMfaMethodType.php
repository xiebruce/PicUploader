<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefaultMfaMethodType File
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
* DefaultMfaMethodType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefaultMfaMethodType extends Enum
{
    /**
    * The Enum DefaultMfaMethodType
    */
    const NONE = "none";
    const MOBILE_PHONE = "mobilePhone";
    const ALTERNATE_MOBILE_PHONE = "alternateMobilePhone";
    const OFFICE_PHONE = "officePhone";
    const MICROSOFT_AUTHENTICATOR_PUSH = "microsoftAuthenticatorPush";
    const SOFTWARE_ONE_TIME_PASSCODE = "softwareOneTimePasscode";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
