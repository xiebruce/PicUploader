<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataSourceContainer File
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
* DataSourceContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataSourceContainer extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdDateTime
    * Created date and time of the dataSourceContainer entity.
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
    * Created date and time of the dataSourceContainer entity.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DataSourceContainer
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the dataSourceContainer entity.
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
    * Display name of the dataSourceContainer entity.
    *
    * @param string $val The displayName
    *
    * @return DataSourceContainer
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the holdStatus
    * The hold status of the dataSourceContainer.The possible values are: notApplied, applied, applying, removing, partial
    *
    * @return DataSourceHoldStatus|null The holdStatus
    */
    public function getHoldStatus()
    {
        if (array_key_exists("holdStatus", $this->_propDict)) {
            if (is_a($this->_propDict["holdStatus"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DataSourceHoldStatus") || is_null($this->_propDict["holdStatus"])) {
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
    * The hold status of the dataSourceContainer.The possible values are: notApplied, applied, applying, removing, partial
    *
    * @param DataSourceHoldStatus $val The holdStatus
    *
    * @return DataSourceContainer
    */
    public function setHoldStatus($val)
    {
        $this->_propDict["holdStatus"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Last modified date and time of the dataSourceContainer.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Last modified date and time of the dataSourceContainer.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DataSourceContainer
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the releasedDateTime
    * Date and time that the dataSourceContainer was released from the case.
    *
    * @return \DateTime|null The releasedDateTime
    */
    public function getReleasedDateTime()
    {
        if (array_key_exists("releasedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releasedDateTime"], "\DateTime") || is_null($this->_propDict["releasedDateTime"])) {
                return $this->_propDict["releasedDateTime"];
            } else {
                $this->_propDict["releasedDateTime"] = new \DateTime($this->_propDict["releasedDateTime"]);
                return $this->_propDict["releasedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the releasedDateTime
    * Date and time that the dataSourceContainer was released from the case.
    *
    * @param \DateTime $val The releasedDateTime
    *
    * @return DataSourceContainer
    */
    public function setReleasedDateTime($val)
    {
        $this->_propDict["releasedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Latest status of the dataSourceContainer. Possible values are: Active, Released.
    *
    * @return DataSourceContainerStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DataSourceContainerStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DataSourceContainerStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Latest status of the dataSourceContainer. Possible values are: Active, Released.
    *
    * @param DataSourceContainerStatus $val The status
    *
    * @return DataSourceContainer
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
