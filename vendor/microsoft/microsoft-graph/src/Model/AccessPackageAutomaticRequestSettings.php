<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAutomaticRequestSettings File
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
* AccessPackageAutomaticRequestSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAutomaticRequestSettings extends Entity
{

    /**
    * Gets the gracePeriodBeforeAccessRemoval
    *
    * @return \DateInterval|null The gracePeriodBeforeAccessRemoval
    */
    public function getGracePeriodBeforeAccessRemoval()
    {
        if (array_key_exists("gracePeriodBeforeAccessRemoval", $this->_propDict)) {
            if (is_a($this->_propDict["gracePeriodBeforeAccessRemoval"], "\DateInterval") || is_null($this->_propDict["gracePeriodBeforeAccessRemoval"])) {
                return $this->_propDict["gracePeriodBeforeAccessRemoval"];
            } else {
                $this->_propDict["gracePeriodBeforeAccessRemoval"] = new \DateInterval($this->_propDict["gracePeriodBeforeAccessRemoval"]);
                return $this->_propDict["gracePeriodBeforeAccessRemoval"];
            }
        }
        return null;
    }

    /**
    * Sets the gracePeriodBeforeAccessRemoval
    *
    * @param \DateInterval $val The value to assign to the gracePeriodBeforeAccessRemoval
    *
    * @return AccessPackageAutomaticRequestSettings The AccessPackageAutomaticRequestSettings
    */
    public function setGracePeriodBeforeAccessRemoval($val)
    {
        $this->_propDict["gracePeriodBeforeAccessRemoval"] = $val;
         return $this;
    }
    /**
    * Gets the removeAccessWhenTargetLeavesAllowedTargets
    *
    * @return bool|null The removeAccessWhenTargetLeavesAllowedTargets
    */
    public function getRemoveAccessWhenTargetLeavesAllowedTargets()
    {
        if (array_key_exists("removeAccessWhenTargetLeavesAllowedTargets", $this->_propDict)) {
            return $this->_propDict["removeAccessWhenTargetLeavesAllowedTargets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeAccessWhenTargetLeavesAllowedTargets
    *
    * @param bool $val The value of the removeAccessWhenTargetLeavesAllowedTargets
    *
    * @return AccessPackageAutomaticRequestSettings
    */
    public function setRemoveAccessWhenTargetLeavesAllowedTargets($val)
    {
        $this->_propDict["removeAccessWhenTargetLeavesAllowedTargets"] = $val;
        return $this;
    }
    /**
    * Gets the requestAccessForAllowedTargets
    * If set to true, automatic assignments will be created for targets in the allowed target scope.
    *
    * @return bool|null The requestAccessForAllowedTargets
    */
    public function getRequestAccessForAllowedTargets()
    {
        if (array_key_exists("requestAccessForAllowedTargets", $this->_propDict)) {
            return $this->_propDict["requestAccessForAllowedTargets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestAccessForAllowedTargets
    * If set to true, automatic assignments will be created for targets in the allowed target scope.
    *
    * @param bool $val The value of the requestAccessForAllowedTargets
    *
    * @return AccessPackageAutomaticRequestSettings
    */
    public function setRequestAccessForAllowedTargets($val)
    {
        $this->_propDict["requestAccessForAllowedTargets"] = $val;
        return $this;
    }
}
