<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchAlteration File
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
* SearchAlteration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchAlteration extends Entity
{
    /**
    * Gets the alteredHighlightedQueryString
    * Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is (/ue000, /ue001)
    *
    * @return string|null The alteredHighlightedQueryString
    */
    public function getAlteredHighlightedQueryString()
    {
        if (array_key_exists("alteredHighlightedQueryString", $this->_propDict)) {
            return $this->_propDict["alteredHighlightedQueryString"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alteredHighlightedQueryString
    * Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is (/ue000, /ue001)
    *
    * @param string $val The value of the alteredHighlightedQueryString
    *
    * @return SearchAlteration
    */
    public function setAlteredHighlightedQueryString($val)
    {
        $this->_propDict["alteredHighlightedQueryString"] = $val;
        return $this;
    }
    /**
    * Gets the alteredQueryString
    * Defines the altered query string with spelling correction.
    *
    * @return string|null The alteredQueryString
    */
    public function getAlteredQueryString()
    {
        if (array_key_exists("alteredQueryString", $this->_propDict)) {
            return $this->_propDict["alteredQueryString"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alteredQueryString
    * Defines the altered query string with spelling correction.
    *
    * @param string $val The value of the alteredQueryString
    *
    * @return SearchAlteration
    */
    public function setAlteredQueryString($val)
    {
        $this->_propDict["alteredQueryString"] = $val;
        return $this;
    }

    /**
    * Gets the alteredQueryTokens
    * Represents changed segments with respect to original query.
    *
    * @return AlteredQueryToken|null The alteredQueryTokens
    */
    public function getAlteredQueryTokens()
    {
        if (array_key_exists("alteredQueryTokens", $this->_propDict)) {
            if (is_a($this->_propDict["alteredQueryTokens"], "\Microsoft\Graph\Model\AlteredQueryToken") || is_null($this->_propDict["alteredQueryTokens"])) {
                return $this->_propDict["alteredQueryTokens"];
            } else {
                $this->_propDict["alteredQueryTokens"] = new AlteredQueryToken($this->_propDict["alteredQueryTokens"]);
                return $this->_propDict["alteredQueryTokens"];
            }
        }
        return null;
    }

    /**
    * Sets the alteredQueryTokens
    * Represents changed segments with respect to original query.
    *
    * @param AlteredQueryToken $val The value to assign to the alteredQueryTokens
    *
    * @return SearchAlteration The SearchAlteration
    */
    public function setAlteredQueryTokens($val)
    {
        $this->_propDict["alteredQueryTokens"] = $val;
         return $this;
    }
}
