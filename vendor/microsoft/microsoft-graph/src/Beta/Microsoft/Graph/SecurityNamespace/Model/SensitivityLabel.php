<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitivityLabel File
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
* SensitivityLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SensitivityLabel extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the color
    * The color that the UI should display for the label, if configured.
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
    * The color that the UI should display for the label, if configured.
    *
    * @param string $val The color
    *
    * @return SensitivityLabel
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }

    /**
    * Gets the contentFormats
    * Returns the supported content formats for the label.
    *
    * @return array|null The contentFormats
    */
    public function getContentFormats()
    {
        if (array_key_exists("contentFormats", $this->_propDict)) {
            return $this->_propDict["contentFormats"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentFormats
    * Returns the supported content formats for the label.
    *
    * @param string[] $val The contentFormats
    *
    * @return SensitivityLabel
    */
    public function setContentFormats($val)
    {
        $this->_propDict["contentFormats"] = $val;
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
    * @param string $val The description
    *
    * @return SensitivityLabel
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the hasProtection
    * Indicates whether the label has protection actions configured.
    *
    * @return bool|null The hasProtection
    */
    public function getHasProtection()
    {
        if (array_key_exists("hasProtection", $this->_propDict)) {
            return $this->_propDict["hasProtection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasProtection
    * Indicates whether the label has protection actions configured.
    *
    * @param bool $val The hasProtection
    *
    * @return SensitivityLabel
    */
    public function setHasProtection($val)
    {
        $this->_propDict["hasProtection"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isActive
    * Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
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
    * Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
    *
    * @param bool $val The isActive
    *
    * @return SensitivityLabel
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isAppliable
    * Indicates whether the label can be applied to content. False if the label is a parent with child labels.
    *
    * @return bool|null The isAppliable
    */
    public function getIsAppliable()
    {
        if (array_key_exists("isAppliable", $this->_propDict)) {
            return $this->_propDict["isAppliable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAppliable
    * Indicates whether the label can be applied to content. False if the label is a parent with child labels.
    *
    * @param bool $val The isAppliable
    *
    * @return SensitivityLabel
    */
    public function setIsAppliable($val)
    {
        $this->_propDict["isAppliable"] = boolval($val);
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
    * @param string $val The name
    *
    * @return SensitivityLabel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @param int $val The sensitivity
    *
    * @return SensitivityLabel
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = intval($val);
        return $this;
    }

    /**
    * Gets the tooltip
    * The tooltip that should be displayed for the label in a UI.
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
    * The tooltip that should be displayed for the label in a UI.
    *
    * @param string $val The tooltip
    *
    * @return SensitivityLabel
    */
    public function setTooltip($val)
    {
        $this->_propDict["tooltip"] = $val;
        return $this;
    }

    /**
    * Gets the parent
    * The parent label associated with a child label. Null if the label has no parent.
    *
    * @return SensitivityLabel|null The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SensitivityLabel") || is_null($this->_propDict["parent"])) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new SensitivityLabel($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }

    /**
    * Sets the parent
    * The parent label associated with a child label. Null if the label has no parent.
    *
    * @param SensitivityLabel $val The parent
    *
    * @return SensitivityLabel
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
        return $this;
    }

}
