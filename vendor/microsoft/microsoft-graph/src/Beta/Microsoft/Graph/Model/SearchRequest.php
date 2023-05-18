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
namespace Beta\Microsoft\Graph\Model;
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
    * Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
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
    * Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
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
    * Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
    *
    * @return AggregationOption|null The aggregations
    */
    public function getAggregations()
    {
        if (array_key_exists("aggregations", $this->_propDict)) {
            if (is_a($this->_propDict["aggregations"], "\Beta\Microsoft\Graph\Model\AggregationOption") || is_null($this->_propDict["aggregations"])) {
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
    * Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
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
    * Gets the collapseProperties
    * Contains the ordered collection of fields and limit to collapse results. Optional.
    *
    * @return CollapseProperty|null The collapseProperties
    */
    public function getCollapseProperties()
    {
        if (array_key_exists("collapseProperties", $this->_propDict)) {
            if (is_a($this->_propDict["collapseProperties"], "\Beta\Microsoft\Graph\Model\CollapseProperty") || is_null($this->_propDict["collapseProperties"])) {
                return $this->_propDict["collapseProperties"];
            } else {
                $this->_propDict["collapseProperties"] = new CollapseProperty($this->_propDict["collapseProperties"]);
                return $this->_propDict["collapseProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the collapseProperties
    * Contains the ordered collection of fields and limit to collapse results. Optional.
    *
    * @param CollapseProperty $val The value to assign to the collapseProperties
    *
    * @return SearchRequest The SearchRequest
    */
    public function setCollapseProperties($val)
    {
        $this->_propDict["collapseProperties"] = $val;
         return $this;
    }
    /**
    * Gets the contentSources
    * Contains the connection to be targeted. Respects the following format : /external/connections/connectionid where connectionid is the ConnectionId defined in the Connectors Administration.  Note: contentSource is only applicable when entityType=externalItem. Optional.
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
    * Contains the connection to be targeted. Respects the following format : /external/connections/connectionid where connectionid is the ConnectionId defined in the Connectors Administration.  Note: contentSource is only applicable when entityType=externalItem. Optional.
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
    * This triggers hybrid sort for messages: the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
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
    * This triggers hybrid sort for messages: the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
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
    * One or more types of resources expected in the response. Possible values are: list, site, listItem, message, event, drive, driveItem, person, externalItem, acronym, bookmark, chatMessage. For details about combinations of two or more entity types that are supported in the same search request, see known limitations. Required.
    *
    * @return EntityType|null The entityTypes
    */
    public function getEntityTypes()
    {
        if (array_key_exists("entityTypes", $this->_propDict)) {
            if (is_a($this->_propDict["entityTypes"], "\Beta\Microsoft\Graph\Model\EntityType") || is_null($this->_propDict["entityTypes"])) {
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
    * One or more types of resources expected in the response. Possible values are: list, site, listItem, message, event, drive, driveItem, person, externalItem, acronym, bookmark, chatMessage. For details about combinations of two or more entity types that are supported in the same search request, see known limitations. Required.
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
    * Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from content that Microsoft Graph connectors bring in. The fields property can be using the semantic labels applied to properties. For example, if a property is label as title, you can retrieve it using the following syntax : label_title.Optional.
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
    * Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from content that Microsoft Graph connectors bring in. The fields property can be using the semantic labels applied to properties. For example, if a property is label as title, you can retrieve it using the following syntax : label_title.Optional.
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
    * Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
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
    * Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
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
    * Contains the query terms. Required.
    *
    * @return SearchQuery|null The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            if (is_a($this->_propDict["query"], "\Beta\Microsoft\Graph\Model\SearchQuery") || is_null($this->_propDict["query"])) {
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
    * Contains the query terms. Required.
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
    * Provides query alteration options formatted as a JSON blob that contains two optional flags related to spelling correction. Optional.
    *
    * @return SearchAlterationOptions|null The queryAlterationOptions
    */
    public function getQueryAlterationOptions()
    {
        if (array_key_exists("queryAlterationOptions", $this->_propDict)) {
            if (is_a($this->_propDict["queryAlterationOptions"], "\Beta\Microsoft\Graph\Model\SearchAlterationOptions") || is_null($this->_propDict["queryAlterationOptions"])) {
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
    * Provides query alteration options formatted as a JSON blob that contains two optional flags related to spelling correction. Optional.
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
    * Required for searches that use application permissions. Represents the geographic location for the search. For details, see Get the region value.
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
    * Required for searches that use application permissions. Represents the geographic location for the search. For details, see Get the region value.
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
    * Provides the search result templates options for rendering connectors search results.
    *
    * @return ResultTemplateOption|null The resultTemplateOptions
    */
    public function getResultTemplateOptions()
    {
        if (array_key_exists("resultTemplateOptions", $this->_propDict)) {
            if (is_a($this->_propDict["resultTemplateOptions"], "\Beta\Microsoft\Graph\Model\ResultTemplateOption") || is_null($this->_propDict["resultTemplateOptions"])) {
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
    * Provides the search result templates options for rendering connectors search results.
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
    * Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
    *
    * @return SharePointOneDriveOptions|null The sharePointOneDriveOptions
    */
    public function getSharePointOneDriveOptions()
    {
        if (array_key_exists("sharePointOneDriveOptions", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointOneDriveOptions"], "\Beta\Microsoft\Graph\Model\SharePointOneDriveOptions") || is_null($this->_propDict["sharePointOneDriveOptions"])) {
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
    * Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
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
    * The size of the page to be retrieved. Optional.
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
    * The size of the page to be retrieved. Optional.
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
    * Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
    *
    * @return SortProperty|null The sortProperties
    */
    public function getSortProperties()
    {
        if (array_key_exists("sortProperties", $this->_propDict)) {
            if (is_a($this->_propDict["sortProperties"], "\Beta\Microsoft\Graph\Model\SortProperty") || is_null($this->_propDict["sortProperties"])) {
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
    * Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
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
    /**
    * Gets the stored_fields
    *
    * @return string|null The stored_fields
    */
    public function getStored_fields()
    {
        if (array_key_exists("storedFields", $this->_propDict)) {
            return $this->_propDict["storedFields"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stored_fields
    *
    * @param string $val The value of the stored_fields
    *
    * @return SearchRequest
    */
    public function setStored_fields($val)
    {
        $this->_propDict["storedFields"] = $val;
        return $this;
    }
    /**
    * Gets the trimDuplicates
    * Indicates whether to trim away the duplicate SharePoint files from search results. Default value is false. Optional.
    *
    * @return bool|null The trimDuplicates
    */
    public function getTrimDuplicates()
    {
        if (array_key_exists("trimDuplicates", $this->_propDict)) {
            return $this->_propDict["trimDuplicates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trimDuplicates
    * Indicates whether to trim away the duplicate SharePoint files from search results. Default value is false. Optional.
    *
    * @param bool $val The value of the trimDuplicates
    *
    * @return SearchRequest
    */
    public function setTrimDuplicates($val)
    {
        $this->_propDict["trimDuplicates"] = $val;
        return $this;
    }
}
