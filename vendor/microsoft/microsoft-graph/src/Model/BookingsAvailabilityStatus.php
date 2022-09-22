<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingsAvailabilityStatus File
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
* BookingsAvailabilityStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingsAvailabilityStatus extends Enum
{
    /**
    * The Enum BookingsAvailabilityStatus
    */
    const AVAILABLE = "available";
    const BUSY = "busy";
    const SLOTS_AVAILABLE = "slotsAvailable";
    const OUT_OF_OFFICE = "outOfOffice";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
