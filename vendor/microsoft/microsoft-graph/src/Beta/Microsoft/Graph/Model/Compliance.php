<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Compliance File
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
* Compliance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Compliance implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new Compliance
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the Compliance
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the ediscovery
    *
    * @return \Beta\Microsoft\Graph\Ediscovery\Model\Ediscoveryroot|null The ediscovery
    */
    public function getEdiscovery()
    {
        if (array_key_exists("ediscovery", $this->_propDict)) {
            if (is_a($this->_propDict["ediscovery"], "\Beta\Microsoft\Graph\Ediscovery\Model\Ediscoveryroot") || is_null($this->_propDict["ediscovery"])) {
                return $this->_propDict["ediscovery"];
            } else {
                $this->_propDict["ediscovery"] = new \Beta\Microsoft\Graph\Ediscovery\Model\Ediscoveryroot($this->_propDict["ediscovery"]);
                return $this->_propDict["ediscovery"];
            }
        }
        return null;
    }

    /**
    * Sets the ediscovery
    *
    * @param \Beta\Microsoft\Graph\Ediscovery\Model\Ediscoveryroot $val The ediscovery
    *
    * @return Compliance
    */
    public function setEdiscovery($val)
    {
        $this->_propDict["ediscovery"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return Compliance
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            }
        }
        return $serializableProperties;
    }
}
