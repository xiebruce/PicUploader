<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkApplicationIdentity File
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
* TeamworkApplicationIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkApplicationIdentity extends Identity
{

    /**
    * Gets the applicationIdentityType
    * Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, and outgoingWebhook.
    *
    * @return TeamworkApplicationIdentityType|null The applicationIdentityType
    */
    public function getApplicationIdentityType()
    {
        if (array_key_exists("applicationIdentityType", $this->_propDict)) {
            if (is_a($this->_propDict["applicationIdentityType"], "\Microsoft\Graph\Model\TeamworkApplicationIdentityType") || is_null($this->_propDict["applicationIdentityType"])) {
                return $this->_propDict["applicationIdentityType"];
            } else {
                $this->_propDict["applicationIdentityType"] = new TeamworkApplicationIdentityType($this->_propDict["applicationIdentityType"]);
                return $this->_propDict["applicationIdentityType"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationIdentityType
    * Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, and outgoingWebhook.
    *
    * @param TeamworkApplicationIdentityType $val The value to assign to the applicationIdentityType
    *
    * @return TeamworkApplicationIdentity The TeamworkApplicationIdentity
    */
    public function setApplicationIdentityType($val)
    {
        $this->_propDict["applicationIdentityType"] = $val;
         return $this;
    }
}
