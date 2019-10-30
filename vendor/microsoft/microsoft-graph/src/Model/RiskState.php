<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskState File
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
* RiskState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RiskState extends Enum
{
    /**
    * The Enum RiskState
    */
    const NONE = "none";
    const CONFIRMED_SAFE = "confirmedSafe";
    const REMEDIATED = "remediated";
    const DISMISSED = "dismissed";
    const AT_RISK = "atRisk";
    const CONFIRMED_COMPROMISED = "confirmedCompromised";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}