<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventQuery File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* EventQuery class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EventQuery extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the query
    * Represents unique identification for the  query. 'Asset ID' for SharePoint Online and OneDrive for Business, 'keywords' for Exchange Online.
    *
    * @return string|null The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            return $this->_propDict["query"];
        } else {
            return null;
        }
    }

    /**
    * Sets the query
    * Represents unique identification for the  query. 'Asset ID' for SharePoint Online and OneDrive for Business, 'keywords' for Exchange Online.
    *
    * @param string $val The value of the query
    *
    * @return EventQuery
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
        return $this;
    }

    /**
    * Gets the queryType
    * Represents the type of query associated with an event. 'files' for SPO and ODB and 'messages' for EXO.The possible values are: files, messages, unknownFutureValue.
    *
    * @return QueryType|null The queryType
    */
    public function getQueryType()
    {
        if (array_key_exists("queryType", $this->_propDict)) {
            if (is_a($this->_propDict["queryType"], "\Microsoft\Graph\SecurityNamespace\Model\QueryType") || is_null($this->_propDict["queryType"])) {
                return $this->_propDict["queryType"];
            } else {
                $this->_propDict["queryType"] = new QueryType($this->_propDict["queryType"]);
                return $this->_propDict["queryType"];
            }
        }
        return null;
    }

    /**
    * Sets the queryType
    * Represents the type of query associated with an event. 'files' for SPO and ODB and 'messages' for EXO.The possible values are: files, messages, unknownFutureValue.
    *
    * @param QueryType $val The value to assign to the queryType
    *
    * @return EventQuery The EventQuery
    */
    public function setQueryType($val)
    {
        $this->_propDict["queryType"] = $val;
         return $this;
    }
}
