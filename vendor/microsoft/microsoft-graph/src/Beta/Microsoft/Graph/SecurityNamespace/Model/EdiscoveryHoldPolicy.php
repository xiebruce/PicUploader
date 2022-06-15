<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryHoldPolicy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* EdiscoveryHoldPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryHoldPolicy extends PolicyBase
{
    /**
    * Gets the contentQuery
    * KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
    *
    * @return string|null The contentQuery
    */
    public function getContentQuery()
    {
        if (array_key_exists("contentQuery", $this->_propDict)) {
            return $this->_propDict["contentQuery"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentQuery
    * KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
    *
    * @param string $val The contentQuery
    *
    * @return EdiscoveryHoldPolicy
    */
    public function setContentQuery($val)
    {
        $this->_propDict["contentQuery"] = $val;
        return $this;
    }

    /**
    * Gets the errors
    * Lists any errors that happened while placing the hold.
    *
    * @return string|null The errors
    */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
            return $this->_propDict["errors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errors
    * Lists any errors that happened while placing the hold.
    *
    * @param string $val The errors
    *
    * @return EdiscoveryHoldPolicy
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
        return $this;
    }

    /**
    * Gets the isEnabled
    * Indicates whether the hold is enabled and actively holding content.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Indicates whether the hold is enabled and actively holding content.
    *
    * @param bool $val The isEnabled
    *
    * @return EdiscoveryHoldPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the siteSources
     *
     * @return array|null The siteSources
     */
    public function getSiteSources()
    {
        if (array_key_exists("siteSources", $this->_propDict)) {
           return $this->_propDict["siteSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteSources
    *
    * @param SiteSource[] $val The siteSources
    *
    * @return EdiscoveryHoldPolicy
    */
    public function setSiteSources($val)
    {
        $this->_propDict["siteSources"] = $val;
        return $this;
    }


     /**
     * Gets the userSources
     *
     * @return array|null The userSources
     */
    public function getUserSources()
    {
        if (array_key_exists("userSources", $this->_propDict)) {
           return $this->_propDict["userSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userSources
    *
    * @param UserSource[] $val The userSources
    *
    * @return EdiscoveryHoldPolicy
    */
    public function setUserSources($val)
    {
        $this->_propDict["userSources"] = $val;
        return $this;
    }

}
