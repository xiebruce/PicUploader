<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidFotaDeploymentAssignment File
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
* AndroidFotaDeploymentAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidFotaDeploymentAssignment extends Entity
{

    /**
    * Gets the assignmentTarget
    * The Azure Active Directory (Azure AD) we are deploying firmware updates to (e.g.: d93c8f48-bd42-4514-ba40-bc6b84780930). NOTE: Use this property moving forward because the existing property, target, is deprecated.
    *
    * @return DeviceAndAppManagementAssignmentTarget|null The assignmentTarget
    */
    public function getAssignmentTarget()
    {
        if (array_key_exists("assignmentTarget", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentTarget"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget") || is_null($this->_propDict["assignmentTarget"])) {
                return $this->_propDict["assignmentTarget"];
            } else {
                $this->_propDict["assignmentTarget"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["assignmentTarget"]);
                return $this->_propDict["assignmentTarget"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentTarget
    * The Azure Active Directory (Azure AD) we are deploying firmware updates to (e.g.: d93c8f48-bd42-4514-ba40-bc6b84780930). NOTE: Use this property moving forward because the existing property, target, is deprecated.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The value to assign to the assignmentTarget
    *
    * @return AndroidFotaDeploymentAssignment The AndroidFotaDeploymentAssignment
    */
    public function setAssignmentTarget($val)
    {
        $this->_propDict["assignmentTarget"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * The display name of the Azure AD security group used for the assignment.
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
    * The display name of the Azure AD security group used for the assignment.
    *
    * @param string $val The value of the displayName
    *
    * @return AndroidFotaDeploymentAssignment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * A unique identifier assigned to each Android FOTA Assignment entity
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * A unique identifier assigned to each Android FOTA Assignment entity
    *
    * @param string $val The value of the id
    *
    * @return AndroidFotaDeploymentAssignment
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the target
    * The AAD Group we are deploying firmware updates to
    *
    * @return AndroidFotaDeploymentAssignmentTarget|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\AndroidFotaDeploymentAssignmentTarget") || is_null($this->_propDict["target"])) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new AndroidFotaDeploymentAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }

    /**
    * Sets the target
    * The AAD Group we are deploying firmware updates to
    *
    * @param AndroidFotaDeploymentAssignmentTarget $val The value to assign to the target
    *
    * @return AndroidFotaDeploymentAssignment The AndroidFotaDeploymentAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
         return $this;
    }
}
