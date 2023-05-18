<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskServicePrincipalActivity File
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
* RiskServicePrincipalActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskServicePrincipalActivity extends Entity
{

    /**
    * Gets the detail
    * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without that license will be returned hidden. The possible values are: none, hidden, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
    *
    * @return RiskDetail|null The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "\Beta\Microsoft\Graph\Model\RiskDetail") || is_null($this->_propDict["detail"])) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new RiskDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }

    /**
    * Sets the detail
    * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without that license will be returned hidden. The possible values are: none, hidden, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
    *
    * @param RiskDetail $val The value to assign to the detail
    *
    * @return RiskServicePrincipalActivity The RiskServicePrincipalActivity
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
         return $this;
    }
    /**
    * Gets the riskEventTypes
    *
    * @return string|null The riskEventTypes
    */
    public function getRiskEventTypes()
    {
        if (array_key_exists("riskEventTypes", $this->_propDict)) {
            return $this->_propDict["riskEventTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskEventTypes
    *
    * @param string $val The value of the riskEventTypes
    *
    * @return RiskServicePrincipalActivity
    */
    public function setRiskEventTypes($val)
    {
        $this->_propDict["riskEventTypes"] = $val;
        return $this;
    }
}
