<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingRegistrationQuestion File
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
* MeetingRegistrationQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingRegistrationQuestion extends Entity
{
    /**
    * Gets the answerInputType
    * Answer input type of the custom registration question.
    *
    * @return AnswerInputType|null The answerInputType
    */
    public function getAnswerInputType()
    {
        if (array_key_exists("answerInputType", $this->_propDict)) {
            if (is_a($this->_propDict["answerInputType"], "\Beta\Microsoft\Graph\Model\AnswerInputType") || is_null($this->_propDict["answerInputType"])) {
                return $this->_propDict["answerInputType"];
            } else {
                $this->_propDict["answerInputType"] = new AnswerInputType($this->_propDict["answerInputType"]);
                return $this->_propDict["answerInputType"];
            }
        }
        return null;
    }

    /**
    * Sets the answerInputType
    * Answer input type of the custom registration question.
    *
    * @param AnswerInputType $val The answerInputType
    *
    * @return MeetingRegistrationQuestion
    */
    public function setAnswerInputType($val)
    {
        $this->_propDict["answerInputType"] = $val;
        return $this;
    }

    /**
    * Gets the answerOptions
    * Answer options when answerInputType is radioButton.
    *
    * @return array|null The answerOptions
    */
    public function getAnswerOptions()
    {
        if (array_key_exists("answerOptions", $this->_propDict)) {
            return $this->_propDict["answerOptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the answerOptions
    * Answer options when answerInputType is radioButton.
    *
    * @param string[] $val The answerOptions
    *
    * @return MeetingRegistrationQuestion
    */
    public function setAnswerOptions($val)
    {
        $this->_propDict["answerOptions"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the custom registration question.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name of the custom registration question.
    *
    * @param string $val The displayName
    *
    * @return MeetingRegistrationQuestion
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isRequired
    * Indicates whether the question is required. Default value is false.
    *
    * @return bool|null The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    * Indicates whether the question is required. Default value is false.
    *
    * @param bool $val The isRequired
    *
    * @return MeetingRegistrationQuestion
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = boolval($val);
        return $this;
    }

}
