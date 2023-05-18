<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActivitySettings File
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
* ActivitySettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActivitySettings extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the urlToItemResolvers
    * Specifies configurations to identify an externalItem based on a shared URL.
    *
    * @return UrlToItemResolverBase|null The urlToItemResolvers
    */
    public function getUrlToItemResolvers()
    {
        if (array_key_exists("urlToItemResolvers", $this->_propDict)) {
            if (is_a($this->_propDict["urlToItemResolvers"], "\Microsoft\Graph\ExternalConnectors\Model\UrlToItemResolverBase") || is_null($this->_propDict["urlToItemResolvers"])) {
                return $this->_propDict["urlToItemResolvers"];
            } else {
                $this->_propDict["urlToItemResolvers"] = new UrlToItemResolverBase($this->_propDict["urlToItemResolvers"]);
                return $this->_propDict["urlToItemResolvers"];
            }
        }
        return null;
    }

    /**
    * Sets the urlToItemResolvers
    * Specifies configurations to identify an externalItem based on a shared URL.
    *
    * @param UrlToItemResolverBase $val The value to assign to the urlToItemResolvers
    *
    * @return ActivitySettings The ActivitySettings
    */
    public function setUrlToItemResolvers($val)
    {
        $this->_propDict["urlToItemResolvers"] = $val;
         return $this;
    }
}
