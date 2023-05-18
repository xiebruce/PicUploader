<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessConditionSet File
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
* ConditionalAccessConditionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessConditionSet extends Entity
{

    /**
    * Gets the applications
    * Applications and user actions included in and excluded from the policy. Required.
    *
    * @return ConditionalAccessApplications|null The applications
    */
    public function getApplications()
    {
        if (array_key_exists("applications", $this->_propDict)) {
            if (is_a($this->_propDict["applications"], "\Microsoft\Graph\Model\ConditionalAccessApplications") || is_null($this->_propDict["applications"])) {
                return $this->_propDict["applications"];
            } else {
                $this->_propDict["applications"] = new ConditionalAccessApplications($this->_propDict["applications"]);
                return $this->_propDict["applications"];
            }
        }
        return null;
    }

    /**
    * Sets the applications
    * Applications and user actions included in and excluded from the policy. Required.
    *
    * @param ConditionalAccessApplications $val The value to assign to the applications
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setApplications($val)
    {
        $this->_propDict["applications"] = $val;
         return $this;
    }

    /**
    * Gets the clientApplications
    * Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
    *
    * @return ConditionalAccessClientApplications|null The clientApplications
    */
    public function getClientApplications()
    {
        if (array_key_exists("clientApplications", $this->_propDict)) {
            if (is_a($this->_propDict["clientApplications"], "\Microsoft\Graph\Model\ConditionalAccessClientApplications") || is_null($this->_propDict["clientApplications"])) {
                return $this->_propDict["clientApplications"];
            } else {
                $this->_propDict["clientApplications"] = new ConditionalAccessClientApplications($this->_propDict["clientApplications"]);
                return $this->_propDict["clientApplications"];
            }
        }
        return null;
    }

    /**
    * Sets the clientApplications
    * Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
    *
    * @param ConditionalAccessClientApplications $val The value to assign to the clientApplications
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setClientApplications($val)
    {
        $this->_propDict["clientApplications"] = $val;
         return $this;
    }

    /**
    * Gets the clientAppTypes
    * Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
    *
    * @return ConditionalAccessClientApp|null The clientAppTypes
    */
    public function getClientAppTypes()
    {
        if (array_key_exists("clientAppTypes", $this->_propDict)) {
            if (is_a($this->_propDict["clientAppTypes"], "\Microsoft\Graph\Model\ConditionalAccessClientApp") || is_null($this->_propDict["clientAppTypes"])) {
                return $this->_propDict["clientAppTypes"];
            } else {
                $this->_propDict["clientAppTypes"] = new ConditionalAccessClientApp($this->_propDict["clientAppTypes"]);
                return $this->_propDict["clientAppTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the clientAppTypes
    * Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
    *
    * @param ConditionalAccessClientApp $val The value to assign to the clientAppTypes
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setClientAppTypes($val)
    {
        $this->_propDict["clientAppTypes"] = $val;
         return $this;
    }

    /**
    * Gets the devices
    * Devices in the policy.
    *
    * @return ConditionalAccessDevices|null The devices
    */
    public function getDevices()
    {
        if (array_key_exists("devices", $this->_propDict)) {
            if (is_a($this->_propDict["devices"], "\Microsoft\Graph\Model\ConditionalAccessDevices") || is_null($this->_propDict["devices"])) {
                return $this->_propDict["devices"];
            } else {
                $this->_propDict["devices"] = new ConditionalAccessDevices($this->_propDict["devices"]);
                return $this->_propDict["devices"];
            }
        }
        return null;
    }

    /**
    * Sets the devices
    * Devices in the policy.
    *
    * @param ConditionalAccessDevices $val The value to assign to the devices
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setDevices($val)
    {
        $this->_propDict["devices"] = $val;
         return $this;
    }

    /**
    * Gets the locations
    * Locations included in and excluded from the policy.
    *
    * @return ConditionalAccessLocations|null The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "\Microsoft\Graph\Model\ConditionalAccessLocations") || is_null($this->_propDict["locations"])) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new ConditionalAccessLocations($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    * Locations included in and excluded from the policy.
    *
    * @param ConditionalAccessLocations $val The value to assign to the locations
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
         return $this;
    }

    /**
    * Gets the platforms
    * Platforms included in and excluded from the policy.
    *
    * @return ConditionalAccessPlatforms|null The platforms
    */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
            if (is_a($this->_propDict["platforms"], "\Microsoft\Graph\Model\ConditionalAccessPlatforms") || is_null($this->_propDict["platforms"])) {
                return $this->_propDict["platforms"];
            } else {
                $this->_propDict["platforms"] = new ConditionalAccessPlatforms($this->_propDict["platforms"]);
                return $this->_propDict["platforms"];
            }
        }
        return null;
    }

    /**
    * Sets the platforms
    * Platforms included in and excluded from the policy.
    *
    * @param ConditionalAccessPlatforms $val The value to assign to the platforms
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
         return $this;
    }

    /**
    * Gets the servicePrincipalRiskLevels
    * Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
    *
    * @return RiskLevel|null The servicePrincipalRiskLevels
    */
    public function getServicePrincipalRiskLevels()
    {
        if (array_key_exists("servicePrincipalRiskLevels", $this->_propDict)) {
            if (is_a($this->_propDict["servicePrincipalRiskLevels"], "\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["servicePrincipalRiskLevels"])) {
                return $this->_propDict["servicePrincipalRiskLevels"];
            } else {
                $this->_propDict["servicePrincipalRiskLevels"] = new RiskLevel($this->_propDict["servicePrincipalRiskLevels"]);
                return $this->_propDict["servicePrincipalRiskLevels"];
            }
        }
        return null;
    }

    /**
    * Sets the servicePrincipalRiskLevels
    * Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
    *
    * @param RiskLevel $val The value to assign to the servicePrincipalRiskLevels
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setServicePrincipalRiskLevels($val)
    {
        $this->_propDict["servicePrincipalRiskLevels"] = $val;
         return $this;
    }

    /**
    * Gets the signInRiskLevels
    * Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @return RiskLevel|null The signInRiskLevels
    */
    public function getSignInRiskLevels()
    {
        if (array_key_exists("signInRiskLevels", $this->_propDict)) {
            if (is_a($this->_propDict["signInRiskLevels"], "\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["signInRiskLevels"])) {
                return $this->_propDict["signInRiskLevels"];
            } else {
                $this->_propDict["signInRiskLevels"] = new RiskLevel($this->_propDict["signInRiskLevels"]);
                return $this->_propDict["signInRiskLevels"];
            }
        }
        return null;
    }

    /**
    * Sets the signInRiskLevels
    * Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @param RiskLevel $val The value to assign to the signInRiskLevels
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setSignInRiskLevels($val)
    {
        $this->_propDict["signInRiskLevels"] = $val;
         return $this;
    }

    /**
    * Gets the userRiskLevels
    * User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @return RiskLevel|null The userRiskLevels
    */
    public function getUserRiskLevels()
    {
        if (array_key_exists("userRiskLevels", $this->_propDict)) {
            if (is_a($this->_propDict["userRiskLevels"], "\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["userRiskLevels"])) {
                return $this->_propDict["userRiskLevels"];
            } else {
                $this->_propDict["userRiskLevels"] = new RiskLevel($this->_propDict["userRiskLevels"]);
                return $this->_propDict["userRiskLevels"];
            }
        }
        return null;
    }

    /**
    * Sets the userRiskLevels
    * User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @param RiskLevel $val The value to assign to the userRiskLevels
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setUserRiskLevels($val)
    {
        $this->_propDict["userRiskLevels"] = $val;
         return $this;
    }

    /**
    * Gets the users
    * Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
    *
    * @return ConditionalAccessUsers|null The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            if (is_a($this->_propDict["users"], "\Microsoft\Graph\Model\ConditionalAccessUsers") || is_null($this->_propDict["users"])) {
                return $this->_propDict["users"];
            } else {
                $this->_propDict["users"] = new ConditionalAccessUsers($this->_propDict["users"]);
                return $this->_propDict["users"];
            }
        }
        return null;
    }

    /**
    * Sets the users
    * Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
    *
    * @param ConditionalAccessUsers $val The value to assign to the users
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
         return $this;
    }
}
