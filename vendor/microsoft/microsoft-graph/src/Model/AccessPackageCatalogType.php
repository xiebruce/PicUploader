<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageCatalogType File
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
* AccessPackageCatalogType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageCatalogType extends Enum
{
    /**
    * The Enum AccessPackageCatalogType
    */
    const USER_MANAGED = "userManaged";
    const SERVICE_DEFAULT = "serviceDefault";
    const SERVICE_MANAGED = "serviceManaged";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
