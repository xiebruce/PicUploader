<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaDeploymentState File
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
* ZebraFotaDeploymentState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaDeploymentState extends Enum
{
    /**
    * The Enum ZebraFotaDeploymentState
    */
    const PENDING_CREATION = "pendingCreation";
    const CREATE_FAILED = "createFailed";
    const CREATED = "created";
    const IN_PROGRESS = "inProgress";
    const COMPLETED = "completed";
    const PENDING_CANCEL = "pendingCancel";
    const CANCELED = "canceled";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
