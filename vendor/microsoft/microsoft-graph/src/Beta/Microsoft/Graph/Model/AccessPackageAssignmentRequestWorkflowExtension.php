<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentRequestWorkflowExtension File
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
* AccessPackageAssignmentRequestWorkflowExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentRequestWorkflowExtension extends CustomCalloutExtension
{
    /**
    * Gets the callbackConfiguration
    * The callback configuration for a custom extension.
    *
    * @return CustomExtensionCallbackConfiguration|null The callbackConfiguration
    */
    public function getCallbackConfiguration()
    {
        if (array_key_exists("callbackConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["callbackConfiguration"], "\Beta\Microsoft\Graph\Model\CustomExtensionCallbackConfiguration") || is_null($this->_propDict["callbackConfiguration"])) {
                return $this->_propDict["callbackConfiguration"];
            } else {
                $this->_propDict["callbackConfiguration"] = new CustomExtensionCallbackConfiguration($this->_propDict["callbackConfiguration"]);
                return $this->_propDict["callbackConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the callbackConfiguration
    * The callback configuration for a custom extension.
    *
    * @param CustomExtensionCallbackConfiguration $val The callbackConfiguration
    *
    * @return AccessPackageAssignmentRequestWorkflowExtension
    */
    public function setCallbackConfiguration($val)
    {
        $this->_propDict["callbackConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * The userPrincipalName of the user or identity of the subject that created this resource. Read-only.
    *
    * @return string|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdBy
    * The userPrincipalName of the user or identity of the subject that created this resource. Read-only.
    *
    * @param string $val The createdBy
    *
    * @return AccessPackageAssignmentRequestWorkflowExtension
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * When the object was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * When the object was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageAssignmentRequestWorkflowExtension
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The userPrincipalName of the identity that last modified the object.
    *
    * @return string|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            return $this->_propDict["lastModifiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModifiedBy
    * The userPrincipalName of the identity that last modified the object.
    *
    * @param string $val The lastModifiedBy
    *
    * @return AccessPackageAssignmentRequestWorkflowExtension
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * When the object was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * When the object was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AccessPackageAssignmentRequestWorkflowExtension
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

}
