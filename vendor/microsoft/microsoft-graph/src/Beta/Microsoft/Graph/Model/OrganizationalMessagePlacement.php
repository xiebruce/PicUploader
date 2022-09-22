<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessagePlacement File
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
* OrganizationalMessagePlacement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessagePlacement extends Enum
{
    /**
    * The Enum OrganizationalMessagePlacement
    */
    const GRAPHDEFAULT = "default";
    const CARD0 = "card0";
    const CARD1 = "card1";
    const CARD2 = "card2";
    const CARD3 = "card3";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
