<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StrongAuthenticationDetail File
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
* StrongAuthenticationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StrongAuthenticationDetail extends Entity
{
    /**
    * Gets the encryptedPinHashHistory
    *
    * @return \GuzzleHttp\Psr7\Stream|null The encryptedPinHashHistory
    */
    public function getEncryptedPinHashHistory()
    {
        if (array_key_exists("encryptedPinHashHistory", $this->_propDict)) {
            if (is_a($this->_propDict["encryptedPinHashHistory"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["encryptedPinHashHistory"])) {
                return $this->_propDict["encryptedPinHashHistory"];
            } else {
                $this->_propDict["encryptedPinHashHistory"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["encryptedPinHashHistory"]);
                return $this->_propDict["encryptedPinHashHistory"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptedPinHashHistory
    *
    * @param \GuzzleHttp\Psr7\Stream $val The encryptedPinHashHistory
    *
    * @return StrongAuthenticationDetail
    */
    public function setEncryptedPinHashHistory($val)
    {
        $this->_propDict["encryptedPinHashHistory"] = $val;
        return $this;
    }

    /**
    * Gets the proofupTime
    *
    * @return int|null The proofupTime
    */
    public function getProofupTime()
    {
        if (array_key_exists("proofupTime", $this->_propDict)) {
            return $this->_propDict["proofupTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proofupTime
    *
    * @param int $val The proofupTime
    *
    * @return StrongAuthenticationDetail
    */
    public function setProofupTime($val)
    {
        $this->_propDict["proofupTime"] = intval($val);
        return $this;
    }

}
