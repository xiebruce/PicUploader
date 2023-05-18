<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationEventListener File
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
* AuthenticationEventListener class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationEventListener extends Entity
{
    /**
    * Gets the authenticationEventsFlowId
    * The identifier of the authenticationEventsFlow object.
    *
    * @return string|null The authenticationEventsFlowId
    */
    public function getAuthenticationEventsFlowId()
    {
        if (array_key_exists("authenticationEventsFlowId", $this->_propDict)) {
            return $this->_propDict["authenticationEventsFlowId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationEventsFlowId
    * The identifier of the authenticationEventsFlow object.
    *
    * @param string $val The authenticationEventsFlowId
    *
    * @return AuthenticationEventListener
    */
    public function setAuthenticationEventsFlowId($val)
    {
        $this->_propDict["authenticationEventsFlowId"] = $val;
        return $this;
    }

    /**
    * Gets the conditions
    * The conditions on which this authenticationEventListener should trigger.
    *
    * @return AuthenticationConditions|null The conditions
    */
    public function getConditions()
    {
        if (array_key_exists("conditions", $this->_propDict)) {
            if (is_a($this->_propDict["conditions"], "\Beta\Microsoft\Graph\Model\AuthenticationConditions") || is_null($this->_propDict["conditions"])) {
                return $this->_propDict["conditions"];
            } else {
                $this->_propDict["conditions"] = new AuthenticationConditions($this->_propDict["conditions"]);
                return $this->_propDict["conditions"];
            }
        }
        return null;
    }

    /**
    * Sets the conditions
    * The conditions on which this authenticationEventListener should trigger.
    *
    * @param AuthenticationConditions $val The conditions
    *
    * @return AuthenticationEventListener
    */
    public function setConditions($val)
    {
        $this->_propDict["conditions"] = $val;
        return $this;
    }

    /**
    * Gets the priority
    * The priority of this handler. Between 0 (lower priority) and 1000 (higher priority).
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * The priority of this handler. Between 0 (lower priority) and 1000 (higher priority).
    *
    * @param int $val The priority
    *
    * @return AuthenticationEventListener
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

}
