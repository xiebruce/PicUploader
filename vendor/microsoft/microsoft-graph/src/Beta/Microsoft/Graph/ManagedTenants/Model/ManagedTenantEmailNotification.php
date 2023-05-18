<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenantEmailNotification File
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
* ManagedTenantEmailNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenantEmailNotification extends \Beta\Microsoft\Graph\Model\Entity
{
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
    * @return ManagedTenantEmailNotification
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
    * @return ManagedTenantEmailNotification
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the emailAddresses
     *
     * @return array|null The emailAddresses
     */
    public function getEmailAddresses()
    {
        if (array_key_exists("emailAddresses", $this->_propDict)) {
           return $this->_propDict["emailAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddresses
    *
    * @param Email[] $val The emailAddresses
    *
    * @return ManagedTenantEmailNotification
    */
    public function setEmailAddresses($val)
    {
        $this->_propDict["emailAddresses"] = $val;
        return $this;
    }

    /**
    * Gets the emailBody
    *
    * @return string|null The emailBody
    */
    public function getEmailBody()
    {
        if (array_key_exists("emailBody", $this->_propDict)) {
            return $this->_propDict["emailBody"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailBody
    *
    * @param string $val The emailBody
    *
    * @return ManagedTenantEmailNotification
    */
    public function setEmailBody($val)
    {
        $this->_propDict["emailBody"] = $val;
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
    * @return ManagedTenantEmailNotification
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
    * @return ManagedTenantEmailNotification
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return ManagedTenantEmailNotification
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
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
    * @return ManagedTenantEmailNotification
    */
    public function setAlert($val)
    {
        $this->_propDict["alert"] = $val;
        return $this;
    }

}
