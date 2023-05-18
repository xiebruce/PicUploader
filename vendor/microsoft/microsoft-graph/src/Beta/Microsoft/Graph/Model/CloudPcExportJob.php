<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcExportJob File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* CloudPcExportJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcExportJob extends Entity
{
    /**
    * Gets the expirationDateTime
    * The date and time when the export job expires.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The date and time when the export job expires.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return CloudPcExportJob
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the exportJobStatus
    * The status of the export job. The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
    *
    * @return CloudPcExportJobStatus|null The exportJobStatus
    */
    public function getExportJobStatus()
    {
        if (array_key_exists("exportJobStatus", $this->_propDict)) {
            if (is_a($this->_propDict["exportJobStatus"], "\Beta\Microsoft\Graph\Model\CloudPcExportJobStatus") || is_null($this->_propDict["exportJobStatus"])) {
                return $this->_propDict["exportJobStatus"];
            } else {
                $this->_propDict["exportJobStatus"] = new CloudPcExportJobStatus($this->_propDict["exportJobStatus"]);
                return $this->_propDict["exportJobStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the exportJobStatus
    * The status of the export job. The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
    *
    * @param CloudPcExportJobStatus $val The exportJobStatus
    *
    * @return CloudPcExportJob
    */
    public function setExportJobStatus($val)
    {
        $this->_propDict["exportJobStatus"] = $val;
        return $this;
    }

    /**
    * Gets the exportUrl
    * The storage account URL of the exported report. It can be used to download the file.
    *
    * @return string|null The exportUrl
    */
    public function getExportUrl()
    {
        if (array_key_exists("exportUrl", $this->_propDict)) {
            return $this->_propDict["exportUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exportUrl
    * The storage account URL of the exported report. It can be used to download the file.
    *
    * @param string $val The exportUrl
    *
    * @return CloudPcExportJob
    */
    public function setExportUrl($val)
    {
        $this->_propDict["exportUrl"] = $val;
        return $this;
    }

    /**
    * Gets the filter
    * The filter applied on the report.
    *
    * @return string|null The filter
    */
    public function getFilter()
    {
        if (array_key_exists("filter", $this->_propDict)) {
            return $this->_propDict["filter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filter
    * The filter applied on the report.
    *
    * @param string $val The filter
    *
    * @return CloudPcExportJob
    */
    public function setFilter($val)
    {
        $this->_propDict["filter"] = $val;
        return $this;
    }

    /**
    * Gets the format
    * The format of the exported report.
    *
    * @return string|null The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            return $this->_propDict["format"];
        } else {
            return null;
        }
    }

    /**
    * Sets the format
    * The format of the exported report.
    *
    * @param string $val The format
    *
    * @return CloudPcExportJob
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }

    /**
    * Gets the reportName
    * The report name. The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, sharedUseLicenseUsageReport, sharedUseLicenseUsageRealTimeReport, or unknownFutureValue.
    *
    * @return CloudPcReportName|null The reportName
    */
    public function getReportName()
    {
        if (array_key_exists("reportName", $this->_propDict)) {
            if (is_a($this->_propDict["reportName"], "\Beta\Microsoft\Graph\Model\CloudPcReportName") || is_null($this->_propDict["reportName"])) {
                return $this->_propDict["reportName"];
            } else {
                $this->_propDict["reportName"] = new CloudPcReportName($this->_propDict["reportName"]);
                return $this->_propDict["reportName"];
            }
        }
        return null;
    }

    /**
    * Sets the reportName
    * The report name. The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, sharedUseLicenseUsageReport, sharedUseLicenseUsageRealTimeReport, or unknownFutureValue.
    *
    * @param CloudPcReportName $val The reportName
    *
    * @return CloudPcExportJob
    */
    public function setReportName($val)
    {
        $this->_propDict["reportName"] = $val;
        return $this;
    }

    /**
    * Gets the requestDateTime
    * The date and time when the export job was requested.
    *
    * @return \DateTime|null The requestDateTime
    */
    public function getRequestDateTime()
    {
        if (array_key_exists("requestDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestDateTime"], "\DateTime") || is_null($this->_propDict["requestDateTime"])) {
                return $this->_propDict["requestDateTime"];
            } else {
                $this->_propDict["requestDateTime"] = new \DateTime($this->_propDict["requestDateTime"]);
                return $this->_propDict["requestDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the requestDateTime
    * The date and time when the export job was requested.
    *
    * @param \DateTime $val The requestDateTime
    *
    * @return CloudPcExportJob
    */
    public function setRequestDateTime($val)
    {
        $this->_propDict["requestDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the select
    * The selected columns of the report.
    *
    * @return array|null The select
    */
    public function getSelect()
    {
        if (array_key_exists("select", $this->_propDict)) {
            return $this->_propDict["select"];
        } else {
            return null;
        }
    }

    /**
    * Sets the select
    * The selected columns of the report.
    *
    * @param string[] $val The select
    *
    * @return CloudPcExportJob
    */
    public function setSelect($val)
    {
        $this->_propDict["select"] = $val;
        return $this;
    }

}
