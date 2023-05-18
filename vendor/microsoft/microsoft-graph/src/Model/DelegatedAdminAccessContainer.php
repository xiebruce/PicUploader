<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminAccessContainer File
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
* DelegatedAdminAccessContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminAccessContainer extends Entity
{
    /**
    * Gets the accessContainerId
    * The identifier of the access container (for example, a security group). For 'securityGroup' access containers, this must be a valid ID of an Azure AD security group in the Microsoft partner's tenant.
    *
    * @return string|null The accessContainerId
    */
    public function getAccessContainerId()
    {
        if (array_key_exists("accessContainerId", $this->_propDict)) {
            return $this->_propDict["accessContainerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessContainerId
    * The identifier of the access container (for example, a security group). For 'securityGroup' access containers, this must be a valid ID of an Azure AD security group in the Microsoft partner's tenant.
    *
    * @param string $val The value of the accessContainerId
    *
    * @return DelegatedAdminAccessContainer
    */
    public function setAccessContainerId($val)
    {
        $this->_propDict["accessContainerId"] = $val;
        return $this;
    }

    /**
    * Gets the accessContainerType
    * The type of access container (for example, security group) that will be assigned one or more roles through a delegated admin relationship. The possible values are: securityGroup, unknownFutureValue.
    *
    * @return DelegatedAdminAccessContainerType|null The accessContainerType
    */
    public function getAccessContainerType()
    {
        if (array_key_exists("accessContainerType", $this->_propDict)) {
            if (is_a($this->_propDict["accessContainerType"], "\Microsoft\Graph\Model\DelegatedAdminAccessContainerType") || is_null($this->_propDict["accessContainerType"])) {
                return $this->_propDict["accessContainerType"];
            } else {
                $this->_propDict["accessContainerType"] = new DelegatedAdminAccessContainerType($this->_propDict["accessContainerType"]);
                return $this->_propDict["accessContainerType"];
            }
        }
        return null;
    }

    /**
    * Sets the accessContainerType
    * The type of access container (for example, security group) that will be assigned one or more roles through a delegated admin relationship. The possible values are: securityGroup, unknownFutureValue.
    *
    * @param DelegatedAdminAccessContainerType $val The value to assign to the accessContainerType
    *
    * @return DelegatedAdminAccessContainer The DelegatedAdminAccessContainer
    */
    public function setAccessContainerType($val)
    {
        $this->_propDict["accessContainerType"] = $val;
         return $this;
    }
}
