<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaNetworkType File
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
* ZebraFotaNetworkType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaNetworkType extends Enum
{
    /**
    * The Enum ZebraFotaNetworkType
    */
    const ANY = "any";
    const WIFI = "wifi";
    const CELLULAR = "cellular";
    const WIFI_AND_CELLULAR = "wifiAndCellular";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
