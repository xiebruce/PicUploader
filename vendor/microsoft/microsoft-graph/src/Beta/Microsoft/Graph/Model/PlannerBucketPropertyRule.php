<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerBucketPropertyRule File
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
* PlannerBucketPropertyRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerBucketPropertyRule extends PlannerPropertyRule
{
    /**
    * Gets the order
    *
    * @return string|null The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            return $this->_propDict["order"];
        } else {
            return null;
        }
    }

    /**
    * Sets the order
    *
    * @param string $val The value of the order
    *
    * @return PlannerBucketPropertyRule
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }
    /**
    * Gets the title
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    *
    * @param string $val The value of the title
    *
    * @return PlannerBucketPropertyRule
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
