<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementManagement File
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
* EntitlementManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementManagement extends Entity
{

     /**
     * Gets the accessPackageAssignmentApprovals
    * Approval stages for decisions associated with access package assignment requests.
     *
     * @return array|null The accessPackageAssignmentApprovals
     */
    public function getAccessPackageAssignmentApprovals()
    {
        if (array_key_exists("accessPackageAssignmentApprovals", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentApprovals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageAssignmentApprovals
    * Approval stages for decisions associated with access package assignment requests.
    *
    * @param Approval[] $val The accessPackageAssignmentApprovals
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentApprovals($val)
    {
        $this->_propDict["accessPackageAssignmentApprovals"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignmentPolicies
    * Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
     *
     * @return array|null The accessPackageAssignmentPolicies
     */
    public function getAccessPackageAssignmentPolicies()
    {
        if (array_key_exists("accessPackageAssignmentPolicies", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageAssignmentPolicies
    * Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
    *
    * @param AccessPackageAssignmentPolicy[] $val The accessPackageAssignmentPolicies
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentPolicies($val)
    {
        $this->_propDict["accessPackageAssignmentPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignmentRequests
    * Represents access package assignment requests created by or on behalf of a user.
     *
     * @return array|null The accessPackageAssignmentRequests
     */
    public function getAccessPackageAssignmentRequests()
    {
        if (array_key_exists("accessPackageAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageAssignmentRequests
    * Represents access package assignment requests created by or on behalf of a user.
    *
    * @param AccessPackageAssignmentRequest[] $val The accessPackageAssignmentRequests
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentRequests($val)
    {
        $this->_propDict["accessPackageAssignmentRequests"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignmentResourceRoles
    * Represents the resource-specific role which a subject has been assigned through an access package assignment.
     *
     * @return array|null The accessPackageAssignmentResourceRoles
     */
    public function getAccessPackageAssignmentResourceRoles()
    {
        if (array_key_exists("accessPackageAssignmentResourceRoles", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentResourceRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageAssignmentResourceRoles
    * Represents the resource-specific role which a subject has been assigned through an access package assignment.
    *
    * @param AccessPackageAssignmentResourceRole[] $val The accessPackageAssignmentResourceRoles
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentResourceRoles($val)
    {
        $this->_propDict["accessPackageAssignmentResourceRoles"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageAssignments
    * The assignment of an access package to a subject for a period of time.
     *
     * @return array|null The accessPackageAssignments
     */
    public function getAccessPackageAssignments()
    {
        if (array_key_exists("accessPackageAssignments", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageAssignments
    * The assignment of an access package to a subject for a period of time.
    *
    * @param AccessPackageAssignment[] $val The accessPackageAssignments
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignments($val)
    {
        $this->_propDict["accessPackageAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageCatalogs
    * A container of access packages.
     *
     * @return array|null The accessPackageCatalogs
     */
    public function getAccessPackageCatalogs()
    {
        if (array_key_exists("accessPackageCatalogs", $this->_propDict)) {
           return $this->_propDict["accessPackageCatalogs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageCatalogs
    * A container of access packages.
    *
    * @param AccessPackageCatalog[] $val The accessPackageCatalogs
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageCatalogs($val)
    {
        $this->_propDict["accessPackageCatalogs"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceEnvironments
    * A reference to the geolocation environment in which a resource is located.
     *
     * @return array|null The accessPackageResourceEnvironments
     */
    public function getAccessPackageResourceEnvironments()
    {
        if (array_key_exists("accessPackageResourceEnvironments", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceEnvironments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageResourceEnvironments
    * A reference to the geolocation environment in which a resource is located.
    *
    * @param AccessPackageResourceEnvironment[] $val The accessPackageResourceEnvironments
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceEnvironments($val)
    {
        $this->_propDict["accessPackageResourceEnvironments"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceRequests
    * Represents a request to add or remove a resource to or from a catalog respectively.
     *
     * @return array|null The accessPackageResourceRequests
     */
    public function getAccessPackageResourceRequests()
    {
        if (array_key_exists("accessPackageResourceRequests", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageResourceRequests
    * Represents a request to add or remove a resource to or from a catalog respectively.
    *
    * @param AccessPackageResourceRequest[] $val The accessPackageResourceRequests
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceRequests($val)
    {
        $this->_propDict["accessPackageResourceRequests"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResourceRoleScopes
    * A reference to both a scope within a resource, and a role in that resource for that scope.
     *
     * @return array|null The accessPackageResourceRoleScopes
     */
    public function getAccessPackageResourceRoleScopes()
    {
        if (array_key_exists("accessPackageResourceRoleScopes", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceRoleScopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageResourceRoleScopes
    * A reference to both a scope within a resource, and a role in that resource for that scope.
    *
    * @param AccessPackageResourceRoleScope[] $val The accessPackageResourceRoleScopes
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceRoleScopes($val)
    {
        $this->_propDict["accessPackageResourceRoleScopes"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackageResources
    * A reference to a resource associated with an access package catalog.
     *
     * @return array|null The accessPackageResources
     */
    public function getAccessPackageResources()
    {
        if (array_key_exists("accessPackageResources", $this->_propDict)) {
           return $this->_propDict["accessPackageResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageResources
    * A reference to a resource associated with an access package catalog.
    *
    * @param AccessPackageResource[] $val The accessPackageResources
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResources($val)
    {
        $this->_propDict["accessPackageResources"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackages
    * Represents access package objects.
     *
     * @return array|null The accessPackages
     */
    public function getAccessPackages()
    {
        if (array_key_exists("accessPackages", $this->_propDict)) {
           return $this->_propDict["accessPackages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackages
    * Represents access package objects.
    *
    * @param AccessPackage[] $val The accessPackages
    *
    * @return EntitlementManagement
    */
    public function setAccessPackages($val)
    {
        $this->_propDict["accessPackages"] = $val;
        return $this;
    }


     /**
     * Gets the connectedOrganizations
    * Represents references to a directory or domain of another organization whose users can request access.
     *
     * @return array|null The connectedOrganizations
     */
    public function getConnectedOrganizations()
    {
        if (array_key_exists("connectedOrganizations", $this->_propDict)) {
           return $this->_propDict["connectedOrganizations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectedOrganizations
    * Represents references to a directory or domain of another organization whose users can request access.
    *
    * @param ConnectedOrganization[] $val The connectedOrganizations
    *
    * @return EntitlementManagement
    */
    public function setConnectedOrganizations($val)
    {
        $this->_propDict["connectedOrganizations"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    * Represents the settings that control the behavior of Azure AD entitlement management.
    *
    * @return EntitlementManagementSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\EntitlementManagementSettings") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new EntitlementManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    * Represents the settings that control the behavior of Azure AD entitlement management.
    *
    * @param EntitlementManagementSettings $val The settings
    *
    * @return EntitlementManagement
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

}
