<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchEntity File
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
* SearchEntity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchEntity extends Entity
{

     /**
     * Gets the acronyms
    * Administrative answer in Microsoft Search results to define common acronyms in a organization.
     *
     * @return array|null The acronyms
     */
    public function getAcronyms()
    {
        if (array_key_exists("acronyms", $this->_propDict)) {
           return $this->_propDict["acronyms"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acronyms
    * Administrative answer in Microsoft Search results to define common acronyms in a organization.
    *
    * @param \Beta\Microsoft\Graph\Search\Model\Acronym[] $val The acronyms
    *
    * @return SearchEntity
    */
    public function setAcronyms($val)
    {
        $this->_propDict["acronyms"] = $val;
        return $this;
    }


     /**
     * Gets the bookmarks
    * Administrative answer in Microsoft Search results for common search queries in an organization.
     *
     * @return array|null The bookmarks
     */
    public function getBookmarks()
    {
        if (array_key_exists("bookmarks", $this->_propDict)) {
           return $this->_propDict["bookmarks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bookmarks
    * Administrative answer in Microsoft Search results for common search queries in an organization.
    *
    * @param \Beta\Microsoft\Graph\Search\Model\Bookmark[] $val The bookmarks
    *
    * @return SearchEntity
    */
    public function setBookmarks($val)
    {
        $this->_propDict["bookmarks"] = $val;
        return $this;
    }


     /**
     * Gets the qnas
    * Administrative answer in Microsoft Search results which provide answers for specific search keywords in an organization.
     *
     * @return array|null The qnas
     */
    public function getQnas()
    {
        if (array_key_exists("qnas", $this->_propDict)) {
           return $this->_propDict["qnas"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qnas
    * Administrative answer in Microsoft Search results which provide answers for specific search keywords in an organization.
    *
    * @param \Beta\Microsoft\Graph\Search\Model\Qna[] $val The qnas
    *
    * @return SearchEntity
    */
    public function setQnas($val)
    {
        $this->_propDict["qnas"] = $val;
        return $this;
    }

}
