<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SourceSystemDefinition File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* SourceSystemDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SourceSystemDefinition extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The name of the source system. Maximum supported length is 100 characters.
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
    * The name of the source system. Maximum supported length is 100 characters.
    *
    * @param string $val The displayName
    *
    * @return SourceSystemDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the userMatchingSettings
    * A collection of user matching settings by roleGroup.
     *
     * @return array|null The userMatchingSettings
     */
    public function getUserMatchingSettings()
    {
        if (array_key_exists("userMatchingSettings", $this->_propDict)) {
           return $this->_propDict["userMatchingSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userMatchingSettings
    * A collection of user matching settings by roleGroup.
    *
    * @param UserMatchingSetting[] $val The userMatchingSettings
    *
    * @return SourceSystemDefinition
    */
    public function setUserMatchingSettings($val)
    {
        $this->_propDict["userMatchingSettings"] = $val;
        return $this;
    }

    /**
    * Gets the vendor
    * The name of the vendor who supplies the source system. Maximum supported length is 100 characters.
    *
    * @return string|null The vendor
    */
    public function getVendor()
    {
        if (array_key_exists("vendor", $this->_propDict)) {
            return $this->_propDict["vendor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vendor
    * The name of the vendor who supplies the source system. Maximum supported length is 100 characters.
    *
    * @param string $val The vendor
    *
    * @return SourceSystemDefinition
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }

}
