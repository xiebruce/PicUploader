<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* PlannerPlanDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PlannerPlanDetails extends Entity
{
    /**
    * Gets the sharedWith
    * Set of user ids that this plan is shared with. If you are leveraging Office 365 Groups, use the Groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection though it is not required for them to access the plan owned by the group.
    *
    * @return PlannerUserIds The sharedWith
    */
    public function getSharedWith()
    {
        if (array_key_exists("sharedWith", $this->_propDict)) {
            if (is_a($this->_propDict["sharedWith"], "Microsoft\Graph\Model\PlannerUserIds")) {
                return $this->_propDict["sharedWith"];
            } else {
                $this->_propDict["sharedWith"] = new PlannerUserIds($this->_propDict["sharedWith"]);
                return $this->_propDict["sharedWith"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharedWith
    * Set of user ids that this plan is shared with. If you are leveraging Office 365 Groups, use the Groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection though it is not required for them to access the plan owned by the group.
    *
    * @param PlannerUserIds $val The sharedWith
    *
    * @return PlannerPlanDetails
    */
    public function setSharedWith($val)
    {
        $this->_propDict["sharedWith"] = $val;
        return $this;
    }
    
    /**
    * Gets the categoryDescriptions
    * An object that specifies the descriptions of the six categories that can be associated with tasks in the plan
    *
    * @return PlannerCategoryDescriptions The categoryDescriptions
    */
    public function getCategoryDescriptions()
    {
        if (array_key_exists("categoryDescriptions", $this->_propDict)) {
            if (is_a($this->_propDict["categoryDescriptions"], "Microsoft\Graph\Model\PlannerCategoryDescriptions")) {
                return $this->_propDict["categoryDescriptions"];
            } else {
                $this->_propDict["categoryDescriptions"] = new PlannerCategoryDescriptions($this->_propDict["categoryDescriptions"]);
                return $this->_propDict["categoryDescriptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the categoryDescriptions
    * An object that specifies the descriptions of the six categories that can be associated with tasks in the plan
    *
    * @param PlannerCategoryDescriptions $val The categoryDescriptions
    *
    * @return PlannerPlanDetails
    */
    public function setCategoryDescriptions($val)
    {
        $this->_propDict["categoryDescriptions"] = $val;
        return $this;
    }
    
}