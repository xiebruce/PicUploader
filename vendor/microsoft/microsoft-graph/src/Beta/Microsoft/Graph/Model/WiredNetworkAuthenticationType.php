<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WiredNetworkAuthenticationType File
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
* WiredNetworkAuthenticationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WiredNetworkAuthenticationType extends Enum
{
    /**
    * The Enum WiredNetworkAuthenticationType
    */
    const NONE = "none";
    const USER = "user";
    const MACHINE = "machine";
    const MACHINE_OR_USER = "machineOrUser";
    const GUEST = "guest";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
