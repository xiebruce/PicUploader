<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchRequest File
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
* SearchRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchRequest extends Entity
{
    /**
    * Gets the aggregationFilters
    *
    * @return string|null The aggregationFilters
    */
    public function getAggregationFilters()
    {
        if (array_key_exists("aggregationFilters", $this->_propDict)) {
            return $this->_propDict["aggregationFilters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aggregationFilters
    *
    * @param string $val The value of the aggregationFilters
    *
    * @return SearchRequest
    */
    public function setAggregationFilters($val)
    {
        $this->_propDict["aggregationFilters"] = $val;
        return $this;
    }

    /**
    * Gets the aggregations
    *
    * @return AggregationOption|null The aggregations
    */
    public function getAggregations()
    {
        if (array_key_exists("aggregations", $this->_propDict)) {
            if (is_a($this->_propDict["aggregations"], "\Microsoft\Graph\Model\AggregationOption") || is_null($this->_propDict["aggregations"])) {
                return $this->_propDict["aggregations"];
            } else {
                $this->_propDict["aggregations"] = new AggregationOption($this->_propDict["aggregations"]);
                return $this->_propDict["aggregations"];
            }
        }
        return null;
    }

    /**
    * Sets the aggregations
    *
    * @param AggregationOption $val The value to assign to the aggregations
    *
    * @return SearchRequest The SearchRequest
    */
    public function setAggregations($val)
    {
        $this->_propDict["aggregations"] = $val;
         return $this;
    }
    /**
    * Gets the contentSources
    *
    * @return string|null The contentSources
    */
    public function getContentSources()
    {
        if (array_key_exists("contentSources", $this->_propDict)) {
            return $this->_propDict["contentSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentSources
    *
    * @param string $val The value of the contentSources
    *
    * @return SearchRequest
    */
    public function setContentSources($val)
    {
        $this->_propDict["contentSources"] = $val;
        return $this;
    }
    /**
    * Gets the enableTopResults
    *
    * @return bool|null The enableTopResults
    */
    public function getEnableTopResults()
    {
        if (array_key_exists("enableTopResults", $this->_propDict)) {
            return $this->_propDict["enableTopResults"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableTopResults
    *
    * @param bool $val The value of the enableTopResults
    *
    * @return SearchRequest
    */
    public function setEnableTopResults($val)
    {
        $this->_propDict["enableTopResults"] = $val;
        return $this;
    }

    /**
    * Gets the entityTypes
    *
    * @return EntityType|null The entityTypes
    */
    public function getEntityTypes()
    {
        if (array_key_exists("entityTypes", $this->_propDict)) {
            if (is_a($this->_propDict["entityTypes"], "\Microsoft\Graph\Model\EntityType") || is_null($this->_propDict["entityTypes"])) {
                return $this->_propDict["entityTypes"];
            } else {
                $this->_propDict["entityTypes"] = new EntityType($this->_propDict["entityTypes"]);
                return $this->_propDict["entityTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the entityTypes
    *
    * @param EntityType $val The value to assign to the entityTypes
    *
    * @return SearchRequest The SearchRequest
    */
    public function setEntityTypes($val)
    {
        $this->_propDict["entityTypes"] = $val;
         return $this;
    }
    /**
    * Gets the fields
    *
    * @return string|null The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            return $this->_propDict["fields"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fields
    *
    * @param string $val The value of the fields
    *
    * @return SearchRequest
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
        return $this;
    }
    /**
    * Gets the from
    *
    * @return int|null The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            return $this->_propDict["from"];
        } else {
            return null;
        }
    }

    /**
    * Sets the from
    *
    * @param int $val The value of the from
    *
    * @return SearchRequest
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }

    /**
    * Gets the query
    *
    * @return SearchQuery|null The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            if (is_a($this->_propDict["query"], "\Microsoft\Graph\Model\SearchQuery") || is_null($this->_propDict["query"])) {
                return $this->_propDict["query"];
            } else {
                $this->_propDict["query"] = new SearchQuery($this->_propDict["query"]);
                return $this->_propDict["query"];
            }
        }
        return null;
    }

    /**
    * Sets the query
    *
    * @param SearchQuery $val The value to assign to the query
    *
    * @return SearchRequest The SearchRequest
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
         return $this;
    }

    /**
    * Gets the queryAlterationOptions
    *
    * @return SearchAlterationOptions|null The queryAlterationOptions
    */
    public function getQueryAlterationOptions()
    {
        if (array_key_exists("queryAlterationOptions", $this->_propDict)) {
            if (is_a($this->_propDict["queryAlterationOptions"], "\Microsoft\Graph\Model\SearchAlterationOptions") || is_null($this->_propDict["queryAlterationOptions"])) {
                return $this->_propDict["queryAlterationOptions"];
            } else {
                $this->_propDict["queryAlterationOptions"] = new SearchAlterationOptions($this->_propDict["queryAlterationOptions"]);
                return $this->_propDict["queryAlterationOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the queryAlterationOptions
    *
    * @param SearchAlterationOptions $val The value to assign to the queryAlterationOptions
    *
    * @return SearchRequest The SearchRequest
    */
    public function setQueryAlterationOptions($val)
    {
        $this->_propDict["queryAlterationOptions"] = $val;
         return $this;
    }
    /**
    * Gets the region
    *
    * @return string|null The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            return $this->_propDict["region"];
        } else {
            return null;
        }
    }

    /**
    * Sets the region
    *
    * @param string $val The value of the region
    *
    * @return SearchRequest
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }

    /**
    * Gets the resultTemplateOptions
    *
    * @return ResultTemplateOption|null The resultTemplateOptions
    */
    public function getResultTemplateOptions()
    {
        if (array_key_exists("resultTemplateOptions", $this->_propDict)) {
            if (is_a($this->_propDict["resultTemplateOptions"], "\Microsoft\Graph\Model\ResultTemplateOption") || is_null($this->_propDict["resultTemplateOptions"])) {
                return $this->_propDict["resultTemplateOptions"];
            } else {
                $this->_propDict["resultTemplateOptions"] = new ResultTemplateOption($this->_propDict["resultTemplateOptions"]);
                return $this->_propDict["resultTemplateOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the resultTemplateOptions
    *
    * @param ResultTemplateOption $val The value to assign to the resultTemplateOptions
    *
    * @return SearchRequest The SearchRequest
    */
    public function setResultTemplateOptions($val)
    {
        $this->_propDict["resultTemplateOptions"] = $val;
         return $this;
    }

    /**
    * Gets the sharePointOneDriveOptions
    *
    * @return SharePointOneDriveOptions|null The sharePointOneDriveOptions
    */
    public function getSharePointOneDriveOptions()
    {
        if (array_key_exists("sharePointOneDriveOptions", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointOneDriveOptions"], "\Microsoft\Graph\Model\SharePointOneDriveOptions") || is_null($this->_propDict["sharePointOneDriveOptions"])) {
                return $this->_propDict["sharePointOneDriveOptions"];
            } else {
                $this->_propDict["sharePointOneDriveOptions"] = new SharePointOneDriveOptions($this->_propDict["sharePointOneDriveOptions"]);
                return $this->_propDict["sharePointOneDriveOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the sharePointOneDriveOptions
    *
    * @param SharePointOneDriveOptions $val The value to assign to the sharePointOneDriveOptions
    *
    * @return SearchRequest The SearchRequest
    */
    public function setSharePointOneDriveOptions($val)
    {
        $this->_propDict["sharePointOneDriveOptions"] = $val;
         return $this;
    }
    /**
    * Gets the size
    *
    * @return int|null The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    *
    * @param int $val The value of the size
    *
    * @return SearchRequest
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }

    /**
    * Gets the sortProperties
    *
    * @return SortProperty|null The sortProperties
    */
    public function getSortProperties()
    {
        if (array_key_exists("sortProperties", $this->_propDict)) {
            if (is_a($this->_propDict["sortProperties"], "\Microsoft\Graph\Model\SortProperty") || is_null($this->_propDict["sortProperties"])) {
                return $this->_propDict["sortProperties"];
            } else {
                $this->_propDict["sortProperties"] = new SortProperty($this->_propDict["sortProperties"]);
                return $this->_propDict["sortProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the sortProperties
    *
    * @param SortProperty $val The value to assign to the sortProperties
    *
    * @return SearchRequest The SearchRequest
    */
    public function setSortProperties($val)
    {
        $this->_propDict["sortProperties"] = $val;
         return $this;
    }
}
