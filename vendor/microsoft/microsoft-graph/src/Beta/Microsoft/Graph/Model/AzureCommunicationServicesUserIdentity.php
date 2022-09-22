<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureCommunicationServicesUserIdentity File
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
* AzureCommunicationServicesUserIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureCommunicationServicesUserIdentity extends Identity
{
    /**
    * Gets the azureCommunicationServicesResourceId
    * The Azure Communication Services resource ID associated with the user.
    *
    * @return string|null The azureCommunicationServicesResourceId
    */
    public function getAzureCommunicationServicesResourceId()
    {
        if (array_key_exists("azureCommunicationServicesResourceId", $this->_propDict)) {
            return $this->_propDict["azureCommunicationServicesResourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureCommunicationServicesResourceId
    * The Azure Communication Services resource ID associated with the user.
    *
    * @param string $val The value of the azureCommunicationServicesResourceId
    *
    * @return AzureCommunicationServicesUserIdentity
    */
    public function setAzureCommunicationServicesResourceId($val)
    {
        $this->_propDict["azureCommunicationServicesResourceId"] = $val;
        return $this;
    }
}
