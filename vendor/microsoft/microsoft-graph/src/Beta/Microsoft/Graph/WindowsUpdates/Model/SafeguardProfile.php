<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SafeguardProfile File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* SafeguardProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SafeguardProfile extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the category
    * Specifies the category of safeguards. The possible values are: likelyIssues, unknownFutureValue.
    *
    * @return SafeguardCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\SafeguardCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new SafeguardCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    * Specifies the category of safeguards. The possible values are: likelyIssues, unknownFutureValue.
    *
    * @param SafeguardCategory $val The value to assign to the category
    *
    * @return SafeguardProfile The SafeguardProfile
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
         return $this;
    }
}
