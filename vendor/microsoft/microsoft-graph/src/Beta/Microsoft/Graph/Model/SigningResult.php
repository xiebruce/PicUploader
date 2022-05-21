<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SigningResult File
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
* SigningResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SigningResult extends Entity
{

    /**
    * Gets the signature
    *
    * @return \GuzzleHttp\Psr7\Stream|null The signature
    */
    public function getSignature()
    {
        if (array_key_exists("signature", $this->_propDict)) {
            if (is_a($this->_propDict["signature"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["signature"])) {
                return $this->_propDict["signature"];
            } else {
                $this->_propDict["signature"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["signature"]);
                return $this->_propDict["signature"];
            }
        }
        return null;
    }

    /**
    * Sets the signature
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the signature
    *
    * @return SigningResult The SigningResult
    */
    public function setSignature($val)
    {
        $this->_propDict["signature"] = $val;
         return $this;
    }
    /**
    * Gets the signingKeyId
    *
    * @return string|null The signingKeyId
    */
    public function getSigningKeyId()
    {
        if (array_key_exists("signingKeyId", $this->_propDict)) {
            return $this->_propDict["signingKeyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signingKeyId
    *
    * @param string $val The value of the signingKeyId
    *
    * @return SigningResult
    */
    public function setSigningKeyId($val)
    {
        $this->_propDict["signingKeyId"] = $val;
        return $this;
    }
}
