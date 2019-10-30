<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentLimitConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* DeviceEnrollmentLimitConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceEnrollmentLimitConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the limit
    * Not yet documented
    *
    * @return int The limit
    */
    public function getLimit()
    {
        if (array_key_exists("limit", $this->_propDict)) {
            return $this->_propDict["limit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the limit
    * Not yet documented
    *
    * @param int $val The limit
    *
    * @return DeviceEnrollmentLimitConfiguration
    */
    public function setLimit($val)
    {
        $this->_propDict["limit"] = intval($val);
        return $this;
    }
    
}