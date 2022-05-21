<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkCameraConfiguration File
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
* TeamworkCameraConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkCameraConfiguration extends Entity
{

    /**
    * Gets the contentCameraConfiguration
    * The configuration for the content camera.
    *
    * @return TeamworkContentCameraConfiguration|null The contentCameraConfiguration
    */
    public function getContentCameraConfiguration()
    {
        if (array_key_exists("contentCameraConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["contentCameraConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkContentCameraConfiguration") || is_null($this->_propDict["contentCameraConfiguration"])) {
                return $this->_propDict["contentCameraConfiguration"];
            } else {
                $this->_propDict["contentCameraConfiguration"] = new TeamworkContentCameraConfiguration($this->_propDict["contentCameraConfiguration"]);
                return $this->_propDict["contentCameraConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the contentCameraConfiguration
    * The configuration for the content camera.
    *
    * @param TeamworkContentCameraConfiguration $val The value to assign to the contentCameraConfiguration
    *
    * @return TeamworkCameraConfiguration The TeamworkCameraConfiguration
    */
    public function setContentCameraConfiguration($val)
    {
        $this->_propDict["contentCameraConfiguration"] = $val;
         return $this;
    }

    /**
    * Gets the cameras
    *
    * @return TeamworkPeripheral|null The cameras
    */
    public function getCameras()
    {
        if (array_key_exists("cameras", $this->_propDict)) {
            if (is_a($this->_propDict["cameras"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["cameras"])) {
                return $this->_propDict["cameras"];
            } else {
                $this->_propDict["cameras"] = new TeamworkPeripheral($this->_propDict["cameras"]);
                return $this->_propDict["cameras"];
            }
        }
        return null;
    }

    /**
    * Sets the cameras
    *
    * @param TeamworkPeripheral $val The value to assign to the cameras
    *
    * @return TeamworkCameraConfiguration The TeamworkCameraConfiguration
    */
    public function setCameras($val)
    {
        $this->_propDict["cameras"] = $val;
         return $this;
    }

    /**
    * Gets the defaultContentCamera
    *
    * @return TeamworkPeripheral|null The defaultContentCamera
    */
    public function getDefaultContentCamera()
    {
        if (array_key_exists("defaultContentCamera", $this->_propDict)) {
            if (is_a($this->_propDict["defaultContentCamera"], "\Beta\Microsoft\Graph\Model\TeamworkPeripheral") || is_null($this->_propDict["defaultContentCamera"])) {
                return $this->_propDict["defaultContentCamera"];
            } else {
                $this->_propDict["defaultContentCamera"] = new TeamworkPeripheral($this->_propDict["defaultContentCamera"]);
                return $this->_propDict["defaultContentCamera"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultContentCamera
    *
    * @param TeamworkPeripheral $val The value to assign to the defaultContentCamera
    *
    * @return TeamworkCameraConfiguration The TeamworkCameraConfiguration
    */
    public function setDefaultContentCamera($val)
    {
        $this->_propDict["defaultContentCamera"] = $val;
         return $this;
    }
}
