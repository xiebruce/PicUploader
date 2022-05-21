<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Initiator File
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
* Initiator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Initiator extends Identity
{

    /**
    * Gets the initiatorType
    * Type of initiator. Possible values are: user, application, system, unknownFutureValue.
    *
    * @return InitiatorType|null The initiatorType
    */
    public function getInitiatorType()
    {
        if (array_key_exists("initiatorType", $this->_propDict)) {
            if (is_a($this->_propDict["initiatorType"], "\Beta\Microsoft\Graph\Model\InitiatorType") || is_null($this->_propDict["initiatorType"])) {
                return $this->_propDict["initiatorType"];
            } else {
                $this->_propDict["initiatorType"] = new InitiatorType($this->_propDict["initiatorType"]);
                return $this->_propDict["initiatorType"];
            }
        }
        return null;
    }

    /**
    * Sets the initiatorType
    * Type of initiator. Possible values are: user, application, system, unknownFutureValue.
    *
    * @param InitiatorType $val The value to assign to the initiatorType
    *
    * @return Initiator The Initiator
    */
    public function setInitiatorType($val)
    {
        $this->_propDict["initiatorType"] = $val;
         return $this;
    }
}
