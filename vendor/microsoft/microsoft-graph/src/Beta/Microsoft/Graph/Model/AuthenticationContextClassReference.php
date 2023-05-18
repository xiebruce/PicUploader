<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationContextClassReference File
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
* AuthenticationContextClassReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationContextClassReference extends Entity
{
    /**
    * Gets the description
    * A short explanation of the policies that are enforced by authenticationContextClassReference. This value should be used to provide secondary text to describe the authentication context class reference when building user facing admin experiences. For example, selection UX.
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
    * A short explanation of the policies that are enforced by authenticationContextClassReference. This value should be used to provide secondary text to describe the authentication context class reference when building user facing admin experiences. For example, selection UX.
    *
    * @param string $val The description
    *
    * @return AuthenticationContextClassReference
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * A friendly name that identifies the authenticationContextClassReference object when building user-facing admin experiences. For example, a selection UX.
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
    * A friendly name that identifies the authenticationContextClassReference object when building user-facing admin experiences. For example, a selection UX.
    *
    * @param string $val The displayName
    *
    * @return AuthenticationContextClassReference
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isAvailable
    * Indicates whether the authenticationContextClassReference has been published by the security admin and is ready for use by apps. When it is set to false, it should not be shown in selection UX used to tag resources with authentication context class values. It will still be shown in the Conditionall Access policy authoring experience.  Supports $filter (eq).
    *
    * @return bool|null The isAvailable
    */
    public function getIsAvailable()
    {
        if (array_key_exists("isAvailable", $this->_propDict)) {
            return $this->_propDict["isAvailable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAvailable
    * Indicates whether the authenticationContextClassReference has been published by the security admin and is ready for use by apps. When it is set to false, it should not be shown in selection UX used to tag resources with authentication context class values. It will still be shown in the Conditionall Access policy authoring experience.  Supports $filter (eq).
    *
    * @param bool $val The isAvailable
    *
    * @return AuthenticationContextClassReference
    */
    public function setIsAvailable($val)
    {
        $this->_propDict["isAvailable"] = boolval($val);
        return $this;
    }

}
