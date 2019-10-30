<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAsyncOperationStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* TeamsAsyncOperationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TeamsAsyncOperationStatus extends Enum
{
    /**
    * The Enum TeamsAsyncOperationStatus
    */
    const INVALID = "invalid";
    const NOT_STARTED = "notStarted";
    const IN_PROGRESS = "inProgress";
    const SUCCEEDED = "succeeded";
    const FAILED = "failed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}