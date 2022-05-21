<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WellKnownListName_v2 File
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
* WellKnownListName_v2 class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WellKnownListName_v2 extends Enum
{
    /**
    * The Enum WellKnownListName_v2
    */
    const NONE = "none";
    const DEFAULT_LIST = "defaultList";
    const FLAGGED_EMAILS = "flaggedEmails";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
