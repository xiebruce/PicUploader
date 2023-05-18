<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventPropagationStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* EventPropagationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EventPropagationStatus extends Enum
{
    /**
    * The Enum EventPropagationStatus
    */
    const NONE = "none";
    const IN_PROCESSING = "inProcessing";
    const FAILED = "failed";
    const SUCCESS = "success";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
