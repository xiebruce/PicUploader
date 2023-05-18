<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataActivity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* IndustryDataActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataActivity extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The name of the activity. Maximum supported length is 100 characters.
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
    * The name of the activity. Maximum supported length is 100 characters.
    *
    * @param string $val The displayName
    *
    * @return IndustryDataActivity
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the readinessStatus
    * The state of the activity from creation through to ready to do work. The possible values are: notReady, ready, failed, disabled, expired, unknownFutureValue.
    *
    * @return ReadinessStatus|null The readinessStatus
    */
    public function getReadinessStatus()
    {
        if (array_key_exists("readinessStatus", $this->_propDict)) {
            if (is_a($this->_propDict["readinessStatus"], "\Beta\Microsoft\Graph\IndustryData\Model\ReadinessStatus") || is_null($this->_propDict["readinessStatus"])) {
                return $this->_propDict["readinessStatus"];
            } else {
                $this->_propDict["readinessStatus"] = new ReadinessStatus($this->_propDict["readinessStatus"]);
                return $this->_propDict["readinessStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the readinessStatus
    * The state of the activity from creation through to ready to do work. The possible values are: notReady, ready, failed, disabled, expired, unknownFutureValue.
    *
    * @param ReadinessStatus $val The readinessStatus
    *
    * @return IndustryDataActivity
    */
    public function setReadinessStatus($val)
    {
        $this->_propDict["readinessStatus"] = $val;
        return $this;
    }

}
