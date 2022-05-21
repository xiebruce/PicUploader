<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendedAction File
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
* RecommendedAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendedAction extends Entity
{
    /**
    * Gets the actionWebUrl
    * Web URL to the recommended action.
    *
    * @return string|null The actionWebUrl
    */
    public function getActionWebUrl()
    {
        if (array_key_exists("actionWebUrl", $this->_propDict)) {
            return $this->_propDict["actionWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionWebUrl
    * Web URL to the recommended action.
    *
    * @param string $val The value of the actionWebUrl
    *
    * @return RecommendedAction
    */
    public function setActionWebUrl($val)
    {
        $this->_propDict["actionWebUrl"] = $val;
        return $this;
    }
    /**
    * Gets the potentialScoreImpact
    * Potential improvement in security score of the tenant from the recommended action.
    *
    * @return float|null The potentialScoreImpact
    */
    public function getPotentialScoreImpact()
    {
        if (array_key_exists("potentialScoreImpact", $this->_propDict)) {
            return $this->_propDict["potentialScoreImpact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the potentialScoreImpact
    * Potential improvement in security score of the tenant from the recommended action.
    *
    * @param float $val The value of the potentialScoreImpact
    *
    * @return RecommendedAction
    */
    public function setPotentialScoreImpact($val)
    {
        $this->_propDict["potentialScoreImpact"] = $val;
        return $this;
    }
    /**
    * Gets the title
    * Title of the recommended action.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * Title of the recommended action.
    *
    * @param string $val The value of the title
    *
    * @return RecommendedAction
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
