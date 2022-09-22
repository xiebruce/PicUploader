<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FeatureTargetType File
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
* FeatureTargetType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FeatureTargetType extends Enum
{
    /**
    * The Enum FeatureTargetType
    */
    const GROUP = "group";
    const ADMINISTRATIVE_UNIT = "administrativeUnit";
    const ROLE = "role";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
