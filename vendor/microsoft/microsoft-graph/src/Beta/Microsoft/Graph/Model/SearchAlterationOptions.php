<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchAlterationOptions File
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
* SearchAlterationOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchAlterationOptions extends Entity
{
    /**
    * Gets the enableModification
    * Indicates whether spelling modifications are enabled. If enabled, user will get the search results for corrected query when there are no results for the original query with typos and get the spelling modification information in queryAlterationResponse property of the response. Optional.
    *
    * @return bool|null The enableModification
    */
    public function getEnableModification()
    {
        if (array_key_exists("enableModification", $this->_propDict)) {
            return $this->_propDict["enableModification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableModification
    * Indicates whether spelling modifications are enabled. If enabled, user will get the search results for corrected query when there are no results for the original query with typos and get the spelling modification information in queryAlterationResponse property of the response. Optional.
    *
    * @param bool $val The value of the enableModification
    *
    * @return SearchAlterationOptions
    */
    public function setEnableModification($val)
    {
        $this->_propDict["enableModification"] = $val;
        return $this;
    }
    /**
    * Gets the enableSuggestion
    * Indicates whether spelling suggestions are enabled. If enabled, the user will get the search results for the original search query and suggestions for spelling correction in the queryAlterationResponse property of the response for the typos in the query. Optional.
    *
    * @return bool|null The enableSuggestion
    */
    public function getEnableSuggestion()
    {
        if (array_key_exists("enableSuggestion", $this->_propDict)) {
            return $this->_propDict["enableSuggestion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableSuggestion
    * Indicates whether spelling suggestions are enabled. If enabled, the user will get the search results for the original search query and suggestions for spelling correction in the queryAlterationResponse property of the response for the typos in the query. Optional.
    *
    * @param bool $val The value of the enableSuggestion
    *
    * @return SearchAlterationOptions
    */
    public function setEnableSuggestion($val)
    {
        $this->_propDict["enableSuggestion"] = $val;
        return $this;
    }
}
