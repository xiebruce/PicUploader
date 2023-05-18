<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendedHuntingQuery File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* RecommendedHuntingQuery class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendedHuntingQuery extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the kqlText
    *
    * @return string|null The kqlText
    */
    public function getKqlText()
    {
        if (array_key_exists("kqlText", $this->_propDict)) {
            return $this->_propDict["kqlText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kqlText
    *
    * @param string $val The value of the kqlText
    *
    * @return RecommendedHuntingQuery
    */
    public function setKqlText($val)
    {
        $this->_propDict["kqlText"] = $val;
        return $this;
    }
}
