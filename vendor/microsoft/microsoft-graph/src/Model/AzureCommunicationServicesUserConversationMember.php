<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureCommunicationServicesUserConversationMember File
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
* AzureCommunicationServicesUserConversationMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureCommunicationServicesUserConversationMember extends ConversationMember
{
    /**
    * Gets the azureCommunicationServicesId
    * Azure Communication Services ID of the user.
    *
    * @return string|null The azureCommunicationServicesId
    */
    public function getAzureCommunicationServicesId()
    {
        if (array_key_exists("azureCommunicationServicesId", $this->_propDict)) {
            return $this->_propDict["azureCommunicationServicesId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureCommunicationServicesId
    * Azure Communication Services ID of the user.
    *
    * @param string $val The azureCommunicationServicesId
    *
    * @return AzureCommunicationServicesUserConversationMember
    */
    public function setAzureCommunicationServicesId($val)
    {
        $this->_propDict["azureCommunicationServicesId"] = $val;
        return $this;
    }

}
