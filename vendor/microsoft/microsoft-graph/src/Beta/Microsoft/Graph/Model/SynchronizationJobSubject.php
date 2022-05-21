<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobSubject File
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
* SynchronizationJobSubject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationJobSubject extends Entity
{

    /**
    * Gets the links
    *
    * @return SynchronizationLinkedObjects|null The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Beta\Microsoft\Graph\Model\SynchronizationLinkedObjects") || is_null($this->_propDict["links"])) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new SynchronizationLinkedObjects($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }

    /**
    * Sets the links
    *
    * @param SynchronizationLinkedObjects $val The value to assign to the links
    *
    * @return SynchronizationJobSubject The SynchronizationJobSubject
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
         return $this;
    }
    /**
    * Gets the objectId
    * The identifier of an object to which a synchronizationJob is to be applied. Can be one of the following: An onPremisesDistinguishedName for synchronization from Active Directory to Azure AD.The user ID for synchronization from Azure AD to a third-party.The Worker ID of the Workday worker for synchronization from Workday to either Active Directory or Azure AD.
    *
    * @return string|null The objectId
    */
    public function getObjectId()
    {
        if (array_key_exists("objectId", $this->_propDict)) {
            return $this->_propDict["objectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectId
    * The identifier of an object to which a synchronizationJob is to be applied. Can be one of the following: An onPremisesDistinguishedName for synchronization from Active Directory to Azure AD.The user ID for synchronization from Azure AD to a third-party.The Worker ID of the Workday worker for synchronization from Workday to either Active Directory or Azure AD.
    *
    * @param string $val The value of the objectId
    *
    * @return SynchronizationJobSubject
    */
    public function setObjectId($val)
    {
        $this->_propDict["objectId"] = $val;
        return $this;
    }
    /**
    * Gets the objectTypeName
    * The type of the object to which a synchronizationJob is to be applied. Can be one of the following: user for synchronization from Active Directory to Azure AD.User for synchronization from Azure AD to a third-party application. Worker for synchronization from Workday to either Active Directory or Azure AD.
    *
    * @return string|null The objectTypeName
    */
    public function getObjectTypeName()
    {
        if (array_key_exists("objectTypeName", $this->_propDict)) {
            return $this->_propDict["objectTypeName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectTypeName
    * The type of the object to which a synchronizationJob is to be applied. Can be one of the following: user for synchronization from Active Directory to Azure AD.User for synchronization from Azure AD to a third-party application. Worker for synchronization from Workday to either Active Directory or Azure AD.
    *
    * @param string $val The value of the objectTypeName
    *
    * @return SynchronizationJobSubject
    */
    public function setObjectTypeName($val)
    {
        $this->_propDict["objectTypeName"] = $val;
        return $this;
    }
}
