<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Edge File
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
* Edge class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Edge extends Entity
{
    /**
    * Gets the internetExplorerMode
    * A container for Internet Explorer mode resources.
    *
    * @return InternetExplorerMode|null The internetExplorerMode
    */
    public function getInternetExplorerMode()
    {
        if (array_key_exists("internetExplorerMode", $this->_propDict)) {
            if (is_a($this->_propDict["internetExplorerMode"], "\Beta\Microsoft\Graph\Model\InternetExplorerMode") || is_null($this->_propDict["internetExplorerMode"])) {
                return $this->_propDict["internetExplorerMode"];
            } else {
                $this->_propDict["internetExplorerMode"] = new InternetExplorerMode($this->_propDict["internetExplorerMode"]);
                return $this->_propDict["internetExplorerMode"];
            }
        }
        return null;
    }

    /**
    * Sets the internetExplorerMode
    * A container for Internet Explorer mode resources.
    *
    * @param InternetExplorerMode $val The internetExplorerMode
    *
    * @return Edge
    */
    public function setInternetExplorerMode($val)
    {
        $this->_propDict["internetExplorerMode"] = $val;
        return $this;
    }

}
