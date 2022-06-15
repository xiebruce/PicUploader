<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryNoncustodialDataSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* EdiscoveryNoncustodialDataSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryNoncustodialDataSource extends DataSourceContainer
{
    /**
    * Gets the dataSource
    * User source or SharePoint site data source as non-custodial data source.
    *
    * @return DataSource|null The dataSource
    */
    public function getDataSource()
    {
        if (array_key_exists("dataSource", $this->_propDict)) {
            if (is_a($this->_propDict["dataSource"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DataSource") || is_null($this->_propDict["dataSource"])) {
                return $this->_propDict["dataSource"];
            } else {
                $this->_propDict["dataSource"] = new DataSource($this->_propDict["dataSource"]);
                return $this->_propDict["dataSource"];
            }
        }
        return null;
    }

    /**
    * Sets the dataSource
    * User source or SharePoint site data source as non-custodial data source.
    *
    * @param DataSource $val The dataSource
    *
    * @return EdiscoveryNoncustodialDataSource
    */
    public function setDataSource($val)
    {
        $this->_propDict["dataSource"] = $val;
        return $this;
    }

    /**
    * Gets the lastIndexOperation
    * Operation entity that represents the latest indexing for the non-custodial data source.
    *
    * @return EdiscoveryIndexOperation|null The lastIndexOperation
    */
    public function getLastIndexOperation()
    {
        if (array_key_exists("lastIndexOperation", $this->_propDict)) {
            if (is_a($this->_propDict["lastIndexOperation"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryIndexOperation") || is_null($this->_propDict["lastIndexOperation"])) {
                return $this->_propDict["lastIndexOperation"];
            } else {
                $this->_propDict["lastIndexOperation"] = new EdiscoveryIndexOperation($this->_propDict["lastIndexOperation"]);
                return $this->_propDict["lastIndexOperation"];
            }
        }
        return null;
    }

    /**
    * Sets the lastIndexOperation
    * Operation entity that represents the latest indexing for the non-custodial data source.
    *
    * @param EdiscoveryIndexOperation $val The lastIndexOperation
    *
    * @return EdiscoveryNoncustodialDataSource
    */
    public function setLastIndexOperation($val)
    {
        $this->_propDict["lastIndexOperation"] = $val;
        return $this;
    }

}
