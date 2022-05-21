<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProtocolType File
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
* ProtocolType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProtocolType extends Enum
{
    /**
    * The Enum ProtocolType
    */
    const NONE = "none";
    const O_AUTH2 = "oAuth2";
    const ROPC = "ropc";
    const WS_FEDERATION = "wsFederation";
    const SAML20 = "saml20";
    const DEVICE_CODE = "deviceCode";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
