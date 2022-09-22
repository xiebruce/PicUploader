<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageLogoDimensions File
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
* OrganizationalMessageLogoDimensions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageLogoDimensions extends Entity
{
    /**
    * Gets the maxHeight
    * Maximum height of the logo
    *
    * @return int|null The maxHeight
    */
    public function getMaxHeight()
    {
        if (array_key_exists("maxHeight", $this->_propDict)) {
            return $this->_propDict["maxHeight"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxHeight
    * Maximum height of the logo
    *
    * @param int $val The value of the maxHeight
    *
    * @return OrganizationalMessageLogoDimensions
    */
    public function setMaxHeight($val)
    {
        $this->_propDict["maxHeight"] = $val;
        return $this;
    }
    /**
    * Gets the maxWidth
    * Maximum width of the logo
    *
    * @return int|null The maxWidth
    */
    public function getMaxWidth()
    {
        if (array_key_exists("maxWidth", $this->_propDict)) {
            return $this->_propDict["maxWidth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxWidth
    * Maximum width of the logo
    *
    * @param int $val The value of the maxWidth
    *
    * @return OrganizationalMessageLogoDimensions
    */
    public function setMaxWidth($val)
    {
        $this->_propDict["maxWidth"] = $val;
        return $this;
    }
    /**
    * Gets the minHeight
    * Minimum height of the logo
    *
    * @return int|null The minHeight
    */
    public function getMinHeight()
    {
        if (array_key_exists("minHeight", $this->_propDict)) {
            return $this->_propDict["minHeight"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minHeight
    * Minimum height of the logo
    *
    * @param int $val The value of the minHeight
    *
    * @return OrganizationalMessageLogoDimensions
    */
    public function setMinHeight($val)
    {
        $this->_propDict["minHeight"] = $val;
        return $this;
    }
    /**
    * Gets the minWidth
    * Minimum width of the logo
    *
    * @return int|null The minWidth
    */
    public function getMinWidth()
    {
        if (array_key_exists("minWidth", $this->_propDict)) {
            return $this->_propDict["minWidth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minWidth
    * Minimum width of the logo
    *
    * @param int $val The value of the minWidth
    *
    * @return OrganizationalMessageLogoDimensions
    */
    public function setMinWidth($val)
    {
        $this->_propDict["minWidth"] = $val;
        return $this;
    }
}
