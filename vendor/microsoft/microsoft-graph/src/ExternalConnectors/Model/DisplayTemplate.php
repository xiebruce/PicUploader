<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DisplayTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;
/**
* DisplayTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DisplayTemplate extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the id
    * The text identifier for the display template; for example, contosoTickets. Maximum 16 characters. Only alphanumeric characters allowed.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The text identifier for the display template; for example, contosoTickets. Maximum 16 characters. Only alphanumeric characters allowed.
    *
    * @param string $val The value of the id
    *
    * @return DisplayTemplate
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the layout
    * The definition of the content's appearance, represented by an Adaptive Card, which is a JSON-serialized card object model.
    *
    * @return string|null The layout
    */
    public function getLayout()
    {
        if (array_key_exists("layout", $this->_propDict)) {
            return $this->_propDict["layout"];
        } else {
            return null;
        }
    }

    /**
    * Sets the layout
    * The definition of the content's appearance, represented by an Adaptive Card, which is a JSON-serialized card object model.
    *
    * @param string $val The value of the layout
    *
    * @return DisplayTemplate
    */
    public function setLayout($val)
    {
        $this->_propDict["layout"] = $val;
        return $this;
    }
    /**
    * Gets the priority
    * Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. Must be positive value.
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. Must be positive value.
    *
    * @param int $val The value of the priority
    *
    * @return DisplayTemplate
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }

    /**
    * Gets the rules
    * Specifies additional rules for selecting this display template based on the item schema. Optional.
    *
    * @return PropertyRule|null The rules
    */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
            if (is_a($this->_propDict["rules"], "\Microsoft\Graph\ExternalConnectors\Model\PropertyRule") || is_null($this->_propDict["rules"])) {
                return $this->_propDict["rules"];
            } else {
                $this->_propDict["rules"] = new PropertyRule($this->_propDict["rules"]);
                return $this->_propDict["rules"];
            }
        }
        return null;
    }

    /**
    * Sets the rules
    * Specifies additional rules for selecting this display template based on the item schema. Optional.
    *
    * @param PropertyRule $val The value to assign to the rules
    *
    * @return DisplayTemplate The DisplayTemplate
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
         return $this;
    }
}
