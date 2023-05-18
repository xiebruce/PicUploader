<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Payload File
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
* Payload class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Payload extends Entity
{
    /**
    * Gets the brand
    * The branch of a payload. Possible values are: unknown, other, americanExpress, capitalOne, dhl, docuSign, dropbox, facebook, firstAmerican, microsoft, netflix, scotiabank, stewartTitle, tesco, wellsFargo, syrinxCloud, adobe, teams, zoom, unknownFutureValue.
    *
    * @return PayloadBrand|null The brand
    */
    public function getBrand()
    {
        if (array_key_exists("brand", $this->_propDict)) {
            if (is_a($this->_propDict["brand"], "\Beta\Microsoft\Graph\Model\PayloadBrand") || is_null($this->_propDict["brand"])) {
                return $this->_propDict["brand"];
            } else {
                $this->_propDict["brand"] = new PayloadBrand($this->_propDict["brand"]);
                return $this->_propDict["brand"];
            }
        }
        return null;
    }

    /**
    * Sets the brand
    * The branch of a payload. Possible values are: unknown, other, americanExpress, capitalOne, dhl, docuSign, dropbox, facebook, firstAmerican, microsoft, netflix, scotiabank, stewartTitle, tesco, wellsFargo, syrinxCloud, adobe, teams, zoom, unknownFutureValue.
    *
    * @param PayloadBrand $val The brand
    *
    * @return Payload
    */
    public function setBrand($val)
    {
        $this->_propDict["brand"] = $val;
        return $this;
    }

    /**
    * Gets the complexity
    * The complexity of a payload.Possible values are: unknown, low, medium, high, unknownFutureValue
    *
    * @return PayloadComplexity|null The complexity
    */
    public function getComplexity()
    {
        if (array_key_exists("complexity", $this->_propDict)) {
            if (is_a($this->_propDict["complexity"], "\Beta\Microsoft\Graph\Model\PayloadComplexity") || is_null($this->_propDict["complexity"])) {
                return $this->_propDict["complexity"];
            } else {
                $this->_propDict["complexity"] = new PayloadComplexity($this->_propDict["complexity"]);
                return $this->_propDict["complexity"];
            }
        }
        return null;
    }

    /**
    * Sets the complexity
    * The complexity of a payload.Possible values are: unknown, low, medium, high, unknownFutureValue
    *
    * @param PayloadComplexity $val The complexity
    *
    * @return Payload
    */
    public function setComplexity($val)
    {
        $this->_propDict["complexity"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Identity of the user who created the attack simulation and training campaign payload.
    *
    * @return EmailIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new EmailIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user who created the attack simulation and training campaign payload.
    *
    * @param EmailIdentity $val The createdBy
    *
    * @return Payload
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time when the attack simulation and training campaign payload.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date and time when the attack simulation and training campaign payload.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Payload
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the attack simulation and training campaign payload.
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
    * Description of the attack simulation and training campaign payload.
    *
    * @param string $val The description
    *
    * @return Payload
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the detail
    * Additional details about the payload.
    *
    * @return PayloadDetail|null The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "\Beta\Microsoft\Graph\Model\PayloadDetail") || is_null($this->_propDict["detail"])) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new PayloadDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }

    /**
    * Sets the detail
    * Additional details about the payload.
    *
    * @param PayloadDetail $val The detail
    *
    * @return Payload
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the attack simulation and training campaign payload. Supports $filter and $orderby.
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
    * Display name of the attack simulation and training campaign payload. Supports $filter and $orderby.
    *
    * @param string $val The displayName
    *
    * @return Payload
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the industry
    * Industry of a payload. Possible values are: unknown, other, banking, businessServices, consumerServices, education, energy, construction, consulting, financialServices, government, hospitality, insurance, legal, courierServices, IT, healthcare, manufacturing, retail, telecom, realEstate, unknownFutureValue.
    *
    * @return PayloadIndustry|null The industry
    */
    public function getIndustry()
    {
        if (array_key_exists("industry", $this->_propDict)) {
            if (is_a($this->_propDict["industry"], "\Beta\Microsoft\Graph\Model\PayloadIndustry") || is_null($this->_propDict["industry"])) {
                return $this->_propDict["industry"];
            } else {
                $this->_propDict["industry"] = new PayloadIndustry($this->_propDict["industry"]);
                return $this->_propDict["industry"];
            }
        }
        return null;
    }

    /**
    * Sets the industry
    * Industry of a payload. Possible values are: unknown, other, banking, businessServices, consumerServices, education, energy, construction, consulting, financialServices, government, hospitality, insurance, legal, courierServices, IT, healthcare, manufacturing, retail, telecom, realEstate, unknownFutureValue.
    *
    * @param PayloadIndustry $val The industry
    *
    * @return Payload
    */
    public function setIndustry($val)
    {
        $this->_propDict["industry"] = $val;
        return $this;
    }

    /**
    * Gets the isAutomated
    * Indicates whether the attack simulation and training campaign payload was created from an automation flow. Supports $filter and $orderby.
    *
    * @return bool|null The isAutomated
    */
    public function getIsAutomated()
    {
        if (array_key_exists("isAutomated", $this->_propDict)) {
            return $this->_propDict["isAutomated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAutomated
    * Indicates whether the attack simulation and training campaign payload was created from an automation flow. Supports $filter and $orderby.
    *
    * @param bool $val The isAutomated
    *
    * @return Payload
    */
    public function setIsAutomated($val)
    {
        $this->_propDict["isAutomated"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isControversial
    * Indicates whether the payload is controversial.
    *
    * @return bool|null The isControversial
    */
    public function getIsControversial()
    {
        if (array_key_exists("isControversial", $this->_propDict)) {
            return $this->_propDict["isControversial"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isControversial
    * Indicates whether the payload is controversial.
    *
    * @param bool $val The isControversial
    *
    * @return Payload
    */
    public function setIsControversial($val)
    {
        $this->_propDict["isControversial"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isCurrentEvent
    * Indicates whether the payload is from any recent event.
    *
    * @return bool|null The isCurrentEvent
    */
    public function getIsCurrentEvent()
    {
        if (array_key_exists("isCurrentEvent", $this->_propDict)) {
            return $this->_propDict["isCurrentEvent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCurrentEvent
    * Indicates whether the payload is from any recent event.
    *
    * @param bool $val The isCurrentEvent
    *
    * @return Payload
    */
    public function setIsCurrentEvent($val)
    {
        $this->_propDict["isCurrentEvent"] = boolval($val);
        return $this;
    }

    /**
    * Gets the language
    * Payload language.
    *
    * @return string|null The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    * Payload language.
    *
    * @param string $val The language
    *
    * @return Payload
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user who most recently modified the attack simulation and training campaign payload.
    *
    * @return EmailIdentity|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new EmailIdentity($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity of the user who most recently modified the attack simulation and training campaign payload.
    *
    * @param EmailIdentity $val The lastModifiedBy
    *
    * @return Payload
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date and time when the attack simulation and training campaign payload was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * Date and time when the attack simulation and training campaign payload was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Payload
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the payloadTags
    * Free text tags for a payload.
    *
    * @return array|null The payloadTags
    */
    public function getPayloadTags()
    {
        if (array_key_exists("payloadTags", $this->_propDict)) {
            return $this->_propDict["payloadTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloadTags
    * Free text tags for a payload.
    *
    * @param string[] $val The payloadTags
    *
    * @return Payload
    */
    public function setPayloadTags($val)
    {
        $this->_propDict["payloadTags"] = $val;
        return $this;
    }

    /**
    * Gets the platform
    * The payload delivery platform for a simulation. Possible values are: unknown, sms, email, teams, unknownFutureValue.
    *
    * @return PayloadDeliveryPlatform|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\PayloadDeliveryPlatform") || is_null($this->_propDict["platform"])) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new PayloadDeliveryPlatform($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * The payload delivery platform for a simulation. Possible values are: unknown, sms, email, teams, unknownFutureValue.
    *
    * @param PayloadDeliveryPlatform $val The platform
    *
    * @return Payload
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }

    /**
    * Gets the predictedCompromiseRate
    * Predicted probability for a payload to phish a targeted user.
    *
    * @return float|null The predictedCompromiseRate
    */
    public function getPredictedCompromiseRate()
    {
        if (array_key_exists("predictedCompromiseRate", $this->_propDict)) {
            return $this->_propDict["predictedCompromiseRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the predictedCompromiseRate
    * Predicted probability for a payload to phish a targeted user.
    *
    * @param float $val The predictedCompromiseRate
    *
    * @return Payload
    */
    public function setPredictedCompromiseRate($val)
    {
        $this->_propDict["predictedCompromiseRate"] = floatval($val);
        return $this;
    }

    /**
    * Gets the simulationAttackType
    * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
    *
    * @return SimulationAttackType|null The simulationAttackType
    */
    public function getSimulationAttackType()
    {
        if (array_key_exists("simulationAttackType", $this->_propDict)) {
            if (is_a($this->_propDict["simulationAttackType"], "\Beta\Microsoft\Graph\Model\SimulationAttackType") || is_null($this->_propDict["simulationAttackType"])) {
                return $this->_propDict["simulationAttackType"];
            } else {
                $this->_propDict["simulationAttackType"] = new SimulationAttackType($this->_propDict["simulationAttackType"]);
                return $this->_propDict["simulationAttackType"];
            }
        }
        return null;
    }

    /**
    * Sets the simulationAttackType
    * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
    *
    * @param SimulationAttackType $val The simulationAttackType
    *
    * @return Payload
    */
    public function setSimulationAttackType($val)
    {
        $this->_propDict["simulationAttackType"] = $val;
        return $this;
    }

    /**
    * Gets the source
    * Simulation content source. Supports $filter and $orderby. Possible values are: unknown, tenant, global, unknownFutureValue. Inherited from simulation.
    *
    * @return SimulationContentSource|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\SimulationContentSource") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new SimulationContentSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    * Simulation content source. Supports $filter and $orderby. Possible values are: unknown, tenant, global, unknownFutureValue. Inherited from simulation.
    *
    * @param SimulationContentSource $val The source
    *
    * @return Payload
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Simulation content status. Supports $filter and $orderby. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue. Inherited from simulation.
    *
    * @return SimulationContentStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SimulationContentStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SimulationContentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Simulation content status. Supports $filter and $orderby. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue. Inherited from simulation.
    *
    * @param SimulationContentStatus $val The status
    *
    * @return Payload
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the technique
    * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
    *
    * @return SimulationAttackTechnique|null The technique
    */
    public function getTechnique()
    {
        if (array_key_exists("technique", $this->_propDict)) {
            if (is_a($this->_propDict["technique"], "\Beta\Microsoft\Graph\Model\SimulationAttackTechnique") || is_null($this->_propDict["technique"])) {
                return $this->_propDict["technique"];
            } else {
                $this->_propDict["technique"] = new SimulationAttackTechnique($this->_propDict["technique"]);
                return $this->_propDict["technique"];
            }
        }
        return null;
    }

    /**
    * Sets the technique
    * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue. For more information on the types of social engineering attack techniques, see simulations.
    *
    * @param SimulationAttackTechnique $val The technique
    *
    * @return Payload
    */
    public function setTechnique($val)
    {
        $this->_propDict["technique"] = $val;
        return $this;
    }

    /**
    * Gets the theme
    * The theme of a payload. Possible values are: unknown, other, accountActivation, accountVerification, billing, cleanUpMail, controversial, documentReceived, expense, incomingMessages, invoice, itemReceived, loginAlert, mailReceived, password, payment, payroll, personalizedOffer, quarantine, remoteWork, reviewMessage, securityUpdate, serviceSuspended, signatureRequired, upgradeMailboxStorage, verifyMailbox, voicemail, advertisement, employeeEngagement, unknownFutureValue.
    *
    * @return PayloadTheme|null The theme
    */
    public function getTheme()
    {
        if (array_key_exists("theme", $this->_propDict)) {
            if (is_a($this->_propDict["theme"], "\Beta\Microsoft\Graph\Model\PayloadTheme") || is_null($this->_propDict["theme"])) {
                return $this->_propDict["theme"];
            } else {
                $this->_propDict["theme"] = new PayloadTheme($this->_propDict["theme"]);
                return $this->_propDict["theme"];
            }
        }
        return null;
    }

    /**
    * Sets the theme
    * The theme of a payload. Possible values are: unknown, other, accountActivation, accountVerification, billing, cleanUpMail, controversial, documentReceived, expense, incomingMessages, invoice, itemReceived, loginAlert, mailReceived, password, payment, payroll, personalizedOffer, quarantine, remoteWork, reviewMessage, securityUpdate, serviceSuspended, signatureRequired, upgradeMailboxStorage, verifyMailbox, voicemail, advertisement, employeeEngagement, unknownFutureValue.
    *
    * @param PayloadTheme $val The theme
    *
    * @return Payload
    */
    public function setTheme($val)
    {
        $this->_propDict["theme"] = $val;
        return $this;
    }

}
