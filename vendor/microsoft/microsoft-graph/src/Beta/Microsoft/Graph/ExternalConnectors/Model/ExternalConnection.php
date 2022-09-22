<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalConnection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* ExternalConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalConnection extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the activitySettings
    * Collects configurable settings related to activities involving connector content.
    *
    * @return ActivitySettings|null The activitySettings
    */
    public function getActivitySettings()
    {
        if (array_key_exists("activitySettings", $this->_propDict)) {
            if (is_a($this->_propDict["activitySettings"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ActivitySettings") || is_null($this->_propDict["activitySettings"])) {
                return $this->_propDict["activitySettings"];
            } else {
                $this->_propDict["activitySettings"] = new ActivitySettings($this->_propDict["activitySettings"]);
                return $this->_propDict["activitySettings"];
            }
        }
        return null;
    }

    /**
    * Sets the activitySettings
    * Collects configurable settings related to activities involving connector content.
    *
    * @param ActivitySettings $val The activitySettings
    *
    * @return ExternalConnection
    */
    public function setActivitySettings($val)
    {
        $this->_propDict["activitySettings"] = $val;
        return $this;
    }

    /**
    * Gets the complianceSettings
    *
    * @return ComplianceSettings|null The complianceSettings
    */
    public function getComplianceSettings()
    {
        if (array_key_exists("complianceSettings", $this->_propDict)) {
            if (is_a($this->_propDict["complianceSettings"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ComplianceSettings") || is_null($this->_propDict["complianceSettings"])) {
                return $this->_propDict["complianceSettings"];
            } else {
                $this->_propDict["complianceSettings"] = new ComplianceSettings($this->_propDict["complianceSettings"]);
                return $this->_propDict["complianceSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the complianceSettings
    *
    * @param ComplianceSettings $val The complianceSettings
    *
    * @return ExternalConnection
    */
    public function setComplianceSettings($val)
    {
        $this->_propDict["complianceSettings"] = $val;
        return $this;
    }

    /**
    * Gets the configuration
    * Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
    *
    * @return Configuration|null The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\Configuration") || is_null($this->_propDict["configuration"])) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new Configuration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }

    /**
    * Sets the configuration
    * Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
    *
    * @param Configuration $val The configuration
    *
    * @return ExternalConnection
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }

    /**
    * Gets the connectorId
    * The Teams App ID. Optional.
    *
    * @return string|null The connectorId
    */
    public function getConnectorId()
    {
        if (array_key_exists("connectorId", $this->_propDict)) {
            return $this->_propDict["connectorId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectorId
    * The Teams App ID. Optional.
    *
    * @param string $val The connectorId
    *
    * @return ExternalConnection
    */
    public function setConnectorId($val)
    {
        $this->_propDict["connectorId"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the connection displayed in the Microsoft 365 admin center. Optional.
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
    * Description of the connection displayed in the Microsoft 365 admin center. Optional.
    *
    * @param string $val The description
    *
    * @return ExternalConnection
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the enabledContentExperiences
    *
    * @return ContentExperienceType|null The enabledContentExperiences
    */
    public function getEnabledContentExperiences()
    {
        if (array_key_exists("enabledContentExperiences", $this->_propDict)) {
            if (is_a($this->_propDict["enabledContentExperiences"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ContentExperienceType") || is_null($this->_propDict["enabledContentExperiences"])) {
                return $this->_propDict["enabledContentExperiences"];
            } else {
                $this->_propDict["enabledContentExperiences"] = new ContentExperienceType($this->_propDict["enabledContentExperiences"]);
                return $this->_propDict["enabledContentExperiences"];
            }
        }
        return null;
    }

    /**
    * Sets the enabledContentExperiences
    *
    * @param ContentExperienceType $val The enabledContentExperiences
    *
    * @return ExternalConnection
    */
    public function setEnabledContentExperiences($val)
    {
        $this->_propDict["enabledContentExperiences"] = $val;
        return $this;
    }

    /**
    * Gets the ingestedItemsCount
    * The number of items ingested into a connection. This value is refreshed every 15 minutes. If the connection state is draft, then ingestedItemsCount will be null.
    *
    * @return int|null The ingestedItemsCount
    */
    public function getIngestedItemsCount()
    {
        if (array_key_exists("ingestedItemsCount", $this->_propDict)) {
            return $this->_propDict["ingestedItemsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ingestedItemsCount
    * The number of items ingested into a connection. This value is refreshed every 15 minutes. If the connection state is draft, then ingestedItemsCount will be null.
    *
    * @param int $val The ingestedItemsCount
    *
    * @return ExternalConnection
    */
    public function setIngestedItemsCount($val)
    {
        $this->_propDict["ingestedItemsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the name
    * The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
    *
    * @param string $val The name
    *
    * @return ExternalConnection
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the searchSettings
    * The settings configuring the search experience for content in this connection, such as the display templates for search results.
    *
    * @return SearchSettings|null The searchSettings
    */
    public function getSearchSettings()
    {
        if (array_key_exists("searchSettings", $this->_propDict)) {
            if (is_a($this->_propDict["searchSettings"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\SearchSettings") || is_null($this->_propDict["searchSettings"])) {
                return $this->_propDict["searchSettings"];
            } else {
                $this->_propDict["searchSettings"] = new SearchSettings($this->_propDict["searchSettings"]);
                return $this->_propDict["searchSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the searchSettings
    * The settings configuring the search experience for content in this connection, such as the display templates for search results.
    *
    * @param SearchSettings $val The searchSettings
    *
    * @return ExternalConnection
    */
    public function setSearchSettings($val)
    {
        $this->_propDict["searchSettings"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
    *
    * @return ConnectionState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ConnectionState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ConnectionState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
    *
    * @param ConnectionState $val The state
    *
    * @return ExternalConnection
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }


     /**
     * Gets the groups
     *
     * @return array|null The groups
     */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
           return $this->_propDict["groups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groups
    *
    * @param ExternalGroup[] $val The groups
    *
    * @return ExternalConnection
    */
    public function setGroups($val)
    {
        $this->_propDict["groups"] = $val;
        return $this;
    }


     /**
     * Gets the items
     *
     * @return array|null The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }

    /**
    * Sets the items
    *
    * @param ExternalItem[] $val The items
    *
    * @return ExternalConnection
    */
    public function setItems($val)
    {
        $this->_propDict["items"] = $val;
        return $this;
    }


     /**
     * Gets the operations
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
    *
    * @param ConnectionOperation[] $val The operations
    *
    * @return ExternalConnection
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }

    /**
    * Gets the quota
    *
    * @return ConnectionQuota|null The quota
    */
    public function getQuota()
    {
        if (array_key_exists("quota", $this->_propDict)) {
            if (is_a($this->_propDict["quota"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ConnectionQuota") || is_null($this->_propDict["quota"])) {
                return $this->_propDict["quota"];
            } else {
                $this->_propDict["quota"] = new ConnectionQuota($this->_propDict["quota"]);
                return $this->_propDict["quota"];
            }
        }
        return null;
    }

    /**
    * Sets the quota
    *
    * @param ConnectionQuota $val The quota
    *
    * @return ExternalConnection
    */
    public function setQuota($val)
    {
        $this->_propDict["quota"] = $val;
        return $this;
    }

    /**
    * Gets the schema
    *
    * @return Schema|null The schema
    */
    public function getSchema()
    {
        if (array_key_exists("schema", $this->_propDict)) {
            if (is_a($this->_propDict["schema"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\Schema") || is_null($this->_propDict["schema"])) {
                return $this->_propDict["schema"];
            } else {
                $this->_propDict["schema"] = new Schema($this->_propDict["schema"]);
                return $this->_propDict["schema"];
            }
        }
        return null;
    }

    /**
    * Sets the schema
    *
    * @param Schema $val The schema
    *
    * @return ExternalConnection
    */
    public function setSchema($val)
    {
        $this->_propDict["schema"] = $val;
        return $this;
    }

}
