<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequestDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SubjectRightsRequestDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequestDetail extends Entity
{
    /**
    * Gets the excludedItemCount
    * Count of items that are excluded from the request.
    *
    * @return int|null The excludedItemCount
    */
    public function getExcludedItemCount()
    {
        if (array_key_exists("excludedItemCount", $this->_propDict)) {
            return $this->_propDict["excludedItemCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludedItemCount
    * Count of items that are excluded from the request.
    *
    * @param int $val The value of the excludedItemCount
    *
    * @return SubjectRightsRequestDetail
    */
    public function setExcludedItemCount($val)
    {
        $this->_propDict["excludedItemCount"] = $val;
        return $this;
    }

    /**
    * Gets the insightCounts
    * Count of items per insight.
    *
    * @return KeyValuePair|null The insightCounts
    */
    public function getInsightCounts()
    {
        if (array_key_exists("insightCounts", $this->_propDict)) {
            if (is_a($this->_propDict["insightCounts"], "\Microsoft\Graph\Model\KeyValuePair") || is_null($this->_propDict["insightCounts"])) {
                return $this->_propDict["insightCounts"];
            } else {
                $this->_propDict["insightCounts"] = new KeyValuePair($this->_propDict["insightCounts"]);
                return $this->_propDict["insightCounts"];
            }
        }
        return null;
    }

    /**
    * Sets the insightCounts
    * Count of items per insight.
    *
    * @param KeyValuePair $val The value to assign to the insightCounts
    *
    * @return SubjectRightsRequestDetail The SubjectRightsRequestDetail
    */
    public function setInsightCounts($val)
    {
        $this->_propDict["insightCounts"] = $val;
         return $this;
    }
    /**
    * Gets the itemCount
    * Count of items found.
    *
    * @return int|null The itemCount
    */
    public function getItemCount()
    {
        if (array_key_exists("itemCount", $this->_propDict)) {
            return $this->_propDict["itemCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemCount
    * Count of items found.
    *
    * @param int $val The value of the itemCount
    *
    * @return SubjectRightsRequestDetail
    */
    public function setItemCount($val)
    {
        $this->_propDict["itemCount"] = $val;
        return $this;
    }
    /**
    * Gets the itemNeedReview
    * Count of item that need review.
    *
    * @return int|null The itemNeedReview
    */
    public function getItemNeedReview()
    {
        if (array_key_exists("itemNeedReview", $this->_propDict)) {
            return $this->_propDict["itemNeedReview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemNeedReview
    * Count of item that need review.
    *
    * @param int $val The value of the itemNeedReview
    *
    * @return SubjectRightsRequestDetail
    */
    public function setItemNeedReview($val)
    {
        $this->_propDict["itemNeedReview"] = $val;
        return $this;
    }

    /**
    * Gets the productItemCounts
    * Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
    *
    * @return KeyValuePair|null The productItemCounts
    */
    public function getProductItemCounts()
    {
        if (array_key_exists("productItemCounts", $this->_propDict)) {
            if (is_a($this->_propDict["productItemCounts"], "\Microsoft\Graph\Model\KeyValuePair") || is_null($this->_propDict["productItemCounts"])) {
                return $this->_propDict["productItemCounts"];
            } else {
                $this->_propDict["productItemCounts"] = new KeyValuePair($this->_propDict["productItemCounts"]);
                return $this->_propDict["productItemCounts"];
            }
        }
        return null;
    }

    /**
    * Sets the productItemCounts
    * Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
    *
    * @param KeyValuePair $val The value to assign to the productItemCounts
    *
    * @return SubjectRightsRequestDetail The SubjectRightsRequestDetail
    */
    public function setProductItemCounts($val)
    {
        $this->_propDict["productItemCounts"] = $val;
         return $this;
    }
    /**
    * Gets the signedOffItemCount
    * Count of items signed off by the administrator.
    *
    * @return int|null The signedOffItemCount
    */
    public function getSignedOffItemCount()
    {
        if (array_key_exists("signedOffItemCount", $this->_propDict)) {
            return $this->_propDict["signedOffItemCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signedOffItemCount
    * Count of items signed off by the administrator.
    *
    * @param int $val The value of the signedOffItemCount
    *
    * @return SubjectRightsRequestDetail
    */
    public function setSignedOffItemCount($val)
    {
        $this->_propDict["signedOffItemCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalItemSize
    * Total item size in bytes.
    *
    * @return int|null The totalItemSize
    */
    public function getTotalItemSize()
    {
        if (array_key_exists("totalItemSize", $this->_propDict)) {
            return $this->_propDict["totalItemSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalItemSize
    * Total item size in bytes.
    *
    * @param int $val The value of the totalItemSize
    *
    * @return SubjectRightsRequestDetail
    */
    public function setTotalItemSize($val)
    {
        $this->_propDict["totalItemSize"] = $val;
        return $this;
    }
}
