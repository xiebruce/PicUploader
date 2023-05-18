<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InternetExplorerMode File
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
* InternetExplorerMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InternetExplorerMode extends Entity
{

     /**
     * Gets the siteLists
    * A collection of site lists to support Internet Explorer mode.
     *
     * @return array|null The siteLists
     */
    public function getSiteLists()
    {
        if (array_key_exists("siteLists", $this->_propDict)) {
           return $this->_propDict["siteLists"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteLists
    * A collection of site lists to support Internet Explorer mode.
    *
    * @param BrowserSiteList[] $val The siteLists
    *
    * @return InternetExplorerMode
    */
    public function setSiteLists($val)
    {
        $this->_propDict["siteLists"] = $val;
        return $this;
    }

}
