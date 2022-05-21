<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewSet File
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
* AccessReviewSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewSet extends Entity
{

     /**
     * Gets the decisions
    * Represents an Azure AD access review decision on an instance of a review.
     *
     * @return array|null The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists("decisions", $this->_propDict)) {
           return $this->_propDict["decisions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decisions
    * Represents an Azure AD access review decision on an instance of a review.
    *
    * @param AccessReviewInstanceDecisionItem[] $val The decisions
    *
    * @return AccessReviewSet
    */
    public function setDecisions($val)
    {
        $this->_propDict["decisions"] = $val;
        return $this;
    }


     /**
     * Gets the definitions
    * Represents the template and scheduling for an access review.
     *
     * @return array|null The definitions
     */
    public function getDefinitions()
    {
        if (array_key_exists("definitions", $this->_propDict)) {
           return $this->_propDict["definitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the definitions
    * Represents the template and scheduling for an access review.
    *
    * @param AccessReviewScheduleDefinition[] $val The definitions
    *
    * @return AccessReviewSet
    */
    public function setDefinitions($val)
    {
        $this->_propDict["definitions"] = $val;
        return $this;
    }


     /**
     * Gets the historyDefinitions
    * Represents a collection of access review history data and the scopes used to collect that data.
     *
     * @return array|null The historyDefinitions
     */
    public function getHistoryDefinitions()
    {
        if (array_key_exists("historyDefinitions", $this->_propDict)) {
           return $this->_propDict["historyDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the historyDefinitions
    * Represents a collection of access review history data and the scopes used to collect that data.
    *
    * @param AccessReviewHistoryDefinition[] $val The historyDefinitions
    *
    * @return AccessReviewSet
    */
    public function setHistoryDefinitions($val)
    {
        $this->_propDict["historyDefinitions"] = $val;
        return $this;
    }

    /**
    * Gets the policy
    * Resource that enables administrators to manage directory-level access review policies in their tenant.
    *
    * @return AccessReviewPolicy|null The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\AccessReviewPolicy") || is_null($this->_propDict["policy"])) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new AccessReviewPolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }

    /**
    * Sets the policy
    * Resource that enables administrators to manage directory-level access review policies in their tenant.
    *
    * @param AccessReviewPolicy $val The policy
    *
    * @return AccessReviewSet
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }

}
