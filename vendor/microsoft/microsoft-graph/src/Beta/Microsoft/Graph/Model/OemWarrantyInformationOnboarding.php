<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OemWarrantyInformationOnboarding File
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
* OemWarrantyInformationOnboarding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OemWarrantyInformationOnboarding extends Entity
{
    /**
    * Gets the available
    * Specifies whether warranty API is available. This property is read-only.
    *
    * @return bool|null The available
    */
    public function getAvailable()
    {
        if (array_key_exists("available", $this->_propDict)) {
            return $this->_propDict["available"];
        } else {
            return null;
        }
    }

    /**
    * Sets the available
    * Specifies whether warranty API is available. This property is read-only.
    *
    * @param bool $val The available
    *
    * @return OemWarrantyInformationOnboarding
    */
    public function setAvailable($val)
    {
        $this->_propDict["available"] = boolval($val);
        return $this;
    }

    /**
    * Gets the enabled
    * Specifies whether warranty query is enabled for given OEM. This property is read-only.
    *
    * @return bool|null The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    * Specifies whether warranty query is enabled for given OEM. This property is read-only.
    *
    * @param bool $val The enabled
    *
    * @return OemWarrantyInformationOnboarding
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the oemName
    * OEM name. This property is read-only.
    *
    * @return string|null The oemName
    */
    public function getOemName()
    {
        if (array_key_exists("oemName", $this->_propDict)) {
            return $this->_propDict["oemName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oemName
    * OEM name. This property is read-only.
    *
    * @param string $val The oemName
    *
    * @return OemWarrantyInformationOnboarding
    */
    public function setOemName($val)
    {
        $this->_propDict["oemName"] = $val;
        return $this;
    }

}
