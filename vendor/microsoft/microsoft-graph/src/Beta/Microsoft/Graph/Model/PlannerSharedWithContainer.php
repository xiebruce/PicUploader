<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerSharedWithContainer File
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
* PlannerSharedWithContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerSharedWithContainer extends PlannerPlanContainer
{

    /**
    * Gets the accessLevel
    *
    * @return PlannerPlanAccessLevel|null The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "\Beta\Microsoft\Graph\Model\PlannerPlanAccessLevel") || is_null($this->_propDict["accessLevel"])) {
                return $this->_propDict["accessLevel"];
            } else {
                $this->_propDict["accessLevel"] = new PlannerPlanAccessLevel($this->_propDict["accessLevel"]);
                return $this->_propDict["accessLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the accessLevel
    *
    * @param PlannerPlanAccessLevel $val The value to assign to the accessLevel
    *
    * @return PlannerSharedWithContainer The PlannerSharedWithContainer
    */
    public function setAccessLevel($val)
    {
        $this->_propDict["accessLevel"] = $val;
         return $this;
    }
}
