<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecureScoreControlProfile File
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
* SecureScoreControlProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecureScoreControlProfile extends Entity
{
    /**
    * Gets the actionType
    * Control action type (Config, Review, Behavior).
    *
    * @return string|null The actionType
    */
    public function getActionType()
    {
        if (array_key_exists("actionType", $this->_propDict)) {
            return $this->_propDict["actionType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionType
    * Control action type (Config, Review, Behavior).
    *
    * @param string $val The actionType
    *
    * @return SecureScoreControlProfile
    */
    public function setActionType($val)
    {
        $this->_propDict["actionType"] = $val;
        return $this;
    }

    /**
    * Gets the actionUrl
    * URL to where the control can be actioned.
    *
    * @return string|null The actionUrl
    */
    public function getActionUrl()
    {
        if (array_key_exists("actionUrl", $this->_propDict)) {
            return $this->_propDict["actionUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionUrl
    * URL to where the control can be actioned.
    *
    * @param string $val The actionUrl
    *
    * @return SecureScoreControlProfile
    */
    public function setActionUrl($val)
    {
        $this->_propDict["actionUrl"] = $val;
        return $this;
    }

    /**
    * Gets the azureTenantId
    * GUID string for tenant ID.
    *
    * @return string|null The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureTenantId
    * GUID string for tenant ID.
    *
    * @param string $val The azureTenantId
    *
    * @return SecureScoreControlProfile
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }


     /**
     * Gets the complianceInformation
    * The collection of compliance information associated with secure score control
     *
     * @return array|null The complianceInformation
     */
    public function getComplianceInformation()
    {
        if (array_key_exists("complianceInformation", $this->_propDict)) {
           return $this->_propDict["complianceInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceInformation
    * The collection of compliance information associated with secure score control
    *
    * @param ComplianceInformation[] $val The complianceInformation
    *
    * @return SecureScoreControlProfile
    */
    public function setComplianceInformation($val)
    {
        $this->_propDict["complianceInformation"] = $val;
        return $this;
    }

    /**
    * Gets the controlCategory
    * Control action category (Identity, Data, Device, Apps, Infrastructure).
    *
    * @return string|null The controlCategory
    */
    public function getControlCategory()
    {
        if (array_key_exists("controlCategory", $this->_propDict)) {
            return $this->_propDict["controlCategory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the controlCategory
    * Control action category (Identity, Data, Device, Apps, Infrastructure).
    *
    * @param string $val The controlCategory
    *
    * @return SecureScoreControlProfile
    */
    public function setControlCategory($val)
    {
        $this->_propDict["controlCategory"] = $val;
        return $this;
    }


     /**
     * Gets the controlStateUpdates
    * Flag to indicate where the tenant has marked a control (ignored, thirdParty, reviewed) (supports update).
     *
     * @return array|null The controlStateUpdates
     */
    public function getControlStateUpdates()
    {
        if (array_key_exists("controlStateUpdates", $this->_propDict)) {
           return $this->_propDict["controlStateUpdates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the controlStateUpdates
    * Flag to indicate where the tenant has marked a control (ignored, thirdParty, reviewed) (supports update).
    *
    * @param SecureScoreControlStateUpdate[] $val The controlStateUpdates
    *
    * @return SecureScoreControlProfile
    */
    public function setControlStateUpdates($val)
    {
        $this->_propDict["controlStateUpdates"] = $val;
        return $this;
    }

    /**
    * Gets the deprecated
    * Flag to indicate if a control is depreciated.
    *
    * @return bool|null The deprecated
    */
    public function getDeprecated()
    {
        if (array_key_exists("deprecated", $this->_propDict)) {
            return $this->_propDict["deprecated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deprecated
    * Flag to indicate if a control is depreciated.
    *
    * @param bool $val The deprecated
    *
    * @return SecureScoreControlProfile
    */
    public function setDeprecated($val)
    {
        $this->_propDict["deprecated"] = boolval($val);
        return $this;
    }

    /**
    * Gets the implementationCost
    * Resource cost of implemmentating control (low, moderate, high).
    *
    * @return string|null The implementationCost
    */
    public function getImplementationCost()
    {
        if (array_key_exists("implementationCost", $this->_propDict)) {
            return $this->_propDict["implementationCost"];
        } else {
            return null;
        }
    }

    /**
    * Sets the implementationCost
    * Resource cost of implemmentating control (low, moderate, high).
    *
    * @param string $val The implementationCost
    *
    * @return SecureScoreControlProfile
    */
    public function setImplementationCost($val)
    {
        $this->_propDict["implementationCost"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Time at which the control profile entity was last modified. The Timestamp type represents date and time
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Time at which the control profile entity was last modified. The Timestamp type represents date and time
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return SecureScoreControlProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the maxScore
    * max attainable score for the control.
    *
    * @return float|null The maxScore
    */
    public function getMaxScore()
    {
        if (array_key_exists("maxScore", $this->_propDict)) {
            return $this->_propDict["maxScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxScore
    * max attainable score for the control.
    *
    * @param float $val The maxScore
    *
    * @return SecureScoreControlProfile
    */
    public function setMaxScore($val)
    {
        $this->_propDict["maxScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the rank
    * Microsoft's stack ranking of control.
    *
    * @return int|null The rank
    */
    public function getRank()
    {
        if (array_key_exists("rank", $this->_propDict)) {
            return $this->_propDict["rank"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rank
    * Microsoft's stack ranking of control.
    *
    * @param int $val The rank
    *
    * @return SecureScoreControlProfile
    */
    public function setRank($val)
    {
        $this->_propDict["rank"] = intval($val);
        return $this;
    }

    /**
    * Gets the remediation
    * Description of what the control will help remediate.
    *
    * @return string|null The remediation
    */
    public function getRemediation()
    {
        if (array_key_exists("remediation", $this->_propDict)) {
            return $this->_propDict["remediation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediation
    * Description of what the control will help remediate.
    *
    * @param string $val The remediation
    *
    * @return SecureScoreControlProfile
    */
    public function setRemediation($val)
    {
        $this->_propDict["remediation"] = $val;
        return $this;
    }

    /**
    * Gets the remediationImpact
    * Description of the impact on users of the remediation.
    *
    * @return string|null The remediationImpact
    */
    public function getRemediationImpact()
    {
        if (array_key_exists("remediationImpact", $this->_propDict)) {
            return $this->_propDict["remediationImpact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediationImpact
    * Description of the impact on users of the remediation.
    *
    * @param string $val The remediationImpact
    *
    * @return SecureScoreControlProfile
    */
    public function setRemediationImpact($val)
    {
        $this->_propDict["remediationImpact"] = $val;
        return $this;
    }

    /**
    * Gets the service
    * Service that owns the control (Exchange, Sharepoint, Azure AD).
    *
    * @return string|null The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    * Service that owns the control (Exchange, Sharepoint, Azure AD).
    *
    * @param string $val The service
    *
    * @return SecureScoreControlProfile
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }

    /**
    * Gets the threats
    * List of threats the control mitigates (accountBreach,dataDeletion,dataExfiltration,dataSpillage,
    *
    * @return array|null The threats
    */
    public function getThreats()
    {
        if (array_key_exists("threats", $this->_propDict)) {
            return $this->_propDict["threats"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threats
    * List of threats the control mitigates (accountBreach,dataDeletion,dataExfiltration,dataSpillage,
    *
    * @param string[] $val The threats
    *
    * @return SecureScoreControlProfile
    */
    public function setThreats($val)
    {
        $this->_propDict["threats"] = $val;
        return $this;
    }

    /**
    * Gets the tier
    *
    * @return string|null The tier
    */
    public function getTier()
    {
        if (array_key_exists("tier", $this->_propDict)) {
            return $this->_propDict["tier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tier
    *
    * @param string $val The tier
    *
    * @return SecureScoreControlProfile
    */
    public function setTier($val)
    {
        $this->_propDict["tier"] = $val;
        return $this;
    }

    /**
    * Gets the title
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return SecureScoreControlProfile
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

    /**
    * Gets the userImpact
    *
    * @return string|null The userImpact
    */
    public function getUserImpact()
    {
        if (array_key_exists("userImpact", $this->_propDict)) {
            return $this->_propDict["userImpact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userImpact
    *
    * @param string $val The userImpact
    *
    * @return SecureScoreControlProfile
    */
    public function setUserImpact($val)
    {
        $this->_propDict["userImpact"] = $val;
        return $this;
    }

    /**
    * Gets the vendorInformation
    *
    * @return SecurityVendorInformation|null The vendorInformation
    */
    public function getVendorInformation()
    {
        if (array_key_exists("vendorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["vendorInformation"], "\Microsoft\Graph\Model\SecurityVendorInformation") || is_null($this->_propDict["vendorInformation"])) {
                return $this->_propDict["vendorInformation"];
            } else {
                $this->_propDict["vendorInformation"] = new SecurityVendorInformation($this->_propDict["vendorInformation"]);
                return $this->_propDict["vendorInformation"];
            }
        }
        return null;
    }

    /**
    * Sets the vendorInformation
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return SecureScoreControlProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }

}
