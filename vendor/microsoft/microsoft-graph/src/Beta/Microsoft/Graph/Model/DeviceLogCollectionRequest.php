<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceLogCollectionRequest File
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
* DeviceLogCollectionRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceLogCollectionRequest extends Entity
{
    /**
    * Gets the id
    * The unique identifier
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The unique identifier
    *
    * @param string $val The value of the id
    *
    * @return DeviceLogCollectionRequest
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the templateType
    * Indicates The template type that is sent with the collection request. defaule is Predefined. Possible values are: predefined, unknownFutureValue.
    *
    * @return DeviceLogCollectionTemplateType|null The templateType
    */
    public function getTemplateType()
    {
        if (array_key_exists("templateType", $this->_propDict)) {
            if (is_a($this->_propDict["templateType"], "\Beta\Microsoft\Graph\Model\DeviceLogCollectionTemplateType") || is_null($this->_propDict["templateType"])) {
                return $this->_propDict["templateType"];
            } else {
                $this->_propDict["templateType"] = new DeviceLogCollectionTemplateType($this->_propDict["templateType"]);
                return $this->_propDict["templateType"];
            }
        }
        return null;
    }

    /**
    * Sets the templateType
    * Indicates The template type that is sent with the collection request. defaule is Predefined. Possible values are: predefined, unknownFutureValue.
    *
    * @param DeviceLogCollectionTemplateType $val The value to assign to the templateType
    *
    * @return DeviceLogCollectionRequest The DeviceLogCollectionRequest
    */
    public function setTemplateType($val)
    {
        $this->_propDict["templateType"] = $val;
         return $this;
    }
}
