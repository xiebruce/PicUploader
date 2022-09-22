<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WinGetAppInstallExperience File
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
* WinGetAppInstallExperience class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WinGetAppInstallExperience extends Entity
{

    /**
    * Gets the runAsAccount
    * Indicates the type of execution context the app setup runs in on target devices. Options include values of the RunAsAccountType enum, which are System and User. Required at creation time, cannot be modified on existing objects. Possible values are: system, user.
    *
    * @return RunAsAccountType|null The runAsAccount
    */
    public function getRunAsAccount()
    {
        if (array_key_exists("runAsAccount", $this->_propDict)) {
            if (is_a($this->_propDict["runAsAccount"], "\Beta\Microsoft\Graph\Model\RunAsAccountType") || is_null($this->_propDict["runAsAccount"])) {
                return $this->_propDict["runAsAccount"];
            } else {
                $this->_propDict["runAsAccount"] = new RunAsAccountType($this->_propDict["runAsAccount"]);
                return $this->_propDict["runAsAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the runAsAccount
    * Indicates the type of execution context the app setup runs in on target devices. Options include values of the RunAsAccountType enum, which are System and User. Required at creation time, cannot be modified on existing objects. Possible values are: system, user.
    *
    * @param RunAsAccountType $val The value to assign to the runAsAccount
    *
    * @return WinGetAppInstallExperience The WinGetAppInstallExperience
    */
    public function setRunAsAccount($val)
    {
        $this->_propDict["runAsAccount"] = $val;
         return $this;
    }
}
