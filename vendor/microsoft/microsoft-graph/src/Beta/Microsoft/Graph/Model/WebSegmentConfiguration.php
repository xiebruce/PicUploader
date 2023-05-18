<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebSegmentConfiguration File
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
* WebSegmentConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebSegmentConfiguration extends SegmentConfiguration
{

    /**
    * Gets the applicationSegments
    *
    * @return WebApplicationSegment|null The applicationSegments
    */
    public function getApplicationSegments()
    {
        if (array_key_exists("applicationSegments", $this->_propDict)) {
            if (is_a($this->_propDict["applicationSegments"], "\Beta\Microsoft\Graph\Model\WebApplicationSegment") || is_null($this->_propDict["applicationSegments"])) {
                return $this->_propDict["applicationSegments"];
            } else {
                $this->_propDict["applicationSegments"] = new WebApplicationSegment($this->_propDict["applicationSegments"]);
                return $this->_propDict["applicationSegments"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationSegments
    *
    * @param WebApplicationSegment $val The value to assign to the applicationSegments
    *
    * @return WebSegmentConfiguration The WebSegmentConfiguration
    */
    public function setApplicationSegments($val)
    {
        $this->_propDict["applicationSegments"] = $val;
         return $this;
    }
}
