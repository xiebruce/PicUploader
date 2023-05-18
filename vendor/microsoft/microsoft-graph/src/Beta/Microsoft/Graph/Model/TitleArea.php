<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TitleArea File
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
* TitleArea class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TitleArea extends Entity
{
    /**
    * Gets the alternativeText
    * Alternative text on the title area.
    *
    * @return string|null The alternativeText
    */
    public function getAlternativeText()
    {
        if (array_key_exists("alternativeText", $this->_propDict)) {
            return $this->_propDict["alternativeText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternativeText
    * Alternative text on the title area.
    *
    * @param string $val The value of the alternativeText
    *
    * @return TitleArea
    */
    public function setAlternativeText($val)
    {
        $this->_propDict["alternativeText"] = $val;
        return $this;
    }
    /**
    * Gets the enableGradientEffect
    * Indicates whether the title area has a gradient effect enabled.
    *
    * @return bool|null The enableGradientEffect
    */
    public function getEnableGradientEffect()
    {
        if (array_key_exists("enableGradientEffect", $this->_propDict)) {
            return $this->_propDict["enableGradientEffect"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableGradientEffect
    * Indicates whether the title area has a gradient effect enabled.
    *
    * @param bool $val The value of the enableGradientEffect
    *
    * @return TitleArea
    */
    public function setEnableGradientEffect($val)
    {
        $this->_propDict["enableGradientEffect"] = $val;
        return $this;
    }
    /**
    * Gets the imageWebUrl
    * URL of the image in the title area.
    *
    * @return string|null The imageWebUrl
    */
    public function getImageWebUrl()
    {
        if (array_key_exists("imageWebUrl", $this->_propDict)) {
            return $this->_propDict["imageWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the imageWebUrl
    * URL of the image in the title area.
    *
    * @param string $val The value of the imageWebUrl
    *
    * @return TitleArea
    */
    public function setImageWebUrl($val)
    {
        $this->_propDict["imageWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the layout
    * Enumeration value that indicates the layout of the title area. The possible values are: imageAndTitle, plain, colorBlock, overlap, unknownFutureValue.
    *
    * @return TitleAreaLayoutType|null The layout
    */
    public function getLayout()
    {
        if (array_key_exists("layout", $this->_propDict)) {
            if (is_a($this->_propDict["layout"], "\Beta\Microsoft\Graph\Model\TitleAreaLayoutType") || is_null($this->_propDict["layout"])) {
                return $this->_propDict["layout"];
            } else {
                $this->_propDict["layout"] = new TitleAreaLayoutType($this->_propDict["layout"]);
                return $this->_propDict["layout"];
            }
        }
        return null;
    }

    /**
    * Sets the layout
    * Enumeration value that indicates the layout of the title area. The possible values are: imageAndTitle, plain, colorBlock, overlap, unknownFutureValue.
    *
    * @param TitleAreaLayoutType $val The value to assign to the layout
    *
    * @return TitleArea The TitleArea
    */
    public function setLayout($val)
    {
        $this->_propDict["layout"] = $val;
         return $this;
    }

    /**
    * Gets the serverProcessedContent
    * Contains collections of data that can be processed by server side services like search index and link fixup.
    *
    * @return ServerProcessedContent|null The serverProcessedContent
    */
    public function getServerProcessedContent()
    {
        if (array_key_exists("serverProcessedContent", $this->_propDict)) {
            if (is_a($this->_propDict["serverProcessedContent"], "\Beta\Microsoft\Graph\Model\ServerProcessedContent") || is_null($this->_propDict["serverProcessedContent"])) {
                return $this->_propDict["serverProcessedContent"];
            } else {
                $this->_propDict["serverProcessedContent"] = new ServerProcessedContent($this->_propDict["serverProcessedContent"]);
                return $this->_propDict["serverProcessedContent"];
            }
        }
        return null;
    }

    /**
    * Sets the serverProcessedContent
    * Contains collections of data that can be processed by server side services like search index and link fixup.
    *
    * @param ServerProcessedContent $val The value to assign to the serverProcessedContent
    *
    * @return TitleArea The TitleArea
    */
    public function setServerProcessedContent($val)
    {
        $this->_propDict["serverProcessedContent"] = $val;
         return $this;
    }
    /**
    * Gets the showAuthor
    * Indicates whether the author should be shown in title area.
    *
    * @return bool|null The showAuthor
    */
    public function getShowAuthor()
    {
        if (array_key_exists("showAuthor", $this->_propDict)) {
            return $this->_propDict["showAuthor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showAuthor
    * Indicates whether the author should be shown in title area.
    *
    * @param bool $val The value of the showAuthor
    *
    * @return TitleArea
    */
    public function setShowAuthor($val)
    {
        $this->_propDict["showAuthor"] = $val;
        return $this;
    }
    /**
    * Gets the showPublishedDate
    * Indicates whether the published date should be shown in title area.
    *
    * @return bool|null The showPublishedDate
    */
    public function getShowPublishedDate()
    {
        if (array_key_exists("showPublishedDate", $this->_propDict)) {
            return $this->_propDict["showPublishedDate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showPublishedDate
    * Indicates whether the published date should be shown in title area.
    *
    * @param bool $val The value of the showPublishedDate
    *
    * @return TitleArea
    */
    public function setShowPublishedDate($val)
    {
        $this->_propDict["showPublishedDate"] = $val;
        return $this;
    }
    /**
    * Gets the showTextBlockAboveTitle
    * Indicates whether the text block above title should be shown in title area.
    *
    * @return bool|null The showTextBlockAboveTitle
    */
    public function getShowTextBlockAboveTitle()
    {
        if (array_key_exists("showTextBlockAboveTitle", $this->_propDict)) {
            return $this->_propDict["showTextBlockAboveTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showTextBlockAboveTitle
    * Indicates whether the text block above title should be shown in title area.
    *
    * @param bool $val The value of the showTextBlockAboveTitle
    *
    * @return TitleArea
    */
    public function setShowTextBlockAboveTitle($val)
    {
        $this->_propDict["showTextBlockAboveTitle"] = $val;
        return $this;
    }
    /**
    * Gets the textAboveTitle
    * The text above title line.
    *
    * @return string|null The textAboveTitle
    */
    public function getTextAboveTitle()
    {
        if (array_key_exists("textAboveTitle", $this->_propDict)) {
            return $this->_propDict["textAboveTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the textAboveTitle
    * The text above title line.
    *
    * @param string $val The value of the textAboveTitle
    *
    * @return TitleArea
    */
    public function setTextAboveTitle($val)
    {
        $this->_propDict["textAboveTitle"] = $val;
        return $this;
    }

    /**
    * Gets the textAlignment
    * Enumeration value that indicates the text alignment of the title area. The possible values are: left, center, unknownFutureValue.
    *
    * @return TitleAreaTextAlignmentType|null The textAlignment
    */
    public function getTextAlignment()
    {
        if (array_key_exists("textAlignment", $this->_propDict)) {
            if (is_a($this->_propDict["textAlignment"], "\Beta\Microsoft\Graph\Model\TitleAreaTextAlignmentType") || is_null($this->_propDict["textAlignment"])) {
                return $this->_propDict["textAlignment"];
            } else {
                $this->_propDict["textAlignment"] = new TitleAreaTextAlignmentType($this->_propDict["textAlignment"]);
                return $this->_propDict["textAlignment"];
            }
        }
        return null;
    }

    /**
    * Sets the textAlignment
    * Enumeration value that indicates the text alignment of the title area. The possible values are: left, center, unknownFutureValue.
    *
    * @param TitleAreaTextAlignmentType $val The value to assign to the textAlignment
    *
    * @return TitleArea The TitleArea
    */
    public function setTextAlignment($val)
    {
        $this->_propDict["textAlignment"] = $val;
         return $this;
    }
}
