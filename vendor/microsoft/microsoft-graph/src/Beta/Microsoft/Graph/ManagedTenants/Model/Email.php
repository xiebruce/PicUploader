<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Email File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* Email class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Email extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the emailAddress
    *
    * @return string|null The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddress
    *
    * @param string $val The value of the emailAddress
    *
    * @return Email
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
}
