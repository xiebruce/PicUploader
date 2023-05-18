<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReactionsFacet File
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
* ReactionsFacet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReactionsFacet extends Entity
{
    /**
    * Gets the commentCount
    * Count of comments.
    *
    * @return int|null The commentCount
    */
    public function getCommentCount()
    {
        if (array_key_exists("commentCount", $this->_propDict)) {
            return $this->_propDict["commentCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the commentCount
    * Count of comments.
    *
    * @param int $val The value of the commentCount
    *
    * @return ReactionsFacet
    */
    public function setCommentCount($val)
    {
        $this->_propDict["commentCount"] = $val;
        return $this;
    }
    /**
    * Gets the likeCount
    * Count of likes.
    *
    * @return int|null The likeCount
    */
    public function getLikeCount()
    {
        if (array_key_exists("likeCount", $this->_propDict)) {
            return $this->_propDict["likeCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the likeCount
    * Count of likes.
    *
    * @param int $val The value of the likeCount
    *
    * @return ReactionsFacet
    */
    public function setLikeCount($val)
    {
        $this->_propDict["likeCount"] = $val;
        return $this;
    }
    /**
    * Gets the shareCount
    * Count of shares.
    *
    * @return int|null The shareCount
    */
    public function getShareCount()
    {
        if (array_key_exists("shareCount", $this->_propDict)) {
            return $this->_propDict["shareCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shareCount
    * Count of shares.
    *
    * @param int $val The value of the shareCount
    *
    * @return ReactionsFacet
    */
    public function setShareCount($val)
    {
        $this->_propDict["shareCount"] = $val;
        return $this;
    }
}
