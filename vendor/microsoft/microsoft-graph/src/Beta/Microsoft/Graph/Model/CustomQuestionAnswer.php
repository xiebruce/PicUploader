<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomQuestionAnswer File
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
* CustomQuestionAnswer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomQuestionAnswer extends Entity
{
    /**
    * Gets the displayName
    * Display name of the custom registration question. Read-only.
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
    * Display name of the custom registration question. Read-only.
    *
    * @param string $val The value of the displayName
    *
    * @return CustomQuestionAnswer
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the questionId
    * ID the custom registration question. Read-only.
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
    * ID the custom registration question. Read-only.
    *
    * @param string $val The value of the questionId
    *
    * @return CustomQuestionAnswer
    */
    public function setQuestionId($val)
    {
        $this->_propDict["questionId"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Answer to the custom registration question.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Answer to the custom registration question.
    *
    * @param string $val The value of the value
    *
    * @return CustomQuestionAnswer
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
