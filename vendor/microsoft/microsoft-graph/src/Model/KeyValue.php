<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KeyValue File
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
* KeyValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class KeyValue extends Entity
{
    /**
    * Gets the key
    * Key for the key-value pair.
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    * Key for the key-value pair.
    *
    * @param string $val The value of the key
    *
    * @return KeyValue
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Value for the key-value pair.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Value for the key-value pair.
    *
    * @param string $val The value of the value
    *
    * @return KeyValue
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
