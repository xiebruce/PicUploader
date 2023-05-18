<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TitleAreaLayoutType File
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
* TitleAreaLayoutType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TitleAreaLayoutType extends Enum
{
    /**
    * The Enum TitleAreaLayoutType
    */
    const IMAGE_AND_TITLE = "imageAndTitle";
    const PLAIN = "plain";
    const COLOR_BLOCK = "colorBlock";
    const OVERLAP = "overlap";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
