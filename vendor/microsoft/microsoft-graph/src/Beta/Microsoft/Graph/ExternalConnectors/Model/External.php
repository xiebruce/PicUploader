<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* External File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* External class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class External implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new External
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
    * Gets the property dictionary of the External
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the industryData
    *
    * @return \Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRoot|null The industryData
    */
    public function getIndustryData()
    {
        if (array_key_exists("industryData", $this->_propDict)) {
            if (is_a($this->_propDict["industryData"], "\Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRoot") || is_null($this->_propDict["industryData"])) {
                return $this->_propDict["industryData"];
            } else {
                $this->_propDict["industryData"] = new \Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRoot($this->_propDict["industryData"]);
                return $this->_propDict["industryData"];
            }
        }
        return null;
    }

    /**
    * Sets the industryData
    *
    * @param \Beta\Microsoft\Graph\IndustryData\Model\IndustryDataRoot $val The industryData
    *
    * @return External
    */
    public function setIndustryData($val)
    {
        $this->_propDict["industryData"] = $val;
        return $this;
    }


     /**
     * Gets the connections
     *
     * @return array|null The connections
     */
    public function getConnections()
    {
        if (array_key_exists("connections", $this->_propDict)) {
           return $this->_propDict["connections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connections
    *
    * @param ExternalConnection[] $val The connections
    *
    * @return External
    */
    public function setConnections($val)
    {
        $this->_propDict["connections"] = $val;
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
    * @return External
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
    #[\ReturnTypeWillChange]
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
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
