<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FeatureTarget File
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
* FeatureTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FeatureTarget extends Entity
{
    /**
    * Gets the id
    * The ID of the entity that's targeted in the include or exclude rule, or all_users to target all users.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The ID of the entity that's targeted in the include or exclude rule, or all_users to target all users.
    *
    * @param string $val The value of the id
    *
    * @return FeatureTarget
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the targetType
    * The kind of entity that's targeted. The possible values are: group, administrativeUnit, role, unknownFutureValue.
    *
    * @return FeatureTargetType|null The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "\Microsoft\Graph\Model\FeatureTargetType") || is_null($this->_propDict["targetType"])) {
                return $this->_propDict["targetType"];
            } else {
                $this->_propDict["targetType"] = new FeatureTargetType($this->_propDict["targetType"]);
                return $this->_propDict["targetType"];
            }
        }
        return null;
    }

    /**
    * Sets the targetType
    * The kind of entity that's targeted. The possible values are: group, administrativeUnit, role, unknownFutureValue.
    *
    * @param FeatureTargetType $val The value to assign to the targetType
    *
    * @return FeatureTarget The FeatureTarget
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
         return $this;
    }
}
