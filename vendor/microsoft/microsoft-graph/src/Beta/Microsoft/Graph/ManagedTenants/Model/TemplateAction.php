<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemplateAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* TemplateAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemplateAction extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the description
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
    *
    * @param string $val The value of the description
    *
    * @return TemplateAction
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
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
    *
    * @param string $val The value of the displayName
    *
    * @return TemplateAction
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the service
    *
    * @return string|null The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    *
    * @param string $val The value of the service
    *
    * @return TemplateAction
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    *
    * @return Setting|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\ManagedTenants\Model\Setting") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new Setting($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    *
    * @param Setting $val The value to assign to the settings
    *
    * @return TemplateAction The TemplateAction
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
         return $this;
    }
    /**
    * Gets the templateActionId
    *
    * @return string|null The templateActionId
    */
    public function getTemplateActionId()
    {
        if (array_key_exists("templateActionId", $this->_propDict)) {
            return $this->_propDict["templateActionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the templateActionId
    *
    * @param string $val The value of the templateActionId
    *
    * @return TemplateAction
    */
    public function setTemplateActionId($val)
    {
        $this->_propDict["templateActionId"] = $val;
        return $this;
    }

    /**
    * Gets the licenses
    *
    * @return \Beta\Microsoft\Graph\Model\LicenseDetails|null The licenses
    */
    public function getLicenses()
    {
        if (array_key_exists("licenses", $this->_propDict)) {
            if (is_a($this->_propDict["licenses"], "\Beta\Microsoft\Graph\Model\LicenseDetails") || is_null($this->_propDict["licenses"])) {
                return $this->_propDict["licenses"];
            } else {
                $this->_propDict["licenses"] = new \Beta\Microsoft\Graph\Model\LicenseDetails($this->_propDict["licenses"]);
                return $this->_propDict["licenses"];
            }
        }
        return null;
    }

    /**
    * Sets the licenses
    *
    * @param \Beta\Microsoft\Graph\Model\LicenseDetails $val The value to assign to the licenses
    *
    * @return TemplateAction The TemplateAction
    */
    public function setLicenses($val)
    {
        $this->_propDict["licenses"] = $val;
         return $this;
    }
}
