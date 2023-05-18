<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvidenceRole File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* EvidenceRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvidenceRole extends Enum
{
    /**
    * The Enum EvidenceRole
    */
    const UNKNOWN = "unknown";
    const CONTEXTUAL = "contextual";
    const SCANNED = "scanned";
    const SOURCE = "source";
    const DESTINATION = "destination";
    const CREATED = "created";
    const ADDED = "added";
    const COMPROMISED = "compromised";
    const EDITED = "edited";
    const ATTACKED = "attacked";
    const ATTACKER = "attacker";
    const COMMAND_AND_CONTROL = "commandAndControl";
    const LOADED = "loaded";
    const SUSPICIOUS = "suspicious";
    const POLICY_VIOLATOR = "policyViolator";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
