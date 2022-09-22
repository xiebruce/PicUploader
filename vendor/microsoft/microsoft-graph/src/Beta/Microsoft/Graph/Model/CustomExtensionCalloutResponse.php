<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionCalloutResponse File
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
* CustomExtensionCalloutResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionCalloutResponse extends Entity
{

    /**
    * Gets the data
    * Contains the data the external system provides to the custom extension endpoint.
    *
    * @return CustomExtensionData|null The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict)) {
            if (is_a($this->_propDict["data"], "\Beta\Microsoft\Graph\Model\CustomExtensionData") || is_null($this->_propDict["data"])) {
                return $this->_propDict["data"];
            } else {
                $this->_propDict["data"] = new CustomExtensionData($this->_propDict["data"]);
                return $this->_propDict["data"];
            }
        }
        return null;
    }

    /**
    * Sets the data
    * Contains the data the external system provides to the custom extension endpoint.
    *
    * @param CustomExtensionData $val The value to assign to the data
    *
    * @return CustomExtensionCalloutResponse The CustomExtensionCalloutResponse
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
         return $this;
    }
    /**
    * Gets the source
    * Identifies the external system or event context related to the response.
    *
    * @return string|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            return $this->_propDict["source"];
        } else {
            return null;
        }
    }

    /**
    * Sets the source
    * Identifies the external system or event context related to the response.
    *
    * @param string $val The value of the source
    *
    * @return CustomExtensionCalloutResponse
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    /**
    * Gets the type
    * Describes the type of event related to the response.
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * Describes the type of event related to the response.
    *
    * @param string $val The value of the type
    *
    * @return CustomExtensionCalloutResponse
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
