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
namespace Microsoft\Graph\Model;

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
    * Gets the cases
    *
    * @return \Microsoft\Graph\SecurityNamespace\Model\CasesRoot|null The cases
    */
    public function getCases()
    {
        if (array_key_exists("cases", $this->_propDict)) {
            if (is_a($this->_propDict["cases"], "\Microsoft\Graph\SecurityNamespace\Model\CasesRoot") || is_null($this->_propDict["cases"])) {
                return $this->_propDict["cases"];
            } else {
                $this->_propDict["cases"] = new \Microsoft\Graph\SecurityNamespace\Model\CasesRoot($this->_propDict["cases"]);
                return $this->_propDict["cases"];
            }
        }
        return null;
    }

    /**
    * Sets the cases
    *
    * @param \Microsoft\Graph\SecurityNamespace\Model\CasesRoot $val The cases
    *
    * @return Security
    */
    public function setCases($val)
    {
        $this->_propDict["cases"] = $val;
        return $this;
    }


     /**
     * Gets the alerts
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

}
