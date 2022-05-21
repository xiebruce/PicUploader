<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParentLabelDetails File
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
* ParentLabelDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ParentLabelDetails extends Entity
{
    /**
    * Gets the color
    * The color that the user interface should display for the label, if configured.
    *
    * @return string|null The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }

    /**
    * Sets the color
    * The color that the user interface should display for the label, if configured.
    *
    * @param string $val The value of the color
    *
    * @return ParentLabelDetails
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * The admin-defined description for the label.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The admin-defined description for the label.
    *
    * @param string $val The value of the description
    *
    * @return ParentLabelDetails
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * The label ID is a globally unique identifier (GUID).
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
    * The label ID is a globally unique identifier (GUID).
    *
    * @param string $val The value of the id
    *
    * @return ParentLabelDetails
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isActive
    * Indicates whether the label is active or not. Active labels should be hidden or disabled in user interfaces.
    *
    * @return bool|null The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    * Indicates whether the label is active or not. Active labels should be hidden or disabled in user interfaces.
    *
    * @param bool $val The value of the isActive
    *
    * @return ParentLabelDetails
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The plaintext name of the label.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The plaintext name of the label.
    *
    * @param string $val The value of the name
    *
    * @return ParentLabelDetails
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the parent
    *
    * @return ParentLabelDetails|null The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "\Beta\Microsoft\Graph\Model\ParentLabelDetails") || is_null($this->_propDict["parent"])) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new ParentLabelDetails($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }

    /**
    * Sets the parent
    *
    * @param ParentLabelDetails $val The value to assign to the parent
    *
    * @return ParentLabelDetails The ParentLabelDetails
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
         return $this;
    }
    /**
    * Gets the sensitivity
    * The sensitivity value of the label, where lower is less sensitive.
    *
    * @return int|null The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            return $this->_propDict["sensitivity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitivity
    * The sensitivity value of the label, where lower is less sensitive.
    *
    * @param int $val The value of the sensitivity
    *
    * @return ParentLabelDetails
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = $val;
        return $this;
    }
    /**
    * Gets the tooltip
    * The tooltip that should be displayed for the label in a user interface.
    *
    * @return string|null The tooltip
    */
    public function getTooltip()
    {
        if (array_key_exists("tooltip", $this->_propDict)) {
            return $this->_propDict["tooltip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tooltip
    * The tooltip that should be displayed for the label in a user interface.
    *
    * @param string $val The value of the tooltip
    *
    * @return ParentLabelDetails
    */
    public function setTooltip($val)
    {
        $this->_propDict["tooltip"] = $val;
        return $this;
    }
}
