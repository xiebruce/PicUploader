<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Team File
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
* Team class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Team extends Entity
{
    /**
    * Gets the classification
    * An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
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
    * An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
    *
    * @param string $val The classification
    *
    * @return Team
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Timestamp at which the team was created.
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
    * Timestamp at which the team was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Team
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * An optional description for the team. Maximum length: 1024 characters.
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
    * An optional description for the team. Maximum length: 1024 characters.
    *
    * @param string $val The description
    *
    * @return Team
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the discoverySettings
    * Settings to configure team discoverability by others.
    *
    * @return TeamDiscoverySettings|null The discoverySettings
    */
    public function getDiscoverySettings()
    {
        if (array_key_exists("discoverySettings", $this->_propDict)) {
            if (is_a($this->_propDict["discoverySettings"], "\Beta\Microsoft\Graph\Model\TeamDiscoverySettings") || is_null($this->_propDict["discoverySettings"])) {
                return $this->_propDict["discoverySettings"];
            } else {
                $this->_propDict["discoverySettings"] = new TeamDiscoverySettings($this->_propDict["discoverySettings"]);
                return $this->_propDict["discoverySettings"];
            }
        }
        return null;
    }

    /**
    * Sets the discoverySettings
    * Settings to configure team discoverability by others.
    *
    * @param TeamDiscoverySettings $val The discoverySettings
    *
    * @return Team
    */
    public function setDiscoverySettings($val)
    {
        $this->_propDict["discoverySettings"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the team.
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
    * The name of the team.
    *
    * @param string $val The displayName
    *
    * @return Team
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @return TeamFunSettings|null The funSettings
    */
    public function getFunSettings()
    {
        if (array_key_exists("funSettings", $this->_propDict)) {
            if (is_a($this->_propDict["funSettings"], "\Beta\Microsoft\Graph\Model\TeamFunSettings") || is_null($this->_propDict["funSettings"])) {
                return $this->_propDict["funSettings"];
            } else {
                $this->_propDict["funSettings"] = new TeamFunSettings($this->_propDict["funSettings"]);
                return $this->_propDict["funSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @param TeamFunSettings $val The funSettings
    *
    * @return Team
    */
    public function setFunSettings($val)
    {
        $this->_propDict["funSettings"] = $val;
        return $this;
    }

    /**
    * Gets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @return TeamGuestSettings|null The guestSettings
    */
    public function getGuestSettings()
    {
        if (array_key_exists("guestSettings", $this->_propDict)) {
            if (is_a($this->_propDict["guestSettings"], "\Beta\Microsoft\Graph\Model\TeamGuestSettings") || is_null($this->_propDict["guestSettings"])) {
                return $this->_propDict["guestSettings"];
            } else {
                $this->_propDict["guestSettings"] = new TeamGuestSettings($this->_propDict["guestSettings"]);
                return $this->_propDict["guestSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @param TeamGuestSettings $val The guestSettings
    *
    * @return Team
    */
    public function setGuestSettings($val)
    {
        $this->_propDict["guestSettings"] = $val;
        return $this;
    }

    /**
    * Gets the internalId
    * A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
    *
    * @return string|null The internalId
    */
    public function getInternalId()
    {
        if (array_key_exists("internalId", $this->_propDict)) {
            return $this->_propDict["internalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalId
    * A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
    *
    * @param string $val The internalId
    *
    * @return Team
    */
    public function setInternalId($val)
    {
        $this->_propDict["internalId"] = $val;
        return $this;
    }

    /**
    * Gets the isArchived
    * Whether this team is in read-only mode.
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
    * Whether this team is in read-only mode.
    *
    * @param bool $val The isArchived
    *
    * @return Team
    */
    public function setIsArchived($val)
    {
        $this->_propDict["isArchived"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMembershipLimitedToOwners
    * If set to true, the team is currently in the owner-only team membership state and not accessible by other team members, such as students.
    *
    * @return bool|null The isMembershipLimitedToOwners
    */
    public function getIsMembershipLimitedToOwners()
    {
        if (array_key_exists("isMembershipLimitedToOwners", $this->_propDict)) {
            return $this->_propDict["isMembershipLimitedToOwners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMembershipLimitedToOwners
    * If set to true, the team is currently in the owner-only team membership state and not accessible by other team members, such as students.
    *
    * @param bool $val The isMembershipLimitedToOwners
    *
    * @return Team
    */
    public function setIsMembershipLimitedToOwners($val)
    {
        $this->_propDict["isMembershipLimitedToOwners"] = boolval($val);
        return $this;
    }

    /**
    * Gets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @return TeamMemberSettings|null The memberSettings
    */
    public function getMemberSettings()
    {
        if (array_key_exists("memberSettings", $this->_propDict)) {
            if (is_a($this->_propDict["memberSettings"], "\Beta\Microsoft\Graph\Model\TeamMemberSettings") || is_null($this->_propDict["memberSettings"])) {
                return $this->_propDict["memberSettings"];
            } else {
                $this->_propDict["memberSettings"] = new TeamMemberSettings($this->_propDict["memberSettings"]);
                return $this->_propDict["memberSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @param TeamMemberSettings $val The memberSettings
    *
    * @return Team
    */
    public function setMemberSettings($val)
    {
        $this->_propDict["memberSettings"] = $val;
        return $this;
    }

    /**
    * Gets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @return TeamMessagingSettings|null The messagingSettings
    */
    public function getMessagingSettings()
    {
        if (array_key_exists("messagingSettings", $this->_propDict)) {
            if (is_a($this->_propDict["messagingSettings"], "\Beta\Microsoft\Graph\Model\TeamMessagingSettings") || is_null($this->_propDict["messagingSettings"])) {
                return $this->_propDict["messagingSettings"];
            } else {
                $this->_propDict["messagingSettings"] = new TeamMessagingSettings($this->_propDict["messagingSettings"]);
                return $this->_propDict["messagingSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @param TeamMessagingSettings $val The messagingSettings
    *
    * @return Team
    */
    public function setMessagingSettings($val)
    {
        $this->_propDict["messagingSettings"] = $val;
        return $this;
    }

    /**
    * Gets the specialization
    * Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
    *
    * @return TeamSpecialization|null The specialization
    */
    public function getSpecialization()
    {
        if (array_key_exists("specialization", $this->_propDict)) {
            if (is_a($this->_propDict["specialization"], "\Beta\Microsoft\Graph\Model\TeamSpecialization") || is_null($this->_propDict["specialization"])) {
                return $this->_propDict["specialization"];
            } else {
                $this->_propDict["specialization"] = new TeamSpecialization($this->_propDict["specialization"]);
                return $this->_propDict["specialization"];
            }
        }
        return null;
    }

    /**
    * Sets the specialization
    * Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
    *
    * @param TeamSpecialization $val The specialization
    *
    * @return Team
    */
    public function setSpecialization($val)
    {
        $this->_propDict["specialization"] = $val;
        return $this;
    }

    /**
    * Gets the summary
    * Contains summary information about the team, including number of owners, members, and guests.
    *
    * @return TeamSummary|null The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            if (is_a($this->_propDict["summary"], "\Beta\Microsoft\Graph\Model\TeamSummary") || is_null($this->_propDict["summary"])) {
                return $this->_propDict["summary"];
            } else {
                $this->_propDict["summary"] = new TeamSummary($this->_propDict["summary"]);
                return $this->_propDict["summary"];
            }
        }
        return null;
    }

    /**
    * Sets the summary
    * Contains summary information about the team, including number of owners, members, and guests.
    *
    * @param TeamSummary $val The summary
    *
    * @return Team
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    * The ID of the Azure Active Directory tenant.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The ID of the Azure Active Directory tenant.
    *
    * @param string $val The tenantId
    *
    * @return Team
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the visibility
    * The visibility of the group and team. Defaults to Public.
    *
    * @return TeamVisibilityType|null The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict)) {
            if (is_a($this->_propDict["visibility"], "\Beta\Microsoft\Graph\Model\TeamVisibilityType") || is_null($this->_propDict["visibility"])) {
                return $this->_propDict["visibility"];
            } else {
                $this->_propDict["visibility"] = new TeamVisibilityType($this->_propDict["visibility"]);
                return $this->_propDict["visibility"];
            }
        }
        return null;
    }

    /**
    * Sets the visibility
    * The visibility of the group and team. Defaults to Public.
    *
    * @param TeamVisibilityType $val The visibility
    *
    * @return Team
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @param string $val The webUrl
    *
    * @return Team
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }


     /**
     * Gets the allChannels
    * List of channels either hosted in or shared with the team (incoming channels).
     *
     * @return array|null The allChannels
     */
    public function getAllChannels()
    {
        if (array_key_exists("allChannels", $this->_propDict)) {
           return $this->_propDict["allChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allChannels
    * List of channels either hosted in or shared with the team (incoming channels).
    *
    * @param Channel[] $val The allChannels
    *
    * @return Team
    */
    public function setAllChannels($val)
    {
        $this->_propDict["allChannels"] = $val;
        return $this;
    }


     /**
     * Gets the channels
    * The collection of channels and messages associated with the team.
     *
     * @return array|null The channels
     */
    public function getChannels()
    {
        if (array_key_exists("channels", $this->_propDict)) {
           return $this->_propDict["channels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the channels
    * The collection of channels and messages associated with the team.
    *
    * @param Channel[] $val The channels
    *
    * @return Team
    */
    public function setChannels($val)
    {
        $this->_propDict["channels"] = $val;
        return $this;
    }

    /**
    * Gets the group
    *
    * @return Group|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Beta\Microsoft\Graph\Model\Group") || is_null($this->_propDict["group"])) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Group($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    *
    * @param Group $val The group
    *
    * @return Team
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }


     /**
     * Gets the incomingChannels
     *
     * @return array|null The incomingChannels
     */
    public function getIncomingChannels()
    {
        if (array_key_exists("incomingChannels", $this->_propDict)) {
           return $this->_propDict["incomingChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incomingChannels
    *
    * @param Channel[] $val The incomingChannels
    *
    * @return Team
    */
    public function setIncomingChannels($val)
    {
        $this->_propDict["incomingChannels"] = $val;
        return $this;
    }


     /**
     * Gets the installedApps
    * The apps installed in this team.
     *
     * @return array|null The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists("installedApps", $this->_propDict)) {
           return $this->_propDict["installedApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the installedApps
    * The apps installed in this team.
    *
    * @param TeamsAppInstallation[] $val The installedApps
    *
    * @return Team
    */
    public function setInstalledApps($val)
    {
        $this->_propDict["installedApps"] = $val;
        return $this;
    }


     /**
     * Gets the members
    * Members and owners of the team.
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
    * Members and owners of the team.
    *
    * @param ConversationMember[] $val The members
    *
    * @return Team
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * The async operations that ran or are running on this team.
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    * The async operations that ran or are running on this team.
    *
    * @param TeamsAsyncOperation[] $val The operations
    *
    * @return Team
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the owners
    * The list of this team's owners. Currently, when creating a team using application permissions, exactly one owner must be specified. When using user delegated permissions, no owner can be specified (the current user is the owner). Owner must be specified as an object ID (GUID), not a UPN.
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
    * The list of this team's owners. Currently, when creating a team using application permissions, exactly one owner must be specified. When using user delegated permissions, no owner can be specified (the current user is the owner). Owner must be specified as an object ID (GUID), not a UPN.
    *
    * @param User[] $val The owners
    *
    * @return Team
    */
    public function setOwners($val)
    {
        $this->_propDict["owners"] = $val;
        return $this;
    }


     /**
     * Gets the permissionGrants
    * A collection of permissions granted to apps to access the team.
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
    * A collection of permissions granted to apps to access the team.
    *
    * @param ResourceSpecificPermissionGrant[] $val The permissionGrants
    *
    * @return Team
    */
    public function setPermissionGrants($val)
    {
        $this->_propDict["permissionGrants"] = $val;
        return $this;
    }

    /**
    * Gets the photo
    * The team photo.
    *
    * @return ProfilePhoto|null The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "\Beta\Microsoft\Graph\Model\ProfilePhoto") || is_null($this->_propDict["photo"])) {
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
    * The team photo.
    *
    * @param ProfilePhoto $val The photo
    *
    * @return Team
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }

    /**
    * Gets the primaryChannel
    * The general channel for the team.
    *
    * @return Channel|null The primaryChannel
    */
    public function getPrimaryChannel()
    {
        if (array_key_exists("primaryChannel", $this->_propDict)) {
            if (is_a($this->_propDict["primaryChannel"], "\Beta\Microsoft\Graph\Model\Channel") || is_null($this->_propDict["primaryChannel"])) {
                return $this->_propDict["primaryChannel"];
            } else {
                $this->_propDict["primaryChannel"] = new Channel($this->_propDict["primaryChannel"]);
                return $this->_propDict["primaryChannel"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryChannel
    * The general channel for the team.
    *
    * @param Channel $val The primaryChannel
    *
    * @return Team
    */
    public function setPrimaryChannel($val)
    {
        $this->_propDict["primaryChannel"] = $val;
        return $this;
    }


     /**
     * Gets the tags
    * The tags associated with the team.
     *
     * @return array|null The tags
     */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
           return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    * The tags associated with the team.
    *
    * @param TeamworkTag[] $val The tags
    *
    * @return Team
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

    /**
    * Gets the template
    * The template this team was created from. See available templates.
    *
    * @return TeamsTemplate|null The template
    */
    public function getTemplate()
    {
        if (array_key_exists("template", $this->_propDict)) {
            if (is_a($this->_propDict["template"], "\Beta\Microsoft\Graph\Model\TeamsTemplate") || is_null($this->_propDict["template"])) {
                return $this->_propDict["template"];
            } else {
                $this->_propDict["template"] = new TeamsTemplate($this->_propDict["template"]);
                return $this->_propDict["template"];
            }
        }
        return null;
    }

    /**
    * Sets the template
    * The template this team was created from. See available templates.
    *
    * @param TeamsTemplate $val The template
    *
    * @return Team
    */
    public function setTemplate($val)
    {
        $this->_propDict["template"] = $val;
        return $this;
    }

    /**
    * Gets the schedule
    * The schedule of shifts for this team.
    *
    * @return Schedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\Schedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new Schedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * The schedule of shifts for this team.
    *
    * @param Schedule $val The schedule
    *
    * @return Team
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }

}
