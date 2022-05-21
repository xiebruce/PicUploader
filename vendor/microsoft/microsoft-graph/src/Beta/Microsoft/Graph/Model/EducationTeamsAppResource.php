<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationTeamsAppResource File
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
* EducationTeamsAppResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationTeamsAppResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.educationTeamsAppResource");
    }

    /**
    * Gets the appIconWebUrl
    *
    * @return string|null The appIconWebUrl
    */
    public function getAppIconWebUrl()
    {
        if (array_key_exists("appIconWebUrl", $this->_propDict)) {
            return $this->_propDict["appIconWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appIconWebUrl
    *
    * @param string $val The value of the appIconWebUrl
    *
    * @return EducationTeamsAppResource
    */
    public function setAppIconWebUrl($val)
    {
        $this->_propDict["appIconWebUrl"] = $val;
        return $this;
    }
    /**
    * Gets the appId
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
    *
    * @param string $val The value of the appId
    *
    * @return EducationTeamsAppResource
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the teamsEmbeddedContentUrl
    *
    * @return string|null The teamsEmbeddedContentUrl
    */
    public function getTeamsEmbeddedContentUrl()
    {
        if (array_key_exists("teamsEmbeddedContentUrl", $this->_propDict)) {
            return $this->_propDict["teamsEmbeddedContentUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamsEmbeddedContentUrl
    *
    * @param string $val The value of the teamsEmbeddedContentUrl
    *
    * @return EducationTeamsAppResource
    */
    public function setTeamsEmbeddedContentUrl($val)
    {
        $this->_propDict["teamsEmbeddedContentUrl"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
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
    *
    * @param string $val The value of the webUrl
    *
    * @return EducationTeamsAppResource
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
