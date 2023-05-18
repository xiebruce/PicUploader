<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcPartnerAgentInstallStatus File
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
* CloudPcPartnerAgentInstallStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcPartnerAgentInstallStatus extends Enum
{
    /**
    * The Enum CloudPcPartnerAgentInstallStatus
    */
    const INSTALLED = "installed";
    const INSTALL_FAILED = "installFailed";
    const INSTALLING = "installing";
    const UNINSTALLING = "uninstalling";
    const UNINSTALL_FAILED = "uninstallFailed";
    const LICENSED = "licensed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
