<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequestSignatureVerification File
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
* RequestSignatureVerification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequestSignatureVerification extends Entity
{

    /**
    * Gets the allowedWeakAlgorithms
    * Specifies which weak algorithms are allowed.  The possible values are: rsaSha1, unknownFutureValue.
    *
    * @return WeakAlgorithms|null The allowedWeakAlgorithms
    */
    public function getAllowedWeakAlgorithms()
    {
        if (array_key_exists("allowedWeakAlgorithms", $this->_propDict)) {
            if (is_a($this->_propDict["allowedWeakAlgorithms"], "\Microsoft\Graph\Model\WeakAlgorithms") || is_null($this->_propDict["allowedWeakAlgorithms"])) {
                return $this->_propDict["allowedWeakAlgorithms"];
            } else {
                $this->_propDict["allowedWeakAlgorithms"] = new WeakAlgorithms($this->_propDict["allowedWeakAlgorithms"]);
                return $this->_propDict["allowedWeakAlgorithms"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedWeakAlgorithms
    * Specifies which weak algorithms are allowed.  The possible values are: rsaSha1, unknownFutureValue.
    *
    * @param WeakAlgorithms $val The value to assign to the allowedWeakAlgorithms
    *
    * @return RequestSignatureVerification The RequestSignatureVerification
    */
    public function setAllowedWeakAlgorithms($val)
    {
        $this->_propDict["allowedWeakAlgorithms"] = $val;
         return $this;
    }
    /**
    * Gets the isSignedRequestRequired
    * Specifies whether signed authentication requests for this application should be required.
    *
    * @return bool|null The isSignedRequestRequired
    */
    public function getIsSignedRequestRequired()
    {
        if (array_key_exists("isSignedRequestRequired", $this->_propDict)) {
            return $this->_propDict["isSignedRequestRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSignedRequestRequired
    * Specifies whether signed authentication requests for this application should be required.
    *
    * @param bool $val The value of the isSignedRequestRequired
    *
    * @return RequestSignatureVerification
    */
    public function setIsSignedRequestRequired($val)
    {
        $this->_propDict["isSignedRequestRequired"] = $val;
        return $this;
    }
}
