<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DecisionItemPrincipalResourceMembership File
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
* DecisionItemPrincipalResourceMembership class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DecisionItemPrincipalResourceMembership extends Entity
{

    /**
    * Gets the membershipType
    * Type of membership that the principal has to the resource. Multi-valued. The possible values are: direct, indirect, unknownFutureValue.
    *
    * @return DecisionItemPrincipalResourceMembershipType|null The membershipType
    */
    public function getMembershipType()
    {
        if (array_key_exists("membershipType", $this->_propDict)) {
            if (is_a($this->_propDict["membershipType"], "\Beta\Microsoft\Graph\Model\DecisionItemPrincipalResourceMembershipType") || is_null($this->_propDict["membershipType"])) {
                return $this->_propDict["membershipType"];
            } else {
                $this->_propDict["membershipType"] = new DecisionItemPrincipalResourceMembershipType($this->_propDict["membershipType"]);
                return $this->_propDict["membershipType"];
            }
        }
        return null;
    }

    /**
    * Sets the membershipType
    * Type of membership that the principal has to the resource. Multi-valued. The possible values are: direct, indirect, unknownFutureValue.
    *
    * @param DecisionItemPrincipalResourceMembershipType $val The value to assign to the membershipType
    *
    * @return DecisionItemPrincipalResourceMembership The DecisionItemPrincipalResourceMembership
    */
    public function setMembershipType($val)
    {
        $this->_propDict["membershipType"] = $val;
         return $this;
    }
}
