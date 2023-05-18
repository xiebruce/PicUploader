<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenantAlertLog File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* ManagedTenantAlertLog class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenantAlertLog extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the content
    *
    * @return AlertLogContent|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\Beta\Microsoft\Graph\ManagedTenants\Model\AlertLogContent") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = new AlertLogContent($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    *
    * @param AlertLogContent $val The content
    *
    * @return ManagedTenantAlertLog
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the createdByUserId
    *
    * @return string|null The createdByUserId
    */
    public function getCreatedByUserId()
    {
        if (array_key_exists("createdByUserId", $this->_propDict)) {
            return $this->_propDict["createdByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdByUserId
    *
    * @param string $val The createdByUserId
    *
    * @return ManagedTenantAlertLog
    */
    public function setCreatedByUserId($val)
    {
        $this->_propDict["createdByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ManagedTenantAlertLog
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionByUserId
    *
    * @return string|null The lastActionByUserId
    */
    public function getLastActionByUserId()
    {
        if (array_key_exists("lastActionByUserId", $this->_propDict)) {
            return $this->_propDict["lastActionByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastActionByUserId
    *
    * @param string $val The lastActionByUserId
    *
    * @return ManagedTenantAlertLog
    */
    public function setLastActionByUserId($val)
    {
        $this->_propDict["lastActionByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionDateTime
    *
    * @return \DateTime|null The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime") || is_null($this->_propDict["lastActionDateTime"])) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActionDateTime
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return ManagedTenantAlertLog
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the alert
    *
    * @return ManagedTenantAlert|null The alert
    */
    public function getAlert()
    {
        if (array_key_exists("alert", $this->_propDict)) {
            if (is_a($this->_propDict["alert"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenantAlert") || is_null($this->_propDict["alert"])) {
                return $this->_propDict["alert"];
            } else {
                $this->_propDict["alert"] = new ManagedTenantAlert($this->_propDict["alert"]);
                return $this->_propDict["alert"];
            }
        }
        return null;
    }

    /**
    * Sets the alert
    *
    * @param ManagedTenantAlert $val The alert
    *
    * @return ManagedTenantAlertLog
    */
    public function setAlert($val)
    {
        $this->_propDict["alert"] = $val;
        return $this;
    }

}
