<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentPlatformRestrictionConfiguration File
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
* DeviceEnrollmentPlatformRestrictionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentPlatformRestrictionConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the platformRestriction
    * Restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction|null The platformRestriction
    */
    public function getPlatformRestriction()
    {
        if (array_key_exists("platformRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["platformRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction") || is_null($this->_propDict["platformRestriction"])) {
                return $this->_propDict["platformRestriction"];
            } else {
                $this->_propDict["platformRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["platformRestriction"]);
                return $this->_propDict["platformRestriction"];
            }
        }
        return null;
    }

    /**
    * Sets the platformRestriction
    * Restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The platformRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionConfiguration
    */
    public function setPlatformRestriction($val)
    {
        $this->_propDict["platformRestriction"] = $val;
        return $this;
    }

    /**
    * Gets the platformType
    * Type of platform for which this restriction applies. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
    *
    * @return EnrollmentRestrictionPlatformType|null The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "\Beta\Microsoft\Graph\Model\EnrollmentRestrictionPlatformType") || is_null($this->_propDict["platformType"])) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new EnrollmentRestrictionPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }

    /**
    * Sets the platformType
    * Type of platform for which this restriction applies. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
    *
    * @param EnrollmentRestrictionPlatformType $val The platformType
    *
    * @return DeviceEnrollmentPlatformRestrictionConfiguration
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }

}
