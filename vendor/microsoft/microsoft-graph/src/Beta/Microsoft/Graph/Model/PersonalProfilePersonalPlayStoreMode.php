<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonalProfilePersonalPlayStoreMode File
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
* PersonalProfilePersonalPlayStoreMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonalProfilePersonalPlayStoreMode extends Enum
{
    /**
    * The Enum PersonalProfilePersonalPlayStoreMode
    */
    const NOT_CONFIGURED = "notConfigured";
    const BLOCKED_APPS = "blockedApps";
    const ALLOWED_APPS = "allowedApps";
}
