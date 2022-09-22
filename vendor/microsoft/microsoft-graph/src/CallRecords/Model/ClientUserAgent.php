<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClientUserAgent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;
/**
* ClientUserAgent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClientUserAgent extends UserAgent
{
    /**
    * Gets the azureADAppId
    * The unique identifier of the Azure AD application used by this endpoint.
    *
    * @return string|null The azureADAppId
    */
    public function getAzureADAppId()
    {
        if (array_key_exists("azureADAppId", $this->_propDict)) {
            return $this->_propDict["azureADAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureADAppId
    * The unique identifier of the Azure AD application used by this endpoint.
    *
    * @param string $val The value of the azureADAppId
    *
    * @return ClientUserAgent
    */
    public function setAzureADAppId($val)
    {
        $this->_propDict["azureADAppId"] = $val;
        return $this;
    }
    /**
    * Gets the communicationServiceId
    * Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
    *
    * @return string|null The communicationServiceId
    */
    public function getCommunicationServiceId()
    {
        if (array_key_exists("communicationServiceId", $this->_propDict)) {
            return $this->_propDict["communicationServiceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the communicationServiceId
    * Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
    *
    * @param string $val The value of the communicationServiceId
    *
    * @return ClientUserAgent
    */
    public function setCommunicationServiceId($val)
    {
        $this->_propDict["communicationServiceId"] = $val;
        return $this;
    }

    /**
    * Gets the platform
    * Identifies the platform used by this endpoint. Possible values are: unknown, windows, macOS, iOS, android, web, ipPhone, roomSystem, surfaceHub, holoLens, unknownFutureValue.
    *
    * @return ClientPlatform|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Microsoft\Graph\CallRecords\Model\ClientPlatform") || is_null($this->_propDict["platform"])) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new ClientPlatform($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * Identifies the platform used by this endpoint. Possible values are: unknown, windows, macOS, iOS, android, web, ipPhone, roomSystem, surfaceHub, holoLens, unknownFutureValue.
    *
    * @param ClientPlatform $val The value to assign to the platform
    *
    * @return ClientUserAgent The ClientUserAgent
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
         return $this;
    }

    /**
    * Gets the productFamily
    * Identifies the family of application software used by this endpoint. Possible values are: unknown, teams, skypeForBusiness, lync, unknownFutureValue, azureCommunicationServices. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: azureCommunicationServices.
    *
    * @return ProductFamily|null The productFamily
    */
    public function getProductFamily()
    {
        if (array_key_exists("productFamily", $this->_propDict)) {
            if (is_a($this->_propDict["productFamily"], "\Microsoft\Graph\CallRecords\Model\ProductFamily") || is_null($this->_propDict["productFamily"])) {
                return $this->_propDict["productFamily"];
            } else {
                $this->_propDict["productFamily"] = new ProductFamily($this->_propDict["productFamily"]);
                return $this->_propDict["productFamily"];
            }
        }
        return null;
    }

    /**
    * Sets the productFamily
    * Identifies the family of application software used by this endpoint. Possible values are: unknown, teams, skypeForBusiness, lync, unknownFutureValue, azureCommunicationServices. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: azureCommunicationServices.
    *
    * @param ProductFamily $val The value to assign to the productFamily
    *
    * @return ClientUserAgent The ClientUserAgent
    */
    public function setProductFamily($val)
    {
        $this->_propDict["productFamily"] = $val;
         return $this;
    }
}
