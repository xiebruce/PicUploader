<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Group File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Group class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Group extends DirectoryObject
{

     /**
     * Gets the assignedLabels
    * The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select.
     *
     * @return array|null The assignedLabels
     */
    public function getAssignedLabels()
    {
        if (array_key_exists("assignedLabels", $this->_propDict)) {
           return $this->_propDict["assignedLabels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedLabels
    * The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select.
    *
    * @param AssignedLabel[] $val The assignedLabels
    *
    * @return Group
    */
    public function setAssignedLabels($val)
    {
        $this->_propDict["assignedLabels"] = $val;
        return $this;
    }


     /**
     * Gets the assignedLicenses
    * The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq).Read-only.
     *
     * @return array|null The assignedLicenses
     */
    public function getAssignedLicenses()
    {
        if (array_key_exists("assignedLicenses", $this->_propDict)) {
           return $this->_propDict["assignedLicenses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedLicenses
    * The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq).Read-only.
    *
    * @param AssignedLicense[] $val The assignedLicenses
    *
    * @return Group
    */
    public function setAssignedLicenses($val)
    {
        $this->_propDict["assignedLicenses"] = $val;
        return $this;
    }

    /**
    * Gets the classification
    * Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
    *
    * @return string|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            return $this->_propDict["classification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the classification
    * Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
    *
    * @param string $val The classification
    *
    * @return Group
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Group
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
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
    * An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
    *
    * @param string $val The description
    *
    * @return Group
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the group. This property is required when a group is created and cannot be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
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
    * The display name for the group. This property is required when a group is created and cannot be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    *
    * @param string $val The displayName
    *
    * @return Group
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Group
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the groupTypes
    * Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
    *
    * @return array|null The groupTypes
    */
    public function getGroupTypes()
    {
        if (array_key_exists("groupTypes", $this->_propDict)) {
            return $this->_propDict["groupTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupTypes
    * Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
    *
    * @param string[] $val The groupTypes
    *
    * @return Group
    */
    public function setGroupTypes($val)
    {
        $this->_propDict["groupTypes"] = $val;
        return $this;
    }

    /**
    * Gets the hasMembersWithLicenseErrors
    * Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq).
    *
    * @return bool|null The hasMembersWithLicenseErrors
    */
    public function getHasMembersWithLicenseErrors()
    {
        if (array_key_exists("hasMembersWithLicenseErrors", $this->_propDict)) {
            return $this->_propDict["hasMembersWithLicenseErrors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasMembersWithLicenseErrors
    * Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq).
    *
    * @param bool $val The hasMembersWithLicenseErrors
    *
    * @return Group
    */
    public function setHasMembersWithLicenseErrors($val)
    {
        $this->_propDict["hasMembersWithLicenseErrors"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isAssignableToRole
    * Indicates whether this group can be assigned to an Azure Active Directory role or not. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true, visibility must be Hidden, and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global Administrator and Privileged Role Administrator roles can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsUsing this feature requires a Azure AD Premium P1 license. Returned by default. Supports $filter (eq, ne, not).
    *
    * @return bool|null The isAssignableToRole
    */
    public function getIsAssignableToRole()
    {
        if (array_key_exists("isAssignableToRole", $this->_propDict)) {
            return $this->_propDict["isAssignableToRole"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAssignableToRole
    * Indicates whether this group can be assigned to an Azure Active Directory role or not. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true, visibility must be Hidden, and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global Administrator and Privileged Role Administrator roles can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsUsing this feature requires a Azure AD Premium P1 license. Returned by default. Supports $filter (eq, ne, not).
    *
    * @param bool $val The isAssignableToRole
    *
    * @return Group
    */
    public function setIsAssignableToRole($val)
    {
        $this->_propDict["isAssignableToRole"] = boolval($val);
        return $this;
    }

    /**
    * Gets the licenseProcessingState
    * Indicates status of the group license assignment to all members of the group. Default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only.
    *
    * @return LicenseProcessingState|null The licenseProcessingState
    */
    public function getLicenseProcessingState()
    {
        if (array_key_exists("licenseProcessingState", $this->_propDict)) {
            if (is_a($this->_propDict["licenseProcessingState"], "\Microsoft\Graph\Model\LicenseProcessingState") || is_null($this->_propDict["licenseProcessingState"])) {
                return $this->_propDict["licenseProcessingState"];
            } else {
                $this->_propDict["licenseProcessingState"] = new LicenseProcessingState($this->_propDict["licenseProcessingState"]);
                return $this->_propDict["licenseProcessingState"];
            }
        }
        return null;
    }

    /**
    * Sets the licenseProcessingState
    * Indicates status of the group license assignment to all members of the group. Default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only.
    *
    * @param LicenseProcessingState $val The licenseProcessingState
    *
    * @return Group
    */
    public function setLicenseProcessingState($val)
    {
        $this->_propDict["licenseProcessingState"] = $val;
        return $this;
    }

    /**
    * Gets the mail
    * The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    *
    * @return string|null The mail
    */
    public function getMail()
    {
        if (array_key_exists("mail", $this->_propDict)) {
            return $this->_propDict["mail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mail
    * The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    *
    * @param string $val The mail
    *
    * @return Group
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }

    /**
    * Gets the mailEnabled
    * Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not).
    *
    * @return bool|null The mailEnabled
    */
    public function getMailEnabled()
    {
        if (array_key_exists("mailEnabled", $this->_propDict)) {
            return $this->_propDict["mailEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailEnabled
    * Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not).
    *
    * @param bool $val The mailEnabled
    *
    * @return Group
    */
    public function setMailEnabled($val)
    {
        $this->_propDict["mailEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the mailNickname
    * The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : &amp;lt;&amp;gt; , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    *
    * @return string|null The mailNickname
    */
    public function getMailNickname()
    {
        if (array_key_exists("mailNickname", $this->_propDict)) {
            return $this->_propDict["mailNickname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailNickname
    * The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : &amp;lt;&amp;gt; , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    *
    * @param string $val The mailNickname
    *
    * @return Group
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }

    /**
    * Gets the membershipRule
    * The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
    *
    * @return string|null The membershipRule
    */
    public function getMembershipRule()
    {
        if (array_key_exists("membershipRule", $this->_propDict)) {
            return $this->_propDict["membershipRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the membershipRule
    * The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
    *
    * @param string $val The membershipRule
    *
    * @return Group
    */
    public function setMembershipRule($val)
    {
        $this->_propDict["membershipRule"] = $val;
        return $this;
    }

    /**
    * Gets the membershipRuleProcessingState
    * Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
    *
    * @return string|null The membershipRuleProcessingState
    */
    public function getMembershipRuleProcessingState()
    {
        if (array_key_exists("membershipRuleProcessingState", $this->_propDict)) {
            return $this->_propDict["membershipRuleProcessingState"];
        } else {
            return null;
        }
    }

    /**
    * Sets the membershipRuleProcessingState
    * Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
    *
    * @param string $val The membershipRuleProcessingState
    *
    * @return Group
    */
    public function setMembershipRuleProcessingState($val)
    {
        $this->_propDict["membershipRuleProcessingState"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesDomainName
    *
    * @return string|null The onPremisesDomainName
    */
    public function getOnPremisesDomainName()
    {
        if (array_key_exists("onPremisesDomainName", $this->_propDict)) {
            return $this->_propDict["onPremisesDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesDomainName
    *
    * @param string $val The onPremisesDomainName
    *
    * @return Group
    */
    public function setOnPremisesDomainName($val)
    {
        $this->_propDict["onPremisesDomainName"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesLastSyncDateTime
    * Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
    *
    * @return \DateTime|null The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime") || is_null($this->_propDict["onPremisesLastSyncDateTime"])) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the onPremisesLastSyncDateTime
    * Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Group
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesNetBiosName
    *
    * @return string|null The onPremisesNetBiosName
    */
    public function getOnPremisesNetBiosName()
    {
        if (array_key_exists("onPremisesNetBiosName", $this->_propDict)) {
            return $this->_propDict["onPremisesNetBiosName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesNetBiosName
    *
    * @param string $val The onPremisesNetBiosName
    *
    * @return Group
    */
    public function setOnPremisesNetBiosName($val)
    {
        $this->_propDict["onPremisesNetBiosName"] = $val;
        return $this;
    }


     /**
     * Gets the onPremisesProvisioningErrors
    * Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     *
     * @return array|null The onPremisesProvisioningErrors
     */
    public function getOnPremisesProvisioningErrors()
    {
        if (array_key_exists("onPremisesProvisioningErrors", $this->_propDict)) {
           return $this->_propDict["onPremisesProvisioningErrors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesProvisioningErrors
    * Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
    *
    * @param OnPremisesProvisioningError[] $val The onPremisesProvisioningErrors
    *
    * @return Group
    */
    public function setOnPremisesProvisioningErrors($val)
    {
        $this->_propDict["onPremisesProvisioningErrors"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesSamAccountName
    * Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
    *
    * @return string|null The onPremisesSamAccountName
    */
    public function getOnPremisesSamAccountName()
    {
        if (array_key_exists("onPremisesSamAccountName", $this->_propDict)) {
            return $this->_propDict["onPremisesSamAccountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSamAccountName
    * Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
    *
    * @param string $val The onPremisesSamAccountName
    *
    * @return Group
    */
    public function setOnPremisesSamAccountName($val)
    {
        $this->_propDict["onPremisesSamAccountName"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
    *
    * @return string|null The onPremisesSecurityIdentifier
    */
    public function getOnPremisesSecurityIdentifier()
    {
        if (array_key_exists("onPremisesSecurityIdentifier", $this->_propDict)) {
            return $this->_propDict["onPremisesSecurityIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
    *
    * @param string $val The onPremisesSecurityIdentifier
    *
    * @return Group
    */
    public function setOnPremisesSecurityIdentifier($val)
    {
        $this->_propDict["onPremisesSecurityIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesSyncEnabled
    * true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
    *
    * @return bool|null The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSyncEnabled
    * true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Group
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the preferredDataLocation
    * The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
    *
    * @return string|null The preferredDataLocation
    */
    public function getPreferredDataLocation()
    {
        if (array_key_exists("preferredDataLocation", $this->_propDict)) {
            return $this->_propDict["preferredDataLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preferredDataLocation
    * The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
    *
    * @param string $val The preferredDataLocation
    *
    * @return Group
    */
    public function setPreferredDataLocation($val)
    {
        $this->_propDict["preferredDataLocation"] = $val;
        return $this;
    }

    /**
    * Gets the preferredLanguage
    * The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    *
    * @return string|null The preferredLanguage
    */
    public function getPreferredLanguage()
    {
        if (array_key_exists("preferredLanguage", $this->_propDict)) {
            return $this->_propDict["preferredLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preferredLanguage
    * The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    *
    * @param string $val The preferredLanguage
    *
    * @return Group
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }

    /**
    * Gets the proxyAddresses
    * Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
    *
    * @return array|null The proxyAddresses
    */
    public function getProxyAddresses()
    {
        if (array_key_exists("proxyAddresses", $this->_propDict)) {
            return $this->_propDict["proxyAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyAddresses
    * Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
    *
    * @param string[] $val The proxyAddresses
    *
    * @return Group
    */
    public function setProxyAddresses($val)
    {
        $this->_propDict["proxyAddresses"] = $val;
        return $this;
    }

    /**
    * Gets the renewedDateTime
    * Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
    *
    * @return \DateTime|null The renewedDateTime
    */
    public function getRenewedDateTime()
    {
        if (array_key_exists("renewedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["renewedDateTime"], "\DateTime") || is_null($this->_propDict["renewedDateTime"])) {
                return $this->_propDict["renewedDateTime"];
            } else {
                $this->_propDict["renewedDateTime"] = new \DateTime($this->_propDict["renewedDateTime"]);
                return $this->_propDict["renewedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the renewedDateTime
    * Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
    *
    * @param \DateTime $val The renewedDateTime
    *
    * @return Group
    */
    public function setRenewedDateTime($val)
    {
        $this->_propDict["renewedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the securityEnabled
    * Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in).
    *
    * @return bool|null The securityEnabled
    */
    public function getSecurityEnabled()
    {
        if (array_key_exists("securityEnabled", $this->_propDict)) {
            return $this->_propDict["securityEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityEnabled
    * Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in).
    *
    * @param bool $val The securityEnabled
    *
    * @return Group
    */
    public function setSecurityEnabled($val)
    {
        $this->_propDict["securityEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the securityIdentifier
    * Security identifier of the group, used in Windows scenarios. Returned by default.
    *
    * @return string|null The securityIdentifier
    */
    public function getSecurityIdentifier()
    {
        if (array_key_exists("securityIdentifier", $this->_propDict)) {
            return $this->_propDict["securityIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityIdentifier
    * Security identifier of the group, used in Windows scenarios. Returned by default.
    *
    * @param string $val The securityIdentifier
    *
    * @return Group
    */
    public function setSecurityIdentifier($val)
    {
        $this->_propDict["securityIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the theme
    * Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
    *
    * @return string|null The theme
    */
    public function getTheme()
    {
        if (array_key_exists("theme", $this->_propDict)) {
            return $this->_propDict["theme"];
        } else {
            return null;
        }
    }

    /**
    * Sets the theme
    * Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
    *
    * @param string $val The theme
    *
    * @return Group
    */
    public function setTheme($val)
    {
        $this->_propDict["theme"] = $val;
        return $this;
    }

    /**
    * Gets the visibility
    * Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
    *
    * @return string|null The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict)) {
            return $this->_propDict["visibility"];
        } else {
            return null;
        }
    }

    /**
    * Sets the visibility
    * Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
    *
    * @param string $val The visibility
    *
    * @return Group
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }

    /**
    * Gets the allowExternalSenders
    * Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @return bool|null The allowExternalSenders
    */
    public function getAllowExternalSenders()
    {
        if (array_key_exists("allowExternalSenders", $this->_propDict)) {
            return $this->_propDict["allowExternalSenders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowExternalSenders
    * Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @param bool $val The allowExternalSenders
    *
    * @return Group
    */
    public function setAllowExternalSenders($val)
    {
        $this->_propDict["allowExternalSenders"] = boolval($val);
        return $this;
    }

    /**
    * Gets the autoSubscribeNewMembers
    * Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @return bool|null The autoSubscribeNewMembers
    */
    public function getAutoSubscribeNewMembers()
    {
        if (array_key_exists("autoSubscribeNewMembers", $this->_propDict)) {
            return $this->_propDict["autoSubscribeNewMembers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoSubscribeNewMembers
    * Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @param bool $val The autoSubscribeNewMembers
    *
    * @return Group
    */
    public function setAutoSubscribeNewMembers($val)
    {
        $this->_propDict["autoSubscribeNewMembers"] = boolval($val);
        return $this;
    }

    /**
    * Gets the hideFromAddressLists
    * True if the group is not displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @return bool|null The hideFromAddressLists
    */
    public function getHideFromAddressLists()
    {
        if (array_key_exists("hideFromAddressLists", $this->_propDict)) {
            return $this->_propDict["hideFromAddressLists"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideFromAddressLists
    * True if the group is not displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @param bool $val The hideFromAddressLists
    *
    * @return Group
    */
    public function setHideFromAddressLists($val)
    {
        $this->_propDict["hideFromAddressLists"] = boolval($val);
        return $this;
    }

    /**
    * Gets the hideFromOutlookClients
    * True if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @return bool|null The hideFromOutlookClients
    */
    public function getHideFromOutlookClients()
    {
        if (array_key_exists("hideFromOutlookClients", $this->_propDict)) {
            return $this->_propDict["hideFromOutlookClients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideFromOutlookClients
    * True if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @param bool $val The hideFromOutlookClients
    *
    * @return Group
    */
    public function setHideFromOutlookClients($val)
    {
        $this->_propDict["hideFromOutlookClients"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSubscribedByMail
    * Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @return bool|null The isSubscribedByMail
    */
    public function getIsSubscribedByMail()
    {
        if (array_key_exists("isSubscribedByMail", $this->_propDict)) {
            return $this->_propDict["isSubscribedByMail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSubscribedByMail
    * Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @param bool $val The isSubscribedByMail
    *
    * @return Group
    */
    public function setIsSubscribedByMail($val)
    {
        $this->_propDict["isSubscribedByMail"] = boolval($val);
        return $this;
    }

    /**
    * Gets the unseenCount
    * Count of conversations that have received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @return int|null The unseenCount
    */
    public function getUnseenCount()
    {
        if (array_key_exists("unseenCount", $this->_propDict)) {
            return $this->_propDict["unseenCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unseenCount
    * Count of conversations that have received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    *
    * @param int $val The unseenCount
    *
    * @return Group
    */
    public function setUnseenCount($val)
    {
        $this->_propDict["unseenCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the isArchived
    * When a group is associated with a team this property determines whether the team is in read-only mode.To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs.
    *
    * @return bool|null The isArchived
    */
    public function getIsArchived()
    {
        if (array_key_exists("isArchived", $this->_propDict)) {
            return $this->_propDict["isArchived"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isArchived
    * When a group is associated with a team this property determines whether the team is in read-only mode.To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs.
    *
    * @param bool $val The isArchived
    *
    * @return Group
    */
    public function setIsArchived($val)
    {
        $this->_propDict["isArchived"] = boolval($val);
        return $this;
    }


     /**
     * Gets the appRoleAssignments
    * Represents the app roles a group has been granted for an application. Supports $expand.
     *
     * @return array|null The appRoleAssignments
     */
    public function getAppRoleAssignments()
    {
        if (array_key_exists("appRoleAssignments", $this->_propDict)) {
           return $this->_propDict["appRoleAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appRoleAssignments
    * Represents the app roles a group has been granted for an application. Supports $expand.
    *
    * @param AppRoleAssignment[] $val The appRoleAssignments
    *
    * @return Group
    */
    public function setAppRoleAssignments($val)
    {
        $this->_propDict["appRoleAssignments"] = $val;
        return $this;
    }

    /**
    * Gets the createdOnBehalfOf
    * The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only.
    *
    * @return DirectoryObject|null The createdOnBehalfOf
    */
    public function getCreatedOnBehalfOf()
    {
        if (array_key_exists("createdOnBehalfOf", $this->_propDict)) {
            if (is_a($this->_propDict["createdOnBehalfOf"], "\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["createdOnBehalfOf"])) {
                return $this->_propDict["createdOnBehalfOf"];
            } else {
                $this->_propDict["createdOnBehalfOf"] = new DirectoryObject($this->_propDict["createdOnBehalfOf"]);
                return $this->_propDict["createdOnBehalfOf"];
            }
        }
        return null;
    }

    /**
    * Sets the createdOnBehalfOf
    * The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only.
    *
    * @param DirectoryObject $val The createdOnBehalfOf
    *
    * @return Group
    */
    public function setCreatedOnBehalfOf($val)
    {
        $this->_propDict["createdOnBehalfOf"] = $val;
        return $this;
    }


     /**
     * Gets the memberOf
    * Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     *
     * @return array|null The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }

    /**
    * Sets the memberOf
    * Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The memberOf
    *
    * @return Group
    */
    public function setMemberOf($val)
    {
        $this->_propDict["memberOf"] = $val;
        return $this;
    }


     /**
     * Gets the members
    * The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&amp;$select=id,displayName&amp;$expand=members($select=id,userPrincipalName,displayName).
     *
     * @return array|null The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }

    /**
    * Sets the members
    * The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&amp;$select=id,displayName&amp;$expand=members($select=id,userPrincipalName,displayName).
    *
    * @param DirectoryObject[] $val The members
    *
    * @return Group
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }


     /**
     * Gets the membersWithLicenseErrors
    * A list of group members with license errors from this group-based license assignment. Read-only.
     *
     * @return array|null The membersWithLicenseErrors
     */
    public function getMembersWithLicenseErrors()
    {
        if (array_key_exists("membersWithLicenseErrors", $this->_propDict)) {
           return $this->_propDict["membersWithLicenseErrors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the membersWithLicenseErrors
    * A list of group members with license errors from this group-based license assignment. Read-only.
    *
    * @param DirectoryObject[] $val The membersWithLicenseErrors
    *
    * @return Group
    */
    public function setMembersWithLicenseErrors($val)
    {
        $this->_propDict["membersWithLicenseErrors"] = $val;
        return $this;
    }


     /**
     * Gets the owners
    * The owners of the group. Limited to 100 owners. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner.  Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1). Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&amp;$select=id,displayName&amp;$expand=owners($select=id,userPrincipalName,displayName).
     *
     * @return array|null The owners
     */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict)) {
           return $this->_propDict["owners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the owners
    * The owners of the group. Limited to 100 owners. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner.  Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1). Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&amp;$select=id,displayName&amp;$expand=owners($select=id,userPrincipalName,displayName).
    *
    * @param DirectoryObject[] $val The owners
    *
    * @return Group
    */
    public function setOwners($val)
    {
        $this->_propDict["owners"] = $val;
        return $this;
    }


     /**
     * Gets the permissionGrants
    * The permission that has been granted for a group to a specific application. Supports $expand.
     *
     * @return array|null The permissionGrants
     */
    public function getPermissionGrants()
    {
        if (array_key_exists("permissionGrants", $this->_propDict)) {
           return $this->_propDict["permissionGrants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionGrants
    * The permission that has been granted for a group to a specific application. Supports $expand.
    *
    * @param ResourceSpecificPermissionGrant[] $val The permissionGrants
    *
    * @return Group
    */
    public function setPermissionGrants($val)
    {
        $this->_propDict["permissionGrants"] = $val;
        return $this;
    }


     /**
     * Gets the settings
    * Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
     *
     * @return array|null The settings
     */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
           return $this->_propDict["settings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settings
    * Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
    *
    * @param GroupSetting[] $val The settings
    *
    * @return Group
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }


     /**
     * Gets the transitiveMemberOf
    * The groups that a group is a member of, either directly and through nested membership. Nullable.
     *
     * @return array|null The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists("transitiveMemberOf", $this->_propDict)) {
           return $this->_propDict["transitiveMemberOf"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transitiveMemberOf
    * The groups that a group is a member of, either directly and through nested membership. Nullable.
    *
    * @param DirectoryObject[] $val The transitiveMemberOf
    *
    * @return Group
    */
    public function setTransitiveMemberOf($val)
    {
        $this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }


     /**
     * Gets the transitiveMembers
    * The direct and transitive members of a group. Nullable.
     *
     * @return array|null The transitiveMembers
     */
    public function getTransitiveMembers()
    {
        if (array_key_exists("transitiveMembers", $this->_propDict)) {
           return $this->_propDict["transitiveMembers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transitiveMembers
    * The direct and transitive members of a group. Nullable.
    *
    * @param DirectoryObject[] $val The transitiveMembers
    *
    * @return Group
    */
    public function setTransitiveMembers($val)
    {
        $this->_propDict["transitiveMembers"] = $val;
        return $this;
    }


     /**
     * Gets the acceptedSenders
    * The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
     *
     * @return array|null The acceptedSenders
     */
    public function getAcceptedSenders()
    {
        if (array_key_exists("acceptedSenders", $this->_propDict)) {
           return $this->_propDict["acceptedSenders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acceptedSenders
    * The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
    *
    * @param DirectoryObject[] $val The acceptedSenders
    *
    * @return Group
    */
    public function setAcceptedSenders($val)
    {
        $this->_propDict["acceptedSenders"] = $val;
        return $this;
    }

    /**
    * Gets the calendar
    * The group's calendar. Read-only.
    *
    * @return Calendar|null The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "\Microsoft\Graph\Model\Calendar") || is_null($this->_propDict["calendar"])) {
                return $this->_propDict["calendar"];
            } else {
                $this->_propDict["calendar"] = new Calendar($this->_propDict["calendar"]);
                return $this->_propDict["calendar"];
            }
        }
        return null;
    }

    /**
    * Sets the calendar
    * The group's calendar. Read-only.
    *
    * @param Calendar $val The calendar
    *
    * @return Group
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
        return $this;
    }


     /**
     * Gets the calendarView
    * The calendar view for the calendar. Read-only.
     *
     * @return array|null The calendarView
     */
    public function getCalendarView()
    {
        if (array_key_exists("calendarView", $this->_propDict)) {
           return $this->_propDict["calendarView"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calendarView
    * The calendar view for the calendar. Read-only.
    *
    * @param Event[] $val The calendarView
    *
    * @return Group
    */
    public function setCalendarView($val)
    {
        $this->_propDict["calendarView"] = $val;
        return $this;
    }


     /**
     * Gets the conversations
    * The group's conversations.
     *
     * @return array|null The conversations
     */
    public function getConversations()
    {
        if (array_key_exists("conversations", $this->_propDict)) {
           return $this->_propDict["conversations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conversations
    * The group's conversations.
    *
    * @param Conversation[] $val The conversations
    *
    * @return Group
    */
    public function setConversations($val)
    {
        $this->_propDict["conversations"] = $val;
        return $this;
    }


     /**
     * Gets the events
    * The group's calendar events.
     *
     * @return array|null The events
     */
    public function getEvents()
    {
        if (array_key_exists("events", $this->_propDict)) {
           return $this->_propDict["events"];
        } else {
            return null;
        }
    }

    /**
    * Sets the events
    * The group's calendar events.
    *
    * @param Event[] $val The events
    *
    * @return Group
    */
    public function setEvents($val)
    {
        $this->_propDict["events"] = $val;
        return $this;
    }


     /**
     * Gets the rejectedSenders
    * The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     *
     * @return array|null The rejectedSenders
     */
    public function getRejectedSenders()
    {
        if (array_key_exists("rejectedSenders", $this->_propDict)) {
           return $this->_propDict["rejectedSenders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rejectedSenders
    * The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
    *
    * @param DirectoryObject[] $val The rejectedSenders
    *
    * @return Group
    */
    public function setRejectedSenders($val)
    {
        $this->_propDict["rejectedSenders"] = $val;
        return $this;
    }


     /**
     * Gets the threads
    * The group's conversation threads. Nullable.
     *
     * @return array|null The threads
     */
    public function getThreads()
    {
        if (array_key_exists("threads", $this->_propDict)) {
           return $this->_propDict["threads"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threads
    * The group's conversation threads. Nullable.
    *
    * @param ConversationThread[] $val The threads
    *
    * @return Group
    */
    public function setThreads($val)
    {
        $this->_propDict["threads"] = $val;
        return $this;
    }

    /**
    * Gets the drive
    * The group's default drive. Read-only.
    *
    * @return Drive|null The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "\Microsoft\Graph\Model\Drive") || is_null($this->_propDict["drive"])) {
                return $this->_propDict["drive"];
            } else {
                $this->_propDict["drive"] = new Drive($this->_propDict["drive"]);
                return $this->_propDict["drive"];
            }
        }
        return null;
    }

    /**
    * Sets the drive
    * The group's default drive. Read-only.
    *
    * @param Drive $val The drive
    *
    * @return Group
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }


     /**
     * Gets the drives
    * The group's drives. Read-only.
     *
     * @return array|null The drives
     */
    public function getDrives()
    {
        if (array_key_exists("drives", $this->_propDict)) {
           return $this->_propDict["drives"];
        } else {
            return null;
        }
    }

    /**
    * Sets the drives
    * The group's drives. Read-only.
    *
    * @param Drive[] $val The drives
    *
    * @return Group
    */
    public function setDrives($val)
    {
        $this->_propDict["drives"] = $val;
        return $this;
    }


     /**
     * Gets the sites
    * The list of SharePoint sites in this group. Access the default site with /sites/root.
     *
     * @return array|null The sites
     */
    public function getSites()
    {
        if (array_key_exists("sites", $this->_propDict)) {
           return $this->_propDict["sites"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sites
    * The list of SharePoint sites in this group. Access the default site with /sites/root.
    *
    * @param Site[] $val The sites
    *
    * @return Group
    */
    public function setSites($val)
    {
        $this->_propDict["sites"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for the group. Read-only. Nullable.
     *
     * @return array|null The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensions
    * The collection of open extensions defined for the group. Read-only. Nullable.
    *
    * @param Extension[] $val The extensions
    *
    * @return Group
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }


     /**
     * Gets the groupLifecyclePolicies
    * The collection of lifecycle policies for this group. Read-only. Nullable.
     *
     * @return array|null The groupLifecyclePolicies
     */
    public function getGroupLifecyclePolicies()
    {
        if (array_key_exists("groupLifecyclePolicies", $this->_propDict)) {
           return $this->_propDict["groupLifecyclePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupLifecyclePolicies
    * The collection of lifecycle policies for this group. Read-only. Nullable.
    *
    * @param GroupLifecyclePolicy[] $val The groupLifecyclePolicies
    *
    * @return Group
    */
    public function setGroupLifecyclePolicies($val)
    {
        $this->_propDict["groupLifecyclePolicies"] = $val;
        return $this;
    }

    /**
    * Gets the planner
    * Entry-point to Planner resource that might exist for a Unified Group.
    *
    * @return PlannerGroup|null The planner
    */
    public function getPlanner()
    {
        if (array_key_exists("planner", $this->_propDict)) {
            if (is_a($this->_propDict["planner"], "\Microsoft\Graph\Model\PlannerGroup") || is_null($this->_propDict["planner"])) {
                return $this->_propDict["planner"];
            } else {
                $this->_propDict["planner"] = new PlannerGroup($this->_propDict["planner"]);
                return $this->_propDict["planner"];
            }
        }
        return null;
    }

    /**
    * Sets the planner
    * Entry-point to Planner resource that might exist for a Unified Group.
    *
    * @param PlannerGroup $val The planner
    *
    * @return Group
    */
    public function setPlanner($val)
    {
        $this->_propDict["planner"] = $val;
        return $this;
    }

    /**
    * Gets the onenote
    *
    * @return Onenote|null The onenote
    */
    public function getOnenote()
    {
        if (array_key_exists("onenote", $this->_propDict)) {
            if (is_a($this->_propDict["onenote"], "\Microsoft\Graph\Model\Onenote") || is_null($this->_propDict["onenote"])) {
                return $this->_propDict["onenote"];
            } else {
                $this->_propDict["onenote"] = new Onenote($this->_propDict["onenote"]);
                return $this->_propDict["onenote"];
            }
        }
        return null;
    }

    /**
    * Sets the onenote
    *
    * @param Onenote $val The onenote
    *
    * @return Group
    */
    public function setOnenote($val)
    {
        $this->_propDict["onenote"] = $val;
        return $this;
    }

    /**
    * Gets the photo
    * The group's profile photo
    *
    * @return ProfilePhoto|null The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "\Microsoft\Graph\Model\ProfilePhoto") || is_null($this->_propDict["photo"])) {
                return $this->_propDict["photo"];
            } else {
                $this->_propDict["photo"] = new ProfilePhoto($this->_propDict["photo"]);
                return $this->_propDict["photo"];
            }
        }
        return null;
    }

    /**
    * Sets the photo
    * The group's profile photo
    *
    * @param ProfilePhoto $val The photo
    *
    * @return Group
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }


     /**
     * Gets the photos
    * The profile photos owned by the group. Read-only. Nullable.
     *
     * @return array|null The photos
     */
    public function getPhotos()
    {
        if (array_key_exists("photos", $this->_propDict)) {
           return $this->_propDict["photos"];
        } else {
            return null;
        }
    }

    /**
    * Sets the photos
    * The profile photos owned by the group. Read-only. Nullable.
    *
    * @param ProfilePhoto[] $val The photos
    *
    * @return Group
    */
    public function setPhotos($val)
    {
        $this->_propDict["photos"] = $val;
        return $this;
    }

    /**
    * Gets the team
    * The team associated with this group.
    *
    * @return Team|null The team
    */
    public function getTeam()
    {
        if (array_key_exists("team", $this->_propDict)) {
            if (is_a($this->_propDict["team"], "\Microsoft\Graph\Model\Team") || is_null($this->_propDict["team"])) {
                return $this->_propDict["team"];
            } else {
                $this->_propDict["team"] = new Team($this->_propDict["team"]);
                return $this->_propDict["team"];
            }
        }
        return null;
    }

    /**
    * Sets the team
    * The team associated with this group.
    *
    * @param Team $val The team
    *
    * @return Group
    */
    public function setTeam($val)
    {
        $this->_propDict["team"] = $val;
        return $this;
    }

}
