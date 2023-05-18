<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesDirectorySynchronizationDeletionPreventionType File
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
* OnPremisesDirectorySynchronizationDeletionPreventionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesDirectorySynchronizationDeletionPreventionType extends Enum
{
    /**
    * The Enum OnPremisesDirectorySynchronizationDeletionPreventionType
    */
    const DISABLED = "disabled";
    const ENABLED_FOR_COUNT = "enabledForCount";
    const ENABLED_FOR_PERCENTAGE = "enabledForPercentage";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
