<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndicatorSource File
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
* IndicatorSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndicatorSource extends Enum
{
    /**
    * The Enum IndicatorSource
    */
    const MICROSOFT_DEFENDER_THREAT_INTELLIGENCE = "microsoftDefenderThreatIntelligence";
    const OPEN_SOURCE_INTELLIGENCE = "openSourceIntelligence";
    const GRAPHPUBLIC = "public";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
