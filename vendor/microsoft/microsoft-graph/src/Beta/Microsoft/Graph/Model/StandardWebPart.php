<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StandardWebPart File
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
* StandardWebPart class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StandardWebPart extends WebPart
{
    /**
    * Gets the data
    * Data of the webPart.
    *
    * @return WebPartData|null The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict)) {
            if (is_a($this->_propDict["data"], "\Beta\Microsoft\Graph\Model\WebPartData") || is_null($this->_propDict["data"])) {
                return $this->_propDict["data"];
            } else {
                $this->_propDict["data"] = new WebPartData($this->_propDict["data"]);
                return $this->_propDict["data"];
            }
        }
        return null;
    }

    /**
    * Sets the data
    * Data of the webPart.
    *
    * @param WebPartData $val The data
    *
    * @return StandardWebPart
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
        return $this;
    }

    /**
    * Gets the webPartType
    * A Guid which indicates the type of the webParts
    *
    * @return string|null The webPartType
    */
    public function getWebPartType()
    {
        if (array_key_exists("webPartType", $this->_propDict)) {
            return $this->_propDict["webPartType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webPartType
    * A Guid which indicates the type of the webParts
    *
    * @param string $val The webPartType
    *
    * @return StandardWebPart
    */
    public function setWebPartType($val)
    {
        $this->_propDict["webPartType"] = $val;
        return $this;
    }

}
