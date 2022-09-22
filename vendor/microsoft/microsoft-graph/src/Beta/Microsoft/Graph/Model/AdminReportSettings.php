<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdminReportSettings File
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
* AdminReportSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdminReportSettings extends Entity
{
    /**
    * Gets the displayConcealedNames
    * If set to true, all reports will conceal user information such as usernames, groups, and sites. If false, all reports will show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
    *
    * @return bool|null The displayConcealedNames
    */
    public function getDisplayConcealedNames()
    {
        if (array_key_exists("displayConcealedNames", $this->_propDict)) {
            return $this->_propDict["displayConcealedNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayConcealedNames
    * If set to true, all reports will conceal user information such as usernames, groups, and sites. If false, all reports will show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
    *
    * @param bool $val The displayConcealedNames
    *
    * @return AdminReportSettings
    */
    public function setDisplayConcealedNames($val)
    {
        $this->_propDict["displayConcealedNames"] = boolval($val);
        return $this;
    }

}
