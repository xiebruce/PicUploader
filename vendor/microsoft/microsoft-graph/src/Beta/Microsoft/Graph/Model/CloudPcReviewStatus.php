<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcReviewStatus File
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
* CloudPcReviewStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcReviewStatus extends Entity
{
    /**
    * Gets the azureStorageAccountId
    *
    * @return string|null The azureStorageAccountId
    */
    public function getAzureStorageAccountId()
    {
        if (array_key_exists("azureStorageAccountId", $this->_propDict)) {
            return $this->_propDict["azureStorageAccountId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureStorageAccountId
    *
    * @param string $val The value of the azureStorageAccountId
    *
    * @return CloudPcReviewStatus
    */
    public function setAzureStorageAccountId($val)
    {
        $this->_propDict["azureStorageAccountId"] = $val;
        return $this;
    }
    /**
    * Gets the azureStorageAccountName
    *
    * @return string|null The azureStorageAccountName
    */
    public function getAzureStorageAccountName()
    {
        if (array_key_exists("azureStorageAccountName", $this->_propDict)) {
            return $this->_propDict["azureStorageAccountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureStorageAccountName
    *
    * @param string $val The value of the azureStorageAccountName
    *
    * @return CloudPcReviewStatus
    */
    public function setAzureStorageAccountName($val)
    {
        $this->_propDict["azureStorageAccountName"] = $val;
        return $this;
    }
    /**
    * Gets the inReview
    *
    * @return bool|null The inReview
    */
    public function getInReview()
    {
        if (array_key_exists("inReview", $this->_propDict)) {
            return $this->_propDict["inReview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inReview
    *
    * @param bool $val The value of the inReview
    *
    * @return CloudPcReviewStatus
    */
    public function setInReview($val)
    {
        $this->_propDict["inReview"] = $val;
        return $this;
    }

    /**
    * Gets the restorePointDateTime
    *
    * @return \DateTime|null The restorePointDateTime
    */
    public function getRestorePointDateTime()
    {
        if (array_key_exists("restorePointDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["restorePointDateTime"], "\DateTime") || is_null($this->_propDict["restorePointDateTime"])) {
                return $this->_propDict["restorePointDateTime"];
            } else {
                $this->_propDict["restorePointDateTime"] = new \DateTime($this->_propDict["restorePointDateTime"]);
                return $this->_propDict["restorePointDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the restorePointDateTime
    *
    * @param \DateTime $val The value to assign to the restorePointDateTime
    *
    * @return CloudPcReviewStatus The CloudPcReviewStatus
    */
    public function setRestorePointDateTime($val)
    {
        $this->_propDict["restorePointDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the reviewStartDateTime
    *
    * @return \DateTime|null The reviewStartDateTime
    */
    public function getReviewStartDateTime()
    {
        if (array_key_exists("reviewStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewStartDateTime"], "\DateTime") || is_null($this->_propDict["reviewStartDateTime"])) {
                return $this->_propDict["reviewStartDateTime"];
            } else {
                $this->_propDict["reviewStartDateTime"] = new \DateTime($this->_propDict["reviewStartDateTime"]);
                return $this->_propDict["reviewStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewStartDateTime
    *
    * @param \DateTime $val The value to assign to the reviewStartDateTime
    *
    * @return CloudPcReviewStatus The CloudPcReviewStatus
    */
    public function setReviewStartDateTime($val)
    {
        $this->_propDict["reviewStartDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the subscriptionId
    *
    * @return string|null The subscriptionId
    */
    public function getSubscriptionId()
    {
        if (array_key_exists("subscriptionId", $this->_propDict)) {
            return $this->_propDict["subscriptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriptionId
    *
    * @param string $val The value of the subscriptionId
    *
    * @return CloudPcReviewStatus
    */
    public function setSubscriptionId($val)
    {
        $this->_propDict["subscriptionId"] = $val;
        return $this;
    }
    /**
    * Gets the subscriptionName
    *
    * @return string|null The subscriptionName
    */
    public function getSubscriptionName()
    {
        if (array_key_exists("subscriptionName", $this->_propDict)) {
            return $this->_propDict["subscriptionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriptionName
    *
    * @param string $val The value of the subscriptionName
    *
    * @return CloudPcReviewStatus
    */
    public function setSubscriptionName($val)
    {
        $this->_propDict["subscriptionName"] = $val;
        return $this;
    }

    /**
    * Gets the userAccessLevel
    *
    * @return CloudPcUserAccessLevel|null The userAccessLevel
    */
    public function getUserAccessLevel()
    {
        if (array_key_exists("userAccessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["userAccessLevel"], "\Beta\Microsoft\Graph\Model\CloudPcUserAccessLevel") || is_null($this->_propDict["userAccessLevel"])) {
                return $this->_propDict["userAccessLevel"];
            } else {
                $this->_propDict["userAccessLevel"] = new CloudPcUserAccessLevel($this->_propDict["userAccessLevel"]);
                return $this->_propDict["userAccessLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccessLevel
    *
    * @param CloudPcUserAccessLevel $val The value to assign to the userAccessLevel
    *
    * @return CloudPcReviewStatus The CloudPcReviewStatus
    */
    public function setUserAccessLevel($val)
    {
        $this->_propDict["userAccessLevel"] = $val;
         return $this;
    }
}
