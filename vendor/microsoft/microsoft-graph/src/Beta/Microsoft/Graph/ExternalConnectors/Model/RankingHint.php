<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RankingHint File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;
/**
* RankingHint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RankingHint extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the importanceScore
    * Specifies the schema property importance. Possible values are: low, medium, high, veryHigh, unknownFutureValue. Required.
    *
    * @return ImportanceScore|null The importanceScore
    */
    public function getImportanceScore()
    {
        if (array_key_exists("importanceScore", $this->_propDict)) {
            if (is_a($this->_propDict["importanceScore"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ImportanceScore") || is_null($this->_propDict["importanceScore"])) {
                return $this->_propDict["importanceScore"];
            } else {
                $this->_propDict["importanceScore"] = new ImportanceScore($this->_propDict["importanceScore"]);
                return $this->_propDict["importanceScore"];
            }
        }
        return null;
    }

    /**
    * Sets the importanceScore
    * Specifies the schema property importance. Possible values are: low, medium, high, veryHigh, unknownFutureValue. Required.
    *
    * @param ImportanceScore $val The value to assign to the importanceScore
    *
    * @return RankingHint The RankingHint
    */
    public function setImportanceScore($val)
    {
        $this->_propDict["importanceScore"] = $val;
         return $this;
    }
}
