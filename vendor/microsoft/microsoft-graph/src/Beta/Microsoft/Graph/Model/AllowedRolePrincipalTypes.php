<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AllowedRolePrincipalTypes File
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
* AllowedRolePrincipalTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AllowedRolePrincipalTypes extends Enum
{
    /**
    * The Enum AllowedRolePrincipalTypes
    */
    const USER = "user";
    const SERVICE_PRINCIPAL = "servicePrincipal";
    const GROUP = "group";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
