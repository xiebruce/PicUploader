<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcProvisioningPolicy File
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
* CloudPcProvisioningPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcProvisioningPolicy extends Entity
{
    /**
    * Gets the alternateResourceUrl
    * The URL of the alternate resource that links to this provisioning policy. Read-only.
    *
    * @return string|null The alternateResourceUrl
    */
    public function getAlternateResourceUrl()
    {
        if (array_key_exists("alternateResourceUrl", $this->_propDict)) {
            return $this->_propDict["alternateResourceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateResourceUrl
    * The URL of the alternate resource that links to this provisioning policy. Read-only.
    *
    * @param string $val The alternateResourceUrl
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setAlternateResourceUrl($val)
    {
        $this->_propDict["alternateResourceUrl"] = $val;
        return $this;
    }

    /**
    * Gets the cloudPcGroupDisplayName
    * The display name of the Cloud PC group that the Cloud PCs reside in. Read-only.
    *
    * @return string|null The cloudPcGroupDisplayName
    */
    public function getCloudPcGroupDisplayName()
    {
        if (array_key_exists("cloudPcGroupDisplayName", $this->_propDict)) {
            return $this->_propDict["cloudPcGroupDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcGroupDisplayName
    * The display name of the Cloud PC group that the Cloud PCs reside in. Read-only.
    *
    * @param string $val The cloudPcGroupDisplayName
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setCloudPcGroupDisplayName($val)
    {
        $this->_propDict["cloudPcGroupDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The provisioning policy description.
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
    * The provisioning policy description.
    *
    * @param string $val The description
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the provisioning policy.
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
    * The display name for the provisioning policy.
    *
    * @param string $val The displayName
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the domainJoinConfiguration
    * Specifies how Cloud PCs will join Azure Active Directory.
    *
    * @return CloudPcDomainJoinConfiguration|null The domainJoinConfiguration
    */
    public function getDomainJoinConfiguration()
    {
        if (array_key_exists("domainJoinConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["domainJoinConfiguration"], "\Beta\Microsoft\Graph\Model\CloudPcDomainJoinConfiguration") || is_null($this->_propDict["domainJoinConfiguration"])) {
                return $this->_propDict["domainJoinConfiguration"];
            } else {
                $this->_propDict["domainJoinConfiguration"] = new CloudPcDomainJoinConfiguration($this->_propDict["domainJoinConfiguration"]);
                return $this->_propDict["domainJoinConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the domainJoinConfiguration
    * Specifies how Cloud PCs will join Azure Active Directory.
    *
    * @param CloudPcDomainJoinConfiguration $val The domainJoinConfiguration
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setDomainJoinConfiguration($val)
    {
        $this->_propDict["domainJoinConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the gracePeriodInHours
    * The number of hours to wait before reprovisioning/deprovisioning happens. Read-only.
    *
    * @return int|null The gracePeriodInHours
    */
    public function getGracePeriodInHours()
    {
        if (array_key_exists("gracePeriodInHours", $this->_propDict)) {
            return $this->_propDict["gracePeriodInHours"];
        } else {
            return null;
        }
    }

    /**
    * Sets the gracePeriodInHours
    * The number of hours to wait before reprovisioning/deprovisioning happens. Read-only.
    *
    * @param int $val The gracePeriodInHours
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setGracePeriodInHours($val)
    {
        $this->_propDict["gracePeriodInHours"] = intval($val);
        return $this;
    }

    /**
    * Gets the imageDisplayName
    * The display name for the OS image you’re provisioning.
    *
    * @return string|null The imageDisplayName
    */
    public function getImageDisplayName()
    {
        if (array_key_exists("imageDisplayName", $this->_propDict)) {
            return $this->_propDict["imageDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the imageDisplayName
    * The display name for the OS image you’re provisioning.
    *
    * @param string $val The imageDisplayName
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setImageDisplayName($val)
    {
        $this->_propDict["imageDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the imageId
    * The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os.
    *
    * @return string|null The imageId
    */
    public function getImageId()
    {
        if (array_key_exists("imageId", $this->_propDict)) {
            return $this->_propDict["imageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the imageId
    * The ID of the OS image you want to provision on Cloud PCs. The format for a gallery type image is: {publisher_offer_sku}. Supported values for each of the parameters are as follows:publisher: Microsoftwindowsdesktop. offer: windows-ent-cpc. sku: 21h1-ent-cpc-m365, 21h1-ent-cpc-os, 20h2-ent-cpc-m365, 20h2-ent-cpc-os, 20h1-ent-cpc-m365, 20h1-ent-cpc-os, 19h2-ent-cpc-m365 and 19h2-ent-cpc-os.
    *
    * @param string $val The imageId
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setImageId($val)
    {
        $this->_propDict["imageId"] = $val;
        return $this;
    }

    /**
    * Gets the imageType
    * The type of OS image (custom or gallery) you want to provision on Cloud PCs. Possible values are: gallery, custom.
    *
    * @return CloudPcProvisioningPolicyImageType|null The imageType
    */
    public function getImageType()
    {
        if (array_key_exists("imageType", $this->_propDict)) {
            if (is_a($this->_propDict["imageType"], "\Beta\Microsoft\Graph\Model\CloudPcProvisioningPolicyImageType") || is_null($this->_propDict["imageType"])) {
                return $this->_propDict["imageType"];
            } else {
                $this->_propDict["imageType"] = new CloudPcProvisioningPolicyImageType($this->_propDict["imageType"]);
                return $this->_propDict["imageType"];
            }
        }
        return null;
    }

    /**
    * Sets the imageType
    * The type of OS image (custom or gallery) you want to provision on Cloud PCs. Possible values are: gallery, custom.
    *
    * @param CloudPcProvisioningPolicyImageType $val The imageType
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setImageType($val)
    {
        $this->_propDict["imageType"] = $val;
        return $this;
    }

    /**
    * Gets the localAdminEnabled
    * Indicates whether the local admin option is enabled. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. Read-only.
    *
    * @return bool|null The localAdminEnabled
    */
    public function getLocalAdminEnabled()
    {
        if (array_key_exists("localAdminEnabled", $this->_propDict)) {
            return $this->_propDict["localAdminEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localAdminEnabled
    * Indicates whether the local admin option is enabled. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. Read-only.
    *
    * @param bool $val The localAdminEnabled
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setLocalAdminEnabled($val)
    {
        $this->_propDict["localAdminEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the managedBy
    * Specifies which services manage the Azure network connection. Possible values are: windows365, devBox, unknownFutureValue. Read-only.
    *
    * @return CloudPcManagementService|null The managedBy
    */
    public function getManagedBy()
    {
        if (array_key_exists("managedBy", $this->_propDict)) {
            if (is_a($this->_propDict["managedBy"], "\Beta\Microsoft\Graph\Model\CloudPcManagementService") || is_null($this->_propDict["managedBy"])) {
                return $this->_propDict["managedBy"];
            } else {
                $this->_propDict["managedBy"] = new CloudPcManagementService($this->_propDict["managedBy"]);
                return $this->_propDict["managedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the managedBy
    * Specifies which services manage the Azure network connection. Possible values are: windows365, devBox, unknownFutureValue. Read-only.
    *
    * @param CloudPcManagementService $val The managedBy
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setManagedBy($val)
    {
        $this->_propDict["managedBy"] = $val;
        return $this;
    }

    /**
    * Gets the microsoftManagedDesktop
    * The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it.
    *
    * @return MicrosoftManagedDesktop|null The microsoftManagedDesktop
    */
    public function getMicrosoftManagedDesktop()
    {
        if (array_key_exists("microsoftManagedDesktop", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftManagedDesktop"], "\Beta\Microsoft\Graph\Model\MicrosoftManagedDesktop") || is_null($this->_propDict["microsoftManagedDesktop"])) {
                return $this->_propDict["microsoftManagedDesktop"];
            } else {
                $this->_propDict["microsoftManagedDesktop"] = new MicrosoftManagedDesktop($this->_propDict["microsoftManagedDesktop"]);
                return $this->_propDict["microsoftManagedDesktop"];
            }
        }
        return null;
    }

    /**
    * Sets the microsoftManagedDesktop
    * The specific settings for the Microsoft Managed Desktop, which enables customers to get a managed device experience for the Cloud PC. Before you can enable Microsoft Managed Desktop, an admin must configure it.
    *
    * @param MicrosoftManagedDesktop $val The microsoftManagedDesktop
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setMicrosoftManagedDesktop($val)
    {
        $this->_propDict["microsoftManagedDesktop"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesConnectionId
    * The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service.
    *
    * @return string|null The onPremisesConnectionId
    */
    public function getOnPremisesConnectionId()
    {
        if (array_key_exists("onPremisesConnectionId", $this->_propDict)) {
            return $this->_propDict["onPremisesConnectionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesConnectionId
    * The ID of the cloudPcOnPremisesConnection. To ensure that Cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the Cloud PC service.
    *
    * @param string $val The onPremisesConnectionId
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setOnPremisesConnectionId($val)
    {
        $this->_propDict["onPremisesConnectionId"] = $val;
        return $this;
    }

    /**
    * Gets the windowsSettings
    * Specific Windows settings to configure while creating Cloud PCs for this provisioning policy.
    *
    * @return CloudPcWindowsSettings|null The windowsSettings
    */
    public function getWindowsSettings()
    {
        if (array_key_exists("windowsSettings", $this->_propDict)) {
            if (is_a($this->_propDict["windowsSettings"], "\Beta\Microsoft\Graph\Model\CloudPcWindowsSettings") || is_null($this->_propDict["windowsSettings"])) {
                return $this->_propDict["windowsSettings"];
            } else {
                $this->_propDict["windowsSettings"] = new CloudPcWindowsSettings($this->_propDict["windowsSettings"]);
                return $this->_propDict["windowsSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the windowsSettings
    * Specific Windows settings to configure while creating Cloud PCs for this provisioning policy.
    *
    * @param CloudPcWindowsSettings $val The windowsSettings
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setWindowsSettings($val)
    {
        $this->_propDict["windowsSettings"] = $val;
        return $this;
    }


     /**
     * Gets the assignments
    * A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship.
     *
     * @return array|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignments
    * A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. See an example of getting the assignments relationship.
    *
    * @param CloudPcProvisioningPolicyAssignment[] $val The assignments
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }

}
