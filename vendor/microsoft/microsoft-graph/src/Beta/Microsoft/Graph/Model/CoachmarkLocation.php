<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CoachmarkLocation File
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
* CoachmarkLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CoachmarkLocation extends Entity
{
    /**
    * Gets the length
    * Length of coachmark.
    *
    * @return int|null The length
    */
    public function getLength()
    {
        if (array_key_exists("length", $this->_propDict)) {
            return $this->_propDict["length"];
        } else {
            return null;
        }
    }

    /**
    * Sets the length
    * Length of coachmark.
    *
    * @param int $val The value of the length
    *
    * @return CoachmarkLocation
    */
    public function setLength($val)
    {
        $this->_propDict["length"] = $val;
        return $this;
    }
    /**
    * Gets the offset
    * Offset of coachmark.
    *
    * @return int|null The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            return $this->_propDict["offset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offset
    * Offset of coachmark.
    *
    * @param int $val The value of the offset
    *
    * @return CoachmarkLocation
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue.
    *
    * @return CoachmarkLocationType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\CoachmarkLocationType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CoachmarkLocationType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue.
    *
    * @param CoachmarkLocationType $val The value to assign to the type
    *
    * @return CoachmarkLocation The CoachmarkLocation
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
