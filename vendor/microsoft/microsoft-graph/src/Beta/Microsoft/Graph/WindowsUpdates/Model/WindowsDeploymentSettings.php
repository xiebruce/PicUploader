<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeploymentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* WindowsDeploymentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDeploymentSettings extends DeploymentSettings
{

    /**
    * Gets the userExperience
    * Settings governing the user's update experience on a device.
    *
    * @return UserExperienceSettings|null The userExperience
    */
    public function getUserExperience()
    {
        if (array_key_exists("userExperience", $this->_propDict)) {
            if (is_a($this->_propDict["userExperience"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\UserExperienceSettings") || is_null($this->_propDict["userExperience"])) {
                return $this->_propDict["userExperience"];
            } else {
                $this->_propDict["userExperience"] = new UserExperienceSettings($this->_propDict["userExperience"]);
                return $this->_propDict["userExperience"];
            }
        }
        return null;
    }

    /**
    * Sets the userExperience
    * Settings governing the user's update experience on a device.
    *
    * @param UserExperienceSettings $val The value to assign to the userExperience
    *
    * @return WindowsDeploymentSettings The WindowsDeploymentSettings
    */
    public function setUserExperience($val)
    {
        $this->_propDict["userExperience"] = $val;
         return $this;
    }
}
