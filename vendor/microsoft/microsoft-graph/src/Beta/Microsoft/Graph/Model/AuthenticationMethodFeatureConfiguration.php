<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodFeatureConfiguration File
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
* AuthenticationMethodFeatureConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodFeatureConfiguration extends Entity
{

    /**
    * Gets the excludeTarget
    * A single entity that's excluded from using this feature.
    *
    * @return FeatureTarget|null The excludeTarget
    */
    public function getExcludeTarget()
    {
        if (array_key_exists("excludeTarget", $this->_propDict)) {
            if (is_a($this->_propDict["excludeTarget"], "\Beta\Microsoft\Graph\Model\FeatureTarget") || is_null($this->_propDict["excludeTarget"])) {
                return $this->_propDict["excludeTarget"];
            } else {
                $this->_propDict["excludeTarget"] = new FeatureTarget($this->_propDict["excludeTarget"]);
                return $this->_propDict["excludeTarget"];
            }
        }
        return null;
    }

    /**
    * Sets the excludeTarget
    * A single entity that's excluded from using this feature.
    *
    * @param FeatureTarget $val The value to assign to the excludeTarget
    *
    * @return AuthenticationMethodFeatureConfiguration The AuthenticationMethodFeatureConfiguration
    */
    public function setExcludeTarget($val)
    {
        $this->_propDict["excludeTarget"] = $val;
         return $this;
    }

    /**
    * Gets the includeTarget
    * A single entity that's allowed to use this feature.
    *
    * @return FeatureTarget|null The includeTarget
    */
    public function getIncludeTarget()
    {
        if (array_key_exists("includeTarget", $this->_propDict)) {
            if (is_a($this->_propDict["includeTarget"], "\Beta\Microsoft\Graph\Model\FeatureTarget") || is_null($this->_propDict["includeTarget"])) {
                return $this->_propDict["includeTarget"];
            } else {
                $this->_propDict["includeTarget"] = new FeatureTarget($this->_propDict["includeTarget"]);
                return $this->_propDict["includeTarget"];
            }
        }
        return null;
    }

    /**
    * Sets the includeTarget
    * A single entity that's allowed to use this feature.
    *
    * @param FeatureTarget $val The value to assign to the includeTarget
    *
    * @return AuthenticationMethodFeatureConfiguration The AuthenticationMethodFeatureConfiguration
    */
    public function setIncludeTarget($val)
    {
        $this->_propDict["includeTarget"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
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
    * Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
    *
    * @param AdvancedConfigState $val The value to assign to the state
    *
    * @return AuthenticationMethodFeatureConfiguration The AuthenticationMethodFeatureConfiguration
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
