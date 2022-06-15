<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OperationalInsightsConnection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* OperationalInsightsConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OperationalInsightsConnection extends ResourceConnection
{
    /**
    * Gets the azureResourceGroupName
    *
    * @return string|null The azureResourceGroupName
    */
    public function getAzureResourceGroupName()
    {
        if (array_key_exists("azureResourceGroupName", $this->_propDict)) {
            return $this->_propDict["azureResourceGroupName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureResourceGroupName
    *
    * @param string $val The azureResourceGroupName
    *
    * @return OperationalInsightsConnection
    */
    public function setAzureResourceGroupName($val)
    {
        $this->_propDict["azureResourceGroupName"] = $val;
        return $this;
    }

    /**
    * Gets the azureSubscriptionId
    *
    * @return string|null The azureSubscriptionId
    */
    public function getAzureSubscriptionId()
    {
        if (array_key_exists("azureSubscriptionId", $this->_propDict)) {
            return $this->_propDict["azureSubscriptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureSubscriptionId
    *
    * @param string $val The azureSubscriptionId
    *
    * @return OperationalInsightsConnection
    */
    public function setAzureSubscriptionId($val)
    {
        $this->_propDict["azureSubscriptionId"] = $val;
        return $this;
    }

    /**
    * Gets the workspaceName
    *
    * @return string|null The workspaceName
    */
    public function getWorkspaceName()
    {
        if (array_key_exists("workspaceName", $this->_propDict)) {
            return $this->_propDict["workspaceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workspaceName
    *
    * @param string $val The workspaceName
    *
    * @return OperationalInsightsConnection
    */
    public function setWorkspaceName($val)
    {
        $this->_propDict["workspaceName"] = $val;
        return $this;
    }

}
