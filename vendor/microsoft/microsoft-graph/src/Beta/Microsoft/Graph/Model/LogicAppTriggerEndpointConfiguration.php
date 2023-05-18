<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LogicAppTriggerEndpointConfiguration File
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
* LogicAppTriggerEndpointConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LogicAppTriggerEndpointConfiguration extends CustomExtensionEndpointConfiguration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.logicAppTriggerEndpointConfiguration");
    }

    /**
    * Gets the logicAppWorkflowName
    * The name of the logic app.
    *
    * @return string|null The logicAppWorkflowName
    */
    public function getLogicAppWorkflowName()
    {
        if (array_key_exists("logicAppWorkflowName", $this->_propDict)) {
            return $this->_propDict["logicAppWorkflowName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logicAppWorkflowName
    * The name of the logic app.
    *
    * @param string $val The value of the logicAppWorkflowName
    *
    * @return LogicAppTriggerEndpointConfiguration
    */
    public function setLogicAppWorkflowName($val)
    {
        $this->_propDict["logicAppWorkflowName"] = $val;
        return $this;
    }
    /**
    * Gets the resourceGroupName
    * The Azure resource group name for the logic app.
    *
    * @return string|null The resourceGroupName
    */
    public function getResourceGroupName()
    {
        if (array_key_exists("resourceGroupName", $this->_propDict)) {
            return $this->_propDict["resourceGroupName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceGroupName
    * The Azure resource group name for the logic app.
    *
    * @param string $val The value of the resourceGroupName
    *
    * @return LogicAppTriggerEndpointConfiguration
    */
    public function setResourceGroupName($val)
    {
        $this->_propDict["resourceGroupName"] = $val;
        return $this;
    }
    /**
    * Gets the subscriptionId
    * Identifier of the Azure subscription for the logic app.
    *
    * @return string|null The subscriptionId
    */
    public function getSubscriptionId()
    {
        if (array_key_exists("subscriptionId", $this->_propDict)) {
            return $this->_propDict["subscriptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriptionId
    * Identifier of the Azure subscription for the logic app.
    *
    * @param string $val The value of the subscriptionId
    *
    * @return LogicAppTriggerEndpointConfiguration
    */
    public function setSubscriptionId($val)
    {
        $this->_propDict["subscriptionId"] = $val;
        return $this;
    }
    /**
    * Gets the url
    * The URL to the logic app endpoint that will be triggered. Only required for app-only token scenarios where app is creating a customCalloutExtension without a signed-in user.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * The URL to the logic app endpoint that will be triggered. Only required for app-only token scenarios where app is creating a customCalloutExtension without a signed-in user.
    *
    * @param string $val The value of the url
    *
    * @return LogicAppTriggerEndpointConfiguration
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
