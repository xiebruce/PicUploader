<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OauthApplicationEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* OauthApplicationEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OauthApplicationEvidence extends AlertEvidence
{
    /**
    * Gets the appId
    * Unique identifier of the application.
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * Unique identifier of the application.
    *
    * @param string $val The value of the appId
    *
    * @return OauthApplicationEvidence
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Name of the application.
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
    * Name of the application.
    *
    * @param string $val The value of the displayName
    *
    * @return OauthApplicationEvidence
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the objectId
    * The unique identifier of the application object in Azure AD.
    *
    * @return string|null The objectId
    */
    public function getObjectId()
    {
        if (array_key_exists("objectId", $this->_propDict)) {
            return $this->_propDict["objectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectId
    * The unique identifier of the application object in Azure AD.
    *
    * @param string $val The value of the objectId
    *
    * @return OauthApplicationEvidence
    */
    public function setObjectId($val)
    {
        $this->_propDict["objectId"] = $val;
        return $this;
    }
    /**
    * Gets the publisher
    * The name of the application publisher.
    *
    * @return string|null The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    * The name of the application publisher.
    *
    * @param string $val The value of the publisher
    *
    * @return OauthApplicationEvidence
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
}
