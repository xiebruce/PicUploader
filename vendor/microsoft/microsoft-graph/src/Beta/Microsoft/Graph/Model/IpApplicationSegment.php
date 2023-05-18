<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpApplicationSegment File
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
* IpApplicationSegment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpApplicationSegment extends ApplicationSegment
{
    /**
    * Gets the destinationHost
    *
    * @return string|null The destinationHost
    */
    public function getDestinationHost()
    {
        if (array_key_exists("destinationHost", $this->_propDict)) {
            return $this->_propDict["destinationHost"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationHost
    *
    * @param string $val The destinationHost
    *
    * @return IpApplicationSegment
    */
    public function setDestinationHost($val)
    {
        $this->_propDict["destinationHost"] = $val;
        return $this;
    }

    /**
    * Gets the port
    *
    * @return int|null The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the port
    *
    * @param int $val The port
    *
    * @return IpApplicationSegment
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = intval($val);
        return $this;
    }

}
