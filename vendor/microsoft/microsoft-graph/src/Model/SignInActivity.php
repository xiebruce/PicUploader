<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInActivity File
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
* SignInActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInActivity extends Entity
{

    /**
    * Gets the lastNonInteractiveSignInDateTime
    * The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client attempted to sign into the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
    *
    * @return \DateTime|null The lastNonInteractiveSignInDateTime
    */
    public function getLastNonInteractiveSignInDateTime()
    {
        if (array_key_exists("lastNonInteractiveSignInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastNonInteractiveSignInDateTime"], "\DateTime") || is_null($this->_propDict["lastNonInteractiveSignInDateTime"])) {
                return $this->_propDict["lastNonInteractiveSignInDateTime"];
            } else {
                $this->_propDict["lastNonInteractiveSignInDateTime"] = new \DateTime($this->_propDict["lastNonInteractiveSignInDateTime"]);
                return $this->_propDict["lastNonInteractiveSignInDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastNonInteractiveSignInDateTime
    * The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client attempted to sign into the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
    *
    * @param \DateTime $val The value to assign to the lastNonInteractiveSignInDateTime
    *
    * @return SignInActivity The SignInActivity
    */
    public function setLastNonInteractiveSignInDateTime($val)
    {
        $this->_propDict["lastNonInteractiveSignInDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the lastNonInteractiveSignInRequestId
    * Request identifier of the last non-interactive sign-in performed by this user.
    *
    * @return string|null The lastNonInteractiveSignInRequestId
    */
    public function getLastNonInteractiveSignInRequestId()
    {
        if (array_key_exists("lastNonInteractiveSignInRequestId", $this->_propDict)) {
            return $this->_propDict["lastNonInteractiveSignInRequestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastNonInteractiveSignInRequestId
    * Request identifier of the last non-interactive sign-in performed by this user.
    *
    * @param string $val The value of the lastNonInteractiveSignInRequestId
    *
    * @return SignInActivity
    */
    public function setLastNonInteractiveSignInRequestId($val)
    {
        $this->_propDict["lastNonInteractiveSignInRequestId"] = $val;
        return $this;
    }

    /**
    * Gets the lastSignInDateTime
    * The last interactive sign-in date and time for a specific user. You can use this field to calculate the last time a user attempted to sign into the directory with an interactive authentication method. This field can be used to build reports, such as inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
    *
    * @return \DateTime|null The lastSignInDateTime
    */
    public function getLastSignInDateTime()
    {
        if (array_key_exists("lastSignInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSignInDateTime"], "\DateTime") || is_null($this->_propDict["lastSignInDateTime"])) {
                return $this->_propDict["lastSignInDateTime"];
            } else {
                $this->_propDict["lastSignInDateTime"] = new \DateTime($this->_propDict["lastSignInDateTime"]);
                return $this->_propDict["lastSignInDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSignInDateTime
    * The last interactive sign-in date and time for a specific user. You can use this field to calculate the last time a user attempted to sign into the directory with an interactive authentication method. This field can be used to build reports, such as inactive users. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is: '2014-01-01T00:00:00Z'. Azure AD maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Azure AD.
    *
    * @param \DateTime $val The value to assign to the lastSignInDateTime
    *
    * @return SignInActivity The SignInActivity
    */
    public function setLastSignInDateTime($val)
    {
        $this->_propDict["lastSignInDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the lastSignInRequestId
    * Request identifier of the last interactive sign-in performed by this user.
    *
    * @return string|null The lastSignInRequestId
    */
    public function getLastSignInRequestId()
    {
        if (array_key_exists("lastSignInRequestId", $this->_propDict)) {
            return $this->_propDict["lastSignInRequestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastSignInRequestId
    * Request identifier of the last interactive sign-in performed by this user.
    *
    * @param string $val The value of the lastSignInRequestId
    *
    * @return SignInActivity
    */
    public function setLastSignInRequestId($val)
    {
        $this->_propDict["lastSignInRequestId"] = $val;
        return $this;
    }
}
