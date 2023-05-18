<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataActivityStatistics File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;
/**
* IndustryDataActivityStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataActivityStatistics extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the activityId
    * The identifier for the activity that is being reported on.
    *
    * @return string|null The activityId
    */
    public function getActivityId()
    {
        if (array_key_exists("activityId", $this->_propDict)) {
            return $this->_propDict["activityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityId
    * The identifier for the activity that is being reported on.
    *
    * @param string $val The value of the activityId
    *
    * @return IndustryDataActivityStatistics
    */
    public function setActivityId($val)
    {
        $this->_propDict["activityId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name of the underlying flow.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the underlying flow.
    *
    * @param string $val The value of the displayName
    *
    * @return IndustryDataActivityStatistics
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The latest status of the activity in the run. The possible values are: inProgress, skipped, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @return IndustryDataActivityStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataActivityStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new IndustryDataActivityStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The latest status of the activity in the run. The possible values are: inProgress, skipped, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @param IndustryDataActivityStatus $val The value to assign to the status
    *
    * @return IndustryDataActivityStatistics The IndustryDataActivityStatistics
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
