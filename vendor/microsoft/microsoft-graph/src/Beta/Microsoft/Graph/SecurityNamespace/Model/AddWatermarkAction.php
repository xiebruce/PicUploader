<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddWatermarkAction File
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
* AddWatermarkAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddWatermarkAction extends InformationProtectionAction
{
    /**
    * Gets the fontColor
    *
    * @return string|null The fontColor
    */
    public function getFontColor()
    {
        if (array_key_exists("fontColor", $this->_propDict)) {
            return $this->_propDict["fontColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontColor
    *
    * @param string $val The value of the fontColor
    *
    * @return AddWatermarkAction
    */
    public function setFontColor($val)
    {
        $this->_propDict["fontColor"] = $val;
        return $this;
    }
    /**
    * Gets the fontName
    *
    * @return string|null The fontName
    */
    public function getFontName()
    {
        if (array_key_exists("fontName", $this->_propDict)) {
            return $this->_propDict["fontName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontName
    *
    * @param string $val The value of the fontName
    *
    * @return AddWatermarkAction
    */
    public function setFontName($val)
    {
        $this->_propDict["fontName"] = $val;
        return $this;
    }
    /**
    * Gets the fontSize
    *
    * @return int|null The fontSize
    */
    public function getFontSize()
    {
        if (array_key_exists("fontSize", $this->_propDict)) {
            return $this->_propDict["fontSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontSize
    *
    * @param int $val The value of the fontSize
    *
    * @return AddWatermarkAction
    */
    public function setFontSize($val)
    {
        $this->_propDict["fontSize"] = $val;
        return $this;
    }

    /**
    * Gets the layout
    *
    * @return WatermarkLayout|null The layout
    */
    public function getLayout()
    {
        if (array_key_exists("layout", $this->_propDict)) {
            if (is_a($this->_propDict["layout"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\WatermarkLayout") || is_null($this->_propDict["layout"])) {
                return $this->_propDict["layout"];
            } else {
                $this->_propDict["layout"] = new WatermarkLayout($this->_propDict["layout"]);
                return $this->_propDict["layout"];
            }
        }
        return null;
    }

    /**
    * Sets the layout
    *
    * @param WatermarkLayout $val The value to assign to the layout
    *
    * @return AddWatermarkAction The AddWatermarkAction
    */
    public function setLayout($val)
    {
        $this->_propDict["layout"] = $val;
         return $this;
    }
    /**
    * Gets the text
    *
    * @return string|null The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    *
    * @param string $val The value of the text
    *
    * @return AddWatermarkAction
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    /**
    * Gets the uiElementName
    *
    * @return string|null The uiElementName
    */
    public function getUiElementName()
    {
        if (array_key_exists("uiElementName", $this->_propDict)) {
            return $this->_propDict["uiElementName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uiElementName
    *
    * @param string $val The value of the uiElementName
    *
    * @return AddWatermarkAction
    */
    public function setUiElementName($val)
    {
        $this->_propDict["uiElementName"] = $val;
        return $this;
    }
}
