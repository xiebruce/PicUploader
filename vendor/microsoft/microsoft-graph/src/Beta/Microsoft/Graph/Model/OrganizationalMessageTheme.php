<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageTheme File
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
* OrganizationalMessageTheme class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageTheme extends Enum
{
    /**
    * The Enum OrganizationalMessageTheme
    */
    const UPDATE = "update";
    const TRAINING = "training";
    const WELCOME_TO_WINDOWS = "welcomeToWindows";
    const EXPLORE = "explore";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
