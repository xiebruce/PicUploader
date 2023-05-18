<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcRemoteActionCapability File
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
* CloudPcRemoteActionCapability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcRemoteActionCapability extends Entity
{

    /**
    * Gets the actionCapability
    * Indicates the state of the supported action capability to perform a Cloud PC remote action. Possible values are: enabled, disabled. Default value is enabled.
    *
    * @return ActionCapability|null The actionCapability
    */
    public function getActionCapability()
    {
        if (array_key_exists("actionCapability", $this->_propDict)) {
            if (is_a($this->_propDict["actionCapability"], "\Beta\Microsoft\Graph\Model\ActionCapability") || is_null($this->_propDict["actionCapability"])) {
                return $this->_propDict["actionCapability"];
            } else {
                $this->_propDict["actionCapability"] = new ActionCapability($this->_propDict["actionCapability"]);
                return $this->_propDict["actionCapability"];
            }
        }
        return null;
    }

    /**
    * Sets the actionCapability
    * Indicates the state of the supported action capability to perform a Cloud PC remote action. Possible values are: enabled, disabled. Default value is enabled.
    *
    * @param ActionCapability $val The value to assign to the actionCapability
    *
    * @return CloudPcRemoteActionCapability The CloudPcRemoteActionCapability
    */
    public function setActionCapability($val)
    {
        $this->_propDict["actionCapability"] = $val;
         return $this;
    }

    /**
    * Gets the actionName
    * The name of the supported Cloud PC remote action. Possible values are: unknown, restart, rename, restore, resize, reprovision, troubleShoot, changeUserAccountType, placeUnderReview. Default value is unknown.
    *
    * @return CloudPcRemoteActionName|null The actionName
    */
    public function getActionName()
    {
        if (array_key_exists("actionName", $this->_propDict)) {
            if (is_a($this->_propDict["actionName"], "\Beta\Microsoft\Graph\Model\CloudPcRemoteActionName") || is_null($this->_propDict["actionName"])) {
                return $this->_propDict["actionName"];
            } else {
                $this->_propDict["actionName"] = new CloudPcRemoteActionName($this->_propDict["actionName"]);
                return $this->_propDict["actionName"];
            }
        }
        return null;
    }

    /**
    * Sets the actionName
    * The name of the supported Cloud PC remote action. Possible values are: unknown, restart, rename, restore, resize, reprovision, troubleShoot, changeUserAccountType, placeUnderReview. Default value is unknown.
    *
    * @param CloudPcRemoteActionName $val The value to assign to the actionName
    *
    * @return CloudPcRemoteActionCapability The CloudPcRemoteActionCapability
    */
    public function setActionName($val)
    {
        $this->_propDict["actionName"] = $val;
         return $this;
    }
}
