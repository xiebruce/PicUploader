<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtection File
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
* InformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtection extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the labelPolicySettings
    *
    * @return InformationProtectionPolicySetting|null The labelPolicySettings
    */
    public function getLabelPolicySettings()
    {
        if (array_key_exists("labelPolicySettings", $this->_propDict)) {
            if (is_a($this->_propDict["labelPolicySettings"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\InformationProtectionPolicySetting") || is_null($this->_propDict["labelPolicySettings"])) {
                return $this->_propDict["labelPolicySettings"];
            } else {
                $this->_propDict["labelPolicySettings"] = new InformationProtectionPolicySetting($this->_propDict["labelPolicySettings"]);
                return $this->_propDict["labelPolicySettings"];
            }
        }
        return null;
    }

    /**
    * Sets the labelPolicySettings
    *
    * @param InformationProtectionPolicySetting $val The labelPolicySettings
    *
    * @return InformationProtection
    */
    public function setLabelPolicySettings($val)
    {
        $this->_propDict["labelPolicySettings"] = $val;
        return $this;
    }


     /**
     * Gets the sensitivityLabels
     *
     * @return array|null The sensitivityLabels
     */
    public function getSensitivityLabels()
    {
        if (array_key_exists("sensitivityLabels", $this->_propDict)) {
           return $this->_propDict["sensitivityLabels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitivityLabels
    *
    * @param SensitivityLabel[] $val The sensitivityLabels
    *
    * @return InformationProtection
    */
    public function setSensitivityLabels($val)
    {
        $this->_propDict["sensitivityLabels"] = $val;
        return $this;
    }

}
