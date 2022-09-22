<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RedirectUriSettings File
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
* RedirectUriSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RedirectUriSettings extends Entity
{
    /**
    * Gets the index
    *
    * @return int|null The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            return $this->_propDict["index"];
        } else {
            return null;
        }
    }

    /**
    * Sets the index
    *
    * @param int $val The value of the index
    *
    * @return RedirectUriSettings
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = $val;
        return $this;
    }
    /**
    * Gets the uri
    *
    * @return string|null The uri
    */
    public function getUri()
    {
        if (array_key_exists("uri", $this->_propDict)) {
            return $this->_propDict["uri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uri
    *
    * @param string $val The value of the uri
    *
    * @return RedirectUriSettings
    */
    public function setUri($val)
    {
        $this->_propDict["uri"] = $val;
        return $this;
    }
}
