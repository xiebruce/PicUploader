<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TextWebPart File
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
* TextWebPart class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TextWebPart extends WebPart
{
    /**
    * Gets the innerHtml
    * The HTML string in text web part.
    *
    * @return string|null The innerHtml
    */
    public function getInnerHtml()
    {
        if (array_key_exists("innerHtml", $this->_propDict)) {
            return $this->_propDict["innerHtml"];
        } else {
            return null;
        }
    }

    /**
    * Sets the innerHtml
    * The HTML string in text web part.
    *
    * @param string $val The innerHtml
    *
    * @return TextWebPart
    */
    public function setInnerHtml($val)
    {
        $this->_propDict["innerHtml"] = $val;
        return $this;
    }

}
