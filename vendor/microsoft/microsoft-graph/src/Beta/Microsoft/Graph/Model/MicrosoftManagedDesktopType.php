<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftManagedDesktopType File
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
* MicrosoftManagedDesktopType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftManagedDesktopType extends Enum
{
    /**
    * The Enum MicrosoftManagedDesktopType
    */
    const NOT_MANAGED = "notManaged";
    const PREMIUM_MANAGED = "premiumManaged";
    const STANDARD_MANAGED = "standardManaged";
    const STARTER_MANAGED = "starterManaged";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
