<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaDeployment File
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
* ZebraFotaDeployment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaDeployment extends Entity
{

     /**
     * Gets the deploymentAssignments
    * Collection of Android FOTA Assignment
     *
     * @return array|null The deploymentAssignments
     */
    public function getDeploymentAssignments()
    {
        if (array_key_exists("deploymentAssignments", $this->_propDict)) {
           return $this->_propDict["deploymentAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deploymentAssignments
    * Collection of Android FOTA Assignment
    *
    * @param AndroidFotaDeploymentAssignment[] $val The deploymentAssignments
    *
    * @return ZebraFotaDeployment
    */
    public function setDeploymentAssignments($val)
    {
        $this->_propDict["deploymentAssignments"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentSettings
    * Represents settings required to create a deployment such as deployment type, artifact info, download and installation
    *
    * @return ZebraFotaDeploymentSettings|null The deploymentSettings
    */
    public function getDeploymentSettings()
    {
        if (array_key_exists("deploymentSettings", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSettings"], "\Beta\Microsoft\Graph\Model\ZebraFotaDeploymentSettings") || is_null($this->_propDict["deploymentSettings"])) {
                return $this->_propDict["deploymentSettings"];
            } else {
                $this->_propDict["deploymentSettings"] = new ZebraFotaDeploymentSettings($this->_propDict["deploymentSettings"]);
                return $this->_propDict["deploymentSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentSettings
    * Represents settings required to create a deployment such as deployment type, artifact info, download and installation
    *
    * @param ZebraFotaDeploymentSettings $val The deploymentSettings
    *
    * @return ZebraFotaDeployment
    */
    public function setDeploymentSettings($val)
    {
        $this->_propDict["deploymentSettings"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentStatus
    * Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
    *
    * @return ZebraFotaDeploymentStatus|null The deploymentStatus
    */
    public function getDeploymentStatus()
    {
        if (array_key_exists("deploymentStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentStatus"], "\Beta\Microsoft\Graph\Model\ZebraFotaDeploymentStatus") || is_null($this->_propDict["deploymentStatus"])) {
                return $this->_propDict["deploymentStatus"];
            } else {
                $this->_propDict["deploymentStatus"] = new ZebraFotaDeploymentStatus($this->_propDict["deploymentStatus"]);
                return $this->_propDict["deploymentStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentStatus
    * Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
    *
    * @param ZebraFotaDeploymentStatus $val The deploymentStatus
    *
    * @return ZebraFotaDeployment
    */
    public function setDeploymentStatus($val)
    {
        $this->_propDict["deploymentStatus"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * A human readable description of the deployment.
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
    * A human readable description of the deployment.
    *
    * @param string $val The description
    *
    * @return ZebraFotaDeployment
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * A human readable name of the deployment.
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
    * A human readable name of the deployment.
    *
    * @param string $val The displayName
    *
    * @return ZebraFotaDeployment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance
    *
    * @return array|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance
    *
    * @param string[] $val The roleScopeTagIds
    *
    * @return ZebraFotaDeployment
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

}
