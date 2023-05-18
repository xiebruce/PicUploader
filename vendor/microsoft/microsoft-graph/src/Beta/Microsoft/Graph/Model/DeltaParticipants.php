<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeltaParticipants File
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
* DeltaParticipants class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeltaParticipants extends Entity
{
    /**
    * Gets the sequenceNumber
    * The sequence number for the roster update that is used to identify the notification order.
    *
    * @return int|null The sequenceNumber
    */
    public function getSequenceNumber()
    {
        if (array_key_exists("sequenceNumber", $this->_propDict)) {
            return $this->_propDict["sequenceNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sequenceNumber
    * The sequence number for the roster update that is used to identify the notification order.
    *
    * @param int $val The sequenceNumber
    *
    * @return DeltaParticipants
    */
    public function setSequenceNumber($val)
    {
        $this->_propDict["sequenceNumber"] = intval($val);
        return $this;
    }


     /**
     * Gets the participants
     *
     * @return array|null The participants
     */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
           return $this->_propDict["participants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the participants
    *
    * @param Participant[] $val The participants
    *
    * @return DeltaParticipants
    */
    public function setParticipants($val)
    {
        $this->_propDict["participants"] = $val;
        return $this;
    }

}
