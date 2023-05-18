<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataRunEntityCountMetric File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;
/**
* IndustryDataRunEntityCountMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataRunEntityCountMetric extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the active
    * The count of entries for the entity marked as Active.
    *
    * @return int|null The active
    */
    public function getActive()
    {
        if (array_key_exists("active", $this->_propDict)) {
            return $this->_propDict["active"];
        } else {
            return null;
        }
    }

    /**
    * Sets the active
    * The count of entries for the entity marked as Active.
    *
    * @param int $val The value of the active
    *
    * @return IndustryDataRunEntityCountMetric
    */
    public function setActive($val)
    {
        $this->_propDict["active"] = $val;
        return $this;
    }
    /**
    * Gets the inactive
    * The count of entries for the entity marked as Inactive.
    *
    * @return int|null The inactive
    */
    public function getInactive()
    {
        if (array_key_exists("inactive", $this->_propDict)) {
            return $this->_propDict["inactive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactive
    * The count of entries for the entity marked as Inactive.
    *
    * @param int $val The value of the inactive
    *
    * @return IndustryDataRunEntityCountMetric
    */
    public function setInactive($val)
    {
        $this->_propDict["inactive"] = $val;
        return $this;
    }
    /**
    * Gets the total
    * Total count of the entity.
    *
    * @return int|null The total
    */
    public function getTotal()
    {
        if (array_key_exists("total", $this->_propDict)) {
            return $this->_propDict["total"];
        } else {
            return null;
        }
    }

    /**
    * Sets the total
    * Total count of the entity.
    *
    * @param int $val The value of the total
    *
    * @return IndustryDataRunEntityCountMetric
    */
    public function setTotal($val)
    {
        $this->_propDict["total"] = $val;
        return $this;
    }
}
