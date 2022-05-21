<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationAssignment File
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
* DeviceConfigurationAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfigurationAssignment extends Entity
{
    /**
    * Gets the intent
    * The admin intent to apply or remove the profile. Possible values are: apply, remove.
    *
    * @return DeviceConfigAssignmentIntent|null The intent
    */
    public function getIntent()
    {
        if (array_key_exists("intent", $this->_propDict)) {
            if (is_a($this->_propDict["intent"], "\Beta\Microsoft\Graph\Model\DeviceConfigAssignmentIntent") || is_null($this->_propDict["intent"])) {
                return $this->_propDict["intent"];
            } else {
                $this->_propDict["intent"] = new DeviceConfigAssignmentIntent($this->_propDict["intent"]);
                return $this->_propDict["intent"];
            }
        }
        return null;
    }

    /**
    * Sets the intent
    * The admin intent to apply or remove the profile. Possible values are: apply, remove.
    *
    * @param DeviceConfigAssignmentIntent $val The intent
    *
    * @return DeviceConfigurationAssignment
    */
    public function setIntent($val)
    {
        $this->_propDict["intent"] = $val;
        return $this;
    }

    /**
    * Gets the source
    * The assignment source for the device configuration, direct or parcel/policySet. This property is read-only. Possible values are: direct, policySets.
    *
    * @return DeviceAndAppManagementAssignmentSource|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentSource") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new DeviceAndAppManagementAssignmentSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    * The assignment source for the device configuration, direct or parcel/policySet. This property is read-only. Possible values are: direct, policySets.
    *
    * @param DeviceAndAppManagementAssignmentSource $val The source
    *
    * @return DeviceConfigurationAssignment
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the sourceId
    * The identifier of the source of the assignment. This property is read-only.
    *
    * @return string|null The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceId
    * The identifier of the source of the assignment. This property is read-only.
    *
    * @param string $val The sourceId
    *
    * @return DeviceConfigurationAssignment
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }

    /**
    * Gets the target
    * The assignment target for the device configuration.
    *
    * @return DeviceAndAppManagementAssignmentTarget|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget") || is_null($this->_propDict["target"])) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }

    /**
    * Sets the target
    * The assignment target for the device configuration.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return DeviceConfigurationAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

}
