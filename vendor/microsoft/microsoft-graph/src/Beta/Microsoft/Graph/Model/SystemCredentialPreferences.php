<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SystemCredentialPreferences File
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
* SystemCredentialPreferences class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SystemCredentialPreferences extends Entity
{

    /**
    * Gets the excludeTargets
    * Users and groups excluded from the preferred authentication method experience of the system.
    *
    * @return ExcludeTarget|null The excludeTargets
    */
    public function getExcludeTargets()
    {
        if (array_key_exists("excludeTargets", $this->_propDict)) {
            if (is_a($this->_propDict["excludeTargets"], "\Beta\Microsoft\Graph\Model\ExcludeTarget") || is_null($this->_propDict["excludeTargets"])) {
                return $this->_propDict["excludeTargets"];
            } else {
                $this->_propDict["excludeTargets"] = new ExcludeTarget($this->_propDict["excludeTargets"]);
                return $this->_propDict["excludeTargets"];
            }
        }
        return null;
    }

    /**
    * Sets the excludeTargets
    * Users and groups excluded from the preferred authentication method experience of the system.
    *
    * @param ExcludeTarget $val The value to assign to the excludeTargets
    *
    * @return SystemCredentialPreferences The SystemCredentialPreferences
    */
    public function setExcludeTargets($val)
    {
        $this->_propDict["excludeTargets"] = $val;
         return $this;
    }

    /**
    * Gets the includeTargets
    * Users and groups included in the preferred authentication method experience of the system.
    *
    * @return IncludeTarget|null The includeTargets
    */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
            if (is_a($this->_propDict["includeTargets"], "\Beta\Microsoft\Graph\Model\IncludeTarget") || is_null($this->_propDict["includeTargets"])) {
                return $this->_propDict["includeTargets"];
            } else {
                $this->_propDict["includeTargets"] = new IncludeTarget($this->_propDict["includeTargets"]);
                return $this->_propDict["includeTargets"];
            }
        }
        return null;
    }

    /**
    * Sets the includeTargets
    * Users and groups included in the preferred authentication method experience of the system.
    *
    * @param IncludeTarget $val The value to assign to the includeTargets
    *
    * @return SystemCredentialPreferences The SystemCredentialPreferences
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Indicates whether the feature is enabled or disabled. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set, and uses the default behavior of Azure Active Directory for the setting. The default value is disabled.
    *
    * @return AdvancedConfigState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\AdvancedConfigState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AdvancedConfigState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Indicates whether the feature is enabled or disabled. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set, and uses the default behavior of Azure Active Directory for the setting. The default value is disabled.
    *
    * @param AdvancedConfigState $val The value to assign to the state
    *
    * @return SystemCredentialPreferences The SystemCredentialPreferences
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
