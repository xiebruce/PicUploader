<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Attendee File
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
* Attendee class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Attendee extends AttendeeBase
{

    /**
    * Gets the status
    * The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
    *
    * @return ResponseStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\ResponseStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ResponseStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
    *
    * @param ResponseStatus $val The value to assign to the status
    *
    * @return Attendee The Attendee
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
