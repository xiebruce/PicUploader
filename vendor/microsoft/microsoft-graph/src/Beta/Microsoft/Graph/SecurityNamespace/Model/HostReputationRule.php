<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostReputationRule File
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
* HostReputationRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostReputationRule extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the description
    * The description of the rule that gives more context.
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
    * The description of the rule that gives more context.
    *
    * @param string $val The value of the description
    *
    * @return HostReputationRule
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The name of the rule.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The name of the rule.
    *
    * @param string $val The value of the name
    *
    * @return HostReputationRule
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the relatedDetailsUrl
    * Link to a web page with details related to this rule.
    *
    * @return string|null The relatedDetailsUrl
    */
    public function getRelatedDetailsUrl()
    {
        if (array_key_exists("relatedDetailsUrl", $this->_propDict)) {
            return $this->_propDict["relatedDetailsUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relatedDetailsUrl
    * Link to a web page with details related to this rule.
    *
    * @param string $val The value of the relatedDetailsUrl
    *
    * @return HostReputationRule
    */
    public function setRelatedDetailsUrl($val)
    {
        $this->_propDict["relatedDetailsUrl"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    * Indicates the severity that this rule has against the reputation score. The possible values are: unknown, low, medium, high, unknownFutureValue.
    *
    * @return HostReputationRuleSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\HostReputationRuleSeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new HostReputationRuleSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    * Indicates the severity that this rule has against the reputation score. The possible values are: unknown, low, medium, high, unknownFutureValue.
    *
    * @param HostReputationRuleSeverity $val The value to assign to the severity
    *
    * @return HostReputationRule The HostReputationRule
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
         return $this;
    }
}
