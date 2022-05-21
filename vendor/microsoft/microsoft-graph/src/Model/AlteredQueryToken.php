<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlteredQueryToken File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AlteredQueryToken class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlteredQueryToken extends Entity
{
    /**
    * Gets the length
    * Defines the length of a changed segment.
    *
    * @return int|null The length
    */
    public function getLength()
    {
        if (array_key_exists("length", $this->_propDict)) {
            return $this->_propDict["length"];
        } else {
            return null;
        }
    }

    /**
    * Sets the length
    * Defines the length of a changed segment.
    *
    * @param int $val The value of the length
    *
    * @return AlteredQueryToken
    */
    public function setLength($val)
    {
        $this->_propDict["length"] = $val;
        return $this;
    }
    /**
    * Gets the offset
    * Defines the offset of a changed segment.
    *
    * @return int|null The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            return $this->_propDict["offset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offset
    * Defines the offset of a changed segment.
    *
    * @param int $val The value of the offset
    *
    * @return AlteredQueryToken
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
        return $this;
    }
    /**
    * Gets the suggestion
    * Represents the corrected segment string.
    *
    * @return string|null The suggestion
    */
    public function getSuggestion()
    {
        if (array_key_exists("suggestion", $this->_propDict)) {
            return $this->_propDict["suggestion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suggestion
    * Represents the corrected segment string.
    *
    * @param string $val The value of the suggestion
    *
    * @return AlteredQueryToken
    */
    public function setSuggestion($val)
    {
        $this->_propDict["suggestion"] = $val;
        return $this;
    }
}
