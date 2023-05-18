<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesDirectorySynchronization File
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
* OnPremisesDirectorySynchronization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesDirectorySynchronization extends Entity
{
    /**
    * Gets the configuration
    * Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant.
    *
    * @return OnPremisesDirectorySynchronizationConfiguration|null The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Beta\Microsoft\Graph\Model\OnPremisesDirectorySynchronizationConfiguration") || is_null($this->_propDict["configuration"])) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new OnPremisesDirectorySynchronizationConfiguration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }

    /**
    * Sets the configuration
    * Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant.
    *
    * @param OnPremisesDirectorySynchronizationConfiguration $val The configuration
    *
    * @return OnPremisesDirectorySynchronization
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }

    /**
    * Gets the features
    * Consists of directory synchronization features that can be enabled or disabled.
    *
    * @return OnPremisesDirectorySynchronizationFeature|null The features
    */
    public function getFeatures()
    {
        if (array_key_exists("features", $this->_propDict)) {
            if (is_a($this->_propDict["features"], "\Beta\Microsoft\Graph\Model\OnPremisesDirectorySynchronizationFeature") || is_null($this->_propDict["features"])) {
                return $this->_propDict["features"];
            } else {
                $this->_propDict["features"] = new OnPremisesDirectorySynchronizationFeature($this->_propDict["features"]);
                return $this->_propDict["features"];
            }
        }
        return null;
    }

    /**
    * Sets the features
    * Consists of directory synchronization features that can be enabled or disabled.
    *
    * @param OnPremisesDirectorySynchronizationFeature $val The features
    *
    * @return OnPremisesDirectorySynchronization
    */
    public function setFeatures($val)
    {
        $this->_propDict["features"] = $val;
        return $this;
    }

}
