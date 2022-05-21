<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInstanceDecisionItemAzureRoleResource File
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
* AccessReviewInstanceDecisionItemAzureRoleResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInstanceDecisionItemAzureRoleResource extends AccessReviewInstanceDecisionItemResource
{

    /**
    * Gets the scope
    * Details of the scope this role is associated with.
    *
    * @return AccessReviewInstanceDecisionItemResource|null The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "\Beta\Microsoft\Graph\Model\AccessReviewInstanceDecisionItemResource") || is_null($this->_propDict["scope"])) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new AccessReviewInstanceDecisionItemResource($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }

    /**
    * Sets the scope
    * Details of the scope this role is associated with.
    *
    * @param AccessReviewInstanceDecisionItemResource $val The value to assign to the scope
    *
    * @return AccessReviewInstanceDecisionItemAzureRoleResource The AccessReviewInstanceDecisionItemAzureRoleResource
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
         return $this;
    }
}
