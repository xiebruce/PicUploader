<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* UserSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserSettings extends Entity
{
    /**
    * Gets the contributionToContentDiscoveryDisabled
    *
    * @return bool The contributionToContentDiscoveryDisabled
    */
    public function getContributionToContentDiscoveryDisabled()
    {
        if (array_key_exists("contributionToContentDiscoveryDisabled", $this->_propDict)) {
            return $this->_propDict["contributionToContentDiscoveryDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contributionToContentDiscoveryDisabled
    *
    * @param bool $val The contributionToContentDiscoveryDisabled
    *
    * @return UserSettings
    */
    public function setContributionToContentDiscoveryDisabled($val)
    {
        $this->_propDict["contributionToContentDiscoveryDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contributionToContentDiscoveryAsOrganizationDisabled
    *
    * @return bool The contributionToContentDiscoveryAsOrganizationDisabled
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled()
    {
        if (array_key_exists("contributionToContentDiscoveryAsOrganizationDisabled", $this->_propDict)) {
            return $this->_propDict["contributionToContentDiscoveryAsOrganizationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contributionToContentDiscoveryAsOrganizationDisabled
    *
    * @param bool $val The contributionToContentDiscoveryAsOrganizationDisabled
    *
    * @return UserSettings
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled($val)
    {
        $this->_propDict["contributionToContentDiscoveryAsOrganizationDisabled"] = boolval($val);
        return $this;
    }
    
}