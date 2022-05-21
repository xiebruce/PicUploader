<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesApplicationSegment File
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
* OnPremisesApplicationSegment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesApplicationSegment extends Entity
{
    /**
    * Gets the alternateUrl
    *
    * @return string|null The alternateUrl
    */
    public function getAlternateUrl()
    {
        if (array_key_exists("alternateUrl", $this->_propDict)) {
            return $this->_propDict["alternateUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateUrl
    *
    * @param string $val The value of the alternateUrl
    *
    * @return OnPremisesApplicationSegment
    */
    public function setAlternateUrl($val)
    {
        $this->_propDict["alternateUrl"] = $val;
        return $this;
    }

    /**
    * Gets the corsConfigurations
    *
    * @return CorsConfiguration|null The corsConfigurations
    */
    public function getCorsConfigurations()
    {
        if (array_key_exists("corsConfigurations", $this->_propDict)) {
            if (is_a($this->_propDict["corsConfigurations"], "\Beta\Microsoft\Graph\Model\CorsConfiguration") || is_null($this->_propDict["corsConfigurations"])) {
                return $this->_propDict["corsConfigurations"];
            } else {
                $this->_propDict["corsConfigurations"] = new CorsConfiguration($this->_propDict["corsConfigurations"]);
                return $this->_propDict["corsConfigurations"];
            }
        }
        return null;
    }

    /**
    * Sets the corsConfigurations
    *
    * @param CorsConfiguration $val The value to assign to the corsConfigurations
    *
    * @return OnPremisesApplicationSegment The OnPremisesApplicationSegment
    */
    public function setCorsConfigurations($val)
    {
        $this->_propDict["corsConfigurations"] = $val;
         return $this;
    }
    /**
    * Gets the externalUrl
    *
    * @return string|null The externalUrl
    */
    public function getExternalUrl()
    {
        if (array_key_exists("externalUrl", $this->_propDict)) {
            return $this->_propDict["externalUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalUrl
    *
    * @param string $val The value of the externalUrl
    *
    * @return OnPremisesApplicationSegment
    */
    public function setExternalUrl($val)
    {
        $this->_propDict["externalUrl"] = $val;
        return $this;
    }
    /**
    * Gets the internalUrl
    *
    * @return string|null The internalUrl
    */
    public function getInternalUrl()
    {
        if (array_key_exists("internalUrl", $this->_propDict)) {
            return $this->_propDict["internalUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalUrl
    *
    * @param string $val The value of the internalUrl
    *
    * @return OnPremisesApplicationSegment
    */
    public function setInternalUrl($val)
    {
        $this->_propDict["internalUrl"] = $val;
        return $this;
    }
}
