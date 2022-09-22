<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyConfigurationIngestionType File
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
* GroupPolicyConfigurationIngestionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyConfigurationIngestionType extends Enum
{
    /**
    * The Enum GroupPolicyConfigurationIngestionType
    */
    const UNKNOWN = "unknown";
    const CUSTOM = "custom";
    const BUILT_IN = "builtIn";
    const MIXED = "mixed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
