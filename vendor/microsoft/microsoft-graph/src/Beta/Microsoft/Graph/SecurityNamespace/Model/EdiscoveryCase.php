<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryCase File
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
* EdiscoveryCase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryCase extends GraphCase
{
    /**
    * Gets the closedBy
    * The user who closed the case.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet|null The closedBy
    */
    public function getClosedBy()
    {
        if (array_key_exists("closedBy", $this->_propDict)) {
            if (is_a($this->_propDict["closedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["closedBy"])) {
                return $this->_propDict["closedBy"];
            } else {
                $this->_propDict["closedBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["closedBy"]);
                return $this->_propDict["closedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the closedBy
    * The user who closed the case.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The closedBy
    *
    * @return EdiscoveryCase
    */
    public function setClosedBy($val)
    {
        $this->_propDict["closedBy"] = $val;
        return $this;
    }

    /**
    * Gets the closedDateTime
    * The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime") || is_null($this->_propDict["closedDateTime"])) {
                return $this->_propDict["closedDateTime"];
            } else {
                $this->_propDict["closedDateTime"] = new \DateTime($this->_propDict["closedDateTime"]);
                return $this->_propDict["closedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the closedDateTime
    * The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return EdiscoveryCase
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    * The external case number for customer reference.
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * The external case number for customer reference.
    *
    * @param string $val The externalId
    *
    * @return EdiscoveryCase
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }


     /**
     * Gets the custodians
    * Returns a list of case ediscoveryCustodian objects for this case.
     *
     * @return array|null The custodians
     */
    public function getCustodians()
    {
        if (array_key_exists("custodians", $this->_propDict)) {
           return $this->_propDict["custodians"];
        } else {
            return null;
        }
    }

    /**
    * Sets the custodians
    * Returns a list of case ediscoveryCustodian objects for this case.
    *
    * @param EdiscoveryCustodian[] $val The custodians
    *
    * @return EdiscoveryCase
    */
    public function setCustodians($val)
    {
        $this->_propDict["custodians"] = $val;
        return $this;
    }


     /**
     * Gets the legalHolds
    * Returns a list of case eDiscoveryHoldPolicy objects for this case.
     *
     * @return array|null The legalHolds
     */
    public function getLegalHolds()
    {
        if (array_key_exists("legalHolds", $this->_propDict)) {
           return $this->_propDict["legalHolds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the legalHolds
    * Returns a list of case eDiscoveryHoldPolicy objects for this case.
    *
    * @param EdiscoveryHoldPolicy[] $val The legalHolds
    *
    * @return EdiscoveryCase
    */
    public function setLegalHolds($val)
    {
        $this->_propDict["legalHolds"] = $val;
        return $this;
    }


     /**
     * Gets the noncustodialDataSources
    * Returns a list of case ediscoveryNoncustodialDataSource objects for this case.
     *
     * @return array|null The noncustodialDataSources
     */
    public function getNoncustodialDataSources()
    {
        if (array_key_exists("noncustodialDataSources", $this->_propDict)) {
           return $this->_propDict["noncustodialDataSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the noncustodialDataSources
    * Returns a list of case ediscoveryNoncustodialDataSource objects for this case.
    *
    * @param EdiscoveryNoncustodialDataSource[] $val The noncustodialDataSources
    *
    * @return EdiscoveryCase
    */
    public function setNoncustodialDataSources($val)
    {
        $this->_propDict["noncustodialDataSources"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * Returns a list of case caseOperation objects for this case.
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    * Returns a list of case caseOperation objects for this case.
    *
    * @param CaseOperation[] $val The operations
    *
    * @return EdiscoveryCase
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the reviewSets
    * Returns a list of eDiscoveryReviewSet objects in the case.
     *
     * @return array|null The reviewSets
     */
    public function getReviewSets()
    {
        if (array_key_exists("reviewSets", $this->_propDict)) {
           return $this->_propDict["reviewSets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewSets
    * Returns a list of eDiscoveryReviewSet objects in the case.
    *
    * @param EdiscoveryReviewSet[] $val The reviewSets
    *
    * @return EdiscoveryCase
    */
    public function setReviewSets($val)
    {
        $this->_propDict["reviewSets"] = $val;
        return $this;
    }


     /**
     * Gets the searches
    * Returns a list of eDiscoverySearch objects associated with this case.
     *
     * @return array|null The searches
     */
    public function getSearches()
    {
        if (array_key_exists("searches", $this->_propDict)) {
           return $this->_propDict["searches"];
        } else {
            return null;
        }
    }

    /**
    * Sets the searches
    * Returns a list of eDiscoverySearch objects associated with this case.
    *
    * @param EdiscoverySearch[] $val The searches
    *
    * @return EdiscoveryCase
    */
    public function setSearches($val)
    {
        $this->_propDict["searches"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    * Returns a list of eDIscoverySettings objects in the case.
    *
    * @return EdiscoveryCaseSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryCaseSettings") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new EdiscoveryCaseSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    * Returns a list of eDIscoverySettings objects in the case.
    *
    * @param EdiscoveryCaseSettings $val The settings
    *
    * @return EdiscoveryCase
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }


     /**
     * Gets the tags
    * Returns a list of ediscoveryReviewTag objects associated to this case.
     *
     * @return array|null The tags
     */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
           return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    * Returns a list of ediscoveryReviewTag objects associated to this case.
    *
    * @param EdiscoveryReviewTag[] $val The tags
    *
    * @return EdiscoveryCase
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

}
