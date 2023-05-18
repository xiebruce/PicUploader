<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAppX File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* WindowsAppX class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAppX extends MobileLobApp
{
    /**
    * Gets the applicableArchitectures
    * The Windows architecture(s) on which this app can run. Possible values are: none, x86, x64, arm, neutral; default value is none. Possible values are: none, x86, x64, arm, neutral.
    *
    * @return WindowsArchitecture|null The applicableArchitectures
    */
    public function getApplicableArchitectures()
    {
        if (array_key_exists("applicableArchitectures", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitectures"], "\Microsoft\Graph\Model\WindowsArchitecture") || is_null($this->_propDict["applicableArchitectures"])) {
                return $this->_propDict["applicableArchitectures"];
            } else {
                $this->_propDict["applicableArchitectures"] = new WindowsArchitecture($this->_propDict["applicableArchitectures"]);
                return $this->_propDict["applicableArchitectures"];
            }
        }
        return null;
    }

    /**
    * Sets the applicableArchitectures
    * The Windows architecture(s) on which this app can run. Possible values are: none, x86, x64, arm, neutral; default value is none. Possible values are: none, x86, x64, arm, neutral.
    *
    * @param WindowsArchitecture $val The applicableArchitectures
    *
    * @return WindowsAppX
    */
    public function setApplicableArchitectures($val)
    {
        $this->_propDict["applicableArchitectures"] = $val;
        return $this;
    }

    /**
    * Gets the identityName
    * The identity name of the uploaded app package. For example: 'Contoso.DemoApp'.
    *
    * @return string|null The identityName
    */
    public function getIdentityName()
    {
        if (array_key_exists("identityName", $this->_propDict)) {
            return $this->_propDict["identityName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityName
    * The identity name of the uploaded app package. For example: 'Contoso.DemoApp'.
    *
    * @param string $val The identityName
    *
    * @return WindowsAppX
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
        return $this;
    }

    /**
    * Gets the identityPublisherHash
    * The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: 'AB82CD0XYZ'.
    *
    * @return string|null The identityPublisherHash
    */
    public function getIdentityPublisherHash()
    {
        if (array_key_exists("identityPublisherHash", $this->_propDict)) {
            return $this->_propDict["identityPublisherHash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityPublisherHash
    * The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: 'AB82CD0XYZ'.
    *
    * @param string $val The identityPublisherHash
    *
    * @return WindowsAppX
    */
    public function setIdentityPublisherHash($val)
    {
        $this->_propDict["identityPublisherHash"] = $val;
        return $this;
    }

    /**
    * Gets the identityResourceIdentifier
    * The identity resource identifier of the uploaded app package. For example: 'TestResourceId'.
    *
    * @return string|null The identityResourceIdentifier
    */
    public function getIdentityResourceIdentifier()
    {
        if (array_key_exists("identityResourceIdentifier", $this->_propDict)) {
            return $this->_propDict["identityResourceIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityResourceIdentifier
    * The identity resource identifier of the uploaded app package. For example: 'TestResourceId'.
    *
    * @param string $val The identityResourceIdentifier
    *
    * @return WindowsAppX
    */
    public function setIdentityResourceIdentifier($val)
    {
        $this->_propDict["identityResourceIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the identityVersion
    * The identity version of the uploaded app package. For example: '1.0.0.0'.
    *
    * @return string|null The identityVersion
    */
    public function getIdentityVersion()
    {
        if (array_key_exists("identityVersion", $this->_propDict)) {
            return $this->_propDict["identityVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityVersion
    * The identity version of the uploaded app package. For example: '1.0.0.0'.
    *
    * @param string $val The identityVersion
    *
    * @return WindowsAppX
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }

    /**
    * Gets the isBundle
    * When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE.
    *
    * @return bool|null The isBundle
    */
    public function getIsBundle()
    {
        if (array_key_exists("isBundle", $this->_propDict)) {
            return $this->_propDict["isBundle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBundle
    * When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE.
    *
    * @param bool $val The isBundle
    *
    * @return WindowsAppX
    */
    public function setIsBundle($val)
    {
        $this->_propDict["isBundle"] = boolval($val);
        return $this;
    }

    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system. Valid values for a WindowsAppX app include v8_0, v8_1 and v10_0. If the app is a bundle, the minimum supported OS has to be at least v8_1.
    *
    * @return WindowsMinimumOperatingSystem|null The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Microsoft\Graph\Model\WindowsMinimumOperatingSystem") || is_null($this->_propDict["minimumSupportedOperatingSystem"])) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new WindowsMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system. Valid values for a WindowsAppX app include v8_0, v8_1 and v10_0. If the app is a bundle, the minimum supported OS has to be at least v8_1.
    *
    * @param WindowsMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return WindowsAppX
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }

}
