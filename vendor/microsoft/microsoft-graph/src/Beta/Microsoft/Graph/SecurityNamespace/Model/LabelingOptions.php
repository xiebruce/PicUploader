<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LabelingOptions File
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
* LabelingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LabelingOptions extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the assignmentMethod
    *
    * @return AssignmentMethod|null The assignmentMethod
    */
    public function getAssignmentMethod()
    {
        if (array_key_exists("assignmentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentMethod"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AssignmentMethod") || is_null($this->_propDict["assignmentMethod"])) {
                return $this->_propDict["assignmentMethod"];
            } else {
                $this->_propDict["assignmentMethod"] = new AssignmentMethod($this->_propDict["assignmentMethod"]);
                return $this->_propDict["assignmentMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentMethod
    *
    * @param AssignmentMethod $val The value to assign to the assignmentMethod
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setAssignmentMethod($val)
    {
        $this->_propDict["assignmentMethod"] = $val;
         return $this;
    }

    /**
    * Gets the downgradeJustification
    *
    * @return DowngradeJustification|null The downgradeJustification
    */
    public function getDowngradeJustification()
    {
        if (array_key_exists("downgradeJustification", $this->_propDict)) {
            if (is_a($this->_propDict["downgradeJustification"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DowngradeJustification") || is_null($this->_propDict["downgradeJustification"])) {
                return $this->_propDict["downgradeJustification"];
            } else {
                $this->_propDict["downgradeJustification"] = new DowngradeJustification($this->_propDict["downgradeJustification"]);
                return $this->_propDict["downgradeJustification"];
            }
        }
        return null;
    }

    /**
    * Sets the downgradeJustification
    *
    * @param DowngradeJustification $val The value to assign to the downgradeJustification
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setDowngradeJustification($val)
    {
        $this->_propDict["downgradeJustification"] = $val;
         return $this;
    }

    /**
    * Gets the extendedProperties
    *
    * @return KeyValuePair|null The extendedProperties
    */
    public function getExtendedProperties()
    {
        if (array_key_exists("extendedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["extendedProperties"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\KeyValuePair") || is_null($this->_propDict["extendedProperties"])) {
                return $this->_propDict["extendedProperties"];
            } else {
                $this->_propDict["extendedProperties"] = new KeyValuePair($this->_propDict["extendedProperties"]);
                return $this->_propDict["extendedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the extendedProperties
    *
    * @param KeyValuePair $val The value to assign to the extendedProperties
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setExtendedProperties($val)
    {
        $this->_propDict["extendedProperties"] = $val;
         return $this;
    }
    /**
    * Gets the labelId
    *
    * @return string|null The labelId
    */
    public function getLabelId()
    {
        if (array_key_exists("labelId", $this->_propDict)) {
            return $this->_propDict["labelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the labelId
    *
    * @param string $val The value of the labelId
    *
    * @return LabelingOptions
    */
    public function setLabelId($val)
    {
        $this->_propDict["labelId"] = $val;
        return $this;
    }
}
