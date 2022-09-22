<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentExperienceType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

use Microsoft\Graph\Core\Enum;

/**
* ContentExperienceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentExperienceType extends Enum
{
    /**
    * The Enum ContentExperienceType
    */
    const SEARCH = "search";
    const COMPLIANCE = "compliance";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
