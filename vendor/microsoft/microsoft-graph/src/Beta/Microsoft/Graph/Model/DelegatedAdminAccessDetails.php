<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminAccessDetails File
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
* DelegatedAdminAccessDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminAccessDetails extends Entity
{

    /**
    * Gets the unifiedRoles
    * The directory roles that the Microsoft partner is assigned in the customer tenant.
    *
    * @return UnifiedRole|null The unifiedRoles
    */
    public function getUnifiedRoles()
    {
        if (array_key_exists("unifiedRoles", $this->_propDict)) {
            if (is_a($this->_propDict["unifiedRoles"], "\Beta\Microsoft\Graph\Model\UnifiedRole") || is_null($this->_propDict["unifiedRoles"])) {
                return $this->_propDict["unifiedRoles"];
            } else {
                $this->_propDict["unifiedRoles"] = new UnifiedRole($this->_propDict["unifiedRoles"]);
                return $this->_propDict["unifiedRoles"];
            }
        }
        return null;
    }

    /**
    * Sets the unifiedRoles
    * The directory roles that the Microsoft partner is assigned in the customer tenant.
    *
    * @param UnifiedRole $val The value to assign to the unifiedRoles
    *
    * @return DelegatedAdminAccessDetails The DelegatedAdminAccessDetails
    */
    public function setUnifiedRoles($val)
    {
        $this->_propDict["unifiedRoles"] = $val;
         return $this;
    }
}
