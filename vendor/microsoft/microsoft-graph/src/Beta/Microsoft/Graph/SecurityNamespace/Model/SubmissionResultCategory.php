<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubmissionResultCategory File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* SubmissionResultCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubmissionResultCategory extends Enum
{
    /**
    * The Enum SubmissionResultCategory
    */
    const NOT_JUNK = "notJunk";
    const SPAM = "spam";
    const PHISHING = "phishing";
    const MALWARE = "malware";
    const ALLOWED_BY_POLICY = "allowedByPolicy";
    const BLOCKED_BY_POLICY = "blockedByPolicy";
    const SPOOF = "spoof";
    const UNKNOWN = "unknown";
    const NO_RESULT_AVAILABLE = "noResultAvailable";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
