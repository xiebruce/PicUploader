<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BusinessScenarioProperties File
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
* BusinessScenarioProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BusinessScenarioProperties extends Entity
{
    /**
    * Gets the externalBucketId
    * The identifier for the bucketDefinition configured in the plannerPlanConfiguration for the scenario. The task will be placed in the corresponding plannerBucket in the target plan. Required.
    *
    * @return string|null The externalBucketId
    */
    public function getExternalBucketId()
    {
        if (array_key_exists("externalBucketId", $this->_propDict)) {
            return $this->_propDict["externalBucketId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalBucketId
    * The identifier for the bucketDefinition configured in the plannerPlanConfiguration for the scenario. The task will be placed in the corresponding plannerBucket in the target plan. Required.
    *
    * @param string $val The value of the externalBucketId
    *
    * @return BusinessScenarioProperties
    */
    public function setExternalBucketId($val)
    {
        $this->_propDict["externalBucketId"] = $val;
        return $this;
    }
    /**
    * Gets the externalContextId
    * The identifier for the context of the task. Context is an application controlled value, and tasks can be queried by their externalContextId. Optional.
    *
    * @return string|null The externalContextId
    */
    public function getExternalContextId()
    {
        if (array_key_exists("externalContextId", $this->_propDict)) {
            return $this->_propDict["externalContextId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalContextId
    * The identifier for the context of the task. Context is an application controlled value, and tasks can be queried by their externalContextId. Optional.
    *
    * @param string $val The value of the externalContextId
    *
    * @return BusinessScenarioProperties
    */
    public function setExternalContextId($val)
    {
        $this->_propDict["externalContextId"] = $val;
        return $this;
    }
    /**
    * Gets the externalObjectId
    * Application-specific identifier for the task. Every task for the same scenario must have a unique identifier specified for this property. Required.
    *
    * @return string|null The externalObjectId
    */
    public function getExternalObjectId()
    {
        if (array_key_exists("externalObjectId", $this->_propDict)) {
            return $this->_propDict["externalObjectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalObjectId
    * Application-specific identifier for the task. Every task for the same scenario must have a unique identifier specified for this property. Required.
    *
    * @param string $val The value of the externalObjectId
    *
    * @return BusinessScenarioProperties
    */
    public function setExternalObjectId($val)
    {
        $this->_propDict["externalObjectId"] = $val;
        return $this;
    }
    /**
    * Gets the externalObjectVersion
    * Application-specific version of the task. Optional.
    *
    * @return string|null The externalObjectVersion
    */
    public function getExternalObjectVersion()
    {
        if (array_key_exists("externalObjectVersion", $this->_propDict)) {
            return $this->_propDict["externalObjectVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalObjectVersion
    * Application-specific version of the task. Optional.
    *
    * @param string $val The value of the externalObjectVersion
    *
    * @return BusinessScenarioProperties
    */
    public function setExternalObjectVersion($val)
    {
        $this->_propDict["externalObjectVersion"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
    * The URL to the application-specific experience for this task. Optional.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * The URL to the application-specific experience for this task. Optional.
    *
    * @param string $val The value of the webUrl
    *
    * @return BusinessScenarioProperties
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
