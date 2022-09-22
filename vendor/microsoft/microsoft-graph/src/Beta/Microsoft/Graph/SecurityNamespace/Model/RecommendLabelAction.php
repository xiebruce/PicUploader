<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendLabelAction File
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
* RecommendLabelAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendLabelAction extends InformationProtectionAction
{

    /**
    * Gets the actions
    * Actions to take if the label is accepted by the user.
    *
    * @return InformationProtectionAction|null The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            if (is_a($this->_propDict["actions"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\InformationProtectionAction") || is_null($this->_propDict["actions"])) {
                return $this->_propDict["actions"];
            } else {
                $this->_propDict["actions"] = new InformationProtectionAction($this->_propDict["actions"]);
                return $this->_propDict["actions"];
            }
        }
        return null;
    }

    /**
    * Sets the actions
    * Actions to take if the label is accepted by the user.
    *
    * @param InformationProtectionAction $val The value to assign to the actions
    *
    * @return RecommendLabelAction The RecommendLabelAction
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
         return $this;
    }

    /**
    * Gets the actionSource
    * Specifies why the label was selected. Possible values are: manual, automatic, recommended, default.
    *
    * @return ActionSource|null The actionSource
    */
    public function getActionSource()
    {
        if (array_key_exists("actionSource", $this->_propDict)) {
            if (is_a($this->_propDict["actionSource"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ActionSource") || is_null($this->_propDict["actionSource"])) {
                return $this->_propDict["actionSource"];
            } else {
                $this->_propDict["actionSource"] = new ActionSource($this->_propDict["actionSource"]);
                return $this->_propDict["actionSource"];
            }
        }
        return null;
    }

    /**
    * Sets the actionSource
    * Specifies why the label was selected. Possible values are: manual, automatic, recommended, default.
    *
    * @param ActionSource $val The value to assign to the actionSource
    *
    * @return RecommendLabelAction The RecommendLabelAction
    */
    public function setActionSource($val)
    {
        $this->_propDict["actionSource"] = $val;
         return $this;
    }
    /**
    * Gets the responsibleSensitiveTypeIds
    * The sensitive information type GUIDs that caused the recommendation to be given.
    *
    * @return string|null The responsibleSensitiveTypeIds
    */
    public function getResponsibleSensitiveTypeIds()
    {
        if (array_key_exists("responsibleSensitiveTypeIds", $this->_propDict)) {
            return $this->_propDict["responsibleSensitiveTypeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the responsibleSensitiveTypeIds
    * The sensitive information type GUIDs that caused the recommendation to be given.
    *
    * @param string $val The value of the responsibleSensitiveTypeIds
    *
    * @return RecommendLabelAction
    */
    public function setResponsibleSensitiveTypeIds($val)
    {
        $this->_propDict["responsibleSensitiveTypeIds"] = $val;
        return $this;
    }
    /**
    * Gets the sensitivityLabelId
    *
    * @return string|null The sensitivityLabelId
    */
    public function getSensitivityLabelId()
    {
        if (array_key_exists("sensitivityLabelId", $this->_propDict)) {
            return $this->_propDict["sensitivityLabelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitivityLabelId
    *
    * @param string $val The value of the sensitivityLabelId
    *
    * @return RecommendLabelAction
    */
    public function setSensitivityLabelId($val)
    {
        $this->_propDict["sensitivityLabelId"] = $val;
        return $this;
    }
}
