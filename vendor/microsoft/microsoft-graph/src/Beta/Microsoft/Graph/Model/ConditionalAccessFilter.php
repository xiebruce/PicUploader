<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessFilter File
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
* ConditionalAccessFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessFilter extends Entity
{

    /**
    * Gets the mode
    * Mode to use for the filter. Possible values are include or exclude.
    *
    * @return FilterMode|null The mode
    */
    public function getMode()
    {
        if (array_key_exists("mode", $this->_propDict)) {
            if (is_a($this->_propDict["mode"], "\Beta\Microsoft\Graph\Model\FilterMode") || is_null($this->_propDict["mode"])) {
                return $this->_propDict["mode"];
            } else {
                $this->_propDict["mode"] = new FilterMode($this->_propDict["mode"]);
                return $this->_propDict["mode"];
            }
        }
        return null;
    }

    /**
    * Sets the mode
    * Mode to use for the filter. Possible values are include or exclude.
    *
    * @param FilterMode $val The value to assign to the mode
    *
    * @return ConditionalAccessFilter The ConditionalAccessFilter
    */
    public function setMode($val)
    {
        $this->_propDict["mode"] = $val;
         return $this;
    }
    /**
    * Gets the rule
    * Rule syntax is similar to that used for membership rules for groups in Azure Active Directory. For details, see rules with multiple expressions
    *
    * @return string|null The rule
    */
    public function getRule()
    {
        if (array_key_exists("rule", $this->_propDict)) {
            return $this->_propDict["rule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rule
    * Rule syntax is similar to that used for membership rules for groups in Azure Active Directory. For details, see rules with multiple expressions
    *
    * @param string $val The value of the rule
    *
    * @return ConditionalAccessFilter
    */
    public function setRule($val)
    {
        $this->_propDict["rule"] = $val;
        return $this;
    }
}
