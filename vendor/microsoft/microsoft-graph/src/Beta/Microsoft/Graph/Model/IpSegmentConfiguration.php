<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpSegmentConfiguration File
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
* IpSegmentConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpSegmentConfiguration extends SegmentConfiguration
{

    /**
    * Gets the applicationSegments
    *
    * @return IpApplicationSegment|null The applicationSegments
    */
    public function getApplicationSegments()
    {
        if (array_key_exists("applicationSegments", $this->_propDict)) {
            if (is_a($this->_propDict["applicationSegments"], "\Beta\Microsoft\Graph\Model\IpApplicationSegment") || is_null($this->_propDict["applicationSegments"])) {
                return $this->_propDict["applicationSegments"];
            } else {
                $this->_propDict["applicationSegments"] = new IpApplicationSegment($this->_propDict["applicationSegments"]);
                return $this->_propDict["applicationSegments"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationSegments
    *
    * @param IpApplicationSegment $val The value to assign to the applicationSegments
    *
    * @return IpSegmentConfiguration The IpSegmentConfiguration
    */
    public function setApplicationSegments($val)
    {
        $this->_propDict["applicationSegments"] = $val;
         return $this;
    }
}
