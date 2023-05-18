<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostReputation File
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
* HostReputation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostReputation extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the classification
    * The calculated reputation of the host. The possible values are: unknown, neutral, suspicious, malicious, unknownFutureValue.
    *
    * @return HostReputationClassification|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\HostReputationClassification") || is_null($this->_propDict["classification"])) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new HostReputationClassification($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }

    /**
    * Sets the classification
    * The calculated reputation of the host. The possible values are: unknown, neutral, suspicious, malicious, unknownFutureValue.
    *
    * @param HostReputationClassification $val The classification
    *
    * @return HostReputation
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }


     /**
     * Gets the rules
    * A collection of rules that have been used to calculate the classification and score.
     *
     * @return array|null The rules
     */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
           return $this->_propDict["rules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rules
    * A collection of rules that have been used to calculate the classification and score.
    *
    * @param HostReputationRule[] $val The rules
    *
    * @return HostReputation
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
        return $this;
    }

    /**
    * Gets the score
    * The calculated score (0-100) of the requested host. A higher value indicates that this host is more likely to be suspicious or malicious.
    *
    * @return int|null The score
    */
    public function getScore()
    {
        if (array_key_exists("score", $this->_propDict)) {
            return $this->_propDict["score"];
        } else {
            return null;
        }
    }

    /**
    * Sets the score
    * The calculated score (0-100) of the requested host. A higher value indicates that this host is more likely to be suspicious or malicious.
    *
    * @param int $val The score
    *
    * @return HostReputation
    */
    public function setScore($val)
    {
        $this->_propDict["score"] = intval($val);
        return $this;
    }

}
