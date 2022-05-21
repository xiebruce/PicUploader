<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingRegistrationBase File
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
* MeetingRegistrationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingRegistrationBase extends Entity
{
    /**
    * Gets the allowedRegistrant
    * Specifies who can register for the meeting.
    *
    * @return MeetingAudience|null The allowedRegistrant
    */
    public function getAllowedRegistrant()
    {
        if (array_key_exists("allowedRegistrant", $this->_propDict)) {
            if (is_a($this->_propDict["allowedRegistrant"], "\Beta\Microsoft\Graph\Model\MeetingAudience") || is_null($this->_propDict["allowedRegistrant"])) {
                return $this->_propDict["allowedRegistrant"];
            } else {
                $this->_propDict["allowedRegistrant"] = new MeetingAudience($this->_propDict["allowedRegistrant"]);
                return $this->_propDict["allowedRegistrant"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedRegistrant
    * Specifies who can register for the meeting.
    *
    * @param MeetingAudience $val The allowedRegistrant
    *
    * @return MeetingRegistrationBase
    */
    public function setAllowedRegistrant($val)
    {
        $this->_propDict["allowedRegistrant"] = $val;
        return $this;
    }


     /**
     * Gets the registrants
    * Registrants of the online meeting.
     *
     * @return array|null The registrants
     */
    public function getRegistrants()
    {
        if (array_key_exists("registrants", $this->_propDict)) {
           return $this->_propDict["registrants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrants
    * Registrants of the online meeting.
    *
    * @param MeetingRegistrantBase[] $val The registrants
    *
    * @return MeetingRegistrationBase
    */
    public function setRegistrants($val)
    {
        $this->_propDict["registrants"] = $val;
        return $this;
    }

}
