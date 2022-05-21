<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditActivityInitiator File
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
* AuditActivityInitiator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditActivityInitiator extends Entity
{

    /**
    * Gets the app
    * If the actor initiating the activity is an app, this property indicates all its identification information including appId, displayName, servicePrincipalId, and servicePrincipalName.
    *
    * @return AppIdentity|null The app
    */
    public function getApp()
    {
        if (array_key_exists("app", $this->_propDict)) {
            if (is_a($this->_propDict["app"], "\Beta\Microsoft\Graph\Model\AppIdentity") || is_null($this->_propDict["app"])) {
                return $this->_propDict["app"];
            } else {
                $this->_propDict["app"] = new AppIdentity($this->_propDict["app"]);
                return $this->_propDict["app"];
            }
        }
        return null;
    }

    /**
    * Sets the app
    * If the actor initiating the activity is an app, this property indicates all its identification information including appId, displayName, servicePrincipalId, and servicePrincipalName.
    *
    * @param AppIdentity $val The value to assign to the app
    *
    * @return AuditActivityInitiator The AuditActivityInitiator
    */
    public function setApp($val)
    {
        $this->_propDict["app"] = $val;
         return $this;
    }

    /**
    * Gets the user
    * If the actor initiating the activity is a user, this property indicates their identification information including their id, displayName, and userPrincipalName.
    *
    * @return AuditUserIdentity|null The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "\Beta\Microsoft\Graph\Model\AuditUserIdentity") || is_null($this->_propDict["user"])) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new AuditUserIdentity($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }

    /**
    * Sets the user
    * If the actor initiating the activity is a user, this property indicates their identification information including their id, displayName, and userPrincipalName.
    *
    * @param AuditUserIdentity $val The value to assign to the user
    *
    * @return AuditActivityInitiator The AuditActivityInitiator
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
         return $this;
    }
}
