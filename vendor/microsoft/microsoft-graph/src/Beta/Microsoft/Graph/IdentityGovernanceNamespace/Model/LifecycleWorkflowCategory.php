<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LifecycleWorkflowCategory File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* LifecycleWorkflowCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LifecycleWorkflowCategory extends Enum
{
    /**
    * The Enum LifecycleWorkflowCategory
    */
    const JOINER = "joiner";
    const LEAVER = "leaver";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
