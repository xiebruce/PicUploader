<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WellKnownTaskList File
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
* WellKnownTaskList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WellKnownTaskList extends BaseTaskList
{
    /**
    * Gets the wellKnownListName
    * Property indicating the list name if the given list is a well-known list.. The possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
    *
    * @return WellKnownListName_v2|null The wellKnownListName
    */
    public function getWellKnownListName()
    {
        if (array_key_exists("wellKnownListName", $this->_propDict)) {
            if (is_a($this->_propDict["wellKnownListName"], "\Beta\Microsoft\Graph\Model\WellKnownListName_v2") || is_null($this->_propDict["wellKnownListName"])) {
                return $this->_propDict["wellKnownListName"];
            } else {
                $this->_propDict["wellKnownListName"] = new WellKnownListName_v2($this->_propDict["wellKnownListName"]);
                return $this->_propDict["wellKnownListName"];
            }
        }
        return null;
    }

    /**
    * Sets the wellKnownListName
    * Property indicating the list name if the given list is a well-known list.. The possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
    *
    * @param WellKnownListName_v2 $val The wellKnownListName
    *
    * @return WellKnownTaskList
    */
    public function setWellKnownListName($val)
    {
        $this->_propDict["wellKnownListName"] = $val;
        return $this;
    }

}
