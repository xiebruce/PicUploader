<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CountryLookupMethodType File
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
* CountryLookupMethodType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CountryLookupMethodType extends Enum
{
    /**
    * The Enum CountryLookupMethodType
    */
    const CLIENT_IP_ADDRESS = "clientIpAddress";
    const AUTHENTICATOR_APP_GPS = "authenticatorAppGps";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
