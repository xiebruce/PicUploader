<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdminWindowsUpdates File
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
* AdminWindowsUpdates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdminWindowsUpdates extends Entity
{
    /**
    * Gets the catalog
    * Catalog of content that can be approved for deployment by the deployment service. Read-only.
    *
    * @return \Beta\Microsoft\Graph\WindowsUpdates\Model\Catalog|null The catalog
    */
    public function getCatalog()
    {
        if (array_key_exists("catalog", $this->_propDict)) {
            if (is_a($this->_propDict["catalog"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\Catalog") || is_null($this->_propDict["catalog"])) {
                return $this->_propDict["catalog"];
            } else {
                $this->_propDict["catalog"] = new \Beta\Microsoft\Graph\WindowsUpdates\Model\Catalog($this->_propDict["catalog"]);
                return $this->_propDict["catalog"];
            }
        }
        return null;
    }

    /**
    * Sets the catalog
    * Catalog of content that can be approved for deployment by the deployment service. Read-only.
    *
    * @param \Beta\Microsoft\Graph\WindowsUpdates\Model\Catalog $val The catalog
    *
    * @return AdminWindowsUpdates
    */
    public function setCatalog($val)
    {
        $this->_propDict["catalog"] = $val;
        return $this;
    }


     /**
     * Gets the deploymentAudiences
    * The set of updatableAsset resources to which a deployment can apply.
     *
     * @return array|null The deploymentAudiences
     */
    public function getDeploymentAudiences()
    {
        if (array_key_exists("deploymentAudiences", $this->_propDict)) {
           return $this->_propDict["deploymentAudiences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deploymentAudiences
    * The set of updatableAsset resources to which a deployment can apply.
    *
    * @param \Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentAudience[] $val The deploymentAudiences
    *
    * @return AdminWindowsUpdates
    */
    public function setDeploymentAudiences($val)
    {
        $this->_propDict["deploymentAudiences"] = $val;
        return $this;
    }


     /**
     * Gets the deployments
    * Deployments created using the deployment service.
     *
     * @return array|null The deployments
     */
    public function getDeployments()
    {
        if (array_key_exists("deployments", $this->_propDict)) {
           return $this->_propDict["deployments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deployments
    * Deployments created using the deployment service.
    *
    * @param \Beta\Microsoft\Graph\WindowsUpdates\Model\Deployment[] $val The deployments
    *
    * @return AdminWindowsUpdates
    */
    public function setDeployments($val)
    {
        $this->_propDict["deployments"] = $val;
        return $this;
    }


     /**
     * Gets the resourceConnections
    * Service connections to external resources such as analytics workspaces.
     *
     * @return array|null The resourceConnections
     */
    public function getResourceConnections()
    {
        if (array_key_exists("resourceConnections", $this->_propDict)) {
           return $this->_propDict["resourceConnections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceConnections
    * Service connections to external resources such as analytics workspaces.
    *
    * @param \Beta\Microsoft\Graph\WindowsUpdates\Model\ResourceConnection[] $val The resourceConnections
    *
    * @return AdminWindowsUpdates
    */
    public function setResourceConnections($val)
    {
        $this->_propDict["resourceConnections"] = $val;
        return $this;
    }


     /**
     * Gets the updatableAssets
    * Assets registered with the deployment service that can receive updates.
     *
     * @return array|null The updatableAssets
     */
    public function getUpdatableAssets()
    {
        if (array_key_exists("updatableAssets", $this->_propDict)) {
           return $this->_propDict["updatableAssets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the updatableAssets
    * Assets registered with the deployment service that can receive updates.
    *
    * @param \Beta\Microsoft\Graph\WindowsUpdates\Model\UpdatableAsset[] $val The updatableAssets
    *
    * @return AdminWindowsUpdates
    */
    public function setUpdatableAssets($val)
    {
        $this->_propDict["updatableAssets"] = $val;
        return $this;
    }


     /**
     * Gets the updatePolicies
    * A collection of policies for approving the deployment of different content to an audience over time.
     *
     * @return array|null The updatePolicies
     */
    public function getUpdatePolicies()
    {
        if (array_key_exists("updatePolicies", $this->_propDict)) {
           return $this->_propDict["updatePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the updatePolicies
    * A collection of policies for approving the deployment of different content to an audience over time.
    *
    * @param \Beta\Microsoft\Graph\WindowsUpdates\Model\UpdatePolicy[] $val The updatePolicies
    *
    * @return AdminWindowsUpdates
    */
    public function setUpdatePolicies($val)
    {
        $this->_propDict["updatePolicies"] = $val;
        return $this;
    }

}
