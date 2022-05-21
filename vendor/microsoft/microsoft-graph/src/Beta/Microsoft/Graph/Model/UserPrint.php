<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPrint File
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
* UserPrint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserPrint extends Entity
{

    /**
    * Gets the recentPrinterShares
    *
    * @return PrinterShare|null The recentPrinterShares
    */
    public function getRecentPrinterShares()
    {
        if (array_key_exists("recentPrinterShares", $this->_propDict)) {
            if (is_a($this->_propDict["recentPrinterShares"], "\Beta\Microsoft\Graph\Model\PrinterShare") || is_null($this->_propDict["recentPrinterShares"])) {
                return $this->_propDict["recentPrinterShares"];
            } else {
                $this->_propDict["recentPrinterShares"] = new PrinterShare($this->_propDict["recentPrinterShares"]);
                return $this->_propDict["recentPrinterShares"];
            }
        }
        return null;
    }

    /**
    * Sets the recentPrinterShares
    *
    * @param PrinterShare $val The value to assign to the recentPrinterShares
    *
    * @return UserPrint The UserPrint
    */
    public function setRecentPrinterShares($val)
    {
        $this->_propDict["recentPrinterShares"] = $val;
         return $this;
    }
}
