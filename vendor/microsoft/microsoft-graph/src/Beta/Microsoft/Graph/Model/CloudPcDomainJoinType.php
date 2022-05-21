<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcDomainJoinType File
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
* CloudPcDomainJoinType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcDomainJoinType extends Enum
{
    /**
    * The Enum CloudPcDomainJoinType
    */
    const AZURE_AD_JOIN = "azureADJoin";
    const HYBRID_AZURE_AD_JOIN = "hybridAzureADJoin";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
