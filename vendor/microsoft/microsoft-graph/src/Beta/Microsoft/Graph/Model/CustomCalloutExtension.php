<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomCalloutExtension File
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
* CustomCalloutExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomCalloutExtension extends Entity
{
    /**
    * Gets the authenticationConfiguration
    * Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
    *
    * @return CustomExtensionAuthenticationConfiguration|null The authenticationConfiguration
    */
    public function getAuthenticationConfiguration()
    {
        if (array_key_exists("authenticationConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationConfiguration"], "\Beta\Microsoft\Graph\Model\CustomExtensionAuthenticationConfiguration") || is_null($this->_propDict["authenticationConfiguration"])) {
                return $this->_propDict["authenticationConfiguration"];
            } else {
                $this->_propDict["authenticationConfiguration"] = new CustomExtensionAuthenticationConfiguration($this->_propDict["authenticationConfiguration"]);
                return $this->_propDict["authenticationConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationConfiguration
    * Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
    *
    * @param CustomExtensionAuthenticationConfiguration $val The authenticationConfiguration
    *
    * @return CustomCalloutExtension
    */
    public function setAuthenticationConfiguration($val)
    {
        $this->_propDict["authenticationConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the clientConfiguration
    * HTTP connection settings that define how long Azure AD can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
    *
    * @return CustomExtensionClientConfiguration|null The clientConfiguration
    */
    public function getClientConfiguration()
    {
        if (array_key_exists("clientConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["clientConfiguration"], "\Beta\Microsoft\Graph\Model\CustomExtensionClientConfiguration") || is_null($this->_propDict["clientConfiguration"])) {
                return $this->_propDict["clientConfiguration"];
            } else {
                $this->_propDict["clientConfiguration"] = new CustomExtensionClientConfiguration($this->_propDict["clientConfiguration"]);
                return $this->_propDict["clientConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the clientConfiguration
    * HTTP connection settings that define how long Azure AD can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
    *
    * @param CustomExtensionClientConfiguration $val The clientConfiguration
    *
    * @return CustomCalloutExtension
    */
    public function setClientConfiguration($val)
    {
        $this->_propDict["clientConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description for the customCalloutExtension object.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description for the customCalloutExtension object.
    *
    * @param string $val The description
    *
    * @return CustomCalloutExtension
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name for the customCalloutExtension object.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name for the customCalloutExtension object.
    *
    * @param string $val The displayName
    *
    * @return CustomCalloutExtension
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the endpointConfiguration
    * The type and details for configuring the endpoint to call the logic app's workflow.
    *
    * @return CustomExtensionEndpointConfiguration|null The endpointConfiguration
    */
    public function getEndpointConfiguration()
    {
        if (array_key_exists("endpointConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["endpointConfiguration"], "\Beta\Microsoft\Graph\Model\CustomExtensionEndpointConfiguration") || is_null($this->_propDict["endpointConfiguration"])) {
                return $this->_propDict["endpointConfiguration"];
            } else {
                $this->_propDict["endpointConfiguration"] = new CustomExtensionEndpointConfiguration($this->_propDict["endpointConfiguration"]);
                return $this->_propDict["endpointConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the endpointConfiguration
    * The type and details for configuring the endpoint to call the logic app's workflow.
    *
    * @param CustomExtensionEndpointConfiguration $val The endpointConfiguration
    *
    * @return CustomCalloutExtension
    */
    public function setEndpointConfiguration($val)
    {
        $this->_propDict["endpointConfiguration"] = $val;
        return $this;
    }

}
