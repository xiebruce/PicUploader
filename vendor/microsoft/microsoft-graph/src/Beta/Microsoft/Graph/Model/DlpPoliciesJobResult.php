<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpPoliciesJobResult File
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
* DlpPoliciesJobResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DlpPoliciesJobResult extends Entity
{
    /**
    * Gets the auditCorrelationId
    *
    * @return string|null The auditCorrelationId
    */
    public function getAuditCorrelationId()
    {
        if (array_key_exists("auditCorrelationId", $this->_propDict)) {
            return $this->_propDict["auditCorrelationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the auditCorrelationId
    *
    * @param string $val The value of the auditCorrelationId
    *
    * @return DlpPoliciesJobResult
    */
    public function setAuditCorrelationId($val)
    {
        $this->_propDict["auditCorrelationId"] = $val;
        return $this;
    }

    /**
    * Gets the evaluationDateTime
    *
    * @return \DateTime|null The evaluationDateTime
    */
    public function getEvaluationDateTime()
    {
        if (array_key_exists("evaluationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["evaluationDateTime"], "\DateTime") || is_null($this->_propDict["evaluationDateTime"])) {
                return $this->_propDict["evaluationDateTime"];
            } else {
                $this->_propDict["evaluationDateTime"] = new \DateTime($this->_propDict["evaluationDateTime"]);
                return $this->_propDict["evaluationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the evaluationDateTime
    *
    * @param \DateTime $val The value to assign to the evaluationDateTime
    *
    * @return DlpPoliciesJobResult The DlpPoliciesJobResult
    */
    public function setEvaluationDateTime($val)
    {
        $this->_propDict["evaluationDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the matchingRules
    *
    * @return MatchingDlpRule|null The matchingRules
    */
    public function getMatchingRules()
    {
        if (array_key_exists("matchingRules", $this->_propDict)) {
            if (is_a($this->_propDict["matchingRules"], "\Beta\Microsoft\Graph\Model\MatchingDlpRule") || is_null($this->_propDict["matchingRules"])) {
                return $this->_propDict["matchingRules"];
            } else {
                $this->_propDict["matchingRules"] = new MatchingDlpRule($this->_propDict["matchingRules"]);
                return $this->_propDict["matchingRules"];
            }
        }
        return null;
    }

    /**
    * Sets the matchingRules
    *
    * @param MatchingDlpRule $val The value to assign to the matchingRules
    *
    * @return DlpPoliciesJobResult The DlpPoliciesJobResult
    */
    public function setMatchingRules($val)
    {
        $this->_propDict["matchingRules"] = $val;
         return $this;
    }
}
