<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomalySeverityOverview File
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
* UserExperienceAnalyticsAnomalySeverityOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomalySeverityOverview extends Entity
{
    /**
    * Gets the highSeverityAnomalyCount
    * Indicates count of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @return int|null The highSeverityAnomalyCount
    */
    public function getHighSeverityAnomalyCount()
    {
        if (array_key_exists("highSeverityAnomalyCount", $this->_propDict)) {
            return $this->_propDict["highSeverityAnomalyCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the highSeverityAnomalyCount
    * Indicates count of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the highSeverityAnomalyCount
    *
    * @return UserExperienceAnalyticsAnomalySeverityOverview
    */
    public function setHighSeverityAnomalyCount($val)
    {
        $this->_propDict["highSeverityAnomalyCount"] = $val;
        return $this;
    }
    /**
    * Gets the informationalSeverityAnomalyCount
    * Indicates count of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @return int|null The informationalSeverityAnomalyCount
    */
    public function getInformationalSeverityAnomalyCount()
    {
        if (array_key_exists("informationalSeverityAnomalyCount", $this->_propDict)) {
            return $this->_propDict["informationalSeverityAnomalyCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the informationalSeverityAnomalyCount
    * Indicates count of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the informationalSeverityAnomalyCount
    *
    * @return UserExperienceAnalyticsAnomalySeverityOverview
    */
    public function setInformationalSeverityAnomalyCount($val)
    {
        $this->_propDict["informationalSeverityAnomalyCount"] = $val;
        return $this;
    }
    /**
    * Gets the lowSeverityAnomalyCount
    * Indicates count of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @return int|null The lowSeverityAnomalyCount
    */
    public function getLowSeverityAnomalyCount()
    {
        if (array_key_exists("lowSeverityAnomalyCount", $this->_propDict)) {
            return $this->_propDict["lowSeverityAnomalyCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowSeverityAnomalyCount
    * Indicates count of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the lowSeverityAnomalyCount
    *
    * @return UserExperienceAnalyticsAnomalySeverityOverview
    */
    public function setLowSeverityAnomalyCount($val)
    {
        $this->_propDict["lowSeverityAnomalyCount"] = $val;
        return $this;
    }
    /**
    * Gets the mediumSeverityAnomalyCount
    * Indicates count of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @return int|null The mediumSeverityAnomalyCount
    */
    public function getMediumSeverityAnomalyCount()
    {
        if (array_key_exists("mediumSeverityAnomalyCount", $this->_propDict)) {
            return $this->_propDict["mediumSeverityAnomalyCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediumSeverityAnomalyCount
    * Indicates count of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the mediumSeverityAnomalyCount
    *
    * @return UserExperienceAnalyticsAnomalySeverityOverview
    */
    public function setMediumSeverityAnomalyCount($val)
    {
        $this->_propDict["mediumSeverityAnomalyCount"] = $val;
        return $this;
    }
}
