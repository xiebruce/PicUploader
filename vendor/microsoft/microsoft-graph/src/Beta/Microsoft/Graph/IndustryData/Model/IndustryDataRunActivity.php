<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataRunActivity File
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
* IndustryDataRunActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataRunActivity extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the blockingError
    * An error object to diagnose critical failures in an activity.
    *
    * @return \Beta\Microsoft\Graph\Model\PublicError|null The blockingError
    */
    public function getBlockingError()
    {
        if (array_key_exists("blockingError", $this->_propDict)) {
            if (is_a($this->_propDict["blockingError"], "\Beta\Microsoft\Graph\Model\PublicError") || is_null($this->_propDict["blockingError"])) {
                return $this->_propDict["blockingError"];
            } else {
                $this->_propDict["blockingError"] = new \Beta\Microsoft\Graph\Model\PublicError($this->_propDict["blockingError"]);
                return $this->_propDict["blockingError"];
            }
        }
        return null;
    }

    /**
    * Sets the blockingError
    * An error object to diagnose critical failures in an activity.
    *
    * @param \Beta\Microsoft\Graph\Model\PublicError $val The blockingError
    *
    * @return IndustryDataRunActivity
    */
    public function setBlockingError($val)
    {
        $this->_propDict["blockingError"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the running flow.
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
    * The name of the running flow.
    *
    * @param string $val The displayName
    *
    * @return IndustryDataRunActivity
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The current status of the activity. The possible values are: inProgress, skipped, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @return IndustryDataActivityStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataActivityStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new IndustryDataActivityStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The current status of the activity. The possible values are: inProgress, skipped, failed, completed, completedWithErrors, completedWithWarnings, unknownFutureValue.
    *
    * @param IndustryDataActivityStatus $val The status
    *
    * @return IndustryDataRunActivity
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the activity
    * The flow that was run by this activity.
    *
    * @return IndustryDataActivity|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataActivity") || is_null($this->_propDict["activity"])) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new IndustryDataActivity($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }

    /**
    * Sets the activity
    * The flow that was run by this activity.
    *
    * @param IndustryDataActivity $val The activity
    *
    * @return IndustryDataRunActivity
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

}
