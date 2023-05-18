<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskConfigurationRoleBase File
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
* PlannerTaskConfigurationRoleBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskConfigurationRoleBase extends Entity
{

    /**
    * Gets the roleKind
    * Type of the role. The possible values are: relationship, unknownFutureValue.
    *
    * @return PlannerUserRoleKind|null The roleKind
    */
    public function getRoleKind()
    {
        if (array_key_exists("roleKind", $this->_propDict)) {
            if (is_a($this->_propDict["roleKind"], "\Beta\Microsoft\Graph\Model\PlannerUserRoleKind") || is_null($this->_propDict["roleKind"])) {
                return $this->_propDict["roleKind"];
            } else {
                $this->_propDict["roleKind"] = new PlannerUserRoleKind($this->_propDict["roleKind"]);
                return $this->_propDict["roleKind"];
            }
        }
        return null;
    }

    /**
    * Sets the roleKind
    * Type of the role. The possible values are: relationship, unknownFutureValue.
    *
    * @param PlannerUserRoleKind $val The value to assign to the roleKind
    *
    * @return PlannerTaskConfigurationRoleBase The PlannerTaskConfigurationRoleBase
    */
    public function setRoleKind($val)
    {
        $this->_propDict["roleKind"] = $val;
         return $this;
    }
}
