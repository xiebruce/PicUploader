<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContainerFilter File
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
* ContainerFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContainerFilter extends Entity
{
    /**
    * Gets the includedContainers
    *
    * @return string|null The includedContainers
    */
    public function getIncludedContainers()
    {
        if (array_key_exists("includedContainers", $this->_propDict)) {
            return $this->_propDict["includedContainers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includedContainers
    *
    * @param string $val The value of the includedContainers
    *
    * @return ContainerFilter
    */
    public function setIncludedContainers($val)
    {
        $this->_propDict["includedContainers"] = $val;
        return $this;
    }
}
