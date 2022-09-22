<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessEnumeratedExternalTenants File
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
* ConditionalAccessEnumeratedExternalTenants class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessEnumeratedExternalTenants extends ConditionalAccessExternalTenants
{
    /**
    * Gets the members
    *
    * @return string|null The members
    */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
            return $this->_propDict["members"];
        } else {
            return null;
        }
    }

    /**
    * Sets the members
    *
    * @param string $val The value of the members
    *
    * @return ConditionalAccessEnumeratedExternalTenants
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }
}
