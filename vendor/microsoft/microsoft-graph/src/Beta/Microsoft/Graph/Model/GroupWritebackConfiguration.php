<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupWritebackConfiguration File
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
* GroupWritebackConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupWritebackConfiguration extends WritebackConfiguration
{
    /**
    * Gets the onPremisesGroupType
    *
    * @return string|null The onPremisesGroupType
    */
    public function getOnPremisesGroupType()
    {
        if (array_key_exists("onPremisesGroupType", $this->_propDict)) {
            return $this->_propDict["onPremisesGroupType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesGroupType
    *
    * @param string $val The value of the onPremisesGroupType
    *
    * @return GroupWritebackConfiguration
    */
    public function setOnPremisesGroupType($val)
    {
        $this->_propDict["onPremisesGroupType"] = $val;
        return $this;
    }
}
