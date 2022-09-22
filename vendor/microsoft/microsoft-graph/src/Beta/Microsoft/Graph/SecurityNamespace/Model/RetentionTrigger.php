<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetentionTrigger File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* RetentionTrigger class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetentionTrigger extends Enum
{
    /**
    * The Enum RetentionTrigger
    */
    const DATE_LABELED = "dateLabeled";
    const DATE_CREATED = "dateCreated";
    const DATE_MODIFIED = "dateModified";
    const DATE_OF_EVENT = "dateOfEvent";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
