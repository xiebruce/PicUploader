<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Phone File
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
* Phone class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Phone extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the phoneNumber
    *
    * @return string|null The phoneNumber
    */
    public function getPhoneNumber()
    {
        if (array_key_exists("phoneNumber", $this->_propDict)) {
            return $this->_propDict["phoneNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phoneNumber
    *
    * @param string $val The value of the phoneNumber
    *
    * @return Phone
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
}
