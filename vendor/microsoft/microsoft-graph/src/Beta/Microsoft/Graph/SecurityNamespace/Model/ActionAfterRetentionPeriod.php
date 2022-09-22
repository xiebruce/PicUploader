<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActionAfterRetentionPeriod File
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
* ActionAfterRetentionPeriod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActionAfterRetentionPeriod extends Enum
{
    /**
    * The Enum ActionAfterRetentionPeriod
    */
    const NONE = "none";
    const DELETE = "delete";
    const START_DISPOSITION_REVIEW = "startDispositionReview";
    const RELABEL = "relabel";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
