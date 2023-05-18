<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Sharepoint File
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
* Sharepoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Sharepoint extends Entity
{
    /**
    * Gets the settings
    *
    * @return SharepointSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Model\SharepointSettings") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new SharepointSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    *
    * @param SharepointSettings $val The settings
    *
    * @return Sharepoint
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

}
