<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClassificationRequestContentMetaData File
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
* ClassificationRequestContentMetaData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClassificationRequestContentMetaData extends Entity
{
    /**
    * Gets the sourceId
    *
    * @return string|null The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceId
    *
    * @param string $val The value of the sourceId
    *
    * @return ClassificationRequestContentMetaData
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
}
