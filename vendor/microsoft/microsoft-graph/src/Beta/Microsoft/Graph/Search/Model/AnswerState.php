<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AnswerState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Search\Model;

use Microsoft\Graph\Core\Enum;

/**
* AnswerState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AnswerState extends Enum
{
    /**
    * The Enum AnswerState
    */
    const PUBLISHED = "published";
    const DRAFT = "draft";
    const EXCLUDED = "excluded";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
