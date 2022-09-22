<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserEvidence File
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
* UserEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserEvidence extends AlertEvidence
{

    /**
    * Gets the userAccount
    * The user account details.
    *
    * @return UserAccount|null The userAccount
    */
    public function getUserAccount()
    {
        if (array_key_exists("userAccount", $this->_propDict)) {
            if (is_a($this->_propDict["userAccount"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\UserAccount") || is_null($this->_propDict["userAccount"])) {
                return $this->_propDict["userAccount"];
            } else {
                $this->_propDict["userAccount"] = new UserAccount($this->_propDict["userAccount"]);
                return $this->_propDict["userAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccount
    * The user account details.
    *
    * @param UserAccount $val The value to assign to the userAccount
    *
    * @return UserEvidence The UserEvidence
    */
    public function setUserAccount($val)
    {
        $this->_propDict["userAccount"] = $val;
         return $this;
    }
}
