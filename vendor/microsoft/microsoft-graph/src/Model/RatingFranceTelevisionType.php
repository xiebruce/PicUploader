<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingFranceTelevisionType File
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
* RatingFranceTelevisionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RatingFranceTelevisionType extends Enum
{
    /**
    * The Enum RatingFranceTelevisionType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const AGES_ABOVE10 = "agesAbove10";
    const AGES_ABOVE12 = "agesAbove12";
    const AGES_ABOVE16 = "agesAbove16";
    const AGES_ABOVE18 = "agesAbove18";
}