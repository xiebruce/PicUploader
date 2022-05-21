<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaUpdateType File
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
* ZebraFotaUpdateType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaUpdateType extends Enum
{
    /**
    * The Enum ZebraFotaUpdateType
    */
    const CUSTOM = "custom";
    const LATEST = "latest";
    const AUTO = "auto";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
