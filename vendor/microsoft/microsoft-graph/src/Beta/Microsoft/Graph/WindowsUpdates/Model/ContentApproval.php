<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentApproval File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* ContentApproval class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentApproval extends ComplianceChange
{
    /**
    * Gets the content
    * Specifies what content to deploy. Deployable content should be provided as one of the following derived types: microsoft.graph.windowsUpdates.catalogContent.
    *
    * @return DeployableContent|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeployableContent") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = new DeployableContent($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * Specifies what content to deploy. Deployable content should be provided as one of the following derived types: microsoft.graph.windowsUpdates.catalogContent.
    *
    * @param DeployableContent $val The content
    *
    * @return ContentApproval
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentSettings
    * Settings for governing how to deploy content.
    *
    * @return DeploymentSettings|null The deploymentSettings
    */
    public function getDeploymentSettings()
    {
        if (array_key_exists("deploymentSettings", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSettings"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\DeploymentSettings") || is_null($this->_propDict["deploymentSettings"])) {
                return $this->_propDict["deploymentSettings"];
            } else {
                $this->_propDict["deploymentSettings"] = new DeploymentSettings($this->_propDict["deploymentSettings"]);
                return $this->_propDict["deploymentSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentSettings
    * Settings for governing how to deploy content.
    *
    * @param DeploymentSettings $val The deploymentSettings
    *
    * @return ContentApproval
    */
    public function setDeploymentSettings($val)
    {
        $this->_propDict["deploymentSettings"] = $val;
        return $this;
    }


     /**
     * Gets the deployments
    * Deployments created as a result of applying the approval.
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
    * Deployments created as a result of applying the approval.
    *
    * @param Deployment[] $val The deployments
    *
    * @return ContentApproval
    */
    public function setDeployments($val)
    {
        $this->_propDict["deployments"] = $val;
        return $this;
    }

}
