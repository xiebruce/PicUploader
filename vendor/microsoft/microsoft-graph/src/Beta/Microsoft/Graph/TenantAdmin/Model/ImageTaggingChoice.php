<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImageTaggingChoice File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\TenantAdmin\Model;

use Microsoft\Graph\Core\Enum;

/**
* ImageTaggingChoice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImageTaggingChoice extends Enum
{
    /**
    * The Enum ImageTaggingChoice
    */
    const DISABLED = "disabled";
    const BASIC = "basic";
    const ENHANCED = "enhanced";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
