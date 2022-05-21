<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtractSensitivityLabelsResult File
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
* ExtractSensitivityLabelsResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExtractSensitivityLabelsResult extends Entity
{

    /**
    * Gets the labels
    * List of sensitivity labels assigned to a file.
    *
    * @return SensitivityLabelAssignment|null The labels
    */
    public function getLabels()
    {
        if (array_key_exists("labels", $this->_propDict)) {
            if (is_a($this->_propDict["labels"], "\Beta\Microsoft\Graph\Model\SensitivityLabelAssignment") || is_null($this->_propDict["labels"])) {
                return $this->_propDict["labels"];
            } else {
                $this->_propDict["labels"] = new SensitivityLabelAssignment($this->_propDict["labels"]);
                return $this->_propDict["labels"];
            }
        }
        return null;
    }

    /**
    * Sets the labels
    * List of sensitivity labels assigned to a file.
    *
    * @param SensitivityLabelAssignment $val The value to assign to the labels
    *
    * @return ExtractSensitivityLabelsResult The ExtractSensitivityLabelsResult
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
         return $this;
    }
}
