<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WatermarkProtectionValues File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* WatermarkProtectionValues class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WatermarkProtectionValues extends Entity
{
    /**
    * Gets the isEnabledForContentSharing
    * Indicates whether to apply a watermark to any shared content.
    *
    * @return bool|null The isEnabledForContentSharing
    */
    public function getIsEnabledForContentSharing()
    {
        if (array_key_exists("isEnabledForContentSharing", $this->_propDict)) {
            return $this->_propDict["isEnabledForContentSharing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledForContentSharing
    * Indicates whether to apply a watermark to any shared content.
    *
    * @param bool $val The value of the isEnabledForContentSharing
    *
    * @return WatermarkProtectionValues
    */
    public function setIsEnabledForContentSharing($val)
    {
        $this->_propDict["isEnabledForContentSharing"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabledForVideo
    * Indicates whether to apply a watermark to everyone's video feed.
    *
    * @return bool|null The isEnabledForVideo
    */
    public function getIsEnabledForVideo()
    {
        if (array_key_exists("isEnabledForVideo", $this->_propDict)) {
            return $this->_propDict["isEnabledForVideo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledForVideo
    * Indicates whether to apply a watermark to everyone's video feed.
    *
    * @param bool $val The value of the isEnabledForVideo
    *
    * @return WatermarkProtectionValues
    */
    public function setIsEnabledForVideo($val)
    {
        $this->_propDict["isEnabledForVideo"] = $val;
        return $this;
    }
}
