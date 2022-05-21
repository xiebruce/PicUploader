<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSCustomConfiguration File
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
* MacOSCustomConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSCustomConfiguration extends DeviceConfiguration
{
    /**
    * Gets the deploymentChannel
    * Indicates the channel used to deploy the configuration profile. Available choices are DeviceChannel, UserChannel. Possible values are: deviceChannel, userChannel.
    *
    * @return AppleDeploymentChannel|null The deploymentChannel
    */
    public function getDeploymentChannel()
    {
        if (array_key_exists("deploymentChannel", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentChannel"], "\Beta\Microsoft\Graph\Model\AppleDeploymentChannel") || is_null($this->_propDict["deploymentChannel"])) {
                return $this->_propDict["deploymentChannel"];
            } else {
                $this->_propDict["deploymentChannel"] = new AppleDeploymentChannel($this->_propDict["deploymentChannel"]);
                return $this->_propDict["deploymentChannel"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentChannel
    * Indicates the channel used to deploy the configuration profile. Available choices are DeviceChannel, UserChannel. Possible values are: deviceChannel, userChannel.
    *
    * @param AppleDeploymentChannel $val The deploymentChannel
    *
    * @return MacOSCustomConfiguration
    */
    public function setDeploymentChannel($val)
    {
        $this->_propDict["deploymentChannel"] = $val;
        return $this;
    }

    /**
    * Gets the payload
    * Payload. (UTF8 encoded byte array)
    *
    * @return \GuzzleHttp\Psr7\Stream|null The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["payload"])) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }

    /**
    * Sets the payload
    * Payload. (UTF8 encoded byte array)
    *
    * @param \GuzzleHttp\Psr7\Stream $val The payload
    *
    * @return MacOSCustomConfiguration
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }

    /**
    * Gets the payloadFileName
    * Payload file name (.mobileconfig
    *
    * @return string|null The payloadFileName
    */
    public function getPayloadFileName()
    {
        if (array_key_exists("payloadFileName", $this->_propDict)) {
            return $this->_propDict["payloadFileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloadFileName
    * Payload file name (.mobileconfig
    *
    * @param string $val The payloadFileName
    *
    * @return MacOSCustomConfiguration
    */
    public function setPayloadFileName($val)
    {
        $this->_propDict["payloadFileName"] = $val;
        return $this;
    }

    /**
    * Gets the payloadName
    * Name that is displayed to the user.
    *
    * @return string|null The payloadName
    */
    public function getPayloadName()
    {
        if (array_key_exists("payloadName", $this->_propDict)) {
            return $this->_propDict["payloadName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloadName
    * Name that is displayed to the user.
    *
    * @param string $val The payloadName
    *
    * @return MacOSCustomConfiguration
    */
    public function setPayloadName($val)
    {
        $this->_propDict["payloadName"] = $val;
        return $this;
    }

}
