<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingQuestionAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* BookingQuestionAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingQuestionAssignment extends Entity
{
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
    * @return BookingQuestionAssignment
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = $val;
        return $this;
    }
    /**
    * Gets the questionId
    * If it is mandatory to answer the custom question.
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
    * If it is mandatory to answer the custom question.
    *
    * @param string $val The value of the questionId
    *
    * @return BookingQuestionAssignment
    */
    public function setQuestionId($val)
    {
        $this->_propDict["questionId"] = $val;
        return $this;
    }
}
