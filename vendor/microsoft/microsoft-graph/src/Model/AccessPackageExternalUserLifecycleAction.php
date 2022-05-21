<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageExternalUserLifecycleAction File
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
* AccessPackageExternalUserLifecycleAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageExternalUserLifecycleAction extends Enum
{
    /**
    * The Enum AccessPackageExternalUserLifecycleAction
    */
    const NONE = "none";
    const BLOCK_SIGN_IN = "blockSignIn";
    const BLOCK_SIGN_IN_AND_DELETE = "blockSignInAndDelete";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
