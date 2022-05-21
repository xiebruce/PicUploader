<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterShareViewpoint File
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
* PrinterShareViewpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterShareViewpoint extends Entity
{

    /**
    * Gets the lastUsedDateTime
    *
    * @return \DateTime|null The lastUsedDateTime
    */
    public function getLastUsedDateTime()
    {
        if (array_key_exists("lastUsedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUsedDateTime"], "\DateTime") || is_null($this->_propDict["lastUsedDateTime"])) {
                return $this->_propDict["lastUsedDateTime"];
            } else {
                $this->_propDict["lastUsedDateTime"] = new \DateTime($this->_propDict["lastUsedDateTime"]);
                return $this->_propDict["lastUsedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUsedDateTime
    *
    * @param \DateTime $val The value to assign to the lastUsedDateTime
    *
    * @return PrinterShareViewpoint The PrinterShareViewpoint
    */
    public function setLastUsedDateTime($val)
    {
        $this->_propDict["lastUsedDateTime"] = $val;
         return $this;
    }
}
