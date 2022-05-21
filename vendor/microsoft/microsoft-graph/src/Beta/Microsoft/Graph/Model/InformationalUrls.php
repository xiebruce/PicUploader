<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationalUrls File
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
* InformationalUrls class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationalUrls extends Entity
{
    /**
    * Gets the appSignUpUrl
    *
    * @return string|null The appSignUpUrl
    */
    public function getAppSignUpUrl()
    {
        if (array_key_exists("appSignUpUrl", $this->_propDict)) {
            return $this->_propDict["appSignUpUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appSignUpUrl
    *
    * @param string $val The value of the appSignUpUrl
    *
    * @return InformationalUrls
    */
    public function setAppSignUpUrl($val)
    {
        $this->_propDict["appSignUpUrl"] = $val;
        return $this;
    }
    /**
    * Gets the singleSignOnDocumentationUrl
    *
    * @return string|null The singleSignOnDocumentationUrl
    */
    public function getSingleSignOnDocumentationUrl()
    {
        if (array_key_exists("singleSignOnDocumentationUrl", $this->_propDict)) {
            return $this->_propDict["singleSignOnDocumentationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the singleSignOnDocumentationUrl
    *
    * @param string $val The value of the singleSignOnDocumentationUrl
    *
    * @return InformationalUrls
    */
    public function setSingleSignOnDocumentationUrl($val)
    {
        $this->_propDict["singleSignOnDocumentationUrl"] = $val;
        return $this;
    }
}
