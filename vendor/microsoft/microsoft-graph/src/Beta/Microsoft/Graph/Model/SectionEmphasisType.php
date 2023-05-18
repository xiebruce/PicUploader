<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SectionEmphasisType File
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
* SectionEmphasisType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SectionEmphasisType extends Enum
{
    /**
    * The Enum SectionEmphasisType
    */
    const NONE = "none";
    const NEUTRAL = "neutral";
    const SOFT = "soft";
    const STRONG = "strong";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
