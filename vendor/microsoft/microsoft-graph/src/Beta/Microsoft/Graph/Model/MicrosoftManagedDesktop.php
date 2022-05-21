<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftManagedDesktop File
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
* MicrosoftManagedDesktop class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftManagedDesktop extends Entity
{
    /**
    * Gets the profile
    * The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
    *
    * @return string|null The profile
    */
    public function getProfile()
    {
        if (array_key_exists("profile", $this->_propDict)) {
            return $this->_propDict["profile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profile
    * The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
    *
    * @param string $val The value of the profile
    *
    * @return MicrosoftManagedDesktop
    */
    public function setProfile($val)
    {
        $this->_propDict["profile"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * Indicates whether the provisioning policy enables Microsoft Managed Desktop. It indicates the type of plan under which the device is managed if the provisioning policy is enabled. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue.
    *
    * @return MicrosoftManagedDesktopType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\MicrosoftManagedDesktopType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new MicrosoftManagedDesktopType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Indicates whether the provisioning policy enables Microsoft Managed Desktop. It indicates the type of plan under which the device is managed if the provisioning policy is enabled. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue.
    *
    * @param MicrosoftManagedDesktopType $val The value to assign to the type
    *
    * @return MicrosoftManagedDesktop The MicrosoftManagedDesktop
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
