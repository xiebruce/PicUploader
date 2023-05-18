<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemIdResolver File
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
* ItemIdResolver class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemIdResolver extends UrlToItemResolverBase
{
    /**
    * Gets the itemId
    * Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
    *
    * @return string|null The itemId
    */
    public function getItemId()
    {
        if (array_key_exists("itemId", $this->_propDict)) {
            return $this->_propDict["itemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemId
    * Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
    *
    * @param string $val The value of the itemId
    *
    * @return ItemIdResolver
    */
    public function setItemId($val)
    {
        $this->_propDict["itemId"] = $val;
        return $this;
    }

    /**
    * Gets the urlMatchInfo
    * Configurations to match and resolve URL.
    *
    * @return UrlMatchInfo|null The urlMatchInfo
    */
    public function getUrlMatchInfo()
    {
        if (array_key_exists("urlMatchInfo", $this->_propDict)) {
            if (is_a($this->_propDict["urlMatchInfo"], "\Microsoft\Graph\ExternalConnectors\Model\UrlMatchInfo") || is_null($this->_propDict["urlMatchInfo"])) {
                return $this->_propDict["urlMatchInfo"];
            } else {
                $this->_propDict["urlMatchInfo"] = new UrlMatchInfo($this->_propDict["urlMatchInfo"]);
                return $this->_propDict["urlMatchInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the urlMatchInfo
    * Configurations to match and resolve URL.
    *
    * @param UrlMatchInfo $val The value to assign to the urlMatchInfo
    *
    * @return ItemIdResolver The ItemIdResolver
    */
    public function setUrlMatchInfo($val)
    {
        $this->_propDict["urlMatchInfo"] = $val;
         return $this;
    }
}
