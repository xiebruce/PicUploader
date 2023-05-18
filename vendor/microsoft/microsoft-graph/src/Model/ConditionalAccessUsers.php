<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessUsers File
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
* ConditionalAccessUsers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessUsers extends Entity
{
    /**
    * Gets the excludeGroups
    * Group IDs excluded from scope of policy.
    *
    * @return string|null The excludeGroups
    */
    public function getExcludeGroups()
    {
        if (array_key_exists("excludeGroups", $this->_propDict)) {
            return $this->_propDict["excludeGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeGroups
    * Group IDs excluded from scope of policy.
    *
    * @param string $val The value of the excludeGroups
    *
    * @return ConditionalAccessUsers
    */
    public function setExcludeGroups($val)
    {
        $this->_propDict["excludeGroups"] = $val;
        return $this;
    }

    /**
    * Gets the excludeGuestsOrExternalUsers
    * Internal guests or external users excluded from the policy scope. Optionally populated.
    *
    * @return ConditionalAccessGuestsOrExternalUsers|null The excludeGuestsOrExternalUsers
    */
    public function getExcludeGuestsOrExternalUsers()
    {
        if (array_key_exists("excludeGuestsOrExternalUsers", $this->_propDict)) {
            if (is_a($this->_propDict["excludeGuestsOrExternalUsers"], "\Microsoft\Graph\Model\ConditionalAccessGuestsOrExternalUsers") || is_null($this->_propDict["excludeGuestsOrExternalUsers"])) {
                return $this->_propDict["excludeGuestsOrExternalUsers"];
            } else {
                $this->_propDict["excludeGuestsOrExternalUsers"] = new ConditionalAccessGuestsOrExternalUsers($this->_propDict["excludeGuestsOrExternalUsers"]);
                return $this->_propDict["excludeGuestsOrExternalUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the excludeGuestsOrExternalUsers
    * Internal guests or external users excluded from the policy scope. Optionally populated.
    *
    * @param ConditionalAccessGuestsOrExternalUsers $val The value to assign to the excludeGuestsOrExternalUsers
    *
    * @return ConditionalAccessUsers The ConditionalAccessUsers
    */
    public function setExcludeGuestsOrExternalUsers($val)
    {
        $this->_propDict["excludeGuestsOrExternalUsers"] = $val;
         return $this;
    }
    /**
    * Gets the excludeRoles
    * Role IDs excluded from scope of policy.
    *
    * @return string|null The excludeRoles
    */
    public function getExcludeRoles()
    {
        if (array_key_exists("excludeRoles", $this->_propDict)) {
            return $this->_propDict["excludeRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeRoles
    * Role IDs excluded from scope of policy.
    *
    * @param string $val The value of the excludeRoles
    *
    * @return ConditionalAccessUsers
    */
    public function setExcludeRoles($val)
    {
        $this->_propDict["excludeRoles"] = $val;
        return $this;
    }
    /**
    * Gets the excludeUsers
    * User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
    *
    * @return string|null The excludeUsers
    */
    public function getExcludeUsers()
    {
        if (array_key_exists("excludeUsers", $this->_propDict)) {
            return $this->_propDict["excludeUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeUsers
    * User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
    *
    * @param string $val The value of the excludeUsers
    *
    * @return ConditionalAccessUsers
    */
    public function setExcludeUsers($val)
    {
        $this->_propDict["excludeUsers"] = $val;
        return $this;
    }
    /**
    * Gets the includeGroups
    * Group IDs in scope of policy unless explicitly excluded.
    *
    * @return string|null The includeGroups
    */
    public function getIncludeGroups()
    {
        if (array_key_exists("includeGroups", $this->_propDict)) {
            return $this->_propDict["includeGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeGroups
    * Group IDs in scope of policy unless explicitly excluded.
    *
    * @param string $val The value of the includeGroups
    *
    * @return ConditionalAccessUsers
    */
    public function setIncludeGroups($val)
    {
        $this->_propDict["includeGroups"] = $val;
        return $this;
    }

    /**
    * Gets the includeGuestsOrExternalUsers
    * Internal guests or external users included in the policy scope. Optionally populated.
    *
    * @return ConditionalAccessGuestsOrExternalUsers|null The includeGuestsOrExternalUsers
    */
    public function getIncludeGuestsOrExternalUsers()
    {
        if (array_key_exists("includeGuestsOrExternalUsers", $this->_propDict)) {
            if (is_a($this->_propDict["includeGuestsOrExternalUsers"], "\Microsoft\Graph\Model\ConditionalAccessGuestsOrExternalUsers") || is_null($this->_propDict["includeGuestsOrExternalUsers"])) {
                return $this->_propDict["includeGuestsOrExternalUsers"];
            } else {
                $this->_propDict["includeGuestsOrExternalUsers"] = new ConditionalAccessGuestsOrExternalUsers($this->_propDict["includeGuestsOrExternalUsers"]);
                return $this->_propDict["includeGuestsOrExternalUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the includeGuestsOrExternalUsers
    * Internal guests or external users included in the policy scope. Optionally populated.
    *
    * @param ConditionalAccessGuestsOrExternalUsers $val The value to assign to the includeGuestsOrExternalUsers
    *
    * @return ConditionalAccessUsers The ConditionalAccessUsers
    */
    public function setIncludeGuestsOrExternalUsers($val)
    {
        $this->_propDict["includeGuestsOrExternalUsers"] = $val;
         return $this;
    }
    /**
    * Gets the includeRoles
    * Role IDs in scope of policy unless explicitly excluded.
    *
    * @return string|null The includeRoles
    */
    public function getIncludeRoles()
    {
        if (array_key_exists("includeRoles", $this->_propDict)) {
            return $this->_propDict["includeRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeRoles
    * Role IDs in scope of policy unless explicitly excluded.
    *
    * @param string $val The value of the includeRoles
    *
    * @return ConditionalAccessUsers
    */
    public function setIncludeRoles($val)
    {
        $this->_propDict["includeRoles"] = $val;
        return $this;
    }
    /**
    * Gets the includeUsers
    * User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers.
    *
    * @return string|null The includeUsers
    */
    public function getIncludeUsers()
    {
        if (array_key_exists("includeUsers", $this->_propDict)) {
            return $this->_propDict["includeUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeUsers
    * User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers.
    *
    * @param string $val The value of the includeUsers
    *
    * @return ConditionalAccessUsers
    */
    public function setIncludeUsers($val)
    {
        $this->_propDict["includeUsers"] = $val;
        return $this;
    }
}
