<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingAppsType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* RatingAppsType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RatingAppsType extends Enum
{
    /**
    * The Enum RatingAppsType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const AGES_ABOVE4 = "agesAbove4";
    const AGES_ABOVE9 = "agesAbove9";
    const AGES_ABOVE12 = "agesAbove12";
    const AGES_ABOVE17 = "agesAbove17";
}