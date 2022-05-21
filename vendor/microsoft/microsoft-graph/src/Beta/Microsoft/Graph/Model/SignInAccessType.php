<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInAccessType File
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
* SignInAccessType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInAccessType extends Enum
{
    /**
    * The Enum SignInAccessType
    */
    const NONE = "none";
    const B2B_COLLABORATION = "b2bCollaboration";
    const B2B_DIRECT_CONNECT = "b2bDirectConnect";
    const MICROSOFT_SUPPORT = "microsoftSupport";
    const SERVICE_PROVIDER = "serviceProvider";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
