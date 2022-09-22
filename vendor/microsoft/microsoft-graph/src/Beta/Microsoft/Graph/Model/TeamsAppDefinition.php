<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppDefinition File
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
* TeamsAppDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppDefinition extends Entity
{
    /**
    * Gets the allowedInstallationScopes
    * A collection of scopes where the Teams app can be installed. Possible values are:team — Indicates that the Teams app can be installed within a team and is authorized to access that team's data. groupChat  — Indicates that the Teams app can be installed within a group chat and is authorized to access that group chat's data.  personal — Indicates that the Teams app can be installed in the personal scope of a user and is authorized to access that user's data.
    *
    * @return TeamsAppInstallationScopes|null The allowedInstallationScopes
    */
    public function getAllowedInstallationScopes()
    {
        if (array_key_exists("allowedInstallationScopes", $this->_propDict)) {
            if (is_a($this->_propDict["allowedInstallationScopes"], "\Beta\Microsoft\Graph\Model\TeamsAppInstallationScopes") || is_null($this->_propDict["allowedInstallationScopes"])) {
                return $this->_propDict["allowedInstallationScopes"];
            } else {
                $this->_propDict["allowedInstallationScopes"] = new TeamsAppInstallationScopes($this->_propDict["allowedInstallationScopes"]);
                return $this->_propDict["allowedInstallationScopes"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedInstallationScopes
    * A collection of scopes where the Teams app can be installed. Possible values are:team — Indicates that the Teams app can be installed within a team and is authorized to access that team's data. groupChat  — Indicates that the Teams app can be installed within a group chat and is authorized to access that group chat's data.  personal — Indicates that the Teams app can be installed in the personal scope of a user and is authorized to access that user's data.
    *
    * @param TeamsAppInstallationScopes $val The allowedInstallationScopes
    *
    * @return TeamsAppDefinition
    */
    public function setAllowedInstallationScopes($val)
    {
        $this->_propDict["allowedInstallationScopes"] = $val;
        return $this;
    }

    /**
    * Gets the azureADAppId
    * The WebApplicationInfo.Id from the Teams app manifest.
    *
    * @return string|null The azureADAppId
    */
    public function getAzureADAppId()
    {
        if (array_key_exists("azureADAppId", $this->_propDict)) {
            return $this->_propDict["azureADAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureADAppId
    * The WebApplicationInfo.Id from the Teams app manifest.
    *
    * @param string $val The azureADAppId
    *
    * @return TeamsAppDefinition
    */
    public function setAzureADAppId($val)
    {
        $this->_propDict["azureADAppId"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return TeamsAppDefinition
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return TeamsAppDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the app provided by the app developer.
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
    * The name of the app provided by the app developer.
    *
    * @param string $val The displayName
    *
    * @return TeamsAppDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TeamsAppDefinition
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the publishingState
    * The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
    *
    * @return TeamsAppPublishingState|null The publishingState
    */
    public function getPublishingState()
    {
        if (array_key_exists("publishingState", $this->_propDict)) {
            if (is_a($this->_propDict["publishingState"], "\Beta\Microsoft\Graph\Model\TeamsAppPublishingState") || is_null($this->_propDict["publishingState"])) {
                return $this->_propDict["publishingState"];
            } else {
                $this->_propDict["publishingState"] = new TeamsAppPublishingState($this->_propDict["publishingState"]);
                return $this->_propDict["publishingState"];
            }
        }
        return null;
    }

    /**
    * Sets the publishingState
    * The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
    *
    * @param TeamsAppPublishingState $val The publishingState
    *
    * @return TeamsAppDefinition
    */
    public function setPublishingState($val)
    {
        $this->_propDict["publishingState"] = $val;
        return $this;
    }

    /**
    * Gets the shortdescription
    *
    * @return string|null The shortdescription
    */
    public function getShortdescription()
    {
        if (array_key_exists("shortdescription", $this->_propDict)) {
            return $this->_propDict["shortdescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shortdescription
    *
    * @param string $val The shortdescription
    *
    * @return TeamsAppDefinition
    */
    public function setShortdescription($val)
    {
        $this->_propDict["shortdescription"] = $val;
        return $this;
    }

    /**
    * Gets the teamsAppId
    * The ID from the Teams app manifest.
    *
    * @return string|null The teamsAppId
    */
    public function getTeamsAppId()
    {
        if (array_key_exists("teamsAppId", $this->_propDict)) {
            return $this->_propDict["teamsAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamsAppId
    * The ID from the Teams app manifest.
    *
    * @param string $val The teamsAppId
    *
    * @return TeamsAppDefinition
    */
    public function setTeamsAppId($val)
    {
        $this->_propDict["teamsAppId"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The version number of the application.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The version number of the application.
    *
    * @param string $val The version
    *
    * @return TeamsAppDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

    /**
    * Gets the bot
    * The details of the bot specified in the Teams app manifest.
    *
    * @return TeamworkBot|null The bot
    */
    public function getBot()
    {
        if (array_key_exists("bot", $this->_propDict)) {
            if (is_a($this->_propDict["bot"], "\Beta\Microsoft\Graph\Model\TeamworkBot") || is_null($this->_propDict["bot"])) {
                return $this->_propDict["bot"];
            } else {
                $this->_propDict["bot"] = new TeamworkBot($this->_propDict["bot"]);
                return $this->_propDict["bot"];
            }
        }
        return null;
    }

    /**
    * Sets the bot
    * The details of the bot specified in the Teams app manifest.
    *
    * @param TeamworkBot $val The bot
    *
    * @return TeamsAppDefinition
    */
    public function setBot($val)
    {
        $this->_propDict["bot"] = $val;
        return $this;
    }

    /**
    * Gets the colorIcon
    * The color version of the Teams app's icon.
    *
    * @return TeamsAppIcon|null The colorIcon
    */
    public function getColorIcon()
    {
        if (array_key_exists("colorIcon", $this->_propDict)) {
            if (is_a($this->_propDict["colorIcon"], "\Beta\Microsoft\Graph\Model\TeamsAppIcon") || is_null($this->_propDict["colorIcon"])) {
                return $this->_propDict["colorIcon"];
            } else {
                $this->_propDict["colorIcon"] = new TeamsAppIcon($this->_propDict["colorIcon"]);
                return $this->_propDict["colorIcon"];
            }
        }
        return null;
    }

    /**
    * Sets the colorIcon
    * The color version of the Teams app's icon.
    *
    * @param TeamsAppIcon $val The colorIcon
    *
    * @return TeamsAppDefinition
    */
    public function setColorIcon($val)
    {
        $this->_propDict["colorIcon"] = $val;
        return $this;
    }

    /**
    * Gets the outlineIcon
    * The outline version of the Teams app's icon.
    *
    * @return TeamsAppIcon|null The outlineIcon
    */
    public function getOutlineIcon()
    {
        if (array_key_exists("outlineIcon", $this->_propDict)) {
            if (is_a($this->_propDict["outlineIcon"], "\Beta\Microsoft\Graph\Model\TeamsAppIcon") || is_null($this->_propDict["outlineIcon"])) {
                return $this->_propDict["outlineIcon"];
            } else {
                $this->_propDict["outlineIcon"] = new TeamsAppIcon($this->_propDict["outlineIcon"]);
                return $this->_propDict["outlineIcon"];
            }
        }
        return null;
    }

    /**
    * Sets the outlineIcon
    * The outline version of the Teams app's icon.
    *
    * @param TeamsAppIcon $val The outlineIcon
    *
    * @return TeamsAppDefinition
    */
    public function setOutlineIcon($val)
    {
        $this->_propDict["outlineIcon"] = $val;
        return $this;
    }

}
