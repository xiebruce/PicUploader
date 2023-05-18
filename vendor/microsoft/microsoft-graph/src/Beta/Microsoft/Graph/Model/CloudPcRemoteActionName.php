<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcRemoteActionName File
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
* CloudPcRemoteActionName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcRemoteActionName extends Enum
{
    /**
    * The Enum CloudPcRemoteActionName
    */
    const UNKNOWN = "unknown";
    const RESTART = "restart";
    const RENAME = "rename";
    const RESIZE = "resize";
    const RESTORE = "restore";
    const REPROVISION = "reprovision";
    const CHANGE_USER_ACCOUNT_TYPE = "changeUserAccountType";
    const TROUBLESHOOT = "troubleshoot";
    const PLACE_UNDER_REVIEW = "placeUnderReview";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
