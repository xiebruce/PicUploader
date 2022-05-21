<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryAddToReviewSetOperation File
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
* EdiscoveryAddToReviewSetOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryAddToReviewSetOperation extends CaseOperation
{
    /**
    * Gets the reviewSet
    *
    * @return EdiscoveryReviewSet|null The reviewSet
    */
    public function getReviewSet()
    {
        if (array_key_exists("reviewSet", $this->_propDict)) {
            if (is_a($this->_propDict["reviewSet"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryReviewSet") || is_null($this->_propDict["reviewSet"])) {
                return $this->_propDict["reviewSet"];
            } else {
                $this->_propDict["reviewSet"] = new EdiscoveryReviewSet($this->_propDict["reviewSet"]);
                return $this->_propDict["reviewSet"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewSet
    *
    * @param EdiscoveryReviewSet $val The reviewSet
    *
    * @return EdiscoveryAddToReviewSetOperation
    */
    public function setReviewSet($val)
    {
        $this->_propDict["reviewSet"] = $val;
        return $this;
    }

    /**
    * Gets the search
    *
    * @return EdiscoverySearch|null The search
    */
    public function getSearch()
    {
        if (array_key_exists("search", $this->_propDict)) {
            if (is_a($this->_propDict["search"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EdiscoverySearch") || is_null($this->_propDict["search"])) {
                return $this->_propDict["search"];
            } else {
                $this->_propDict["search"] = new EdiscoverySearch($this->_propDict["search"]);
                return $this->_propDict["search"];
            }
        }
        return null;
    }

    /**
    * Sets the search
    *
    * @param EdiscoverySearch $val The search
    *
    * @return EdiscoveryAddToReviewSetOperation
    */
    public function setSearch($val)
    {
        $this->_propDict["search"] = $val;
        return $this;
    }

}
