<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkSoftwareFreshness File
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
* TeamworkSoftwareFreshness class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkSoftwareFreshness extends Enum
{
    /**
    * The Enum TeamworkSoftwareFreshness
    */
    const UNKNOWN = "unknown";
    const LATEST = "latest";
    const UPDATE_AVAILABLE = "updateAvailable";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
