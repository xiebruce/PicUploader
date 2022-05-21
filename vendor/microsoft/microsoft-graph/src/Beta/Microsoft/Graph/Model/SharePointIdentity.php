<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharePointIdentity File
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
* SharePointIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharePointIdentity extends Identity
{
    /**
    * Gets the loginName
    * The sign in name of the SharePoint identity.
    *
    * @return string|null The loginName
    */
    public function getLoginName()
    {
        if (array_key_exists("loginName", $this->_propDict)) {
            return $this->_propDict["loginName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loginName
    * The sign in name of the SharePoint identity.
    *
    * @param string $val The value of the loginName
    *
    * @return SharePointIdentity
    */
    public function setLoginName($val)
    {
        $this->_propDict["loginName"] = $val;
        return $this;
    }
}
