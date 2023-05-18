<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomaly File
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
* UserExperienceAnalyticsAnomaly class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomaly extends Entity
{
    /**
    * Gets the anomalyFirstOccurrenceDateTime
    * Indicates the first occurrence date and time for the anomaly.
    *
    * @return \DateTime|null The anomalyFirstOccurrenceDateTime
    */
    public function getAnomalyFirstOccurrenceDateTime()
    {
        if (array_key_exists("anomalyFirstOccurrenceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["anomalyFirstOccurrenceDateTime"], "\DateTime") || is_null($this->_propDict["anomalyFirstOccurrenceDateTime"])) {
                return $this->_propDict["anomalyFirstOccurrenceDateTime"];
            } else {
                $this->_propDict["anomalyFirstOccurrenceDateTime"] = new \DateTime($this->_propDict["anomalyFirstOccurrenceDateTime"]);
                return $this->_propDict["anomalyFirstOccurrenceDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the anomalyFirstOccurrenceDateTime
    * Indicates the first occurrence date and time for the anomaly.
    *
    * @param \DateTime $val The anomalyFirstOccurrenceDateTime
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAnomalyFirstOccurrenceDateTime($val)
    {
        $this->_propDict["anomalyFirstOccurrenceDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the anomalyId
    * The unique identifier of the anomaly.
    *
    * @return string|null The anomalyId
    */
    public function getAnomalyId()
    {
        if (array_key_exists("anomalyId", $this->_propDict)) {
            return $this->_propDict["anomalyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anomalyId
    * The unique identifier of the anomaly.
    *
    * @param string $val The anomalyId
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAnomalyId($val)
    {
        $this->_propDict["anomalyId"] = $val;
        return $this;
    }

    /**
    * Gets the anomalyLatestOccurrenceDateTime
    * Indicates the latest occurrence date and time for the anomaly.
    *
    * @return \DateTime|null The anomalyLatestOccurrenceDateTime
    */
    public function getAnomalyLatestOccurrenceDateTime()
    {
        if (array_key_exists("anomalyLatestOccurrenceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["anomalyLatestOccurrenceDateTime"], "\DateTime") || is_null($this->_propDict["anomalyLatestOccurrenceDateTime"])) {
                return $this->_propDict["anomalyLatestOccurrenceDateTime"];
            } else {
                $this->_propDict["anomalyLatestOccurrenceDateTime"] = new \DateTime($this->_propDict["anomalyLatestOccurrenceDateTime"]);
                return $this->_propDict["anomalyLatestOccurrenceDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the anomalyLatestOccurrenceDateTime
    * Indicates the latest occurrence date and time for the anomaly.
    *
    * @param \DateTime $val The anomalyLatestOccurrenceDateTime
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAnomalyLatestOccurrenceDateTime($val)
    {
        $this->_propDict["anomalyLatestOccurrenceDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the anomalyName
    * The name of the anomaly.
    *
    * @return string|null The anomalyName
    */
    public function getAnomalyName()
    {
        if (array_key_exists("anomalyName", $this->_propDict)) {
            return $this->_propDict["anomalyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anomalyName
    * The name of the anomaly.
    *
    * @param string $val The anomalyName
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAnomalyName($val)
    {
        $this->_propDict["anomalyName"] = $val;
        return $this;
    }

    /**
    * Gets the anomalyType
    * The category of the anomaly. Possible values are: device, application, stopError, driver or other. Possible values are: device, application, stopError, driver, other, unknownFutureValue.
    *
    * @return UserExperienceAnalyticsAnomalyType|null The anomalyType
    */
    public function getAnomalyType()
    {
        if (array_key_exists("anomalyType", $this->_propDict)) {
            if (is_a($this->_propDict["anomalyType"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsAnomalyType") || is_null($this->_propDict["anomalyType"])) {
                return $this->_propDict["anomalyType"];
            } else {
                $this->_propDict["anomalyType"] = new UserExperienceAnalyticsAnomalyType($this->_propDict["anomalyType"]);
                return $this->_propDict["anomalyType"];
            }
        }
        return null;
    }

    /**
    * Sets the anomalyType
    * The category of the anomaly. Possible values are: device, application, stopError, driver or other. Possible values are: device, application, stopError, driver, other, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsAnomalyType $val The anomalyType
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAnomalyType($val)
    {
        $this->_propDict["anomalyType"] = $val;
        return $this;
    }

    /**
    * Gets the assetName
    * The name of the application or module that caused the anomaly.
    *
    * @return string|null The assetName
    */
    public function getAssetName()
    {
        if (array_key_exists("assetName", $this->_propDict)) {
            return $this->_propDict["assetName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assetName
    * The name of the application or module that caused the anomaly.
    *
    * @param string $val The assetName
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAssetName($val)
    {
        $this->_propDict["assetName"] = $val;
        return $this;
    }

    /**
    * Gets the assetPublisher
    * The publisher of the application or module that caused the anomaly.
    *
    * @return string|null The assetPublisher
    */
    public function getAssetPublisher()
    {
        if (array_key_exists("assetPublisher", $this->_propDict)) {
            return $this->_propDict["assetPublisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assetPublisher
    * The publisher of the application or module that caused the anomaly.
    *
    * @param string $val The assetPublisher
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAssetPublisher($val)
    {
        $this->_propDict["assetPublisher"] = $val;
        return $this;
    }

    /**
    * Gets the assetVersion
    * The version of the application or module that caused the anomaly.
    *
    * @return string|null The assetVersion
    */
    public function getAssetVersion()
    {
        if (array_key_exists("assetVersion", $this->_propDict)) {
            return $this->_propDict["assetVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assetVersion
    * The version of the application or module that caused the anomaly.
    *
    * @param string $val The assetVersion
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setAssetVersion($val)
    {
        $this->_propDict["assetVersion"] = $val;
        return $this;
    }

    /**
    * Gets the detectionModelId
    * The unique identifier of the anomaly detection model.
    *
    * @return string|null The detectionModelId
    */
    public function getDetectionModelId()
    {
        if (array_key_exists("detectionModelId", $this->_propDict)) {
            return $this->_propDict["detectionModelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectionModelId
    * The unique identifier of the anomaly detection model.
    *
    * @param string $val The detectionModelId
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setDetectionModelId($val)
    {
        $this->_propDict["detectionModelId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceImpactedCount
    * The number of devices impacted by the anomaly. Valid values -2147483648 to 2147483647
    *
    * @return int|null The deviceImpactedCount
    */
    public function getDeviceImpactedCount()
    {
        if (array_key_exists("deviceImpactedCount", $this->_propDict)) {
            return $this->_propDict["deviceImpactedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceImpactedCount
    * The number of devices impacted by the anomaly. Valid values -2147483648 to 2147483647
    *
    * @param int $val The deviceImpactedCount
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setDeviceImpactedCount($val)
    {
        $this->_propDict["deviceImpactedCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the issueId
    * The unique identifier of the anomaly detection model.
    *
    * @return string|null The issueId
    */
    public function getIssueId()
    {
        if (array_key_exists("issueId", $this->_propDict)) {
            return $this->_propDict["issueId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issueId
    * The unique identifier of the anomaly detection model.
    *
    * @param string $val The issueId
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setIssueId($val)
    {
        $this->_propDict["issueId"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * The severity of the anomaly. Possible values are: high, medium, low, informational or other. Possible values are: high, medium, low, informational, other, unknownFutureValue.
    *
    * @return UserExperienceAnalyticsAnomalySeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsAnomalySeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new UserExperienceAnalyticsAnomalySeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    * The severity of the anomaly. Possible values are: high, medium, low, informational or other. Possible values are: high, medium, low, informational, other, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsAnomalySeverity $val The severity
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The state of the anomaly. Possible values are: new, active, disabled, removed or other. Possible values are: new, active, disabled, removed, other, unknownFutureValue.
    *
    * @return UserExperienceAnalyticsAnomalyState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsAnomalyState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new UserExperienceAnalyticsAnomalyState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The state of the anomaly. Possible values are: new, active, disabled, removed or other. Possible values are: new, active, disabled, removed, other, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsAnomalyState $val The state
    *
    * @return UserExperienceAnalyticsAnomaly
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
