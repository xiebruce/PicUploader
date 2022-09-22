<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AudioRoutingGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AudioRoutingGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AudioRoutingGroup extends Entity
{
    /**
    * Gets the receivers
    *
    * @return string|null The receivers
    */
    public function getReceivers()
    {
        if (array_key_exists("receivers", $this->_propDict)) {
            return $this->_propDict["receivers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the receivers
    *
    * @param string $val The receivers
    *
    * @return AudioRoutingGroup
    */
    public function setReceivers($val)
    {
        $this->_propDict["receivers"] = $val;
        return $this;
    }

    /**
    * Gets the routingMode
    *
    * @return RoutingMode|null The routingMode
    */
    public function getRoutingMode()
    {
        if (array_key_exists("routingMode", $this->_propDict)) {
            if (is_a($this->_propDict["routingMode"], "\Microsoft\Graph\Model\RoutingMode") || is_null($this->_propDict["routingMode"])) {
                return $this->_propDict["routingMode"];
            } else {
                $this->_propDict["routingMode"] = new RoutingMode($this->_propDict["routingMode"]);
                return $this->_propDict["routingMode"];
            }
        }
        return null;
    }

    /**
    * Sets the routingMode
    *
    * @param RoutingMode $val The routingMode
    *
    * @return AudioRoutingGroup
    */
    public function setRoutingMode($val)
    {
        $this->_propDict["routingMode"] = $val;
        return $this;
    }

    /**
    * Gets the sources
    *
    * @return string|null The sources
    */
    public function getSources()
    {
        if (array_key_exists("sources", $this->_propDict)) {
            return $this->_propDict["sources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sources
    *
    * @param string $val The sources
    *
    * @return AudioRoutingGroup
    */
    public function setSources($val)
    {
        $this->_propDict["sources"] = $val;
        return $this;
    }

}
