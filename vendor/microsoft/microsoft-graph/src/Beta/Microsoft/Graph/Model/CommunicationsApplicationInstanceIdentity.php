<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommunicationsApplicationInstanceIdentity File
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
* CommunicationsApplicationInstanceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommunicationsApplicationInstanceIdentity extends Identity
{
    /**
    * Gets the hidden
    * True if the participant would not like to be shown in other participants' rosters.
    *
    * @return bool|null The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidden
    * True if the participant would not like to be shown in other participants' rosters.
    *
    * @param bool $val The value of the hidden
    *
    * @return CommunicationsApplicationInstanceIdentity
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
    * The application's tenant ID.
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The application's tenant ID.
    *
    * @param string $val The value of the tenantId
    *
    * @return CommunicationsApplicationInstanceIdentity
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
}
