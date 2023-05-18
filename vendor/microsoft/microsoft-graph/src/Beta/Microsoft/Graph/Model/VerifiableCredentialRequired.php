<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiableCredentialRequired File
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
* VerifiableCredentialRequired class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiableCredentialRequired extends VerifiableCredentialRequirementStatus
{

    /**
    * Gets the expiryDateTime
    * When the presentation request will expire and a new one will need to be generated.
    *
    * @return \DateTime|null The expiryDateTime
    */
    public function getExpiryDateTime()
    {
        if (array_key_exists("expiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiryDateTime"], "\DateTime") || is_null($this->_propDict["expiryDateTime"])) {
                return $this->_propDict["expiryDateTime"];
            } else {
                $this->_propDict["expiryDateTime"] = new \DateTime($this->_propDict["expiryDateTime"]);
                return $this->_propDict["expiryDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expiryDateTime
    * When the presentation request will expire and a new one will need to be generated.
    *
    * @param \DateTime $val The value to assign to the expiryDateTime
    *
    * @return VerifiableCredentialRequired The VerifiableCredentialRequired
    */
    public function setExpiryDateTime($val)
    {
        $this->_propDict["expiryDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the url
    * A URL that launches the digital wallet and starts the presentation process. You can present this URL to the user if they can't scan the QR code.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * A URL that launches the digital wallet and starts the presentation process. You can present this URL to the user if they can't scan the QR code.
    *
    * @param string $val The value of the url
    *
    * @return VerifiableCredentialRequired
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
