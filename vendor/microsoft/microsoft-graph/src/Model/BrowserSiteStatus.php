<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BrowserSiteStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* BrowserSiteStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BrowserSiteStatus extends Enum
{
    /**
    * The Enum BrowserSiteStatus
    */
    const PUBLISHED = "published";
    const PENDING_ADD = "pendingAdd";
    const PENDING_EDIT = "pendingEdit";
    const PENDING_DELETE = "pendingDelete";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
