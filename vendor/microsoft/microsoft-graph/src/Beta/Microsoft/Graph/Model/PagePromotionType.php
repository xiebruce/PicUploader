<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PagePromotionType File
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
* PagePromotionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PagePromotionType extends Enum
{
    /**
    * The Enum PagePromotionType
    */
    const MICROSOFT_RESERVED = "microsoftReserved";
    const PAGE = "page";
    const NEWS_POST = "newsPost";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
