<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemporaryAccessPassAuthenticationMethod File
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
* TemporaryAccessPassAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemporaryAccessPassAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the createdDateTime
    * The date and time when the Temporary Access Pass was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time when the Temporary Access Pass was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the isUsable
    * The state of the authentication method that indicates whether it's currently usable by the user.
    *
    * @return bool|null The isUsable
    */
    public function getIsUsable()
    {
        if (array_key_exists("isUsable", $this->_propDict)) {
            return $this->_propDict["isUsable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isUsable
    * The state of the authentication method that indicates whether it's currently usable by the user.
    *
    * @param bool $val The isUsable
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setIsUsable($val)
    {
        $this->_propDict["isUsable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isUsableOnce
    * Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
    *
    * @return bool|null The isUsableOnce
    */
    public function getIsUsableOnce()
    {
        if (array_key_exists("isUsableOnce", $this->_propDict)) {
            return $this->_propDict["isUsableOnce"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isUsableOnce
    * Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
    *
    * @param bool $val The isUsableOnce
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setIsUsableOnce($val)
    {
        $this->_propDict["isUsableOnce"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lifetimeInMinutes
    * The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
    *
    * @return int|null The lifetimeInMinutes
    */
    public function getLifetimeInMinutes()
    {
        if (array_key_exists("lifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["lifetimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lifetimeInMinutes
    * The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
    *
    * @param int $val The lifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setLifetimeInMinutes($val)
    {
        $this->_propDict["lifetimeInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the methodUsabilityReason
    * Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
    *
    * @return string|null The methodUsabilityReason
    */
    public function getMethodUsabilityReason()
    {
        if (array_key_exists("methodUsabilityReason", $this->_propDict)) {
            return $this->_propDict["methodUsabilityReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the methodUsabilityReason
    * Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
    *
    * @param string $val The methodUsabilityReason
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setMethodUsabilityReason($val)
    {
        $this->_propDict["methodUsabilityReason"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the temporaryAccessPass
    * The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
    *
    * @return string|null The temporaryAccessPass
    */
    public function getTemporaryAccessPass()
    {
        if (array_key_exists("temporaryAccessPass", $this->_propDict)) {
            return $this->_propDict["temporaryAccessPass"];
        } else {
            return null;
        }
    }

    /**
    * Sets the temporaryAccessPass
    * The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
    *
    * @param string $val The temporaryAccessPass
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setTemporaryAccessPass($val)
    {
        $this->_propDict["temporaryAccessPass"] = $val;
        return $this;
    }

}
