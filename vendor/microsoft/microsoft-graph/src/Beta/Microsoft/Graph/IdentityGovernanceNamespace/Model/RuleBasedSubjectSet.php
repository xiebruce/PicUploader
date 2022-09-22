<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RuleBasedSubjectSet File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;
/**
* RuleBasedSubjectSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RuleBasedSubjectSet extends \Beta\Microsoft\Graph\Model\SubjectSet
{
    /**
    * Gets the rule
    * The rule for the subject set.
    *
    * @return string|null The rule
    */
    public function getRule()
    {
        if (array_key_exists("rule", $this->_propDict)) {
            return $this->_propDict["rule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rule
    * The rule for the subject set.
    *
    * @param string $val The value of the rule
    *
    * @return RuleBasedSubjectSet
    */
    public function setRule($val)
    {
        $this->_propDict["rule"] = $val;
        return $this;
    }
}
