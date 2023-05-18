<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttachmentContentProperties File
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
* AttachmentContentProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttachmentContentProperties extends ContentProperties
{

    /**
    * Gets the currentLabel
    *
    * @return CurrentLabel|null The currentLabel
    */
    public function getCurrentLabel()
    {
        if (array_key_exists("currentLabel", $this->_propDict)) {
            if (is_a($this->_propDict["currentLabel"], "\Beta\Microsoft\Graph\Model\CurrentLabel") || is_null($this->_propDict["currentLabel"])) {
                return $this->_propDict["currentLabel"];
            } else {
                $this->_propDict["currentLabel"] = new CurrentLabel($this->_propDict["currentLabel"]);
                return $this->_propDict["currentLabel"];
            }
        }
        return null;
    }

    /**
    * Sets the currentLabel
    *
    * @param CurrentLabel $val The value to assign to the currentLabel
    *
    * @return AttachmentContentProperties The AttachmentContentProperties
    */
    public function setCurrentLabel($val)
    {
        $this->_propDict["currentLabel"] = $val;
         return $this;
    }
}
