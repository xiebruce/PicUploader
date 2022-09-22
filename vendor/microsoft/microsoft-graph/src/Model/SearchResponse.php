<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchResponse File
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
* SearchResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchResponse extends Entity
{

    /**
    * Gets the hitsContainers
    * A collection of search results.
    *
    * @return SearchHitsContainer|null The hitsContainers
    */
    public function getHitsContainers()
    {
        if (array_key_exists("hitsContainers", $this->_propDict)) {
            if (is_a($this->_propDict["hitsContainers"], "\Microsoft\Graph\Model\SearchHitsContainer") || is_null($this->_propDict["hitsContainers"])) {
                return $this->_propDict["hitsContainers"];
            } else {
                $this->_propDict["hitsContainers"] = new SearchHitsContainer($this->_propDict["hitsContainers"]);
                return $this->_propDict["hitsContainers"];
            }
        }
        return null;
    }

    /**
    * Sets the hitsContainers
    * A collection of search results.
    *
    * @param SearchHitsContainer $val The value to assign to the hitsContainers
    *
    * @return SearchResponse The SearchResponse
    */
    public function setHitsContainers($val)
    {
        $this->_propDict["hitsContainers"] = $val;
         return $this;
    }

    /**
    * Gets the queryAlterationResponse
    * Provides information related to spelling corrections in the alteration response.
    *
    * @return AlterationResponse|null The queryAlterationResponse
    */
    public function getQueryAlterationResponse()
    {
        if (array_key_exists("queryAlterationResponse", $this->_propDict)) {
            if (is_a($this->_propDict["queryAlterationResponse"], "\Microsoft\Graph\Model\AlterationResponse") || is_null($this->_propDict["queryAlterationResponse"])) {
                return $this->_propDict["queryAlterationResponse"];
            } else {
                $this->_propDict["queryAlterationResponse"] = new AlterationResponse($this->_propDict["queryAlterationResponse"]);
                return $this->_propDict["queryAlterationResponse"];
            }
        }
        return null;
    }

    /**
    * Sets the queryAlterationResponse
    * Provides information related to spelling corrections in the alteration response.
    *
    * @param AlterationResponse $val The value to assign to the queryAlterationResponse
    *
    * @return SearchResponse The SearchResponse
    */
    public function setQueryAlterationResponse($val)
    {
        $this->_propDict["queryAlterationResponse"] = $val;
         return $this;
    }

    /**
    * Gets the resultTemplates
    * A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
    *
    * @return ResultTemplateDictionary|null The resultTemplates
    */
    public function getResultTemplates()
    {
        if (array_key_exists("resultTemplates", $this->_propDict)) {
            if (is_a($this->_propDict["resultTemplates"], "\Microsoft\Graph\Model\ResultTemplateDictionary") || is_null($this->_propDict["resultTemplates"])) {
                return $this->_propDict["resultTemplates"];
            } else {
                $this->_propDict["resultTemplates"] = new ResultTemplateDictionary($this->_propDict["resultTemplates"]);
                return $this->_propDict["resultTemplates"];
            }
        }
        return null;
    }

    /**
    * Sets the resultTemplates
    * A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
    *
    * @param ResultTemplateDictionary $val The value to assign to the resultTemplates
    *
    * @return SearchResponse The SearchResponse
    */
    public function setResultTemplates($val)
    {
        $this->_propDict["resultTemplates"] = $val;
         return $this;
    }
    /**
    * Gets the searchTerms
    * Contains the search terms sent in the initial search query.
    *
    * @return string|null The searchTerms
    */
    public function getSearchTerms()
    {
        if (array_key_exists("searchTerms", $this->_propDict)) {
            return $this->_propDict["searchTerms"];
        } else {
            return null;
        }
    }

    /**
    * Sets the searchTerms
    * Contains the search terms sent in the initial search query.
    *
    * @param string $val The value of the searchTerms
    *
    * @return SearchResponse
    */
    public function setSearchTerms($val)
    {
        $this->_propDict["searchTerms"] = $val;
        return $this;
    }
}
