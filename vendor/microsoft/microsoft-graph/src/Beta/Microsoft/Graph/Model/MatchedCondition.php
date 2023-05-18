<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MatchedCondition File
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
* MatchedCondition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MatchedCondition extends Entity
{
    /**
    * Gets the condition
    *
    * @return string|null The condition
    */
    public function getCondition()
    {
        if (array_key_exists("condition", $this->_propDict)) {
            return $this->_propDict["condition"];
        } else {
            return null;
        }
    }

    /**
    * Sets the condition
    *
    * @param string $val The value of the condition
    *
    * @return MatchedCondition
    */
    public function setCondition($val)
    {
        $this->_propDict["condition"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return MatchedCondition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the values
    *
    * @return string|null The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            return $this->_propDict["values"];
        } else {
            return null;
        }
    }

    /**
    * Sets the values
    *
    * @param string $val The value of the values
    *
    * @return MatchedCondition
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
}
