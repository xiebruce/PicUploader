<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthStatus File
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
* DeviceHealthStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthStatus extends Enum
{
    /**
    * The Enum DeviceHealthStatus
    */
    const ACTIVE = "active";
    const INACTIVE = "inactive";
    const IMPAIRED_COMMUNICATION = "impairedCommunication";
    const NO_SENSOR_DATA = "noSensorData";
    const NO_SENSOR_DATA_IMPAIRED_COMMUNICATION = "noSensorDataImpairedCommunication";
    const UNKNOWN = "unknown";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
