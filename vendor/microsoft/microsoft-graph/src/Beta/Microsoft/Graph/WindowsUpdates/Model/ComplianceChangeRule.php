<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceChangeRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* ComplianceChangeRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComplianceChangeRule extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the createdDateTime
    * The date and time when the rule was created.
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
    * The date and time when the rule was created.
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ComplianceChangeRule The ComplianceChangeRule
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastEvaluatedDateTime
    * The date and time when the rule was last evaluated.
    *
    * @return \DateTime|null The lastEvaluatedDateTime
    */
    public function getLastEvaluatedDateTime()
    {
        if (array_key_exists("lastEvaluatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastEvaluatedDateTime"], "\DateTime") || is_null($this->_propDict["lastEvaluatedDateTime"])) {
                return $this->_propDict["lastEvaluatedDateTime"];
            } else {
                $this->_propDict["lastEvaluatedDateTime"] = new \DateTime($this->_propDict["lastEvaluatedDateTime"]);
                return $this->_propDict["lastEvaluatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastEvaluatedDateTime
    * The date and time when the rule was last evaluated.
    *
    * @param \DateTime $val The value to assign to the lastEvaluatedDateTime
    *
    * @return ComplianceChangeRule The ComplianceChangeRule
    */
    public function setLastEvaluatedDateTime($val)
    {
        $this->_propDict["lastEvaluatedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the rule was last modified.
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
    * The date and time when the rule was last modified.
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return ComplianceChangeRule The ComplianceChangeRule
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
}
