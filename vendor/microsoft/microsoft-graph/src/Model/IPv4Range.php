<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IPv4Range File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* IPv4Range class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IPv4Range extends IpRange
{
    /**
    * Gets the lowerAddress
    * Lower address.
    *
    * @return string The lowerAddress
    */
    public function getLowerAddress()
    {
        if (array_key_exists("lowerAddress", $this->_propDict)) {
            return $this->_propDict["lowerAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowerAddress
    * Lower address.
    *
    * @param string $val The value of the lowerAddress
    *
    * @return IPv4Range
    */
    public function setLowerAddress($val)
    {
        $this->_propDict["lowerAddress"] = $val;
        return $this;
    }
    /**
    * Gets the upperAddress
    * Upper address.
    *
    * @return string The upperAddress
    */
    public function getUpperAddress()
    {
        if (array_key_exists("upperAddress", $this->_propDict)) {
            return $this->_propDict["upperAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upperAddress
    * Upper address.
    *
    * @param string $val The value of the upperAddress
    *
    * @return IPv4Range
    */
    public function setUpperAddress($val)
    {
        $this->_propDict["upperAddress"] = $val;
        return $this;
    }
}
