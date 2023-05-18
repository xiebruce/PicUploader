<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcReportName File
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
* CloudPcReportName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcReportName extends Enum
{
    /**
    * The Enum CloudPcReportName
    */
    const REMOTE_CONNECTION_HISTORICAL_REPORTS = "remoteConnectionHistoricalReports";
    const DAILY_AGGREGATED_REMOTE_CONNECTION_REPORTS = "dailyAggregatedRemoteConnectionReports";
    const TOTAL_AGGREGATED_REMOTE_CONNECTION_REPORTS = "totalAggregatedRemoteConnectionReports";
    const SHARED_USE_LICENSE_USAGE_REPORT = "sharedUseLicenseUsageReport";
    const SHARED_USE_LICENSE_USAGE_REAL_TIME_REPORT = "sharedUseLicenseUsageRealTimeReport";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
