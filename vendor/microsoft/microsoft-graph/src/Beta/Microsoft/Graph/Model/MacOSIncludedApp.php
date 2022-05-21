<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSIncludedApp File
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
* MacOSIncludedApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSIncludedApp extends Entity
{
    /**
    * Gets the bundleId
    * The CFBundleIdentifier.
    *
    * @return string|null The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleId
    * The CFBundleIdentifier.
    *
    * @param string $val The value of the bundleId
    *
    * @return MacOSIncludedApp
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    /**
    * Gets the bundleVersion
    * The CFBundleVersion.
    *
    * @return string|null The bundleVersion
    */
    public function getBundleVersion()
    {
        if (array_key_exists("bundleVersion", $this->_propDict)) {
            return $this->_propDict["bundleVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleVersion
    * The CFBundleVersion.
    *
    * @param string $val The value of the bundleVersion
    *
    * @return MacOSIncludedApp
    */
    public function setBundleVersion($val)
    {
        $this->_propDict["bundleVersion"] = $val;
        return $this;
    }
}
