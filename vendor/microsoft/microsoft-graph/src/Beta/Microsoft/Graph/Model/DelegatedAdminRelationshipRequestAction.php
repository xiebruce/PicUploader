<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminRelationshipRequestAction File
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
* DelegatedAdminRelationshipRequestAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminRelationshipRequestAction extends Enum
{
    /**
    * The Enum DelegatedAdminRelationshipRequestAction
    */
    const LOCK_FOR_APPROVAL = "lockForApproval";
    const APPROVE = "approve";
    const TERMINATE = "terminate";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
