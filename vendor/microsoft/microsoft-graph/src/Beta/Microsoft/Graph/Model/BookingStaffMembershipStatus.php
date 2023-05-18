<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingStaffMembershipStatus File
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
* BookingStaffMembershipStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingStaffMembershipStatus extends Enum
{
    /**
    * The Enum BookingStaffMembershipStatus
    */
    const ACTIVE = "active";
    const PENDING_ACCEPTANCE = "pendingAcceptance";
    const REJECTED_BY_STAFF = "rejectedByStaff";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
