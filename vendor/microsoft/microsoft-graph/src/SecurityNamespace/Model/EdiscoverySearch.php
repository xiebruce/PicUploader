<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoverySearch File
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
* EdiscoverySearch class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoverySearch extends Search
{
    /**
    * Gets the dataSourceScopes
    * When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
    *
    * @return DataSourceScopes|null The dataSourceScopes
    */
    public function getDataSourceScopes()
    {
        if (array_key_exists("dataSourceScopes", $this->_propDict)) {
            if (is_a($this->_propDict["dataSourceScopes"], "\Microsoft\Graph\SecurityNamespace\Model\DataSourceScopes") || is_null($this->_propDict["dataSourceScopes"])) {
                return $this->_propDict["dataSourceScopes"];
            } else {
                $this->_propDict["dataSourceScopes"] = new DataSourceScopes($this->_propDict["dataSourceScopes"]);
                return $this->_propDict["dataSourceScopes"];
            }
        }
        return null;
    }

    /**
    * Sets the dataSourceScopes
    * When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
    *
    * @param DataSourceScopes $val The dataSourceScopes
    *
    * @return EdiscoverySearch
    */
    public function setDataSourceScopes($val)
    {
        $this->_propDict["dataSourceScopes"] = $val;
        return $this;
    }


     /**
     * Gets the additionalSources
    * Adds an additional source to the eDiscovery search.
     *
     * @return array|null The additionalSources
     */
    public function getAdditionalSources()
    {
        if (array_key_exists("additionalSources", $this->_propDict)) {
           return $this->_propDict["additionalSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalSources
    * Adds an additional source to the eDiscovery search.
    *
    * @param DataSource[] $val The additionalSources
    *
    * @return EdiscoverySearch
    */
    public function setAdditionalSources($val)
    {
        $this->_propDict["additionalSources"] = $val;
        return $this;
    }

    /**
    * Gets the addToReviewSetOperation
    * Adds the results of the eDiscovery search to the specified reviewSet.
    *
    * @return EdiscoveryAddToReviewSetOperation|null The addToReviewSetOperation
    */
    public function getAddToReviewSetOperation()
    {
        if (array_key_exists("addToReviewSetOperation", $this->_propDict)) {
            if (is_a($this->_propDict["addToReviewSetOperation"], "\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryAddToReviewSetOperation") || is_null($this->_propDict["addToReviewSetOperation"])) {
                return $this->_propDict["addToReviewSetOperation"];
            } else {
                $this->_propDict["addToReviewSetOperation"] = new EdiscoveryAddToReviewSetOperation($this->_propDict["addToReviewSetOperation"]);
                return $this->_propDict["addToReviewSetOperation"];
            }
        }
        return null;
    }

    /**
    * Sets the addToReviewSetOperation
    * Adds the results of the eDiscovery search to the specified reviewSet.
    *
    * @param EdiscoveryAddToReviewSetOperation $val The addToReviewSetOperation
    *
    * @return EdiscoverySearch
    */
    public function setAddToReviewSetOperation($val)
    {
        $this->_propDict["addToReviewSetOperation"] = $val;
        return $this;
    }


     /**
     * Gets the custodianSources
    * Custodian sources that are included in the eDiscovery search.
     *
     * @return array|null The custodianSources
     */
    public function getCustodianSources()
    {
        if (array_key_exists("custodianSources", $this->_propDict)) {
           return $this->_propDict["custodianSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the custodianSources
    * Custodian sources that are included in the eDiscovery search.
    *
    * @param DataSource[] $val The custodianSources
    *
    * @return EdiscoverySearch
    */
    public function setCustodianSources($val)
    {
        $this->_propDict["custodianSources"] = $val;
        return $this;
    }

    /**
    * Gets the lastEstimateStatisticsOperation
    * The last estimate operation associated with the eDiscovery search.
    *
    * @return EdiscoveryEstimateOperation|null The lastEstimateStatisticsOperation
    */
    public function getLastEstimateStatisticsOperation()
    {
        if (array_key_exists("lastEstimateStatisticsOperation", $this->_propDict)) {
            if (is_a($this->_propDict["lastEstimateStatisticsOperation"], "\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryEstimateOperation") || is_null($this->_propDict["lastEstimateStatisticsOperation"])) {
                return $this->_propDict["lastEstimateStatisticsOperation"];
            } else {
                $this->_propDict["lastEstimateStatisticsOperation"] = new EdiscoveryEstimateOperation($this->_propDict["lastEstimateStatisticsOperation"]);
                return $this->_propDict["lastEstimateStatisticsOperation"];
            }
        }
        return null;
    }

    /**
    * Sets the lastEstimateStatisticsOperation
    * The last estimate operation associated with the eDiscovery search.
    *
    * @param EdiscoveryEstimateOperation $val The lastEstimateStatisticsOperation
    *
    * @return EdiscoverySearch
    */
    public function setLastEstimateStatisticsOperation($val)
    {
        $this->_propDict["lastEstimateStatisticsOperation"] = $val;
        return $this;
    }


     /**
     * Gets the noncustodialSources
    * noncustodialDataSource sources that are included in the eDiscovery search
     *
     * @return array|null The noncustodialSources
     */
    public function getNoncustodialSources()
    {
        if (array_key_exists("noncustodialSources", $this->_propDict)) {
           return $this->_propDict["noncustodialSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the noncustodialSources
    * noncustodialDataSource sources that are included in the eDiscovery search
    *
    * @param EdiscoveryNoncustodialDataSource[] $val The noncustodialSources
    *
    * @return EdiscoverySearch
    */
    public function setNoncustodialSources($val)
    {
        $this->_propDict["noncustodialSources"] = $val;
        return $this;
    }

}
