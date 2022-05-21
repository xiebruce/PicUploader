<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkConnection File
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
* TeamworkConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkConnection extends Entity
{

    /**
    * Gets the connectionStatus
    * Indicates whether a component/peripheral is connected/disconnected or its state is unknown. The possible values are: unknown, connected, disconnected, unknownFutureValue.
    *
    * @return TeamworkConnectionStatus|null The connectionStatus
    */
    public function getConnectionStatus()
    {
        if (array_key_exists("connectionStatus", $this->_propDict)) {
            if (is_a($this->_propDict["connectionStatus"], "\Beta\Microsoft\Graph\Model\TeamworkConnectionStatus") || is_null($this->_propDict["connectionStatus"])) {
                return $this->_propDict["connectionStatus"];
            } else {
                $this->_propDict["connectionStatus"] = new TeamworkConnectionStatus($this->_propDict["connectionStatus"]);
                return $this->_propDict["connectionStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the connectionStatus
    * Indicates whether a component/peripheral is connected/disconnected or its state is unknown. The possible values are: unknown, connected, disconnected, unknownFutureValue.
    *
    * @param TeamworkConnectionStatus $val The value to assign to the connectionStatus
    *
    * @return TeamworkConnection The TeamworkConnection
    */
    public function setConnectionStatus($val)
    {
        $this->_propDict["connectionStatus"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Time at which the state was last changed. For example, indicates connected since when the state is connected and disconnected since when the state is disconnected.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Time at which the state was last changed. For example, indicates connected since when the state is connected and disconnected since when the state is disconnected.
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return TeamworkConnection The TeamworkConnection
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
}
