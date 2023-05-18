<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MetaDataKeyValuePair File
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
* MetaDataKeyValuePair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MetaDataKeyValuePair extends Entity
{
    /**
    * Gets the key
    * Key of the metadata.
    *
    * @return string|null The key
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
    * Key of the metadata.
    *
    * @param string $val The value of the key
    *
    * @return MetaDataKeyValuePair
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Value of the metadata. Should be an object.
    *
    * @return string|null The value
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
    * Value of the metadata. Should be an object.
    *
    * @param string $val The value of the value
    *
    * @return MetaDataKeyValuePair
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
