<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationContextDetail File
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
* AuthenticationContextDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationContextDetail extends Enum
{
    /**
    * The Enum AuthenticationContextDetail
    */
    const REQUIRED = "required";
    const PREVIOUSLY_SATISFIED = "previouslySatisfied";
    const NOT_APPLICABLE = "notApplicable";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
