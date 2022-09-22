<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementManagementSettings File
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
* EntitlementManagementSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementManagementSettings extends Entity
{
    /**
    * Gets the durationUntilExternalUserDeletedAfterBlocked
    * If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically a number of days, after an external user is blocked from sign in before their account is deleted.
    *
    * @return \DateInterval|null The durationUntilExternalUserDeletedAfterBlocked
    */
    public function getDurationUntilExternalUserDeletedAfterBlocked()
    {
        if (array_key_exists("durationUntilExternalUserDeletedAfterBlocked", $this->_propDict)) {
            if (is_a($this->_propDict["durationUntilExternalUserDeletedAfterBlocked"], "\DateInterval") || is_null($this->_propDict["durationUntilExternalUserDeletedAfterBlocked"])) {
                return $this->_propDict["durationUntilExternalUserDeletedAfterBlocked"];
            } else {
                $this->_propDict["durationUntilExternalUserDeletedAfterBlocked"] = new \DateInterval($this->_propDict["durationUntilExternalUserDeletedAfterBlocked"]);
                return $this->_propDict["durationUntilExternalUserDeletedAfterBlocked"];
            }
        }
        return null;
    }

    /**
    * Sets the durationUntilExternalUserDeletedAfterBlocked
    * If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically a number of days, after an external user is blocked from sign in before their account is deleted.
    *
    * @param \DateInterval $val The durationUntilExternalUserDeletedAfterBlocked
    *
    * @return EntitlementManagementSettings
    */
    public function setDurationUntilExternalUserDeletedAfterBlocked($val)
    {
        $this->_propDict["durationUntilExternalUserDeletedAfterBlocked"] = $val;
        return $this;
    }

    /**
    * Gets the externalUserLifecycleAction
    * Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
    *
    * @return AccessPackageExternalUserLifecycleAction|null The externalUserLifecycleAction
    */
    public function getExternalUserLifecycleAction()
    {
        if (array_key_exists("externalUserLifecycleAction", $this->_propDict)) {
            if (is_a($this->_propDict["externalUserLifecycleAction"], "\Microsoft\Graph\Model\AccessPackageExternalUserLifecycleAction") || is_null($this->_propDict["externalUserLifecycleAction"])) {
                return $this->_propDict["externalUserLifecycleAction"];
            } else {
                $this->_propDict["externalUserLifecycleAction"] = new AccessPackageExternalUserLifecycleAction($this->_propDict["externalUserLifecycleAction"]);
                return $this->_propDict["externalUserLifecycleAction"];
            }
        }
        return null;
    }

    /**
    * Sets the externalUserLifecycleAction
    * Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
    *
    * @param AccessPackageExternalUserLifecycleAction $val The externalUserLifecycleAction
    *
    * @return EntitlementManagementSettings
    */
    public function setExternalUserLifecycleAction($val)
    {
        $this->_propDict["externalUserLifecycleAction"] = $val;
        return $this;
    }

}
