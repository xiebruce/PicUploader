<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CvssSummary File
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
* CvssSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CvssSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the score
    * The CVSS score about this vulnerability.
    *
    * @return float|null The score
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
    * The CVSS score about this vulnerability.
    *
    * @param float $val The value of the score
    *
    * @return CvssSummary
    */
    public function setScore($val)
    {
        $this->_propDict["score"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * The CVSS severity rating for this vulnerability. The possible values are: none, low, medium, high, critical, unknownFutureValue.
    *
    * @return VulnerabilitySeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\VulnerabilitySeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new VulnerabilitySeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    * The CVSS severity rating for this vulnerability. The possible values are: none, low, medium, high, critical, unknownFutureValue.
    *
    * @param VulnerabilitySeverity $val The value to assign to the severity
    *
    * @return CvssSummary The CvssSummary
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
         return $this;
    }
    /**
    * Gets the vectorString
    * The CVSS vector string for this vulnerability.
    *
    * @return string|null The vectorString
    */
    public function getVectorString()
    {
        if (array_key_exists("vectorString", $this->_propDict)) {
            return $this->_propDict["vectorString"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vectorString
    * The CVSS vector string for this vulnerability.
    *
    * @param string $val The value of the vectorString
    *
    * @return CvssSummary
    */
    public function setVectorString($val)
    {
        $this->_propDict["vectorString"] = $val;
        return $this;
    }
}
