<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataConnector File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* IndustryDataConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataConnector extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The name of the data connector. Maximum supported length is 100 characters.
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
    * The name of the data connector. Maximum supported length is 100 characters.
    *
    * @param string $val The displayName
    *
    * @return IndustryDataConnector
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the sourceSystem
    * The sourceSystemDefinition this connector is connected to.
    *
    * @return SourceSystemDefinition|null The sourceSystem
    */
    public function getSourceSystem()
    {
        if (array_key_exists("sourceSystem", $this->_propDict)) {
            if (is_a($this->_propDict["sourceSystem"], "\Beta\Microsoft\Graph\IndustryData\Model\SourceSystemDefinition") || is_null($this->_propDict["sourceSystem"])) {
                return $this->_propDict["sourceSystem"];
            } else {
                $this->_propDict["sourceSystem"] = new SourceSystemDefinition($this->_propDict["sourceSystem"]);
                return $this->_propDict["sourceSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceSystem
    * The sourceSystemDefinition this connector is connected to.
    *
    * @param SourceSystemDefinition $val The sourceSystem
    *
    * @return IndustryDataConnector
    */
    public function setSourceSystem($val)
    {
        $this->_propDict["sourceSystem"] = $val;
        return $this;
    }

}
