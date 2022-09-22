<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessApplications File
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
* ConditionalAccessApplications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessApplications extends Entity
{
    /**
    * Gets the excludeApplications
    * Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
    *
    * @return string|null The excludeApplications
    */
    public function getExcludeApplications()
    {
        if (array_key_exists("excludeApplications", $this->_propDict)) {
            return $this->_propDict["excludeApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeApplications
    * Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
    *
    * @param string $val The value of the excludeApplications
    *
    * @return ConditionalAccessApplications
    */
    public function setExcludeApplications($val)
    {
        $this->_propDict["excludeApplications"] = $val;
        return $this;
    }
    /**
    * Gets the includeApplications
    * Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
    *
    * @return string|null The includeApplications
    */
    public function getIncludeApplications()
    {
        if (array_key_exists("includeApplications", $this->_propDict)) {
            return $this->_propDict["includeApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeApplications
    * Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
    *
    * @param string $val The value of the includeApplications
    *
    * @return ConditionalAccessApplications
    */
    public function setIncludeApplications($val)
    {
        $this->_propDict["includeApplications"] = $val;
        return $this;
    }
    /**
    * Gets the includeAuthenticationContextClassReferences
    * Authentication context class references include. Supported values are c1 through c25.
    *
    * @return string|null The includeAuthenticationContextClassReferences
    */
    public function getIncludeAuthenticationContextClassReferences()
    {
        if (array_key_exists("includeAuthenticationContextClassReferences", $this->_propDict)) {
            return $this->_propDict["includeAuthenticationContextClassReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeAuthenticationContextClassReferences
    * Authentication context class references include. Supported values are c1 through c25.
    *
    * @param string $val The value of the includeAuthenticationContextClassReferences
    *
    * @return ConditionalAccessApplications
    */
    public function setIncludeAuthenticationContextClassReferences($val)
    {
        $this->_propDict["includeAuthenticationContextClassReferences"] = $val;
        return $this;
    }
    /**
    * Gets the includeUserActions
    * User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
    *
    * @return string|null The includeUserActions
    */
    public function getIncludeUserActions()
    {
        if (array_key_exists("includeUserActions", $this->_propDict)) {
            return $this->_propDict["includeUserActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeUserActions
    * User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
    *
    * @param string $val The value of the includeUserActions
    *
    * @return ConditionalAccessApplications
    */
    public function setIncludeUserActions($val)
    {
        $this->_propDict["includeUserActions"] = $val;
        return $this;
    }
}
