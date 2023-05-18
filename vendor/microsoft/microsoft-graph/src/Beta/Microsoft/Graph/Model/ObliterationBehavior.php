<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ObliterationBehavior File
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
* ObliterationBehavior class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ObliterationBehavior extends Enum
{
    /**
    * The Enum ObliterationBehavior
    */
    const GRAPHDEFAULT = "default";
    const DO_NOT_OBLITERATE = "doNotObliterate";
    const OBLITERATE_WITH_WARNING = "obliterateWithWarning";
    const ALWAYS = "always";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
