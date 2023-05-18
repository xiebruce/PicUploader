<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationConditionsApplications File
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
* AuthenticationConditionsApplications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationConditionsApplications extends Entity
{
    /**
    * Gets the includeAllApplications
    * Whether the custom authentication extension should trigger for all applications with appIds specified in the includeApplications relationship. This property must be set to false for listener of type onTokenIssuanceStartListener.
    *
    * @return bool|null The includeAllApplications
    */
    public function getIncludeAllApplications()
    {
        if (array_key_exists("includeAllApplications", $this->_propDict)) {
            return $this->_propDict["includeAllApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeAllApplications
    * Whether the custom authentication extension should trigger for all applications with appIds specified in the includeApplications relationship. This property must be set to false for listener of type onTokenIssuanceStartListener.
    *
    * @param bool $val The value of the includeAllApplications
    *
    * @return AuthenticationConditionsApplications
    */
    public function setIncludeAllApplications($val)
    {
        $this->_propDict["includeAllApplications"] = $val;
        return $this;
    }

    /**
    * Gets the includeApplications
    *
    * @return AuthenticationConditionApplication|null The includeApplications
    */
    public function getIncludeApplications()
    {
        if (array_key_exists("includeApplications", $this->_propDict)) {
            if (is_a($this->_propDict["includeApplications"], "\Beta\Microsoft\Graph\Model\AuthenticationConditionApplication") || is_null($this->_propDict["includeApplications"])) {
                return $this->_propDict["includeApplications"];
            } else {
                $this->_propDict["includeApplications"] = new AuthenticationConditionApplication($this->_propDict["includeApplications"]);
                return $this->_propDict["includeApplications"];
            }
        }
        return null;
    }

    /**
    * Sets the includeApplications
    *
    * @param AuthenticationConditionApplication $val The value to assign to the includeApplications
    *
    * @return AuthenticationConditionsApplications The AuthenticationConditionsApplications
    */
    public function setIncludeApplications($val)
    {
        $this->_propDict["includeApplications"] = $val;
         return $this;
    }
}
