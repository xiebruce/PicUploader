<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BrowserSharedCookieSourceEnvironment File
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
* BrowserSharedCookieSourceEnvironment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BrowserSharedCookieSourceEnvironment extends Enum
{
    /**
    * The Enum BrowserSharedCookieSourceEnvironment
    */
    const MICROSOFT_EDGE = "microsoftEdge";
    const INTERNET_EXPLORER11 = "internetExplorer11";
    const BOTH = "both";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
