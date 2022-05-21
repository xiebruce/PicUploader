<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminServiceManagementDetail File
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
* DelegatedAdminServiceManagementDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminServiceManagementDetail extends Entity
{
    /**
    * Gets the serviceId
    *
    * @return string|null The serviceId
    */
    public function getServiceId()
    {
        if (array_key_exists("serviceId", $this->_propDict)) {
            return $this->_propDict["serviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceId
    *
    * @param string $val The serviceId
    *
    * @return DelegatedAdminServiceManagementDetail
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }

    /**
    * Gets the serviceManagementUrl
    * The URL of the management portal for the managed service. Read-only.
    *
    * @return string|null The serviceManagementUrl
    */
    public function getServiceManagementUrl()
    {
        if (array_key_exists("serviceManagementUrl", $this->_propDict)) {
            return $this->_propDict["serviceManagementUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceManagementUrl
    * The URL of the management portal for the managed service. Read-only.
    *
    * @param string $val The serviceManagementUrl
    *
    * @return DelegatedAdminServiceManagementDetail
    */
    public function setServiceManagementUrl($val)
    {
        $this->_propDict["serviceManagementUrl"] = $val;
        return $this;
    }

    /**
    * Gets the serviceName
    * The name of a managed service. Read-only.
    *
    * @return string|null The serviceName
    */
    public function getServiceName()
    {
        if (array_key_exists("serviceName", $this->_propDict)) {
            return $this->_propDict["serviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceName
    * The name of a managed service. Read-only.
    *
    * @param string $val The serviceName
    *
    * @return DelegatedAdminServiceManagementDetail
    */
    public function setServiceName($val)
    {
        $this->_propDict["serviceName"] = $val;
        return $this;
    }

}
