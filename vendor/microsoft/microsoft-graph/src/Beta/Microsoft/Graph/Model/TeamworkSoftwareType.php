<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkSoftwareType File
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
* TeamworkSoftwareType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkSoftwareType extends Enum
{
    /**
    * The Enum TeamworkSoftwareType
    */
    const ADMIN_AGENT = "adminAgent";
    const OPERATING_SYSTEM = "operatingSystem";
    const TEAMS_CLIENT = "teamsClient";
    const FIRMWARE = "firmware";
    const PARTNER_AGENT = "partnerAgent";
    const COMPANY_PORTAL = "companyPortal";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
