<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingQuestionAnswer File
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
* BookingQuestionAnswer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingQuestionAnswer extends Entity
{
    /**
    * Gets the answer
    * The answer given by the user in case the answerInputType is text.
    *
    * @return string|null The answer
    */
    public function getAnswer()
    {
        if (array_key_exists("answer", $this->_propDict)) {
            return $this->_propDict["answer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the answer
    * The answer given by the user in case the answerInputType is text.
    *
    * @param string $val The value of the answer
    *
    * @return BookingQuestionAnswer
    */
    public function setAnswer($val)
    {
        $this->_propDict["answer"] = $val;
        return $this;
    }

    /**
    * Gets the answerInputType
    * The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
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
    * The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
    *
    * @param AnswerInputType $val The value to assign to the answerInputType
    *
    * @return BookingQuestionAnswer The BookingQuestionAnswer
    */
    public function setAnswerInputType($val)
    {
        $this->_propDict["answerInputType"] = $val;
         return $this;
    }
    /**
    * Gets the answerOptions
    * In case the answerInputType is radioButton, this will consists of a list of possible answer values.
    *
    * @return string|null The answerOptions
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
    * In case the answerInputType is radioButton, this will consists of a list of possible answer values.
    *
    * @param string $val The value of the answerOptions
    *
    * @return BookingQuestionAnswer
    */
    public function setAnswerOptions($val)
    {
        $this->_propDict["answerOptions"] = $val;
        return $this;
    }
    /**
    * Gets the isRequired
    * Indicates whether it is mandatory to answer the custom question.
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
    * Indicates whether it is mandatory to answer the custom question.
    *
    * @param bool $val The value of the isRequired
    *
    * @return BookingQuestionAnswer
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = $val;
        return $this;
    }
    /**
    * Gets the question
    * The question.
    *
    * @return string|null The question
    */
    public function getQuestion()
    {
        if (array_key_exists("question", $this->_propDict)) {
            return $this->_propDict["question"];
        } else {
            return null;
        }
    }

    /**
    * Sets the question
    * The question.
    *
    * @param string $val The value of the question
    *
    * @return BookingQuestionAnswer
    */
    public function setQuestion($val)
    {
        $this->_propDict["question"] = $val;
        return $this;
    }
    /**
    * Gets the questionId
    * The ID of the custom question.
    *
    * @return string|null The questionId
    */
    public function getQuestionId()
    {
        if (array_key_exists("questionId", $this->_propDict)) {
            return $this->_propDict["questionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the questionId
    * The ID of the custom question.
    *
    * @param string $val The value of the questionId
    *
    * @return BookingQuestionAnswer
    */
    public function setQuestionId($val)
    {
        $this->_propDict["questionId"] = $val;
        return $this;
    }
    /**
    * Gets the selectedOptions
    * The answers selected by the user.
    *
    * @return string|null The selectedOptions
    */
    public function getSelectedOptions()
    {
        if (array_key_exists("selectedOptions", $this->_propDict)) {
            return $this->_propDict["selectedOptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the selectedOptions
    * The answers selected by the user.
    *
    * @param string $val The value of the selectedOptions
    *
    * @return BookingQuestionAnswer
    */
    public function setSelectedOptions($val)
    {
        $this->_propDict["selectedOptions"] = $val;
        return $this;
    }
}
