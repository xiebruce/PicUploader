<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BrowserSiteCompatibilityMode File
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
* BrowserSiteCompatibilityMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BrowserSiteCompatibilityMode extends Enum
{
    /**
    * The Enum BrowserSiteCompatibilityMode
    */
    const GRAPHDEFAULT = "default";
    const INTERNET_EXPLORER8_ENTERPRISE = "internetExplorer8Enterprise";
    const INTERNET_EXPLORER7_ENTERPRISE = "internetExplorer7Enterprise";
    const INTERNET_EXPLORER11 = "internetExplorer11";
    const INTERNET_EXPLORER10 = "internetExplorer10";
    const INTERNET_EXPLORER9 = "internetExplorer9";
    const INTERNET_EXPLORER8 = "internetExplorer8";
    const INTERNET_EXPLORER7 = "internetExplorer7";
    const INTERNET_EXPLORER5 = "internetExplorer5";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
