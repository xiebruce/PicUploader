<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WinGetApp File
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
* WinGetApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WinGetApp extends MobileApp
{
    /**
    * Gets the installExperience
    * The install experience settings associated with this application, which are used to ensure the desired install experiences on the target device are taken into account. This includes the account type (System or User) that actions should be run as on target devices. Required at creation time.
    *
    * @return WinGetAppInstallExperience|null The installExperience
    */
    public function getInstallExperience()
    {
        if (array_key_exists("installExperience", $this->_propDict)) {
            if (is_a($this->_propDict["installExperience"], "\Beta\Microsoft\Graph\Model\WinGetAppInstallExperience") || is_null($this->_propDict["installExperience"])) {
                return $this->_propDict["installExperience"];
            } else {
                $this->_propDict["installExperience"] = new WinGetAppInstallExperience($this->_propDict["installExperience"]);
                return $this->_propDict["installExperience"];
            }
        }
        return null;
    }

    /**
    * Sets the installExperience
    * The install experience settings associated with this application, which are used to ensure the desired install experiences on the target device are taken into account. This includes the account type (System or User) that actions should be run as on target devices. Required at creation time.
    *
    * @param WinGetAppInstallExperience $val The installExperience
    *
    * @return WinGetApp
    */
    public function setInstallExperience($val)
    {
        $this->_propDict["installExperience"] = $val;
        return $this;
    }

    /**
    * Gets the packageIdentifier
    * The PackageIdentifier from the WinGet source repository REST API. This also maps to the Id when using the WinGet client command line application. Required at creation time, cannot be modified on existing objects.
    *
    * @return string|null The packageIdentifier
    */
    public function getPackageIdentifier()
    {
        if (array_key_exists("packageIdentifier", $this->_propDict)) {
            return $this->_propDict["packageIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packageIdentifier
    * The PackageIdentifier from the WinGet source repository REST API. This also maps to the Id when using the WinGet client command line application. Required at creation time, cannot be modified on existing objects.
    *
    * @param string $val The packageIdentifier
    *
    * @return WinGetApp
    */
    public function setPackageIdentifier($val)
    {
        $this->_propDict["packageIdentifier"] = $val;
        return $this;
    }

}
