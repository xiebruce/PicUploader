<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicableContentDeviceMatch File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* ApplicableContentDeviceMatch class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicableContentDeviceMatch extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the deviceId
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    *
    * @param string $val The value of the deviceId
    *
    * @return ApplicableContentDeviceMatch
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    /**
    * Gets the recommendedBy
    * Collection of vendors who recommend the content.
    *
    * @return string|null The recommendedBy
    */
    public function getRecommendedBy()
    {
        if (array_key_exists("recommendedBy", $this->_propDict)) {
            return $this->_propDict["recommendedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendedBy
    * Collection of vendors who recommend the content.
    *
    * @param string $val The value of the recommendedBy
    *
    * @return ApplicableContentDeviceMatch
    */
    public function setRecommendedBy($val)
    {
        $this->_propDict["recommendedBy"] = $val;
        return $this;
    }
}
