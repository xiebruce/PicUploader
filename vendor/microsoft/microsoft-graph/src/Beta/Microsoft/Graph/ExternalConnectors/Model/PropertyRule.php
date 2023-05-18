<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PropertyRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;
/**
* PropertyRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PropertyRule extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the operation
    * Specifies the operations to be performed during evaluation of a single propertyRule, where property and a string from the values collection are the respective operands. Possible values are: null, equals, notEquals, contains, notContains, lessThan, greaterThan, startsWith. Required.
    *
    * @return RuleOperation|null The operation
    */
    public function getOperation()
    {
        if (array_key_exists("operation", $this->_propDict)) {
            if (is_a($this->_propDict["operation"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\RuleOperation") || is_null($this->_propDict["operation"])) {
                return $this->_propDict["operation"];
            } else {
                $this->_propDict["operation"] = new RuleOperation($this->_propDict["operation"]);
                return $this->_propDict["operation"];
            }
        }
        return null;
    }

    /**
    * Sets the operation
    * Specifies the operations to be performed during evaluation of a single propertyRule, where property and a string from the values collection are the respective operands. Possible values are: null, equals, notEquals, contains, notContains, lessThan, greaterThan, startsWith. Required.
    *
    * @param RuleOperation $val The value to assign to the operation
    *
    * @return PropertyRule The PropertyRule
    */
    public function setOperation($val)
    {
        $this->_propDict["operation"] = $val;
         return $this;
    }
    /**
    * Gets the property
    * The property from the externalItem schema. Required.
    *
    * @return string|null The property
    */
    public function getProperty()
    {
        if (array_key_exists("property", $this->_propDict)) {
            return $this->_propDict["property"];
        } else {
            return null;
        }
    }

    /**
    * Sets the property
    * The property from the externalItem schema. Required.
    *
    * @param string $val The value of the property
    *
    * @return PropertyRule
    */
    public function setProperty($val)
    {
        $this->_propDict["property"] = $val;
        return $this;
    }
    /**
    * Gets the values
    * A collection with one or many strings. The specified string(s) will be matched with the specified property using the specified operation. Required.
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
    * A collection with one or many strings. The specified string(s) will be matched with the specified property using the specified operation. Required.
    *
    * @param string $val The value of the values
    *
    * @return PropertyRule
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }

    /**
    * Gets the valuesJoinedBy
    * The join operator for evaluating multiple propertyRules. For example, if and is specified, then all propertyRules must be true for the propertyRule to be true. Possible values are: or, and. Required.
    *
    * @return \Beta\Microsoft\Graph\Model\BinaryOperator|null The valuesJoinedBy
    */
    public function getValuesJoinedBy()
    {
        if (array_key_exists("valuesJoinedBy", $this->_propDict)) {
            if (is_a($this->_propDict["valuesJoinedBy"], "\Beta\Microsoft\Graph\Model\BinaryOperator") || is_null($this->_propDict["valuesJoinedBy"])) {
                return $this->_propDict["valuesJoinedBy"];
            } else {
                $this->_propDict["valuesJoinedBy"] = new \Beta\Microsoft\Graph\Model\BinaryOperator($this->_propDict["valuesJoinedBy"]);
                return $this->_propDict["valuesJoinedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the valuesJoinedBy
    * The join operator for evaluating multiple propertyRules. For example, if and is specified, then all propertyRules must be true for the propertyRule to be true. Possible values are: or, and. Required.
    *
    * @param \Beta\Microsoft\Graph\Model\BinaryOperator $val The value to assign to the valuesJoinedBy
    *
    * @return PropertyRule The PropertyRule
    */
    public function setValuesJoinedBy($val)
    {
        $this->_propDict["valuesJoinedBy"] = $val;
         return $this;
    }
}
