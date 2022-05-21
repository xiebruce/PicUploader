<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerificationResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* VerificationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerificationResult extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the signatureValid
    *
    * @return bool|null The signatureValid
    */
    public function getSignatureValid()
    {
        if (array_key_exists("signatureValid", $this->_propDict)) {
            return $this->_propDict["signatureValid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signatureValid
    *
    * @param bool $val The value of the signatureValid
    *
    * @return VerificationResult
    */
    public function setSignatureValid($val)
    {
        $this->_propDict["signatureValid"] = $val;
        return $this;
    }
}
