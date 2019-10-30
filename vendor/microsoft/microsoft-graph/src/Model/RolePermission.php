<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RolePermission File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* RolePermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RolePermission extends Entity
{

    /**
    * Gets the resourceActions
    * Actions
    *
    * @return ResourceAction The resourceActions
    */
    public function getResourceActions()
    {
        if (array_key_exists("resourceActions", $this->_propDict)) {
            if (is_a($this->_propDict["resourceActions"], "Microsoft\Graph\Model\ResourceAction")) {
                return $this->_propDict["resourceActions"];
            } else {
                $this->_propDict["resourceActions"] = new ResourceAction($this->_propDict["resourceActions"]);
                return $this->_propDict["resourceActions"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceActions
    * Actions
    *
    * @param ResourceAction $val The value to assign to the resourceActions
    *
    * @return RolePermission The RolePermission
    */
    public function setResourceActions($val)
    {
        $this->_propDict["resourceActions"] = $val;
         return $this;
    }
}
