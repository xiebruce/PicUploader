<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageLogo File
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
* OrganizationalMessageLogo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageLogo extends Entity
{

    /**
    * Gets the contentType
    * The content type of the logo that is contained in the logo array. This is null when logoCdnUrl is used to send the logo. Possible values are: png, unknownFutureValue.
    *
    * @return OrganizationalMessageLogoType|null The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageLogoType") || is_null($this->_propDict["contentType"])) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new OrganizationalMessageLogoType($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }

    /**
    * Sets the contentType
    * The content type of the logo that is contained in the logo array. This is null when logoCdnUrl is used to send the logo. Possible values are: png, unknownFutureValue.
    *
    * @param OrganizationalMessageLogoType $val The value to assign to the contentType
    *
    * @return OrganizationalMessageLogo The OrganizationalMessageLogo
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
         return $this;
    }

    /**
    * Gets the logo
    * The binary contents of the logo. This is null when logoCdnUrl is used to send the logo
    *
    * @return \GuzzleHttp\Psr7\Stream|null The logo
    */
    public function getLogo()
    {
        if (array_key_exists("logo", $this->_propDict)) {
            if (is_a($this->_propDict["logo"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["logo"])) {
                return $this->_propDict["logo"];
            } else {
                $this->_propDict["logo"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["logo"]);
                return $this->_propDict["logo"];
            }
        }
        return null;
    }

    /**
    * Sets the logo
    * The binary contents of the logo. This is null when logoCdnUrl is used to send the logo
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the logo
    *
    * @return OrganizationalMessageLogo The OrganizationalMessageLogo
    */
    public function setLogo($val)
    {
        $this->_propDict["logo"] = $val;
         return $this;
    }
    /**
    * Gets the logoCdnUrl
    * The url at which the logo resides. This is null when logo and contentType are used to send the logo
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
    * The url at which the logo resides. This is null when logo and contentType are used to send the logo
    *
    * @param string $val The value of the logoCdnUrl
    *
    * @return OrganizationalMessageLogo
    */
    public function setLogoCdnUrl($val)
    {
        $this->_propDict["logoCdnUrl"] = $val;
        return $this;
    }
}
