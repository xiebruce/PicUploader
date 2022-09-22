<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageLogoGuide File
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
* OrganizationalMessageLogoGuide class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageLogoGuide extends Entity
{
    /**
    * Gets the assetName
    * The asset name is the key for this specific logo. This is used to compute the required token when accessing the logoCdnUrl to fetch the logo
    *
    * @return string|null The assetName
    */
    public function getAssetName()
    {
        if (array_key_exists("assetName", $this->_propDict)) {
            return $this->_propDict["assetName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assetName
    * The asset name is the key for this specific logo. This is used to compute the required token when accessing the logoCdnUrl to fetch the logo
    *
    * @param string $val The value of the assetName
    *
    * @return OrganizationalMessageLogoGuide
    */
    public function setAssetName($val)
    {
        $this->_propDict["assetName"] = $val;
        return $this;
    }

    /**
    * Gets the dimensions
    * The required size dimensions of the logo
    *
    * @return OrganizationalMessageLogoDimensions|null The dimensions
    */
    public function getDimensions()
    {
        if (array_key_exists("dimensions", $this->_propDict)) {
            if (is_a($this->_propDict["dimensions"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageLogoDimensions") || is_null($this->_propDict["dimensions"])) {
                return $this->_propDict["dimensions"];
            } else {
                $this->_propDict["dimensions"] = new OrganizationalMessageLogoDimensions($this->_propDict["dimensions"]);
                return $this->_propDict["dimensions"];
            }
        }
        return null;
    }

    /**
    * Sets the dimensions
    * The required size dimensions of the logo
    *
    * @param OrganizationalMessageLogoDimensions $val The value to assign to the dimensions
    *
    * @return OrganizationalMessageLogoGuide The OrganizationalMessageLogoGuide
    */
    public function setDimensions($val)
    {
        $this->_propDict["dimensions"] = $val;
         return $this;
    }
    /**
    * Gets the logoCdnUrl
    * The url at which the logo resides
    *
    * @return string|null The logoCdnUrl
    */
    public function getLogoCdnUrl()
    {
        if (array_key_exists("logoCdnUrl", $this->_propDict)) {
            return $this->_propDict["logoCdnUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logoCdnUrl
    * The url at which the logo resides
    *
    * @param string $val The value of the logoCdnUrl
    *
    * @return OrganizationalMessageLogoGuide
    */
    public function setLogoCdnUrl($val)
    {
        $this->_propDict["logoCdnUrl"] = $val;
        return $this;
    }
}
