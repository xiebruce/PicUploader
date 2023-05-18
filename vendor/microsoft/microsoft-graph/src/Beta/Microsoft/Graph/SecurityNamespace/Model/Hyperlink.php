<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Hyperlink File
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
* Hyperlink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Hyperlink extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the name
    * The name for this hyperlink.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The name for this hyperlink.
    *
    * @param string $val The value of the name
    *
    * @return Hyperlink
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the url
    * The URL for this hyperlink.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * The URL for this hyperlink.
    *
    * @param string $val The value of the url
    *
    * @return Hyperlink
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
