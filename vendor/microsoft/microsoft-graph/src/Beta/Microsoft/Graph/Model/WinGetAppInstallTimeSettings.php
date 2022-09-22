<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WinGetAppInstallTimeSettings File
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
* WinGetAppInstallTimeSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WinGetAppInstallTimeSettings extends Entity
{

    /**
    * Gets the deadlineDateTime
    * The time at which the app should be installed.
    *
    * @return \DateTime|null The deadlineDateTime
    */
    public function getDeadlineDateTime()
    {
        if (array_key_exists("deadlineDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deadlineDateTime"], "\DateTime") || is_null($this->_propDict["deadlineDateTime"])) {
                return $this->_propDict["deadlineDateTime"];
            } else {
                $this->_propDict["deadlineDateTime"] = new \DateTime($this->_propDict["deadlineDateTime"]);
                return $this->_propDict["deadlineDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deadlineDateTime
    * The time at which the app should be installed.
    *
    * @param \DateTime $val The value to assign to the deadlineDateTime
    *
    * @return WinGetAppInstallTimeSettings The WinGetAppInstallTimeSettings
    */
    public function setDeadlineDateTime($val)
    {
        $this->_propDict["deadlineDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the useLocalTime
    * Whether the local device time or UTC time should be used when determining the deadline times.
    *
    * @return bool|null The useLocalTime
    */
    public function getUseLocalTime()
    {
        if (array_key_exists("useLocalTime", $this->_propDict)) {
            return $this->_propDict["useLocalTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useLocalTime
    * Whether the local device time or UTC time should be used when determining the deadline times.
    *
    * @param bool $val The value of the useLocalTime
    *
    * @return WinGetAppInstallTimeSettings
    */
    public function setUseLocalTime($val)
    {
        $this->_propDict["useLocalTime"] = $val;
        return $this;
    }
}
