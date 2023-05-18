<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementPriorityMetaData File
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
* DeviceManagementPriorityMetaData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementPriorityMetaData extends Entity
{
    /**
    * Gets the priority
    * Priority of the policy. Valid values 1 to 500
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * Priority of the policy. Valid values 1 to 500
    *
    * @param int $val The value of the priority
    *
    * @return DeviceManagementPriorityMetaData
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
}
