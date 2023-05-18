<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequestRemoteHelpSessionAccessResponse File
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
* RequestRemoteHelpSessionAccessResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequestRemoteHelpSessionAccessResponse implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new RequestRemoteHelpSessionAccessResponse
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
    * Gets the property dictionary of the RequestRemoteHelpSessionAccessResponse
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the pubSubEncryption
    * AES encryption Initialization Vector for encrypting client messages sent to PubSub
    *
    * @return string|null The pubSubEncryption
    */
    public function getPubSubEncryption()
    {
        if (array_key_exists("pubSubEncryption", $this->_propDict)) {
            return $this->_propDict["pubSubEncryption"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pubSubEncryption
    * AES encryption Initialization Vector for encrypting client messages sent to PubSub
    *
    * @param string $val The pubSubEncryption
    *
    * @return RequestRemoteHelpSessionAccessResponse
    */
    public function setPubSubEncryption($val)
    {
        $this->_propDict["pubSubEncryption"] = $val;
        return $this;
    }

    /**
    * Gets the pubSubEncryptionKey
    * The unique identifier for encrypting client messages sent to PubSub
    *
    * @return string|null The pubSubEncryptionKey
    */
    public function getPubSubEncryptionKey()
    {
        if (array_key_exists("pubSubEncryptionKey", $this->_propDict)) {
            return $this->_propDict["pubSubEncryptionKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pubSubEncryptionKey
    * The unique identifier for encrypting client messages sent to PubSub
    *
    * @param string $val The pubSubEncryptionKey
    *
    * @return RequestRemoteHelpSessionAccessResponse
    */
    public function setPubSubEncryptionKey($val)
    {
        $this->_propDict["pubSubEncryptionKey"] = $val;
        return $this;
    }

    /**
    * Gets the sessionKey
    * The unique identifier for a session
    *
    * @return string|null The sessionKey
    */
    public function getSessionKey()
    {
        if (array_key_exists("sessionKey", $this->_propDict)) {
            return $this->_propDict["sessionKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessionKey
    * The unique identifier for a session
    *
    * @param string $val The sessionKey
    *
    * @return RequestRemoteHelpSessionAccessResponse
    */
    public function setSessionKey($val)
    {
        $this->_propDict["sessionKey"] = $val;
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
    * @return RequestRemoteHelpSessionAccessResponse
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
