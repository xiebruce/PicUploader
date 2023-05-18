<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppAuthorization File
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
* TeamsAppAuthorization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppAuthorization extends Entity
{

    /**
    * Gets the requiredPermissionSet
    * Set of permissions required by the teamsApp.
    *
    * @return TeamsAppPermissionSet|null The requiredPermissionSet
    */
    public function getRequiredPermissionSet()
    {
        if (array_key_exists("requiredPermissionSet", $this->_propDict)) {
            if (is_a($this->_propDict["requiredPermissionSet"], "\Beta\Microsoft\Graph\Model\TeamsAppPermissionSet") || is_null($this->_propDict["requiredPermissionSet"])) {
                return $this->_propDict["requiredPermissionSet"];
            } else {
                $this->_propDict["requiredPermissionSet"] = new TeamsAppPermissionSet($this->_propDict["requiredPermissionSet"]);
                return $this->_propDict["requiredPermissionSet"];
            }
        }
        return null;
    }

    /**
    * Sets the requiredPermissionSet
    * Set of permissions required by the teamsApp.
    *
    * @param TeamsAppPermissionSet $val The value to assign to the requiredPermissionSet
    *
    * @return TeamsAppAuthorization The TeamsAppAuthorization
    */
    public function setRequiredPermissionSet($val)
    {
        $this->_propDict["requiredPermissionSet"] = $val;
         return $this;
    }
}
