<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingCustomQuestion File
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
* BookingCustomQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingCustomQuestion extends Entity
{
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
    * @param AnswerInputType $val The answerInputType
    *
    * @return BookingCustomQuestion
    */
    public function setAnswerInputType($val)
    {
        $this->_propDict["answerInputType"] = $val;
        return $this;
    }

    /**
    * Gets the answerOptions
    * List of possible answer values.
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
    * List of possible answer values.
    *
    * @param string[] $val The answerOptions
    *
    * @return BookingCustomQuestion
    */
    public function setAnswerOptions($val)
    {
        $this->_propDict["answerOptions"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name is suitable for human-readable interfaces.
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
    * The display name is suitable for human-readable interfaces.
    *
    * @param string $val The displayName
    *
    * @return BookingCustomQuestion
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

}
