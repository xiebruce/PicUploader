<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignedTrainingInfo File
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
* AssignedTrainingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignedTrainingInfo extends Entity
{
    /**
    * Gets the assignedUserCount
    * Number of users who were assigned the training in an attack simulation and training campaign.
    *
    * @return int|null The assignedUserCount
    */
    public function getAssignedUserCount()
    {
        if (array_key_exists("assignedUserCount", $this->_propDict)) {
            return $this->_propDict["assignedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedUserCount
    * Number of users who were assigned the training in an attack simulation and training campaign.
    *
    * @param int $val The value of the assignedUserCount
    *
    * @return AssignedTrainingInfo
    */
    public function setAssignedUserCount($val)
    {
        $this->_propDict["assignedUserCount"] = $val;
        return $this;
    }
    /**
    * Gets the completedUserCount
    * Number of users who completed the training in an attack simulation and training campaign.
    *
    * @return int|null The completedUserCount
    */
    public function getCompletedUserCount()
    {
        if (array_key_exists("completedUserCount", $this->_propDict)) {
            return $this->_propDict["completedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedUserCount
    * Number of users who completed the training in an attack simulation and training campaign.
    *
    * @param int $val The value of the completedUserCount
    *
    * @return AssignedTrainingInfo
    */
    public function setCompletedUserCount($val)
    {
        $this->_propDict["completedUserCount"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Display name of the training in an attack simulation and training campaign.
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
    * Display name of the training in an attack simulation and training campaign.
    *
    * @param string $val The value of the displayName
    *
    * @return AssignedTrainingInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
