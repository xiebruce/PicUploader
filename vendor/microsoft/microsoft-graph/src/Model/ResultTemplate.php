<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResultTemplate File
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
* ResultTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResultTemplate extends Entity
{
    /**
    * Gets the body
    * JSON schema of the result template.
    *
    * @return string|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            return $this->_propDict["body"];
        } else {
            return null;
        }
    }

    /**
    * Sets the body
    * JSON schema of the result template.
    *
    * @param string $val The value of the body
    *
    * @return ResultTemplate
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Name of the result template.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Name of the result template.
    *
    * @param string $val The value of the displayName
    *
    * @return ResultTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
