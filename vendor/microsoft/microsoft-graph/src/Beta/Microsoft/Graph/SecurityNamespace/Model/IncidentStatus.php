<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IncidentStatus File
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
* IncidentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IncidentStatus extends Enum
{
    /**
    * The Enum IncidentStatus
    */
    const ACTIVE = "active";
    const RESOLVED = "resolved";
    const IN_PROGRESS = "inProgress";
    const REDIRECTED = "redirected";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
