<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationConditions File
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
* AuthenticationConditions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationConditions extends Entity
{

    /**
    * Gets the applications
    *
    * @return AuthenticationConditionsApplications|null The applications
    */
    public function getApplications()
    {
        if (array_key_exists("applications", $this->_propDict)) {
            if (is_a($this->_propDict["applications"], "\Beta\Microsoft\Graph\Model\AuthenticationConditionsApplications") || is_null($this->_propDict["applications"])) {
                return $this->_propDict["applications"];
            } else {
                $this->_propDict["applications"] = new AuthenticationConditionsApplications($this->_propDict["applications"]);
                return $this->_propDict["applications"];
            }
        }
        return null;
    }

    /**
    * Sets the applications
    *
    * @param AuthenticationConditionsApplications $val The value to assign to the applications
    *
    * @return AuthenticationConditions The AuthenticationConditions
    */
    public function setApplications($val)
    {
        $this->_propDict["applications"] = $val;
         return $this;
    }
}
