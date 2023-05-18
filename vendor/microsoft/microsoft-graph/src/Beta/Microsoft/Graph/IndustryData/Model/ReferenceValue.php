<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferenceValue File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;
/**
* ReferenceValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReferenceValue extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the code
    * The code of the desired referenceDefinition entry.
    *
    * @return string|null The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    * The code of the desired referenceDefinition entry.
    *
    * @param string $val The value of the code
    *
    * @return ReferenceValue
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }

    /**
    * Gets the value
    *
    * @return ReferenceDefinition|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\Beta\Microsoft\Graph\IndustryData\Model\ReferenceDefinition") || is_null($this->_propDict["value"])) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new ReferenceDefinition($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    *
    * @param ReferenceDefinition $val The value to assign to the value
    *
    * @return ReferenceValue The ReferenceValue
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
