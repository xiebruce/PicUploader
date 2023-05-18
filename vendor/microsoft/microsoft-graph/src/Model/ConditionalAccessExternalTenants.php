<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessExternalTenants File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ConditionalAccessExternalTenants class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessExternalTenants extends Entity
{

    /**
    * Gets the membershipKind
    * The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object.
    *
    * @return ConditionalAccessExternalTenantsMembershipKind|null The membershipKind
    */
    public function getMembershipKind()
    {
        if (array_key_exists("membershipKind", $this->_propDict)) {
            if (is_a($this->_propDict["membershipKind"], "\Microsoft\Graph\Model\ConditionalAccessExternalTenantsMembershipKind") || is_null($this->_propDict["membershipKind"])) {
                return $this->_propDict["membershipKind"];
            } else {
                $this->_propDict["membershipKind"] = new ConditionalAccessExternalTenantsMembershipKind($this->_propDict["membershipKind"]);
                return $this->_propDict["membershipKind"];
            }
        }
        return null;
    }

    /**
    * Sets the membershipKind
    * The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object.
    *
    * @param ConditionalAccessExternalTenantsMembershipKind $val The value to assign to the membershipKind
    *
    * @return ConditionalAccessExternalTenants The ConditionalAccessExternalTenants
    */
    public function setMembershipKind($val)
    {
        $this->_propDict["membershipKind"] = $val;
         return $this;
    }
}
