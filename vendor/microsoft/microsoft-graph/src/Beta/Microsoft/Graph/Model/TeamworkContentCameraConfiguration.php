<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkContentCameraConfiguration File
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
* TeamworkContentCameraConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkContentCameraConfiguration extends Entity
{
    /**
    * Gets the isContentCameraInverted
    * True if the content camera is inverted.
    *
    * @return bool|null The isContentCameraInverted
    */
    public function getIsContentCameraInverted()
    {
        if (array_key_exists("isContentCameraInverted", $this->_propDict)) {
            return $this->_propDict["isContentCameraInverted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isContentCameraInverted
    * True if the content camera is inverted.
    *
    * @param bool $val The value of the isContentCameraInverted
    *
    * @return TeamworkContentCameraConfiguration
    */
    public function setIsContentCameraInverted($val)
    {
        $this->_propDict["isContentCameraInverted"] = $val;
        return $this;
    }
    /**
    * Gets the isContentCameraOptional
    * True if the content camera is optional.
    *
    * @return bool|null The isContentCameraOptional
    */
    public function getIsContentCameraOptional()
    {
        if (array_key_exists("isContentCameraOptional", $this->_propDict)) {
            return $this->_propDict["isContentCameraOptional"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isContentCameraOptional
    * True if the content camera is optional.
    *
    * @param bool $val The value of the isContentCameraOptional
    *
    * @return TeamworkContentCameraConfiguration
    */
    public function setIsContentCameraOptional($val)
    {
        $this->_propDict["isContentCameraOptional"] = $val;
        return $this;
    }
    /**
    * Gets the isContentEnhancementEnabled
    * True if the content enhancement is enabled.
    *
    * @return bool|null The isContentEnhancementEnabled
    */
    public function getIsContentEnhancementEnabled()
    {
        if (array_key_exists("isContentEnhancementEnabled", $this->_propDict)) {
            return $this->_propDict["isContentEnhancementEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isContentEnhancementEnabled
    * True if the content enhancement is enabled.
    *
    * @param bool $val The value of the isContentEnhancementEnabled
    *
    * @return TeamworkContentCameraConfiguration
    */
    public function setIsContentEnhancementEnabled($val)
    {
        $this->_propDict["isContentEnhancementEnabled"] = $val;
        return $this;
    }
}
