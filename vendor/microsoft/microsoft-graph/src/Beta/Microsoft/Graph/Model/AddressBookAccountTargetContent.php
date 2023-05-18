<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddressBookAccountTargetContent File
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
* AddressBookAccountTargetContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddressBookAccountTargetContent extends AccountTargetContent
{
    /**
    * Gets the accountTargetEmails
    * List of user emails targeted for an attack simulation training campaign.
    *
    * @return string|null The accountTargetEmails
    */
    public function getAccountTargetEmails()
    {
        if (array_key_exists("accountTargetEmails", $this->_propDict)) {
            return $this->_propDict["accountTargetEmails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountTargetEmails
    * List of user emails targeted for an attack simulation training campaign.
    *
    * @param string $val The value of the accountTargetEmails
    *
    * @return AddressBookAccountTargetContent
    */
    public function setAccountTargetEmails($val)
    {
        $this->_propDict["accountTargetEmails"] = $val;
        return $this;
    }
}
