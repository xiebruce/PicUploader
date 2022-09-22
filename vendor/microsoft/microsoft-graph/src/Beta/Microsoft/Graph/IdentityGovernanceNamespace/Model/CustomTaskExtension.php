<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomTaskExtension File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

/**
* CustomTaskExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomTaskExtension extends \Beta\Microsoft\Graph\Model\CustomCalloutExtension
{
    /**
    * Gets the callbackConfiguration
    * The callback configuration for a custom extension.
    *
    * @return \Beta\Microsoft\Graph\Model\CustomExtensionCallbackConfiguration|null The callbackConfiguration
    */
    public function getCallbackConfiguration()
    {
        if (array_key_exists("callbackConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["callbackConfiguration"], "\Beta\Microsoft\Graph\Model\CustomExtensionCallbackConfiguration") || is_null($this->_propDict["callbackConfiguration"])) {
                return $this->_propDict["callbackConfiguration"];
            } else {
                $this->_propDict["callbackConfiguration"] = new \Beta\Microsoft\Graph\Model\CustomExtensionCallbackConfiguration($this->_propDict["callbackConfiguration"]);
                return $this->_propDict["callbackConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the callbackConfiguration
    * The callback configuration for a custom extension.
    *
    * @param \Beta\Microsoft\Graph\Model\CustomExtensionCallbackConfiguration $val The callbackConfiguration
    *
    * @return CustomTaskExtension
    */
    public function setCallbackConfiguration($val)
    {
        $this->_propDict["callbackConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * When the custom task extension was created.
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
    * When the custom task extension was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CustomTaskExtension
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * When the custom extension was last modified.
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
    * When the custom extension was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CustomTaskExtension
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * The unique identifier of the Azure AD user that created the custom task extension.
    *
    * @return \Beta\Microsoft\Graph\Model\User|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\User") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Beta\Microsoft\Graph\Model\User($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * The unique identifier of the Azure AD user that created the custom task extension.
    *
    * @param \Beta\Microsoft\Graph\Model\User $val The createdBy
    *
    * @return CustomTaskExtension
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The unique identifier of the Azure AD user that modified the custom task extension last.
    *
    * @return \Beta\Microsoft\Graph\Model\User|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\User") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new \Beta\Microsoft\Graph\Model\User($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * The unique identifier of the Azure AD user that modified the custom task extension last.
    *
    * @param \Beta\Microsoft\Graph\Model\User $val The lastModifiedBy
    *
    * @return CustomTaskExtension
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

}
