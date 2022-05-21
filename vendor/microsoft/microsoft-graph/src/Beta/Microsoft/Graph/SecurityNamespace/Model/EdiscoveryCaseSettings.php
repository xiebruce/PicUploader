<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryCaseSettings File
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
* EdiscoveryCaseSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryCaseSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the ocr
    *
    * @return OcrSettings|null The ocr
    */
    public function getOcr()
    {
        if (array_key_exists("ocr", $this->_propDict)) {
            if (is_a($this->_propDict["ocr"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\OcrSettings") || is_null($this->_propDict["ocr"])) {
                return $this->_propDict["ocr"];
            } else {
                $this->_propDict["ocr"] = new OcrSettings($this->_propDict["ocr"]);
                return $this->_propDict["ocr"];
            }
        }
        return null;
    }

    /**
    * Sets the ocr
    *
    * @param OcrSettings $val The ocr
    *
    * @return EdiscoveryCaseSettings
    */
    public function setOcr($val)
    {
        $this->_propDict["ocr"] = $val;
        return $this;
    }

    /**
    * Gets the redundancyDetection
    *
    * @return RedundancyDetectionSettings|null The redundancyDetection
    */
    public function getRedundancyDetection()
    {
        if (array_key_exists("redundancyDetection", $this->_propDict)) {
            if (is_a($this->_propDict["redundancyDetection"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RedundancyDetectionSettings") || is_null($this->_propDict["redundancyDetection"])) {
                return $this->_propDict["redundancyDetection"];
            } else {
                $this->_propDict["redundancyDetection"] = new RedundancyDetectionSettings($this->_propDict["redundancyDetection"]);
                return $this->_propDict["redundancyDetection"];
            }
        }
        return null;
    }

    /**
    * Sets the redundancyDetection
    *
    * @param RedundancyDetectionSettings $val The redundancyDetection
    *
    * @return EdiscoveryCaseSettings
    */
    public function setRedundancyDetection($val)
    {
        $this->_propDict["redundancyDetection"] = $val;
        return $this;
    }

    /**
    * Gets the topicModeling
    *
    * @return TopicModelingSettings|null The topicModeling
    */
    public function getTopicModeling()
    {
        if (array_key_exists("topicModeling", $this->_propDict)) {
            if (is_a($this->_propDict["topicModeling"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\TopicModelingSettings") || is_null($this->_propDict["topicModeling"])) {
                return $this->_propDict["topicModeling"];
            } else {
                $this->_propDict["topicModeling"] = new TopicModelingSettings($this->_propDict["topicModeling"]);
                return $this->_propDict["topicModeling"];
            }
        }
        return null;
    }

    /**
    * Sets the topicModeling
    *
    * @param TopicModelingSettings $val The topicModeling
    *
    * @return EdiscoveryCaseSettings
    */
    public function setTopicModeling($val)
    {
        $this->_propDict["topicModeling"] = $val;
        return $this;
    }

}
