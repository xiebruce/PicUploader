<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertRuleTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* AlertRuleTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertRuleTemplate extends Enum
{
    /**
    * The Enum AlertRuleTemplate
    */
    const CLOUD_PC_PROVISION_SCENARIO = "cloudPcProvisionScenario";
    const CLOUD_PC_IMAGE_UPLOAD_SCENARIO = "cloudPcImageUploadScenario";
    const CLOUD_PC_ON_PREMISE_NETWORK_CONNECTION_CHECK_SCENARIO = "cloudPcOnPremiseNetworkConnectionCheckScenario";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
