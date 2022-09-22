<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourceConnection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* ResourceConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResourceConnection extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the state
    * The state of the connection. The possible values are: connected, notAuthorized, notFound, unknownFutureValue.
    *
    * @return ResourceConnectionState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\ResourceConnectionState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ResourceConnectionState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The state of the connection. The possible values are: connected, notAuthorized, notFound, unknownFutureValue.
    *
    * @param ResourceConnectionState $val The state
    *
    * @return ResourceConnection
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
