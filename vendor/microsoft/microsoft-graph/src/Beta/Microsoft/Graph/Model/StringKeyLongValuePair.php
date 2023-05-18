<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StringKeyLongValuePair File
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
* StringKeyLongValuePair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StringKeyLongValuePair extends Entity
{
    /**
    * Gets the key
    * The mapping of the user type from the source system to the target system. For example:User to User - For Azure AD to Azure AD synchronization worker to user - For Workday to Azure AD synchronization.
    *
    * @return string|null The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    * The mapping of the user type from the source system to the target system. For example:User to User - For Azure AD to Azure AD synchronization worker to user - For Workday to Azure AD synchronization.
    *
    * @param string $val The value of the key
    *
    * @return StringKeyLongValuePair
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Total number of synchronized objects.
    *
    * @return int|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Total number of synchronized objects.
    *
    * @param int $val The value of the value
    *
    * @return StringKeyLongValuePair
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
