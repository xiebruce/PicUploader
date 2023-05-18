<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskyServicePrincipal File
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
* RiskyServicePrincipal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskyServicePrincipal extends Entity
{
    /**
    * Gets the appId
    * The globally unique identifier for the associated application (its appId property), if any.
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The globally unique identifier for the associated application (its appId property), if any.
    *
    * @param string $val The appId
    *
    * @return RiskyServicePrincipal
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the service principal.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name for the service principal.
    *
    * @param string $val The displayName
    *
    * @return RiskyServicePrincipal
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isEnabled
    * true if the service principal account is enabled; otherwise, false.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * true if the service principal account is enabled; otherwise, false.
    *
    * @param bool $val The isEnabled
    *
    * @return RiskyServicePrincipal
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isProcessing
    * Indicates whether Azure AD is currently processing the service principal's risky state.
    *
    * @return bool|null The isProcessing
    */
    public function getIsProcessing()
    {
        if (array_key_exists("isProcessing", $this->_propDict)) {
            return $this->_propDict["isProcessing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isProcessing
    * Indicates whether Azure AD is currently processing the service principal's risky state.
    *
    * @param bool $val The isProcessing
    *
    * @return RiskyServicePrincipal
    */
    public function setIsProcessing($val)
    {
        $this->_propDict["isProcessing"] = boolval($val);
        return $this;
    }

    /**
    * Gets the riskDetail
    * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: none, hidden,  unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
    *
    * @return RiskDetail|null The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "\Microsoft\Graph\Model\RiskDetail") || is_null($this->_propDict["riskDetail"])) {
                return $this->_propDict["riskDetail"];
            } else {
                $this->_propDict["riskDetail"] = new RiskDetail($this->_propDict["riskDetail"]);
                return $this->_propDict["riskDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the riskDetail
    * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: none, hidden,  unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return RiskyServicePrincipal
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }

    /**
    * Gets the riskLastUpdatedDateTime
    * The date and time that the risk state was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. Supports $filter (eq).
    *
    * @return \DateTime|null The riskLastUpdatedDateTime
    */
    public function getRiskLastUpdatedDateTime()
    {
        if (array_key_exists("riskLastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["riskLastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["riskLastUpdatedDateTime"])) {
                return $this->_propDict["riskLastUpdatedDateTime"];
            } else {
                $this->_propDict["riskLastUpdatedDateTime"] = new \DateTime($this->_propDict["riskLastUpdatedDateTime"]);
                return $this->_propDict["riskLastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the riskLastUpdatedDateTime
    * The date and time that the risk state was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. Supports $filter (eq).
    *
    * @param \DateTime $val The riskLastUpdatedDateTime
    *
    * @return RiskyServicePrincipal
    */
    public function setRiskLastUpdatedDateTime($val)
    {
        $this->_propDict["riskLastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the riskLevel
    * Level of the detected risky workload identity. The possible values are: low, medium, high, hidden, none, unknownFutureValue. Supports $filter (eq).
    *
    * @return RiskLevel|null The riskLevel
    */
    public function getRiskLevel()
    {
        if (array_key_exists("riskLevel", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevel"], "\Microsoft\Graph\Model\RiskLevel") || is_null($this->_propDict["riskLevel"])) {
                return $this->_propDict["riskLevel"];
            } else {
                $this->_propDict["riskLevel"] = new RiskLevel($this->_propDict["riskLevel"]);
                return $this->_propDict["riskLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the riskLevel
    * Level of the detected risky workload identity. The possible values are: low, medium, high, hidden, none, unknownFutureValue. Supports $filter (eq).
    *
    * @param RiskLevel $val The riskLevel
    *
    * @return RiskyServicePrincipal
    */
    public function setRiskLevel($val)
    {
        $this->_propDict["riskLevel"] = $val;
        return $this;
    }

    /**
    * Gets the riskState
    * State of the service principal's risk. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @return RiskState|null The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "\Microsoft\Graph\Model\RiskState") || is_null($this->_propDict["riskState"])) {
                return $this->_propDict["riskState"];
            } else {
                $this->_propDict["riskState"] = new RiskState($this->_propDict["riskState"]);
                return $this->_propDict["riskState"];
            }
        }
        return null;
    }

    /**
    * Sets the riskState
    * State of the service principal's risk. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @param RiskState $val The riskState
    *
    * @return RiskyServicePrincipal
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalType
    * Identifies whether the service principal represents an Application, a ManagedIdentity, or a legacy application (socialIdp). This is set by Azure AD internally and is inherited from servicePrincipal.
    *
    * @return string|null The servicePrincipalType
    */
    public function getServicePrincipalType()
    {
        if (array_key_exists("servicePrincipalType", $this->_propDict)) {
            return $this->_propDict["servicePrincipalType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalType
    * Identifies whether the service principal represents an Application, a ManagedIdentity, or a legacy application (socialIdp). This is set by Azure AD internally and is inherited from servicePrincipal.
    *
    * @param string $val The servicePrincipalType
    *
    * @return RiskyServicePrincipal
    */
    public function setServicePrincipalType($val)
    {
        $this->_propDict["servicePrincipalType"] = $val;
        return $this;
    }


     /**
     * Gets the history
    * Represents the risk history of Azure AD service principals.
     *
     * @return array|null The history
     */
    public function getHistory()
    {
        if (array_key_exists("history", $this->_propDict)) {
           return $this->_propDict["history"];
        } else {
            return null;
        }
    }

    /**
    * Sets the history
    * Represents the risk history of Azure AD service principals.
    *
    * @param RiskyServicePrincipalHistoryItem[] $val The history
    *
    * @return RiskyServicePrincipal
    */
    public function setHistory($val)
    {
        $this->_propDict["history"] = $val;
        return $this;
    }

}
