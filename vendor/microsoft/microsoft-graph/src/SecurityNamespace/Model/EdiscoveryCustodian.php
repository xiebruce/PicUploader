<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryCustodian File
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
* EdiscoveryCustodian class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryCustodian extends DataSourceContainer
{
    /**
    * Gets the acknowledgedDateTime
    * Date and time the custodian acknowledged a hold notification.
    *
    * @return \DateTime|null The acknowledgedDateTime
    */
    public function getAcknowledgedDateTime()
    {
        if (array_key_exists("acknowledgedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["acknowledgedDateTime"], "\DateTime") || is_null($this->_propDict["acknowledgedDateTime"])) {
                return $this->_propDict["acknowledgedDateTime"];
            } else {
                $this->_propDict["acknowledgedDateTime"] = new \DateTime($this->_propDict["acknowledgedDateTime"]);
                return $this->_propDict["acknowledgedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the acknowledgedDateTime
    * Date and time the custodian acknowledged a hold notification.
    *
    * @param \DateTime $val The acknowledgedDateTime
    *
    * @return EdiscoveryCustodian
    */
    public function setAcknowledgedDateTime($val)
    {
        $this->_propDict["acknowledgedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the email
    * Email address of the custodian.
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    * Email address of the custodian.
    *
    * @param string $val The email
    *
    * @return EdiscoveryCustodian
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the lastIndexOperation
    * Operation entity that represents the latest indexing for the custodian.
    *
    * @return EdiscoveryIndexOperation|null The lastIndexOperation
    */
    public function getLastIndexOperation()
    {
        if (array_key_exists("lastIndexOperation", $this->_propDict)) {
            if (is_a($this->_propDict["lastIndexOperation"], "\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryIndexOperation") || is_null($this->_propDict["lastIndexOperation"])) {
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
    * Operation entity that represents the latest indexing for the custodian.
    *
    * @param EdiscoveryIndexOperation $val The lastIndexOperation
    *
    * @return EdiscoveryCustodian
    */
    public function setLastIndexOperation($val)
    {
        $this->_propDict["lastIndexOperation"] = $val;
        return $this;
    }


     /**
     * Gets the siteSources
    * Data source entity for SharePoint sites associated with the custodian.
     *
     * @return array|null The siteSources
     */
    public function getSiteSources()
    {
        if (array_key_exists("siteSources", $this->_propDict)) {
           return $this->_propDict["siteSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteSources
    * Data source entity for SharePoint sites associated with the custodian.
    *
    * @param SiteSource[] $val The siteSources
    *
    * @return EdiscoveryCustodian
    */
    public function setSiteSources($val)
    {
        $this->_propDict["siteSources"] = $val;
        return $this;
    }


     /**
     * Gets the unifiedGroupSources
    * Data source entity for groups associated with the custodian.
     *
     * @return array|null The unifiedGroupSources
     */
    public function getUnifiedGroupSources()
    {
        if (array_key_exists("unifiedGroupSources", $this->_propDict)) {
           return $this->_propDict["unifiedGroupSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unifiedGroupSources
    * Data source entity for groups associated with the custodian.
    *
    * @param UnifiedGroupSource[] $val The unifiedGroupSources
    *
    * @return EdiscoveryCustodian
    */
    public function setUnifiedGroupSources($val)
    {
        $this->_propDict["unifiedGroupSources"] = $val;
        return $this;
    }


     /**
     * Gets the userSources
    * Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     *
     * @return array|null The userSources
     */
    public function getUserSources()
    {
        if (array_key_exists("userSources", $this->_propDict)) {
           return $this->_propDict["userSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userSources
    * Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
    *
    * @param UserSource[] $val The userSources
    *
    * @return EdiscoveryCustodian
    */
    public function setUserSources($val)
    {
        $this->_propDict["userSources"] = $val;
        return $this;
    }

}
