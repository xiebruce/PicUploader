<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebPartPosition File
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
* WebPartPosition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebPartPosition extends Entity
{
    /**
    * Gets the columnId
    * Indicates the identifier of the column where the web part is located.
    *
    * @return float|null The columnId
    */
    public function getColumnId()
    {
        if (array_key_exists("columnId", $this->_propDict)) {
            return $this->_propDict["columnId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the columnId
    * Indicates the identifier of the column where the web part is located.
    *
    * @param float $val The value of the columnId
    *
    * @return WebPartPosition
    */
    public function setColumnId($val)
    {
        $this->_propDict["columnId"] = $val;
        return $this;
    }
    /**
    * Gets the horizontalSectionId
    * Indicates the horizontal section where the web part is located.
    *
    * @return float|null The horizontalSectionId
    */
    public function getHorizontalSectionId()
    {
        if (array_key_exists("horizontalSectionId", $this->_propDict)) {
            return $this->_propDict["horizontalSectionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the horizontalSectionId
    * Indicates the horizontal section where the web part is located.
    *
    * @param float $val The value of the horizontalSectionId
    *
    * @return WebPartPosition
    */
    public function setHorizontalSectionId($val)
    {
        $this->_propDict["horizontalSectionId"] = $val;
        return $this;
    }
    /**
    * Gets the isInVerticalSection
    * Indicates whether the web part is located in the vertical section.
    *
    * @return bool|null The isInVerticalSection
    */
    public function getIsInVerticalSection()
    {
        if (array_key_exists("isInVerticalSection", $this->_propDict)) {
            return $this->_propDict["isInVerticalSection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInVerticalSection
    * Indicates whether the web part is located in the vertical section.
    *
    * @param bool $val The value of the isInVerticalSection
    *
    * @return WebPartPosition
    */
    public function setIsInVerticalSection($val)
    {
        $this->_propDict["isInVerticalSection"] = $val;
        return $this;
    }
    /**
    * Gets the webPartIndex
    * Index of the current web part. Represents the order of the web part in this column or section.
    *
    * @return float|null The webPartIndex
    */
    public function getWebPartIndex()
    {
        if (array_key_exists("webPartIndex", $this->_propDict)) {
            return $this->_propDict["webPartIndex"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webPartIndex
    * Index of the current web part. Represents the order of the web part in this column or section.
    *
    * @param float $val The value of the webPartIndex
    *
    * @return WebPartPosition
    */
    public function setWebPartIndex($val)
    {
        $this->_propDict["webPartIndex"] = $val;
        return $this;
    }
}
