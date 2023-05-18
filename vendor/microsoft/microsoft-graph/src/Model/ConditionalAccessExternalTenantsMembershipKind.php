<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessExternalTenantsMembershipKind File
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
* ConditionalAccessExternalTenantsMembershipKind class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessExternalTenantsMembershipKind extends Enum
{
    /**
    * The Enum ConditionalAccessExternalTenantsMembershipKind
    */
    const ALL = "all";
    const ENUMERATED = "enumerated";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
