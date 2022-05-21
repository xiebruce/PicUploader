<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereMetric File
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
* UserExperienceAnalyticsWorkFromAnywhereMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereMetric extends Entity
{

     /**
     * Gets the metricDevices
    * The work from anywhere metric devices.
     *
     * @return array|null The metricDevices
     */
    public function getMetricDevices()
    {
        if (array_key_exists("metricDevices", $this->_propDict)) {
           return $this->_propDict["metricDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the metricDevices
    * The work from anywhere metric devices.
    *
    * @param UserExperienceAnalyticsWorkFromAnywhereDevice[] $val The metricDevices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereMetric
    */
    public function setMetricDevices($val)
    {
        $this->_propDict["metricDevices"] = $val;
        return $this;
    }

}
