<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationListener File
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
* AuthenticationListener class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationListener extends Entity
{
    /**
    * Gets the priority
    * The priority of the listener. Determines the order of evaluation when an event has multiple listeners. The priority is evaluated from low to high.
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
    * The priority of the listener. Determines the order of evaluation when an event has multiple listeners. The priority is evaluated from low to high.
    *
    * @param int $val The priority
    *
    * @return AuthenticationListener
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

    /**
    * Gets the sourceFilter
    * Filter based on the source of the authentication that is used to determine whether the listener is evaluated. This is currently limited to evaluations based on application the user is authenticating to.
    *
    * @return AuthenticationSourceFilter|null The sourceFilter
    */
    public function getSourceFilter()
    {
        if (array_key_exists("sourceFilter", $this->_propDict)) {
            if (is_a($this->_propDict["sourceFilter"], "\Beta\Microsoft\Graph\Model\AuthenticationSourceFilter") || is_null($this->_propDict["sourceFilter"])) {
                return $this->_propDict["sourceFilter"];
            } else {
                $this->_propDict["sourceFilter"] = new AuthenticationSourceFilter($this->_propDict["sourceFilter"]);
                return $this->_propDict["sourceFilter"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceFilter
    * Filter based on the source of the authentication that is used to determine whether the listener is evaluated. This is currently limited to evaluations based on application the user is authenticating to.
    *
    * @param AuthenticationSourceFilter $val The sourceFilter
    *
    * @return AuthenticationListener
    */
    public function setSourceFilter($val)
    {
        $this->_propDict["sourceFilter"] = $val;
        return $this;
    }

}
