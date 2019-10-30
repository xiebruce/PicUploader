<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingAustraliaMoviesType File
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
* RatingAustraliaMoviesType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RatingAustraliaMoviesType extends Enum
{
    /**
    * The Enum RatingAustraliaMoviesType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const GENERAL = "general";
    const PARENTAL_GUIDANCE = "parentalGuidance";
    const MATURE = "mature";
    const AGES_ABOVE15 = "agesAbove15";
    const AGES_ABOVE18 = "agesAbove18";
}