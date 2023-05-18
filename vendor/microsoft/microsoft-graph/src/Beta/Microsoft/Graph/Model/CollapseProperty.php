<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CollapseProperty File
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
* CollapseProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CollapseProperty extends Entity
{
    /**
    * Gets the fields
    * Defines the collapse group to trim results. The properties in this collection must be sortable/refinable properties. Required.
    *
    * @return string|null The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            return $this->_propDict["fields"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fields
    * Defines the collapse group to trim results. The properties in this collection must be sortable/refinable properties. Required.
    *
    * @param string $val The value of the fields
    *
    * @return CollapseProperty
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
        return $this;
    }
    /**
    * Gets the limit
    * Defines a maximum limit count for this field. This numeric value must be a positive integer. Required.
    *
    * @return int|null The limit
    */
    public function getLimit()
    {
        if (array_key_exists("limit", $this->_propDict)) {
            return $this->_propDict["limit"];
        } else {
            return null;
        }
    }

    /**
    * Sets the limit
    * Defines a maximum limit count for this field. This numeric value must be a positive integer. Required.
    *
    * @param int $val The value of the limit
    *
    * @return CollapseProperty
    */
    public function setLimit($val)
    {
        $this->_propDict["limit"] = $val;
        return $this;
    }
}
