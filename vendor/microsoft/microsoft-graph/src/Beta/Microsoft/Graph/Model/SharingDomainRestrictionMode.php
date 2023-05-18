<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharingDomainRestrictionMode File
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
* SharingDomainRestrictionMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharingDomainRestrictionMode extends Enum
{
    /**
    * The Enum SharingDomainRestrictionMode
    */
    const NONE = "none";
    const ALLOW_LIST = "allowList";
    const BLOCK_LIST = "blockList";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
