<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemplateScenarios File
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
* TemplateScenarios class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemplateScenarios extends Enum
{
    /**
    * The Enum TemplateScenarios
    */
    const GRAPHNEW = "new";
    const SECURE_FOUNDATION = "secureFoundation";
    const ZERO_TRUST = "zeroTrust";
    const REMOTE_WORK = "remoteWork";
    const PROTECT_ADMINS = "protectAdmins";
    const EMERGING_THREATS = "emergingThreats";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
