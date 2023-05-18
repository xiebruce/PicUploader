<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LinkedResource File
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
* LinkedResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LinkedResource extends Entity
{
    /**
    * Gets the applicationName
    * The app name of the source that sends the linkedResource.
    *
    * @return string|null The applicationName
    */
    public function getApplicationName()
    {
        if (array_key_exists("applicationName", $this->_propDict)) {
            return $this->_propDict["applicationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationName
    * The app name of the source that sends the linkedResource.
    *
    * @param string $val The applicationName
    *
    * @return LinkedResource
    */
    public function setApplicationName($val)
    {
        $this->_propDict["applicationName"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The title of the linkedResource.
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
    * The title of the linkedResource.
    *
    * @param string $val The displayName
    *
    * @return LinkedResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    * ID of the object that is associated with this task on the third-party/partner system.
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * ID of the object that is associated with this task on the third-party/partner system.
    *
    * @param string $val The externalId
    *
    * @return LinkedResource
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * Deep link to the linkedResource.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * Deep link to the linkedResource.
    *
    * @param string $val The webUrl
    *
    * @return LinkedResource
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }

}
