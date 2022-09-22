<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInFrequencySessionControl File
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
* SignInFrequencySessionControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInFrequencySessionControl extends ConditionalAccessSessionControl
{

    /**
    * Gets the authenticationType
    * The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue.
    *
    * @return SignInFrequencyAuthenticationType|null The authenticationType
    */
    public function getAuthenticationType()
    {
        if (array_key_exists("authenticationType", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationType"], "\Microsoft\Graph\Model\SignInFrequencyAuthenticationType") || is_null($this->_propDict["authenticationType"])) {
                return $this->_propDict["authenticationType"];
            } else {
                $this->_propDict["authenticationType"] = new SignInFrequencyAuthenticationType($this->_propDict["authenticationType"]);
                return $this->_propDict["authenticationType"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationType
    * The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue.
    *
    * @param SignInFrequencyAuthenticationType $val The value to assign to the authenticationType
    *
    * @return SignInFrequencySessionControl The SignInFrequencySessionControl
    */
    public function setAuthenticationType($val)
    {
        $this->_propDict["authenticationType"] = $val;
         return $this;
    }

    /**
    * Gets the frequencyInterval
    * The possible values are timeBased, everyTime, unknownFutureValue.
    *
    * @return SignInFrequencyInterval|null The frequencyInterval
    */
    public function getFrequencyInterval()
    {
        if (array_key_exists("frequencyInterval", $this->_propDict)) {
            if (is_a($this->_propDict["frequencyInterval"], "\Microsoft\Graph\Model\SignInFrequencyInterval") || is_null($this->_propDict["frequencyInterval"])) {
                return $this->_propDict["frequencyInterval"];
            } else {
                $this->_propDict["frequencyInterval"] = new SignInFrequencyInterval($this->_propDict["frequencyInterval"]);
                return $this->_propDict["frequencyInterval"];
            }
        }
        return null;
    }

    /**
    * Sets the frequencyInterval
    * The possible values are timeBased, everyTime, unknownFutureValue.
    *
    * @param SignInFrequencyInterval $val The value to assign to the frequencyInterval
    *
    * @return SignInFrequencySessionControl The SignInFrequencySessionControl
    */
    public function setFrequencyInterval($val)
    {
        $this->_propDict["frequencyInterval"] = $val;
         return $this;
    }

    /**
    * Gets the type
    * Possible values are: days, hours.
    *
    * @return SigninFrequencyType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\Model\SigninFrequencyType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new SigninFrequencyType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Possible values are: days, hours.
    *
    * @param SigninFrequencyType $val The value to assign to the type
    *
    * @return SignInFrequencySessionControl The SignInFrequencySessionControl
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * The number of days or hours.
    *
    * @return int|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The number of days or hours.
    *
    * @param int $val The value of the value
    *
    * @return SignInFrequencySessionControl
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
