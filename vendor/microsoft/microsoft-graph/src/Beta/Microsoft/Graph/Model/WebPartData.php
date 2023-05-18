<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebPartData File
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
* WebPartData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebPartData extends Entity
{
    /**
    * Gets the audiences
    * Audience information of the web part. By using this property, specific content will be prioritized to specific audiences.
    *
    * @return string|null The audiences
    */
    public function getAudiences()
    {
        if (array_key_exists("audiences", $this->_propDict)) {
            return $this->_propDict["audiences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the audiences
    * Audience information of the web part. By using this property, specific content will be prioritized to specific audiences.
    *
    * @param string $val The value of the audiences
    *
    * @return WebPartData
    */
    public function setAudiences($val)
    {
        $this->_propDict["audiences"] = $val;
        return $this;
    }
    /**
    * Gets the dataVersion
    * Data version of the web part. The value is defined by the web part developer. Different dataVersions usually refers to a different property structure.
    *
    * @return string|null The dataVersion
    */
    public function getDataVersion()
    {
        if (array_key_exists("dataVersion", $this->_propDict)) {
            return $this->_propDict["dataVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataVersion
    * Data version of the web part. The value is defined by the web part developer. Different dataVersions usually refers to a different property structure.
    *
    * @param string $val The value of the dataVersion
    *
    * @return WebPartData
    */
    public function setDataVersion($val)
    {
        $this->_propDict["dataVersion"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Description of the web part.
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
    * Description of the web part.
    *
    * @param string $val The value of the description
    *
    * @return WebPartData
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the webPartDataProperties
    * Properties bag of the web part.
    *
    * @return string|null The webPartDataProperties
    */
    public function getWebPartDataProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
            return $this->_propDict["properties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webPartDataProperties
    * Properties bag of the web part.
    *
    * @param string $val The value of the webPartDataProperties
    *
    * @return WebPartData
    */
    public function setWebPartDataProperties($val)
    {
        $this->_propDict["properties"] = $val;
        return $this;
    }

    /**
    * Gets the serverProcessedContent
    * Contains collections of data that can be processed by server side services like search index and link fixup.
    *
    * @return ServerProcessedContent|null The serverProcessedContent
    */
    public function getServerProcessedContent()
    {
        if (array_key_exists("serverProcessedContent", $this->_propDict)) {
            if (is_a($this->_propDict["serverProcessedContent"], "\Beta\Microsoft\Graph\Model\ServerProcessedContent") || is_null($this->_propDict["serverProcessedContent"])) {
                return $this->_propDict["serverProcessedContent"];
            } else {
                $this->_propDict["serverProcessedContent"] = new ServerProcessedContent($this->_propDict["serverProcessedContent"]);
                return $this->_propDict["serverProcessedContent"];
            }
        }
        return null;
    }

    /**
    * Sets the serverProcessedContent
    * Contains collections of data that can be processed by server side services like search index and link fixup.
    *
    * @param ServerProcessedContent $val The value to assign to the serverProcessedContent
    *
    * @return WebPartData The WebPartData
    */
    public function setServerProcessedContent($val)
    {
        $this->_propDict["serverProcessedContent"] = $val;
         return $this;
    }
    /**
    * Gets the title
    * Title of the web part.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * Title of the web part.
    *
    * @param string $val The value of the title
    *
    * @return WebPartData
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
