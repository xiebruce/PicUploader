<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeSet File
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
* AttributeSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeSet extends Entity
{
    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return AttributeSet
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the maxAttributesPerSet
    *
    * @return int|null The maxAttributesPerSet
    */
    public function getMaxAttributesPerSet()
    {
        if (array_key_exists("maxAttributesPerSet", $this->_propDict)) {
            return $this->_propDict["maxAttributesPerSet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxAttributesPerSet
    *
    * @param int $val The maxAttributesPerSet
    *
    * @return AttributeSet
    */
    public function setMaxAttributesPerSet($val)
    {
        $this->_propDict["maxAttributesPerSet"] = intval($val);
        return $this;
    }

}
