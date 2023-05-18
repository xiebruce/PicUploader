<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtection File
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
* InformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtection implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new InformationProtection
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
    * Gets the property dictionary of the InformationProtection
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the bitlocker
    *
    * @return Bitlocker|null The bitlocker
    */
    public function getBitlocker()
    {
        if (array_key_exists("bitlocker", $this->_propDict)) {
            if (is_a($this->_propDict["bitlocker"], "\Microsoft\Graph\Model\Bitlocker") || is_null($this->_propDict["bitlocker"])) {
                return $this->_propDict["bitlocker"];
            } else {
                $this->_propDict["bitlocker"] = new Bitlocker($this->_propDict["bitlocker"]);
                return $this->_propDict["bitlocker"];
            }
        }
        return null;
    }

    /**
    * Sets the bitlocker
    *
    * @param Bitlocker $val The bitlocker
    *
    * @return InformationProtection
    */
    public function setBitlocker($val)
    {
        $this->_propDict["bitlocker"] = $val;
        return $this;
    }


     /**
     * Gets the threatAssessmentRequests
     *
     * @return array|null The threatAssessmentRequests
     */
    public function getThreatAssessmentRequests()
    {
        if (array_key_exists("threatAssessmentRequests", $this->_propDict)) {
           return $this->_propDict["threatAssessmentRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threatAssessmentRequests
    *
    * @param ThreatAssessmentRequest[] $val The threatAssessmentRequests
    *
    * @return InformationProtection
    */
    public function setThreatAssessmentRequests($val)
    {
        $this->_propDict["threatAssessmentRequests"] = $val;
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
    * @return InformationProtection
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
