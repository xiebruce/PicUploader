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
namespace Beta\Microsoft\Graph\Model;

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
    * Description of the attribute set. Can be up to 128 characters long and include Unicode characters. Can be changed later.
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
    * Description of the attribute set. Can be up to 128 characters long and include Unicode characters. Can be changed later.
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
    * Maximum number of custom security attributes that can be defined in this attribute set. Default value is null. If not specified, the administrator can add up to the maximum of 500 active attributes per tenant. Can be changed later.
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
    * Maximum number of custom security attributes that can be defined in this attribute set. Default value is null. If not specified, the administrator can add up to the maximum of 500 active attributes per tenant. Can be changed later.
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
