<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IncomingTokenType File
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
* IncomingTokenType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IncomingTokenType extends Enum
{
    /**
    * The Enum IncomingTokenType
    */
    const NONE = "none";
    const PRIMARY_REFRESH_TOKEN = "primaryRefreshToken";
    const SAML11 = "saml11";
    const SAML20 = "saml20";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const REMOTE_DESKTOP_TOKEN = "remoteDesktopToken";
}
