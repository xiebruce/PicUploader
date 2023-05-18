<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IntelligenceProfile File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* IntelligenceProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IntelligenceProfile extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the aliases
    * A list of commonly-known aliases for the threat intelligence included in the intelligenceProfile.
    *
    * @return array|null The aliases
    */
    public function getAliases()
    {
        if (array_key_exists("aliases", $this->_propDict)) {
            return $this->_propDict["aliases"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aliases
    * A list of commonly-known aliases for the threat intelligence included in the intelligenceProfile.
    *
    * @param string[] $val The aliases
    *
    * @return IntelligenceProfile
    */
    public function setAliases($val)
    {
        $this->_propDict["aliases"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * A synopsis of the threat actor. This property places the threat actor in wider context, tracing its discovery, history, significant campaigns, targeting, techniques of note, affiliations with governments, law enforcement countermeasures, and any areas of dispute among the security community regarding attribution.
    *
    * @return FormattedContent|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            if (is_a($this->_propDict["description"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FormattedContent") || is_null($this->_propDict["description"])) {
                return $this->_propDict["description"];
            } else {
                $this->_propDict["description"] = new FormattedContent($this->_propDict["description"]);
                return $this->_propDict["description"];
            }
        }
        return null;
    }

    /**
    * Sets the description
    * A synopsis of the threat actor. This property places the threat actor in wider context, tracing its discovery, history, significant campaigns, targeting, techniques of note, affiliations with governments, law enforcement countermeasures, and any areas of dispute among the security community regarding attribution.
    *
    * @param FormattedContent $val The description
    *
    * @return IntelligenceProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the firstActiveDateTime
    * The date and time when this intelligenceProfile was first active.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The firstActiveDateTime
    */
    public function getFirstActiveDateTime()
    {
        if (array_key_exists("firstActiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstActiveDateTime"], "\DateTime") || is_null($this->_propDict["firstActiveDateTime"])) {
                return $this->_propDict["firstActiveDateTime"];
            } else {
                $this->_propDict["firstActiveDateTime"] = new \DateTime($this->_propDict["firstActiveDateTime"]);
                return $this->_propDict["firstActiveDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstActiveDateTime
    * The date and time when this intelligenceProfile was first active.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The firstActiveDateTime
    *
    * @return IntelligenceProfile
    */
    public function setFirstActiveDateTime($val)
    {
        $this->_propDict["firstActiveDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the kind
    * A categorization of the type of this intelligenceProfile. The possible values are: actor, tool, unknownFutureValue.
    *
    * @return IntelligenceProfileKind|null The kind
    */
    public function getKind()
    {
        if (array_key_exists("kind", $this->_propDict)) {
            if (is_a($this->_propDict["kind"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\IntelligenceProfileKind") || is_null($this->_propDict["kind"])) {
                return $this->_propDict["kind"];
            } else {
                $this->_propDict["kind"] = new IntelligenceProfileKind($this->_propDict["kind"]);
                return $this->_propDict["kind"];
            }
        }
        return null;
    }

    /**
    * Sets the kind
    * A categorization of the type of this intelligenceProfile. The possible values are: actor, tool, unknownFutureValue.
    *
    * @param IntelligenceProfileKind $val The kind
    *
    * @return IntelligenceProfile
    */
    public function setKind($val)
    {
        $this->_propDict["kind"] = $val;
        return $this;
    }


     /**
     * Gets the sponsorStates
    * Known states (such as a country or government) who have sponsored threat actors associated with this intelligenceProfile. This is also known as the country/region of origin for the given actor or threat.
     *
     * @return array|null The sponsorStates
     */
    public function getSponsorStates()
    {
        if (array_key_exists("sponsorStates", $this->_propDict)) {
           return $this->_propDict["sponsorStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sponsorStates
    * Known states (such as a country or government) who have sponsored threat actors associated with this intelligenceProfile. This is also known as the country/region of origin for the given actor or threat.
    *
    * @param IntelligenceProfileSponsorState[] $val The sponsorStates
    *
    * @return IntelligenceProfile
    */
    public function setSponsorStates($val)
    {
        $this->_propDict["sponsorStates"] = $val;
        return $this;
    }

    /**
    * Gets the summary
    * A short summary of this intelligenceProfile.
    *
    * @return FormattedContent|null The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            if (is_a($this->_propDict["summary"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FormattedContent") || is_null($this->_propDict["summary"])) {
                return $this->_propDict["summary"];
            } else {
                $this->_propDict["summary"] = new FormattedContent($this->_propDict["summary"]);
                return $this->_propDict["summary"];
            }
        }
        return null;
    }

    /**
    * Sets the summary
    * A short summary of this intelligenceProfile.
    *
    * @param FormattedContent $val The summary
    *
    * @return IntelligenceProfile
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }

    /**
    * Gets the targets
    * Known targets related to this intelligenceProfile.
    *
    * @return array|null The targets
    */
    public function getTargets()
    {
        if (array_key_exists("targets", $this->_propDict)) {
            return $this->_propDict["targets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targets
    * Known targets related to this intelligenceProfile.
    *
    * @param string[] $val The targets
    *
    * @return IntelligenceProfile
    */
    public function setTargets($val)
    {
        $this->_propDict["targets"] = $val;
        return $this;
    }

    /**
    * Gets the title
    * The title of this intelligenceProfile.
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
    * The title of this intelligenceProfile.
    *
    * @param string $val The title
    *
    * @return IntelligenceProfile
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

    /**
    * Gets the tradecraft
    * Formatted information featuring a description of the distinctive tactics, techniques, and procedures (TTP) of the group, followed by a list of all known custom, commodity, and publicly available implants used by the group.
    *
    * @return FormattedContent|null The tradecraft
    */
    public function getTradecraft()
    {
        if (array_key_exists("tradecraft", $this->_propDict)) {
            if (is_a($this->_propDict["tradecraft"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FormattedContent") || is_null($this->_propDict["tradecraft"])) {
                return $this->_propDict["tradecraft"];
            } else {
                $this->_propDict["tradecraft"] = new FormattedContent($this->_propDict["tradecraft"]);
                return $this->_propDict["tradecraft"];
            }
        }
        return null;
    }

    /**
    * Sets the tradecraft
    * Formatted information featuring a description of the distinctive tactics, techniques, and procedures (TTP) of the group, followed by a list of all known custom, commodity, and publicly available implants used by the group.
    *
    * @param FormattedContent $val The tradecraft
    *
    * @return IntelligenceProfile
    */
    public function setTradecraft($val)
    {
        $this->_propDict["tradecraft"] = $val;
        return $this;
    }


     /**
     * Gets the indicators
    * Includes an assemblage of high-fidelity network indicators of compromise.
     *
     * @return array|null The indicators
     */
    public function getIndicators()
    {
        if (array_key_exists("indicators", $this->_propDict)) {
           return $this->_propDict["indicators"];
        } else {
            return null;
        }
    }

    /**
    * Sets the indicators
    * Includes an assemblage of high-fidelity network indicators of compromise.
    *
    * @param IntelligenceProfileIndicator[] $val The indicators
    *
    * @return IntelligenceProfile
    */
    public function setIndicators($val)
    {
        $this->_propDict["indicators"] = $val;
        return $this;
    }

}
