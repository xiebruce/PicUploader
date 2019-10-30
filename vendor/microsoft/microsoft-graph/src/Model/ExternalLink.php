<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalLink File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ExternalLink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ExternalLink extends Entity
{
    /**
    * Gets the href
    * The url of the link.
    *
    * @return string The href
    */
    public function getHref()
    {
        if (array_key_exists("href", $this->_propDict)) {
            return $this->_propDict["href"];
        } else {
            return null;
        }
    }

    /**
    * Sets the href
    * The url of the link.
    *
    * @param string $val The value of the href
    *
    * @return ExternalLink
    */
    public function setHref($val)
    {
        $this->_propDict["href"] = $val;
        return $this;
    }
}
