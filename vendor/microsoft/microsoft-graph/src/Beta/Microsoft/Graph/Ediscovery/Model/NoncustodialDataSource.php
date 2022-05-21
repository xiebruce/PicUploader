<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NoncustodialDataSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

/**
* NoncustodialDataSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NoncustodialDataSource extends DataSourceContainer
{
    /**
    * Gets the applyHoldToSource
    * Indicates if hold is applied to non-custodial data source (such as mailbox or site).
    *
    * @return bool|null The applyHoldToSource
    */
    public function getApplyHoldToSource()
    {
        if (array_key_exists("applyHoldToSource", $this->_propDict)) {
            return $this->_propDict["applyHoldToSource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applyHoldToSource
    * Indicates if hold is applied to non-custodial data source (such as mailbox or site).
    *
    * @param bool $val The applyHoldToSource
    *
    * @return NoncustodialDataSource
    */
    public function setApplyHoldToSource($val)
    {
        $this->_propDict["applyHoldToSource"] = boolval($val);
        return $this;
    }

    /**
    * Gets the dataSource
    * User source or SharePoint site data source as non-custodial data source.
    *
    * @return DataSource|null The dataSource
    */
    public function getDataSource()
    {
        if (array_key_exists("dataSource", $this->_propDict)) {
            if (is_a($this->_propDict["dataSource"], "\Beta\Microsoft\Graph\Ediscovery\Model\DataSource") || is_null($this->_propDict["dataSource"])) {
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
    * @return NoncustodialDataSource
    */
    public function setDataSource($val)
    {
        $this->_propDict["dataSource"] = $val;
        return $this;
    }

}
