<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InboundDomain File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

use Microsoft\Graph\Core\Enum;

/**
* InboundDomain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InboundDomain extends Enum
{
    /**
    * The Enum InboundDomain
    */
    const EDUCATION_ROSTERING = "educationRostering";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
