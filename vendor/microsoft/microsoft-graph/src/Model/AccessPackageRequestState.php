<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageRequestState File
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
* AccessPackageRequestState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageRequestState extends Enum
{
    /**
    * The Enum AccessPackageRequestState
    */
    const SUBMITTED = "submitted";
    const PENDING_APPROVAL = "pendingApproval";
    const DELIVERING = "delivering";
    const DELIVERED = "delivered";
    const DELIVERY_FAILED = "deliveryFailed";
    const DENIED = "denied";
    const SCHEDULED = "scheduled";
    const CANCELED = "canceled";
    const PARTIALLY_DELIVERED = "partiallyDelivered";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
