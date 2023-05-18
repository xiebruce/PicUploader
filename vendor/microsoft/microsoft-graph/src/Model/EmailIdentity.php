<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailIdentity File
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
* EmailIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailIdentity extends Identity
{
    /**
    * Gets the email
    * Email address of the user.
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    * Email address of the user.
    *
    * @param string $val The value of the email
    *
    * @return EmailIdentity
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
}
