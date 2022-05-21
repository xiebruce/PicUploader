<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageRequestType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AccessPackageRequestType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageRequestType extends Enum
{
    /**
    * The Enum AccessPackageRequestType
    */
    const NOT_SPECIFIED = "notSpecified";
    const USER_ADD = "userAdd";
    const USER_UPDATE = "userUpdate";
    const USER_REMOVE = "userRemove";
    const ADMIN_ADD = "adminAdd";
    const ADMIN_UPDATE = "adminUpdate";
    const ADMIN_REMOVE = "adminRemove";
    const SYSTEM_ADD = "systemAdd";
    const SYSTEM_UPDATE = "systemUpdate";
    const SYSTEM_REMOVE = "systemRemove";
    const ON_BEHALF_ADD = "onBehalfAdd";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
