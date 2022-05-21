<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChecklistItem File
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
* ChecklistItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChecklistItem extends Entity
{
    /**
    * Gets the checkedDateTime
    * The date and time when the checklistItem was finished.
    *
    * @return \DateTime|null The checkedDateTime
    */
    public function getCheckedDateTime()
    {
        if (array_key_exists("checkedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["checkedDateTime"], "\DateTime") || is_null($this->_propDict["checkedDateTime"])) {
                return $this->_propDict["checkedDateTime"];
            } else {
                $this->_propDict["checkedDateTime"] = new \DateTime($this->_propDict["checkedDateTime"]);
                return $this->_propDict["checkedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the checkedDateTime
    * The date and time when the checklistItem was finished.
    *
    * @param \DateTime $val The checkedDateTime
    *
    * @return ChecklistItem
    */
    public function setCheckedDateTime($val)
    {
        $this->_propDict["checkedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the checklistItem was created.
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
    * The date and time when the checklistItem was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ChecklistItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Field indicating the title of checklistItem.
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
    * Field indicating the title of checklistItem.
    *
    * @param string $val The displayName
    *
    * @return ChecklistItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isChecked
    * State indicating whether the item is checked off or not.
    *
    * @return bool|null The isChecked
    */
    public function getIsChecked()
    {
        if (array_key_exists("isChecked", $this->_propDict)) {
            return $this->_propDict["isChecked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isChecked
    * State indicating whether the item is checked off or not.
    *
    * @param bool $val The isChecked
    *
    * @return ChecklistItem
    */
    public function setIsChecked($val)
    {
        $this->_propDict["isChecked"] = boolval($val);
        return $this;
    }

}
