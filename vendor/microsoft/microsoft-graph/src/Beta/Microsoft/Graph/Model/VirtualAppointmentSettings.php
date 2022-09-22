<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualAppointmentSettings File
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
* VirtualAppointmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualAppointmentSettings extends Entity
{
    /**
    * Gets the allowClientToJoinUsingBrowser
    * Indicates whether the client can use the browser to join a virtual appointment. If set to false, the client can only use Microsoft Teams to join. Optional.
    *
    * @return bool|null The allowClientToJoinUsingBrowser
    */
    public function getAllowClientToJoinUsingBrowser()
    {
        if (array_key_exists("allowClientToJoinUsingBrowser", $this->_propDict)) {
            return $this->_propDict["allowClientToJoinUsingBrowser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowClientToJoinUsingBrowser
    * Indicates whether the client can use the browser to join a virtual appointment. If set to false, the client can only use Microsoft Teams to join. Optional.
    *
    * @param bool $val The value of the allowClientToJoinUsingBrowser
    *
    * @return VirtualAppointmentSettings
    */
    public function setAllowClientToJoinUsingBrowser($val)
    {
        $this->_propDict["allowClientToJoinUsingBrowser"] = $val;
        return $this;
    }
}
