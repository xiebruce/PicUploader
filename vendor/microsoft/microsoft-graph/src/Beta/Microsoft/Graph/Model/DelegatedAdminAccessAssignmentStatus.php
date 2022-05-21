<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminAccessAssignmentStatus File
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
* DelegatedAdminAccessAssignmentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminAccessAssignmentStatus extends Enum
{
    /**
    * The Enum DelegatedAdminAccessAssignmentStatus
    */
    const PENDING = "pending";
    const ACTIVE = "active";
    const DELETING = "deleting";
    const DELETED = "deleted";
    const ERROR = "error";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
