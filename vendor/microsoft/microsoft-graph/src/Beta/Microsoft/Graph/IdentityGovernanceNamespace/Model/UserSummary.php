<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;
/**
* UserSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the failedTasks
    * The number of failed tasks for users in a user summary.
    *
    * @return int|null The failedTasks
    */
    public function getFailedTasks()
    {
        if (array_key_exists("failedTasks", $this->_propDict)) {
            return $this->_propDict["failedTasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedTasks
    * The number of failed tasks for users in a user summary.
    *
    * @param int $val The value of the failedTasks
    *
    * @return UserSummary
    */
    public function setFailedTasks($val)
    {
        $this->_propDict["failedTasks"] = $val;
        return $this;
    }
    /**
    * Gets the failedUsers
    * The number of failed users in a user summary.
    *
    * @return int|null The failedUsers
    */
    public function getFailedUsers()
    {
        if (array_key_exists("failedUsers", $this->_propDict)) {
            return $this->_propDict["failedUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedUsers
    * The number of failed users in a user summary.
    *
    * @param int $val The value of the failedUsers
    *
    * @return UserSummary
    */
    public function setFailedUsers($val)
    {
        $this->_propDict["failedUsers"] = $val;
        return $this;
    }
    /**
    * Gets the successfulUsers
    * The number of successful users in a user summary.
    *
    * @return int|null The successfulUsers
    */
    public function getSuccessfulUsers()
    {
        if (array_key_exists("successfulUsers", $this->_propDict)) {
            return $this->_propDict["successfulUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulUsers
    * The number of successful users in a user summary.
    *
    * @param int $val The value of the successfulUsers
    *
    * @return UserSummary
    */
    public function setSuccessfulUsers($val)
    {
        $this->_propDict["successfulUsers"] = $val;
        return $this;
    }
    /**
    * Gets the totalTasks
    * The total tasks of users in a user summary.
    *
    * @return int|null The totalTasks
    */
    public function getTotalTasks()
    {
        if (array_key_exists("totalTasks", $this->_propDict)) {
            return $this->_propDict["totalTasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalTasks
    * The total tasks of users in a user summary.
    *
    * @param int $val The value of the totalTasks
    *
    * @return UserSummary
    */
    public function setTotalTasks($val)
    {
        $this->_propDict["totalTasks"] = $val;
        return $this;
    }
    /**
    * Gets the totalUsers
    * The total number of users in a user summary
    *
    * @return int|null The totalUsers
    */
    public function getTotalUsers()
    {
        if (array_key_exists("totalUsers", $this->_propDict)) {
            return $this->_propDict["totalUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUsers
    * The total number of users in a user summary
    *
    * @param int $val The value of the totalUsers
    *
    * @return UserSummary
    */
    public function setTotalUsers($val)
    {
        $this->_propDict["totalUsers"] = $val;
        return $this;
    }
}
