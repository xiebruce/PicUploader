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
    * The resource ID of the Azure Storage account in which the Cloud PC snapshot is being saved.
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
    * The resource ID of the Azure Storage account in which the Cloud PC snapshot is being saved.
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
    * The name of the Azure Storage account in which the Cloud PC snapshot is being saved.
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
    * The name of the Azure Storage account in which the Cloud PC snapshot is being saved.
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
    * True if the Cloud PC is set to in review by the administrator.
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
    * True if the Cloud PC is set to in review by the administrator.
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
    * The specific date and time of the Cloud PC snapshot that was taken and saved automatically, when the Cloud PC is set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
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
    * The specific date and time of the Cloud PC snapshot that was taken and saved automatically, when the Cloud PC is set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
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
    * The specific date and time when the Cloud PC was set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
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
    * The specific date and time when the Cloud PC was set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
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
    * The ID of the Azure subscription in which the Cloud PC snapshot is being saved, in GUID format.
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
    * The ID of the Azure subscription in which the Cloud PC snapshot is being saved, in GUID format.
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
    * The name of the Azure subscription in which the Cloud PC snapshot is being saved.
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
    * The name of the Azure subscription in which the Cloud PC snapshot is being saved.
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
    * The access level of the end user on the Cloud PC. Possible values are: unrestricted, restricted.
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
    * The access level of the end user on the Cloud PC. Possible values are: unrestricted, restricted.
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
