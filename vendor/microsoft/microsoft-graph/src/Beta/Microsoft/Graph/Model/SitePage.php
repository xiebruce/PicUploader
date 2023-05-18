<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SitePage File
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
* SitePage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SitePage extends BaseItem
{
    /**
    * Gets the contentType
    * Inherited from baseItem.
    *
    * @return ContentTypeInfo|null The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "\Beta\Microsoft\Graph\Model\ContentTypeInfo") || is_null($this->_propDict["contentType"])) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new ContentTypeInfo($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }

    /**
    * Sets the contentType
    * Inherited from baseItem.
    *
    * @param ContentTypeInfo $val The contentType
    *
    * @return SitePage
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }

    /**
    * Gets the pageLayout
    * The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
    *
    * @return PageLayoutType|null The pageLayout
    */
    public function getPageLayout()
    {
        if (array_key_exists("pageLayout", $this->_propDict)) {
            if (is_a($this->_propDict["pageLayout"], "\Beta\Microsoft\Graph\Model\PageLayoutType") || is_null($this->_propDict["pageLayout"])) {
                return $this->_propDict["pageLayout"];
            } else {
                $this->_propDict["pageLayout"] = new PageLayoutType($this->_propDict["pageLayout"]);
                return $this->_propDict["pageLayout"];
            }
        }
        return null;
    }

    /**
    * Sets the pageLayout
    * The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
    *
    * @param PageLayoutType $val The pageLayout
    *
    * @return SitePage
    */
    public function setPageLayout($val)
    {
        $this->_propDict["pageLayout"] = $val;
        return $this;
    }

    /**
    * Gets the promotionKind
    * Indicates the promotion kind of the sitePage. The possible values are: microsoftReserved, page, newsPost, unknownFutureValue.
    *
    * @return PagePromotionType|null The promotionKind
    */
    public function getPromotionKind()
    {
        if (array_key_exists("promotionKind", $this->_propDict)) {
            if (is_a($this->_propDict["promotionKind"], "\Beta\Microsoft\Graph\Model\PagePromotionType") || is_null($this->_propDict["promotionKind"])) {
                return $this->_propDict["promotionKind"];
            } else {
                $this->_propDict["promotionKind"] = new PagePromotionType($this->_propDict["promotionKind"]);
                return $this->_propDict["promotionKind"];
            }
        }
        return null;
    }

    /**
    * Sets the promotionKind
    * Indicates the promotion kind of the sitePage. The possible values are: microsoftReserved, page, newsPost, unknownFutureValue.
    *
    * @param PagePromotionType $val The promotionKind
    *
    * @return SitePage
    */
    public function setPromotionKind($val)
    {
        $this->_propDict["promotionKind"] = $val;
        return $this;
    }

    /**
    * Gets the publishingState
    * The publishing status and the MM.mm version of the page.
    *
    * @return PublicationFacet|null The publishingState
    */
    public function getPublishingState()
    {
        if (array_key_exists("publishingState", $this->_propDict)) {
            if (is_a($this->_propDict["publishingState"], "\Beta\Microsoft\Graph\Model\PublicationFacet") || is_null($this->_propDict["publishingState"])) {
                return $this->_propDict["publishingState"];
            } else {
                $this->_propDict["publishingState"] = new PublicationFacet($this->_propDict["publishingState"]);
                return $this->_propDict["publishingState"];
            }
        }
        return null;
    }

    /**
    * Sets the publishingState
    * The publishing status and the MM.mm version of the page.
    *
    * @param PublicationFacet $val The publishingState
    *
    * @return SitePage
    */
    public function setPublishingState($val)
    {
        $this->_propDict["publishingState"] = $val;
        return $this;
    }

    /**
    * Gets the reactions
    * Reactions information for the page.
    *
    * @return ReactionsFacet|null The reactions
    */
    public function getReactions()
    {
        if (array_key_exists("reactions", $this->_propDict)) {
            if (is_a($this->_propDict["reactions"], "\Beta\Microsoft\Graph\Model\ReactionsFacet") || is_null($this->_propDict["reactions"])) {
                return $this->_propDict["reactions"];
            } else {
                $this->_propDict["reactions"] = new ReactionsFacet($this->_propDict["reactions"]);
                return $this->_propDict["reactions"];
            }
        }
        return null;
    }

    /**
    * Sets the reactions
    * Reactions information for the page.
    *
    * @param ReactionsFacet $val The reactions
    *
    * @return SitePage
    */
    public function setReactions($val)
    {
        $this->_propDict["reactions"] = $val;
        return $this;
    }

    /**
    * Gets the showComments
    * Determines whether or not to show comments at the bottom of the page.
    *
    * @return bool|null The showComments
    */
    public function getShowComments()
    {
        if (array_key_exists("showComments", $this->_propDict)) {
            return $this->_propDict["showComments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showComments
    * Determines whether or not to show comments at the bottom of the page.
    *
    * @param bool $val The showComments
    *
    * @return SitePage
    */
    public function setShowComments($val)
    {
        $this->_propDict["showComments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showRecommendedPages
    * Determines whether or not to show recommended pages at the bottom of the page.
    *
    * @return bool|null The showRecommendedPages
    */
    public function getShowRecommendedPages()
    {
        if (array_key_exists("showRecommendedPages", $this->_propDict)) {
            return $this->_propDict["showRecommendedPages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showRecommendedPages
    * Determines whether or not to show recommended pages at the bottom of the page.
    *
    * @param bool $val The showRecommendedPages
    *
    * @return SitePage
    */
    public function setShowRecommendedPages($val)
    {
        $this->_propDict["showRecommendedPages"] = boolval($val);
        return $this;
    }

    /**
    * Gets the thumbnailWebUrl
    * Url of the sitePage's thumbnail image
    *
    * @return string|null The thumbnailWebUrl
    */
    public function getThumbnailWebUrl()
    {
        if (array_key_exists("thumbnailWebUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the thumbnailWebUrl
    * Url of the sitePage's thumbnail image
    *
    * @param string $val The thumbnailWebUrl
    *
    * @return SitePage
    */
    public function setThumbnailWebUrl($val)
    {
        $this->_propDict["thumbnailWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the title
    * Title of the sitePage.
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
    * Title of the sitePage.
    *
    * @param string $val The title
    *
    * @return SitePage
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

    /**
    * Gets the titleArea
    * Title area on the SharePoint page.
    *
    * @return TitleArea|null The titleArea
    */
    public function getTitleArea()
    {
        if (array_key_exists("titleArea", $this->_propDict)) {
            if (is_a($this->_propDict["titleArea"], "\Beta\Microsoft\Graph\Model\TitleArea") || is_null($this->_propDict["titleArea"])) {
                return $this->_propDict["titleArea"];
            } else {
                $this->_propDict["titleArea"] = new TitleArea($this->_propDict["titleArea"]);
                return $this->_propDict["titleArea"];
            }
        }
        return null;
    }

    /**
    * Sets the titleArea
    * Title area on the SharePoint page.
    *
    * @param TitleArea $val The titleArea
    *
    * @return SitePage
    */
    public function setTitleArea($val)
    {
        $this->_propDict["titleArea"] = $val;
        return $this;
    }

    /**
    * Gets the canvasLayout
    * Indicates the layout of the content in a given SharePoint page, including horizontal sections and vertical section
    *
    * @return CanvasLayout|null The canvasLayout
    */
    public function getCanvasLayout()
    {
        if (array_key_exists("canvasLayout", $this->_propDict)) {
            if (is_a($this->_propDict["canvasLayout"], "\Beta\Microsoft\Graph\Model\CanvasLayout") || is_null($this->_propDict["canvasLayout"])) {
                return $this->_propDict["canvasLayout"];
            } else {
                $this->_propDict["canvasLayout"] = new CanvasLayout($this->_propDict["canvasLayout"]);
                return $this->_propDict["canvasLayout"];
            }
        }
        return null;
    }

    /**
    * Sets the canvasLayout
    * Indicates the layout of the content in a given SharePoint page, including horizontal sections and vertical section
    *
    * @param CanvasLayout $val The canvasLayout
    *
    * @return SitePage
    */
    public function setCanvasLayout($val)
    {
        $this->_propDict["canvasLayout"] = $val;
        return $this;
    }


     /**
     * Gets the webParts
    * Collection of webparts on the SharePoint page
     *
     * @return array|null The webParts
     */
    public function getWebParts()
    {
        if (array_key_exists("webParts", $this->_propDict)) {
           return $this->_propDict["webParts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webParts
    * Collection of webparts on the SharePoint page
    *
    * @param WebPart[] $val The webParts
    *
    * @return SitePage
    */
    public function setWebParts($val)
    {
        $this->_propDict["webParts"] = $val;
        return $this;
    }

}
