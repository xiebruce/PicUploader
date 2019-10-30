<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DiagnosticDataSubmissionMode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* DiagnosticDataSubmissionMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DiagnosticDataSubmissionMode extends Enum
{
    /**
    * The Enum DiagnosticDataSubmissionMode
    */
    const USER_DEFINED = "userDefined";
    const NONE = "none";
    const BASIC = "basic";
    const ENHANCED = "enhanced";
    const FULL = "full";
}