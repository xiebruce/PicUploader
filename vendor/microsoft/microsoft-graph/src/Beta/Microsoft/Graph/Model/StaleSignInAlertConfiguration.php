<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StaleSignInAlertConfiguration File
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
* StaleSignInAlertConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StaleSignInAlertConfiguration extends UnifiedRoleManagementAlertConfiguration
{
    /**
    * Gets the duration
    *
    * @return \DateInterval|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\DateInterval") || is_null($this->_propDict["duration"])) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new \DateInterval($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }

    /**
    * Sets the duration
    *
    * @param \DateInterval $val The duration
    *
    * @return StaleSignInAlertConfiguration
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

}
