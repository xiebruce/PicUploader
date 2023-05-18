<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActionUrl File
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
* ActionUrl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActionUrl extends Entity
{
    /**
    * Gets the displayName
    * Brief title for the page that the links directs to.
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
    * Brief title for the page that the links directs to.
    *
    * @param string $val The value of the displayName
    *
    * @return ActionUrl
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the url
    * The URL to the documentation or Azure portal page.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * The URL to the documentation or Azure portal page.
    *
    * @param string $val The value of the url
    *
    * @return ActionUrl
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
