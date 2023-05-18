<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudCommunications File
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
* CloudCommunications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudCommunications implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new CloudCommunications
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
    * Gets the property dictionary of the CloudCommunications
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the callRecords
     *
     * @return array|null The callRecords
     */
    public function getCallRecords()
    {
        if (array_key_exists("callRecords", $this->_propDict)) {
           return $this->_propDict["callRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callRecords
    *
    * @param \Beta\Microsoft\Graph\CallRecords\Model\CallRecord[] $val The callRecords
    *
    * @return CloudCommunications
    */
    public function setCallRecords($val)
    {
        $this->_propDict["callRecords"] = $val;
        return $this;
    }


     /**
     * Gets the calls
     *
     * @return array|null The calls
     */
    public function getCalls()
    {
        if (array_key_exists("calls", $this->_propDict)) {
           return $this->_propDict["calls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calls
    *
    * @param Call[] $val The calls
    *
    * @return CloudCommunications
    */
    public function setCalls($val)
    {
        $this->_propDict["calls"] = $val;
        return $this;
    }


     /**
     * Gets the onlineMeetings
     *
     * @return array|null The onlineMeetings
     */
    public function getOnlineMeetings()
    {
        if (array_key_exists("onlineMeetings", $this->_propDict)) {
           return $this->_propDict["onlineMeetings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onlineMeetings
    *
    * @param OnlineMeeting[] $val The onlineMeetings
    *
    * @return CloudCommunications
    */
    public function setOnlineMeetings($val)
    {
        $this->_propDict["onlineMeetings"] = $val;
        return $this;
    }


     /**
     * Gets the presences
     *
     * @return array|null The presences
     */
    public function getPresences()
    {
        if (array_key_exists("presences", $this->_propDict)) {
           return $this->_propDict["presences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the presences
    *
    * @param Presence[] $val The presences
    *
    * @return CloudCommunications
    */
    public function setPresences($val)
    {
        $this->_propDict["presences"] = $val;
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
    * @return CloudCommunications
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
