<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeRuleMembers File
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
* AttributeRuleMembers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeRuleMembers extends SubjectSet
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.attributeRuleMembers");
    }

    /**
    * Gets the description
    * A description of the membership rule.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * A description of the membership rule.
    *
    * @param string $val The value of the description
    *
    * @return AttributeRuleMembers
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the membershipRule
    * Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
    *
    * @return string|null The membershipRule
    */
    public function getMembershipRule()
    {
        if (array_key_exists("membershipRule", $this->_propDict)) {
            return $this->_propDict["membershipRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the membershipRule
    * Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax.
    *
    * @param string $val The value of the membershipRule
    *
    * @return AttributeRuleMembers
    */
    public function setMembershipRule($val)
    {
        $this->_propDict["membershipRule"] = $val;
        return $this;
    }
}
