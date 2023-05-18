<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UrlMatchInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;
/**
* UrlMatchInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UrlMatchInfo extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the baseUrls
    * A list of the URL prefixes that must match URLs to be processed by this URL-to-item-resolver.
    *
    * @return string|null The baseUrls
    */
    public function getBaseUrls()
    {
        if (array_key_exists("baseUrls", $this->_propDict)) {
            return $this->_propDict["baseUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the baseUrls
    * A list of the URL prefixes that must match URLs to be processed by this URL-to-item-resolver.
    *
    * @param string $val The value of the baseUrls
    *
    * @return UrlMatchInfo
    */
    public function setBaseUrls($val)
    {
        $this->_propDict["baseUrls"] = $val;
        return $this;
    }
    /**
    * Gets the urlPattern
    * A regular expression that will be matched towards the URL that is processed by this URL-to-item-resolver. The ECMAScript specification for regular expressions (ECMA-262) is used for the evaluation. The named groups defined by the regular expression will be used later to extract values from the URL.
    *
    * @return string|null The urlPattern
    */
    public function getUrlPattern()
    {
        if (array_key_exists("urlPattern", $this->_propDict)) {
            return $this->_propDict["urlPattern"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urlPattern
    * A regular expression that will be matched towards the URL that is processed by this URL-to-item-resolver. The ECMAScript specification for regular expressions (ECMA-262) is used for the evaluation. The named groups defined by the regular expression will be used later to extract values from the URL.
    *
    * @param string $val The value of the urlPattern
    *
    * @return UrlMatchInfo
    */
    public function setUrlPattern($val)
    {
        $this->_propDict["urlPattern"] = $val;
        return $this;
    }
}
