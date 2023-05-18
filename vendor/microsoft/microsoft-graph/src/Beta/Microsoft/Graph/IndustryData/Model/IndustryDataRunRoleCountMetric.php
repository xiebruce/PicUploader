<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataRunRoleCountMetric File
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
* IndustryDataRunRoleCountMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataRunRoleCountMetric extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the count
    * The number of people in this role.
    *
    * @return int|null The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    * The number of people in this role.
    *
    * @param int $val The value of the count
    *
    * @return IndustryDataRunRoleCountMetric
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = $val;
        return $this;
    }
    /**
    * Gets the role
    * The role that is being measured.
    *
    * @return string|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            return $this->_propDict["role"];
        } else {
            return null;
        }
    }

    /**
    * Sets the role
    * The role that is being measured.
    *
    * @param string $val The value of the role
    *
    * @return IndustryDataRunRoleCountMetric
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
}
