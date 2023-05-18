<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HorizontalSectionColumn File
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
* HorizontalSectionColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HorizontalSectionColumn extends Entity
{
    /**
    * Gets the width
    * Width of the column. A horizontal section is divided into 12 grids. A column should have a value of 1-12 to represent its range spans. For example, there can be two columns both have a width of 6 in a section.
    *
    * @return int|null The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }

    /**
    * Sets the width
    * Width of the column. A horizontal section is divided into 12 grids. A column should have a value of 1-12 to represent its range spans. For example, there can be two columns both have a width of 6 in a section.
    *
    * @param int $val The width
    *
    * @return HorizontalSectionColumn
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = intval($val);
        return $this;
    }


     /**
     * Gets the webparts
    * The collection of WebParts in this column.
     *
     * @return array|null The webparts
     */
    public function getWebparts()
    {
        if (array_key_exists("webparts", $this->_propDict)) {
           return $this->_propDict["webparts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webparts
    * The collection of WebParts in this column.
    *
    * @param WebPart[] $val The webparts
    *
    * @return HorizontalSectionColumn
    */
    public function setWebparts($val)
    {
        $this->_propDict["webparts"] = $val;
        return $this;
    }

}
