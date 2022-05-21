<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TaskViewpoint File
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
* TaskViewpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TaskViewpoint extends Entity
{
    /**
    * Gets the categories
    * The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
    *
    * @return string|null The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categories
    * The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
    *
    * @param string $val The value of the categories
    *
    * @return TaskViewpoint
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }

    /**
    * Gets the reminderDateTime
    * The date and time for a reminder alert of the task to occur.
    *
    * @return DateTimeTimeZone|null The reminderDateTime
    */
    public function getReminderDateTime()
    {
        if (array_key_exists("reminderDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reminderDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["reminderDateTime"])) {
                return $this->_propDict["reminderDateTime"];
            } else {
                $this->_propDict["reminderDateTime"] = new DateTimeTimeZone($this->_propDict["reminderDateTime"]);
                return $this->_propDict["reminderDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reminderDateTime
    * The date and time for a reminder alert of the task to occur.
    *
    * @param DateTimeTimeZone $val The value to assign to the reminderDateTime
    *
    * @return TaskViewpoint The TaskViewpoint
    */
    public function setReminderDateTime($val)
    {
        $this->_propDict["reminderDateTime"] = $val;
         return $this;
    }
}
