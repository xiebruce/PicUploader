<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiableCredentialRetrieved File
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
* VerifiableCredentialRetrieved class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiableCredentialRetrieved extends VerifiableCredentialRequirementStatus
{

    /**
    * Gets the expiryDateTime
    * The specific date and time that the presentation request will expire and a new one will need to be generated.
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
    * The specific date and time that the presentation request will expire and a new one will need to be generated.
    *
    * @param \DateTime $val The value to assign to the expiryDateTime
    *
    * @return VerifiableCredentialRetrieved The VerifiableCredentialRetrieved
    */
    public function setExpiryDateTime($val)
    {
        $this->_propDict["expiryDateTime"] = $val;
         return $this;
    }
}
