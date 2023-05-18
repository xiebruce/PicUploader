<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantRelationshipAccessPolicyBase File
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
* TenantRelationshipAccessPolicyBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantRelationshipAccessPolicyBase extends PolicyBase
{
    /**
    * Gets the definition
    *
    * @return array|null The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            return $this->_propDict["definition"];
        } else {
            return null;
        }
    }

    /**
    * Sets the definition
    *
    * @param string[] $val The definition
    *
    * @return TenantRelationshipAccessPolicyBase
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
        return $this;
    }

}
