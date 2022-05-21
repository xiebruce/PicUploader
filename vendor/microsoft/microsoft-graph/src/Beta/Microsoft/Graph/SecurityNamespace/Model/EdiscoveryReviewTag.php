<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryReviewTag File
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
* EdiscoveryReviewTag class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryReviewTag extends Tag
{
    /**
    * Gets the childSelectability
    *
    * @return ChildSelectability|null The childSelectability
    */
    public function getChildSelectability()
    {
        if (array_key_exists("childSelectability", $this->_propDict)) {
            if (is_a($this->_propDict["childSelectability"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ChildSelectability") || is_null($this->_propDict["childSelectability"])) {
                return $this->_propDict["childSelectability"];
            } else {
                $this->_propDict["childSelectability"] = new ChildSelectability($this->_propDict["childSelectability"]);
                return $this->_propDict["childSelectability"];
            }
        }
        return null;
    }

    /**
    * Sets the childSelectability
    *
    * @param ChildSelectability $val The childSelectability
    *
    * @return EdiscoveryReviewTag
    */
    public function setChildSelectability($val)
    {
        $this->_propDict["childSelectability"] = $val;
        return $this;
    }


     /**
     * Gets the childTags
     *
     * @return array|null The childTags
     */
    public function getChildTags()
    {
        if (array_key_exists("childTags", $this->_propDict)) {
           return $this->_propDict["childTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childTags
    *
    * @param EdiscoveryReviewTag[] $val The childTags
    *
    * @return EdiscoveryReviewTag
    */
    public function setChildTags($val)
    {
        $this->_propDict["childTags"] = $val;
        return $this;
    }

    /**
    * Gets the parent
    *
    * @return EdiscoveryReviewTag|null The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryReviewTag") || is_null($this->_propDict["parent"])) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new EdiscoveryReviewTag($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }

    /**
    * Sets the parent
    *
    * @param EdiscoveryReviewTag $val The parent
    *
    * @return EdiscoveryReviewTag
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
        return $this;
    }

}
