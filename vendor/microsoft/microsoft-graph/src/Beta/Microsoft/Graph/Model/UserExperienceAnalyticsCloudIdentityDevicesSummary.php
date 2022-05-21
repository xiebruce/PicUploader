<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsCloudIdentityDevicesSummary File
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
* UserExperienceAnalyticsCloudIdentityDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsCloudIdentityDevicesSummary extends Entity
{
    /**
    * Gets the deviceWithoutCloudIdentityCount
    * The count of devices that are not cloud identity.
    *
    * @return int|null The deviceWithoutCloudIdentityCount
    */
    public function getDeviceWithoutCloudIdentityCount()
    {
        if (array_key_exists("deviceWithoutCloudIdentityCount", $this->_propDict)) {
            return $this->_propDict["deviceWithoutCloudIdentityCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceWithoutCloudIdentityCount
    * The count of devices that are not cloud identity.
    *
    * @param int $val The value of the deviceWithoutCloudIdentityCount
    *
    * @return UserExperienceAnalyticsCloudIdentityDevicesSummary
    */
    public function setDeviceWithoutCloudIdentityCount($val)
    {
        $this->_propDict["deviceWithoutCloudIdentityCount"] = $val;
        return $this;
    }
}
