<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertComment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* AlertComment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertComment extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the comment
    * The comment text.
    *
    * @return string|null The comment
    */
    public function getComment()
    {
        if (array_key_exists("comment", $this->_propDict)) {
            return $this->_propDict["comment"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comment
    * The comment text.
    *
    * @param string $val The value of the comment
    *
    * @return AlertComment
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
        return $this;
    }
    /**
    * Gets the createdByDisplayName
    * The person or app name that submitted the comment.
    *
    * @return string|null The createdByDisplayName
    */
    public function getCreatedByDisplayName()
    {
        if (array_key_exists("createdByDisplayName", $this->_propDict)) {
            return $this->_propDict["createdByDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdByDisplayName
    * The person or app name that submitted the comment.
    *
    * @param string $val The value of the createdByDisplayName
    *
    * @return AlertComment
    */
    public function setCreatedByDisplayName($val)
    {
        $this->_propDict["createdByDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The time when the comment was submitted.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The time when the comment was submitted.
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return AlertComment The AlertComment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }
}
