<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkMobileAppConfiguration File
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
* AndroidForWorkMobileAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkMobileAppConfiguration extends ManagedDeviceMobileAppConfiguration
{
    /**
    * Gets the connectedAppsEnabled
    * Setting to specify whether to allow ConnectedApps experience for this app.
    *
    * @return bool|null The connectedAppsEnabled
    */
    public function getConnectedAppsEnabled()
    {
        if (array_key_exists("connectedAppsEnabled", $this->_propDict)) {
            return $this->_propDict["connectedAppsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectedAppsEnabled
    * Setting to specify whether to allow ConnectedApps experience for this app.
    *
    * @param bool $val The connectedAppsEnabled
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setConnectedAppsEnabled($val)
    {
        $this->_propDict["connectedAppsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the packageId
    * Android For Work app configuration package id.
    *
    * @return string|null The packageId
    */
    public function getPackageId()
    {
        if (array_key_exists("packageId", $this->_propDict)) {
            return $this->_propDict["packageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packageId
    * Android For Work app configuration package id.
    *
    * @param string $val The packageId
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }

    /**
    * Gets the payloadJson
    * Android For Work app configuration JSON payload.
    *
    * @return string|null The payloadJson
    */
    public function getPayloadJson()
    {
        if (array_key_exists("payloadJson", $this->_propDict)) {
            return $this->_propDict["payloadJson"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloadJson
    * Android For Work app configuration JSON payload.
    *
    * @param string $val The payloadJson
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setPayloadJson($val)
    {
        $this->_propDict["payloadJson"] = $val;
        return $this;
    }


     /**
     * Gets the permissionActions
    * List of Android app permissions and corresponding permission actions.
     *
     * @return array|null The permissionActions
     */
    public function getPermissionActions()
    {
        if (array_key_exists("permissionActions", $this->_propDict)) {
           return $this->_propDict["permissionActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionActions
    * List of Android app permissions and corresponding permission actions.
    *
    * @param AndroidPermissionAction[] $val The permissionActions
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setPermissionActions($val)
    {
        $this->_propDict["permissionActions"] = $val;
        return $this;
    }

    /**
    * Gets the profileApplicability
    * Android Enterprise profile applicability (AndroidWorkProfile, DeviceOwner, or default (applies to both)). Possible values are: default, androidWorkProfile, androidDeviceOwner.
    *
    * @return AndroidProfileApplicability|null The profileApplicability
    */
    public function getProfileApplicability()
    {
        if (array_key_exists("profileApplicability", $this->_propDict)) {
            if (is_a($this->_propDict["profileApplicability"], "\Beta\Microsoft\Graph\Model\AndroidProfileApplicability") || is_null($this->_propDict["profileApplicability"])) {
                return $this->_propDict["profileApplicability"];
            } else {
                $this->_propDict["profileApplicability"] = new AndroidProfileApplicability($this->_propDict["profileApplicability"]);
                return $this->_propDict["profileApplicability"];
            }
        }
        return null;
    }

    /**
    * Sets the profileApplicability
    * Android Enterprise profile applicability (AndroidWorkProfile, DeviceOwner, or default (applies to both)). Possible values are: default, androidWorkProfile, androidDeviceOwner.
    *
    * @param AndroidProfileApplicability $val The profileApplicability
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setProfileApplicability($val)
    {
        $this->_propDict["profileApplicability"] = $val;
        return $this;
    }

}
