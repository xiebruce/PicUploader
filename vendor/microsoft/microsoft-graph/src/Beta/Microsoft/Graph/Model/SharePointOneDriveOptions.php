<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharePointOneDriveOptions File
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
* SharePointOneDriveOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharePointOneDriveOptions extends Entity
{

    /**
    * Gets the includeContent
    * The type of search content. The possible values are: privateContent, sharedContent. Read-only.
    *
    * @return SearchContent|null The includeContent
    */
    public function getIncludeContent()
    {
        if (array_key_exists("includeContent", $this->_propDict)) {
            if (is_a($this->_propDict["includeContent"], "\Beta\Microsoft\Graph\Model\SearchContent") || is_null($this->_propDict["includeContent"])) {
                return $this->_propDict["includeContent"];
            } else {
                $this->_propDict["includeContent"] = new SearchContent($this->_propDict["includeContent"]);
                return $this->_propDict["includeContent"];
            }
        }
        return null;
    }

    /**
    * Sets the includeContent
    * The type of search content. The possible values are: privateContent, sharedContent. Read-only.
    *
    * @param SearchContent $val The value to assign to the includeContent
    *
    * @return SharePointOneDriveOptions The SharePointOneDriveOptions
    */
    public function setIncludeContent($val)
    {
        $this->_propDict["includeContent"] = $val;
         return $this;
    }
}
