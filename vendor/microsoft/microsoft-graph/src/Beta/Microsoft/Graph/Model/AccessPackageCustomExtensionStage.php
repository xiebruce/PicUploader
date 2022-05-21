<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageCustomExtensionStage File
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
* AccessPackageCustomExtensionStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageCustomExtensionStage extends Enum
{
    /**
    * The Enum AccessPackageCustomExtensionStage
    */
    const ASSIGNMENT_REQUEST_CREATED = "assignmentRequestCreated";
    const ASSIGNMENT_REQUEST_APPROVED = "assignmentRequestApproved";
    const ASSIGNMENT_REQUEST_GRANTED = "assignmentRequestGranted";
    const ASSIGNMENT_REQUEST_REMOVED = "assignmentRequestRemoved";
    const ASSIGNMENT_FOURTEEN_DAYS_BEFORE_EXPIRATION = "assignmentFourteenDaysBeforeExpiration";
    const ASSIGNMENT_ONE_DAY_BEFORE_EXPIRATION = "assignmentOneDayBeforeExpiration";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
