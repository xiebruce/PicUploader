<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Security File
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
* Security class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Security extends Entity
{

     /**
     * Gets the providerStatus
     *
     * @return array|null The providerStatus
     */
    public function getProviderStatus()
    {
        if (array_key_exists("providerStatus", $this->_propDict)) {
           return $this->_propDict["providerStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the providerStatus
    *
    * @param SecurityProviderStatus[] $val The providerStatus
    *
    * @return Security
    */
    public function setProviderStatus($val)
    {
        $this->_propDict["providerStatus"] = $val;
        return $this;
    }


     /**
     * Gets the subjectRightsRequests
     *
     * @return array|null The subjectRightsRequests
     */
    public function getSubjectRightsRequests()
    {
        if (array_key_exists("subjectRightsRequests", $this->_propDict)) {
           return $this->_propDict["subjectRightsRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectRightsRequests
    *
    * @param SubjectRightsRequest[] $val The subjectRightsRequests
    *
    * @return Security
    */
    public function setSubjectRightsRequests($val)
    {
        $this->_propDict["subjectRightsRequests"] = $val;
        return $this;
    }

    /**
    * Gets the cases
    *
    * @return \Beta\Microsoft\Graph\SecurityNamespace\Model\CasesRoot|null The cases
    */
    public function getCases()
    {
        if (array_key_exists("cases", $this->_propDict)) {
            if (is_a($this->_propDict["cases"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\CasesRoot") || is_null($this->_propDict["cases"])) {
                return $this->_propDict["cases"];
            } else {
                $this->_propDict["cases"] = new \Beta\Microsoft\Graph\SecurityNamespace\Model\CasesRoot($this->_propDict["cases"]);
                return $this->_propDict["cases"];
            }
        }
        return null;
    }

    /**
    * Sets the cases
    *
    * @param \Beta\Microsoft\Graph\SecurityNamespace\Model\CasesRoot $val The cases
    *
    * @return Security
    */
    public function setCases($val)
    {
        $this->_propDict["cases"] = $val;
        return $this;
    }

    /**
    * Gets the informationProtection
    *
    * @return \Beta\Microsoft\Graph\SecurityNamespace\Model\InformationProtection|null The informationProtection
    */
    public function getInformationProtection()
    {
        if (array_key_exists("informationProtection", $this->_propDict)) {
            if (is_a($this->_propDict["informationProtection"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\InformationProtection") || is_null($this->_propDict["informationProtection"])) {
                return $this->_propDict["informationProtection"];
            } else {
                $this->_propDict["informationProtection"] = new \Beta\Microsoft\Graph\SecurityNamespace\Model\InformationProtection($this->_propDict["informationProtection"]);
                return $this->_propDict["informationProtection"];
            }
        }
        return null;
    }

    /**
    * Sets the informationProtection
    *
    * @param \Beta\Microsoft\Graph\SecurityNamespace\Model\InformationProtection $val The informationProtection
    *
    * @return Security
    */
    public function setInformationProtection($val)
    {
        $this->_propDict["informationProtection"] = $val;
        return $this;
    }

    /**
    * Gets the attackSimulation
    * Provides tenants capability to launch a simulated and realistic phishing attack and learn from it.
    *
    * @return AttackSimulationRoot|null The attackSimulation
    */
    public function getAttackSimulation()
    {
        if (array_key_exists("attackSimulation", $this->_propDict)) {
            if (is_a($this->_propDict["attackSimulation"], "\Beta\Microsoft\Graph\Model\AttackSimulationRoot") || is_null($this->_propDict["attackSimulation"])) {
                return $this->_propDict["attackSimulation"];
            } else {
                $this->_propDict["attackSimulation"] = new AttackSimulationRoot($this->_propDict["attackSimulation"]);
                return $this->_propDict["attackSimulation"];
            }
        }
        return null;
    }

    /**
    * Sets the attackSimulation
    * Provides tenants capability to launch a simulated and realistic phishing attack and learn from it.
    *
    * @param AttackSimulationRoot $val The attackSimulation
    *
    * @return Security
    */
    public function setAttackSimulation($val)
    {
        $this->_propDict["attackSimulation"] = $val;
        return $this;
    }


     /**
     * Gets the alerts
    * Notifications for suspicious or potential security issues in a customer’s tenant.
     *
     * @return array|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alerts
    * Notifications for suspicious or potential security issues in a customer’s tenant.
    *
    * @param Alert[] $val The alerts
    *
    * @return Security
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }


     /**
     * Gets the cloudAppSecurityProfiles
     *
     * @return array|null The cloudAppSecurityProfiles
     */
    public function getCloudAppSecurityProfiles()
    {
        if (array_key_exists("cloudAppSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["cloudAppSecurityProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudAppSecurityProfiles
    *
    * @param CloudAppSecurityProfile[] $val The cloudAppSecurityProfiles
    *
    * @return Security
    */
    public function setCloudAppSecurityProfiles($val)
    {
        $this->_propDict["cloudAppSecurityProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the domainSecurityProfiles
     *
     * @return array|null The domainSecurityProfiles
     */
    public function getDomainSecurityProfiles()
    {
        if (array_key_exists("domainSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["domainSecurityProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainSecurityProfiles
    *
    * @param DomainSecurityProfile[] $val The domainSecurityProfiles
    *
    * @return Security
    */
    public function setDomainSecurityProfiles($val)
    {
        $this->_propDict["domainSecurityProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the fileSecurityProfiles
     *
     * @return array|null The fileSecurityProfiles
     */
    public function getFileSecurityProfiles()
    {
        if (array_key_exists("fileSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["fileSecurityProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileSecurityProfiles
    *
    * @param FileSecurityProfile[] $val The fileSecurityProfiles
    *
    * @return Security
    */
    public function setFileSecurityProfiles($val)
    {
        $this->_propDict["fileSecurityProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the hostSecurityProfiles
     *
     * @return array|null The hostSecurityProfiles
     */
    public function getHostSecurityProfiles()
    {
        if (array_key_exists("hostSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["hostSecurityProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostSecurityProfiles
    *
    * @param HostSecurityProfile[] $val The hostSecurityProfiles
    *
    * @return Security
    */
    public function setHostSecurityProfiles($val)
    {
        $this->_propDict["hostSecurityProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the ipSecurityProfiles
     *
     * @return array|null The ipSecurityProfiles
     */
    public function getIpSecurityProfiles()
    {
        if (array_key_exists("ipSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["ipSecurityProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipSecurityProfiles
    *
    * @param IpSecurityProfile[] $val The ipSecurityProfiles
    *
    * @return Security
    */
    public function setIpSecurityProfiles($val)
    {
        $this->_propDict["ipSecurityProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the providerTenantSettings
     *
     * @return array|null The providerTenantSettings
     */
    public function getProviderTenantSettings()
    {
        if (array_key_exists("providerTenantSettings", $this->_propDict)) {
           return $this->_propDict["providerTenantSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the providerTenantSettings
    *
    * @param ProviderTenantSetting[] $val The providerTenantSettings
    *
    * @return Security
    */
    public function setProviderTenantSettings($val)
    {
        $this->_propDict["providerTenantSettings"] = $val;
        return $this;
    }


     /**
     * Gets the secureScoreControlProfiles
     *
     * @return array|null The secureScoreControlProfiles
     */
    public function getSecureScoreControlProfiles()
    {
        if (array_key_exists("secureScoreControlProfiles", $this->_propDict)) {
           return $this->_propDict["secureScoreControlProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureScoreControlProfiles
    *
    * @param SecureScoreControlProfile[] $val The secureScoreControlProfiles
    *
    * @return Security
    */
    public function setSecureScoreControlProfiles($val)
    {
        $this->_propDict["secureScoreControlProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the secureScores
     *
     * @return array|null The secureScores
     */
    public function getSecureScores()
    {
        if (array_key_exists("secureScores", $this->_propDict)) {
           return $this->_propDict["secureScores"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureScores
    *
    * @param SecureScore[] $val The secureScores
    *
    * @return Security
    */
    public function setSecureScores($val)
    {
        $this->_propDict["secureScores"] = $val;
        return $this;
    }


     /**
     * Gets the securityActions
     *
     * @return array|null The securityActions
     */
    public function getSecurityActions()
    {
        if (array_key_exists("securityActions", $this->_propDict)) {
           return $this->_propDict["securityActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityActions
    *
    * @param SecurityAction[] $val The securityActions
    *
    * @return Security
    */
    public function setSecurityActions($val)
    {
        $this->_propDict["securityActions"] = $val;
        return $this;
    }


     /**
     * Gets the tiIndicators
     *
     * @return array|null The tiIndicators
     */
    public function getTiIndicators()
    {
        if (array_key_exists("tiIndicators", $this->_propDict)) {
           return $this->_propDict["tiIndicators"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tiIndicators
    *
    * @param TiIndicator[] $val The tiIndicators
    *
    * @return Security
    */
    public function setTiIndicators($val)
    {
        $this->_propDict["tiIndicators"] = $val;
        return $this;
    }


     /**
     * Gets the userSecurityProfiles
     *
     * @return array|null The userSecurityProfiles
     */
    public function getUserSecurityProfiles()
    {
        if (array_key_exists("userSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["userSecurityProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userSecurityProfiles
    *
    * @param UserSecurityProfile[] $val The userSecurityProfiles
    *
    * @return Security
    */
    public function setUserSecurityProfiles($val)
    {
        $this->_propDict["userSecurityProfiles"] = $val;
        return $this;
    }

}
