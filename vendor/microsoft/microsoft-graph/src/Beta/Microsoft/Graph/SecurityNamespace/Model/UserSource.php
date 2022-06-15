<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSource File
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
* UserSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSource extends DataSource
{
    /**
    * Gets the email
    * Email address of the user's mailbox.
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    * Email address of the user's mailbox.
    *
    * @param string $val The email
    *
    * @return UserSource
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the includedSources
    * Specifies which sources are included in this group. Possible values are: mailbox, site.
    *
    * @return SourceType|null The includedSources
    */
    public function getIncludedSources()
    {
        if (array_key_exists("includedSources", $this->_propDict)) {
            if (is_a($this->_propDict["includedSources"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\SourceType") || is_null($this->_propDict["includedSources"])) {
                return $this->_propDict["includedSources"];
            } else {
                $this->_propDict["includedSources"] = new SourceType($this->_propDict["includedSources"]);
                return $this->_propDict["includedSources"];
            }
        }
        return null;
    }

    /**
    * Sets the includedSources
    * Specifies which sources are included in this group. Possible values are: mailbox, site.
    *
    * @param SourceType $val The includedSources
    *
    * @return UserSource
    */
    public function setIncludedSources($val)
    {
        $this->_propDict["includedSources"] = $val;
        return $this;
    }

    /**
    * Gets the siteWebUrl
    * The URL of the user's OneDrive for Business site. Read-only.
    *
    * @return string|null The siteWebUrl
    */
    public function getSiteWebUrl()
    {
        if (array_key_exists("siteWebUrl", $this->_propDict)) {
            return $this->_propDict["siteWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteWebUrl
    * The URL of the user's OneDrive for Business site. Read-only.
    *
    * @param string $val The siteWebUrl
    *
    * @return UserSource
    */
    public function setSiteWebUrl($val)
    {
        $this->_propDict["siteWebUrl"] = $val;
        return $this;
    }

}
