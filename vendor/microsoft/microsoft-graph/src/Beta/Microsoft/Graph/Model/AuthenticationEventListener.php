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


     /**
     * Gets the tags
     *
     * @return array|null The tags
     */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
           return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    *
    * @param KeyValuePair[] $val The tags
    *
    * @return AuthenticationEventListener
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

}
