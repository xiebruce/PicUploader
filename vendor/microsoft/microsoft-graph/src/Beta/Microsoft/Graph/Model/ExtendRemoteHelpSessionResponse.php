<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtendRemoteHelpSessionResponse File
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
* ExtendRemoteHelpSessionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExtendRemoteHelpSessionResponse implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new ExtendRemoteHelpSessionResponse
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
    * Gets the property dictionary of the ExtendRemoteHelpSessionResponse
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the acsHelperUserToken
    * Helper ACS User Token
    *
    * @return string|null The acsHelperUserToken
    */
    public function getAcsHelperUserToken()
    {
        if (array_key_exists("acsHelperUserToken", $this->_propDict)) {
            return $this->_propDict["acsHelperUserToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acsHelperUserToken
    * Helper ACS User Token
    *
    * @param string $val The acsHelperUserToken
    *
    * @return ExtendRemoteHelpSessionResponse
    */
    public function setAcsHelperUserToken($val)
    {
        $this->_propDict["acsHelperUserToken"] = $val;
        return $this;
    }

    /**
    * Gets the pubSubHelperAccessUri
    * Azure Pubsub Group Id
    *
    * @return string|null The pubSubHelperAccessUri
    */
    public function getPubSubHelperAccessUri()
    {
        if (array_key_exists("pubSubHelperAccessUri", $this->_propDict)) {
            return $this->_propDict["pubSubHelperAccessUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pubSubHelperAccessUri
    * Azure Pubsub Group Id
    *
    * @param string $val The pubSubHelperAccessUri
    *
    * @return ExtendRemoteHelpSessionResponse
    */
    public function setPubSubHelperAccessUri($val)
    {
        $this->_propDict["pubSubHelperAccessUri"] = $val;
        return $this;
    }

    /**
    * Gets the sessionExpirationDateTime
    * Azure Pubsub Session Expiration Date Time.
    *
    * @return \DateTime|null The sessionExpirationDateTime
    */
    public function getSessionExpirationDateTime()
    {
        if (array_key_exists("sessionExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sessionExpirationDateTime"], "\DateTime") || is_null($this->_propDict["sessionExpirationDateTime"])) {
                return $this->_propDict["sessionExpirationDateTime"];
            } else {
                $this->_propDict["sessionExpirationDateTime"] = new \DateTime($this->_propDict["sessionExpirationDateTime"]);
                return $this->_propDict["sessionExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sessionExpirationDateTime
    * Azure Pubsub Session Expiration Date Time.
    *
    * @param \DateTime $val The sessionExpirationDateTime
    *
    * @return ExtendRemoteHelpSessionResponse
    */
    public function setSessionExpirationDateTime($val)
    {
        $this->_propDict["sessionExpirationDateTime"] = $val;
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
    * @return ExtendRemoteHelpSessionResponse
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
    * @return ExtendRemoteHelpSessionResponse
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
