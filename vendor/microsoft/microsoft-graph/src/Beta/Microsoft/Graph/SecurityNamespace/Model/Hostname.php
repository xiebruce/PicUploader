<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Hostname File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* Hostname class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Hostname extends Host
{
    /**
    * Gets the registrant
    * The company or individual who registered this hostname, from WHOIS data.
    *
    * @return string|null The registrant
    */
    public function getRegistrant()
    {
        if (array_key_exists("registrant", $this->_propDict)) {
            return $this->_propDict["registrant"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrant
    * The company or individual who registered this hostname, from WHOIS data.
    *
    * @param string $val The registrant
    *
    * @return Hostname
    */
    public function setRegistrant($val)
    {
        $this->_propDict["registrant"] = $val;
        return $this;
    }

    /**
    * Gets the registrar
    * The registrar for this hostname, from WHOIS data.
    *
    * @return string|null The registrar
    */
    public function getRegistrar()
    {
        if (array_key_exists("registrar", $this->_propDict)) {
            return $this->_propDict["registrar"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrar
    * The registrar for this hostname, from WHOIS data.
    *
    * @param string $val The registrar
    *
    * @return Hostname
    */
    public function setRegistrar($val)
    {
        $this->_propDict["registrar"] = $val;
        return $this;
    }

}
