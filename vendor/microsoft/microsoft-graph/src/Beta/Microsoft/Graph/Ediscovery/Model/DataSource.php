<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataSource File
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
* DataSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataSource extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdBy
    * The user who created the dataSource.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * The user who created the dataSource.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The createdBy
    *
    * @return DataSource
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time the dataSource was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time the dataSource was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DataSource
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name of the dataSource. This will be the name of the SharePoint site.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the dataSource. This will be the name of the SharePoint site.
    *
    * @param string $val The displayName
    *
    * @return DataSource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the holdStatus
    *
    * @return DataSourceHoldStatus|null The holdStatus
    */
    public function getHoldStatus()
    {
        if (array_key_exists("holdStatus", $this->_propDict)) {
            if (is_a($this->_propDict["holdStatus"], "\Beta\Microsoft\Graph\Ediscovery\Model\DataSourceHoldStatus") || is_null($this->_propDict["holdStatus"])) {
                return $this->_propDict["holdStatus"];
            } else {
                $this->_propDict["holdStatus"] = new DataSourceHoldStatus($this->_propDict["holdStatus"]);
                return $this->_propDict["holdStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the holdStatus
    *
    * @param DataSourceHoldStatus $val The holdStatus
    *
    * @return DataSource
    */
    public function setHoldStatus($val)
    {
        $this->_propDict["holdStatus"] = $val;
        return $this;
    }

}
