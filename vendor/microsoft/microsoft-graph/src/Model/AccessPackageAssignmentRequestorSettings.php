<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentRequestorSettings File
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
* AccessPackageAssignmentRequestorSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentRequestorSettings extends Entity
{
    /**
    * Gets the allowCustomAssignmentSchedule
    * If false, the requestor is not permitted to include a schedule in their request.
    *
    * @return bool|null The allowCustomAssignmentSchedule
    */
    public function getAllowCustomAssignmentSchedule()
    {
        if (array_key_exists("allowCustomAssignmentSchedule", $this->_propDict)) {
            return $this->_propDict["allowCustomAssignmentSchedule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCustomAssignmentSchedule
    * If false, the requestor is not permitted to include a schedule in their request.
    *
    * @param bool $val The value of the allowCustomAssignmentSchedule
    *
    * @return AccessPackageAssignmentRequestorSettings
    */
    public function setAllowCustomAssignmentSchedule($val)
    {
        $this->_propDict["allowCustomAssignmentSchedule"] = $val;
        return $this;
    }
    /**
    * Gets the enableOnBehalfRequestorsToAddAccess
    * If true, allows on-behalf-of requestors to create a request to add access for another principal.
    *
    * @return bool|null The enableOnBehalfRequestorsToAddAccess
    */
    public function getEnableOnBehalfRequestorsToAddAccess()
    {
        if (array_key_exists("enableOnBehalfRequestorsToAddAccess", $this->_propDict)) {
            return $this->_propDict["enableOnBehalfRequestorsToAddAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableOnBehalfRequestorsToAddAccess
    * If true, allows on-behalf-of requestors to create a request to add access for another principal.
    *
    * @param bool $val The value of the enableOnBehalfRequestorsToAddAccess
    *
    * @return AccessPackageAssignmentRequestorSettings
    */
    public function setEnableOnBehalfRequestorsToAddAccess($val)
    {
        $this->_propDict["enableOnBehalfRequestorsToAddAccess"] = $val;
        return $this;
    }
    /**
    * Gets the enableOnBehalfRequestorsToRemoveAccess
    * If true, allows on-behalf-of requestors to create a request to remove access for another principal.
    *
    * @return bool|null The enableOnBehalfRequestorsToRemoveAccess
    */
    public function getEnableOnBehalfRequestorsToRemoveAccess()
    {
        if (array_key_exists("enableOnBehalfRequestorsToRemoveAccess", $this->_propDict)) {
            return $this->_propDict["enableOnBehalfRequestorsToRemoveAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableOnBehalfRequestorsToRemoveAccess
    * If true, allows on-behalf-of requestors to create a request to remove access for another principal.
    *
    * @param bool $val The value of the enableOnBehalfRequestorsToRemoveAccess
    *
    * @return AccessPackageAssignmentRequestorSettings
    */
    public function setEnableOnBehalfRequestorsToRemoveAccess($val)
    {
        $this->_propDict["enableOnBehalfRequestorsToRemoveAccess"] = $val;
        return $this;
    }
    /**
    * Gets the enableOnBehalfRequestorsToUpdateAccess
    * If true, allows on-behalf-of requestors to create a request to update access for another principal.
    *
    * @return bool|null The enableOnBehalfRequestorsToUpdateAccess
    */
    public function getEnableOnBehalfRequestorsToUpdateAccess()
    {
        if (array_key_exists("enableOnBehalfRequestorsToUpdateAccess", $this->_propDict)) {
            return $this->_propDict["enableOnBehalfRequestorsToUpdateAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableOnBehalfRequestorsToUpdateAccess
    * If true, allows on-behalf-of requestors to create a request to update access for another principal.
    *
    * @param bool $val The value of the enableOnBehalfRequestorsToUpdateAccess
    *
    * @return AccessPackageAssignmentRequestorSettings
    */
    public function setEnableOnBehalfRequestorsToUpdateAccess($val)
    {
        $this->_propDict["enableOnBehalfRequestorsToUpdateAccess"] = $val;
        return $this;
    }
    /**
    * Gets the enableTargetsToSelfAddAccess
    * If true, allows requestors to create a request to add access for themselves.
    *
    * @return bool|null The enableTargetsToSelfAddAccess
    */
    public function getEnableTargetsToSelfAddAccess()
    {
        if (array_key_exists("enableTargetsToSelfAddAccess", $this->_propDict)) {
            return $this->_propDict["enableTargetsToSelfAddAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableTargetsToSelfAddAccess
    * If true, allows requestors to create a request to add access for themselves.
    *
    * @param bool $val The value of the enableTargetsToSelfAddAccess
    *
    * @return AccessPackageAssignmentRequestorSettings
    */
    public function setEnableTargetsToSelfAddAccess($val)
    {
        $this->_propDict["enableTargetsToSelfAddAccess"] = $val;
        return $this;
    }
    /**
    * Gets the enableTargetsToSelfRemoveAccess
    * If true, allows requestors to create a request to remove their access.
    *
    * @return bool|null The enableTargetsToSelfRemoveAccess
    */
    public function getEnableTargetsToSelfRemoveAccess()
    {
        if (array_key_exists("enableTargetsToSelfRemoveAccess", $this->_propDict)) {
            return $this->_propDict["enableTargetsToSelfRemoveAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableTargetsToSelfRemoveAccess
    * If true, allows requestors to create a request to remove their access.
    *
    * @param bool $val The value of the enableTargetsToSelfRemoveAccess
    *
    * @return AccessPackageAssignmentRequestorSettings
    */
    public function setEnableTargetsToSelfRemoveAccess($val)
    {
        $this->_propDict["enableTargetsToSelfRemoveAccess"] = $val;
        return $this;
    }
    /**
    * Gets the enableTargetsToSelfUpdateAccess
    * If true, allows requestors to create a request to update their access.
    *
    * @return bool|null The enableTargetsToSelfUpdateAccess
    */
    public function getEnableTargetsToSelfUpdateAccess()
    {
        if (array_key_exists("enableTargetsToSelfUpdateAccess", $this->_propDict)) {
            return $this->_propDict["enableTargetsToSelfUpdateAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableTargetsToSelfUpdateAccess
    * If true, allows requestors to create a request to update their access.
    *
    * @param bool $val The value of the enableTargetsToSelfUpdateAccess
    *
    * @return AccessPackageAssignmentRequestorSettings
    */
    public function setEnableTargetsToSelfUpdateAccess($val)
    {
        $this->_propDict["enableTargetsToSelfUpdateAccess"] = $val;
        return $this;
    }

    /**
    * Gets the onBehalfRequestors
    * The principals who can request on-behalf-of others.
    *
    * @return SubjectSet|null The onBehalfRequestors
    */
    public function getOnBehalfRequestors()
    {
        if (array_key_exists("onBehalfRequestors", $this->_propDict)) {
            if (is_a($this->_propDict["onBehalfRequestors"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["onBehalfRequestors"])) {
                return $this->_propDict["onBehalfRequestors"];
            } else {
                $this->_propDict["onBehalfRequestors"] = new SubjectSet($this->_propDict["onBehalfRequestors"]);
                return $this->_propDict["onBehalfRequestors"];
            }
        }
        return null;
    }

    /**
    * Sets the onBehalfRequestors
    * The principals who can request on-behalf-of others.
    *
    * @param SubjectSet $val The value to assign to the onBehalfRequestors
    *
    * @return AccessPackageAssignmentRequestorSettings The AccessPackageAssignmentRequestorSettings
    */
    public function setOnBehalfRequestors($val)
    {
        $this->_propDict["onBehalfRequestors"] = $val;
         return $this;
    }
}
