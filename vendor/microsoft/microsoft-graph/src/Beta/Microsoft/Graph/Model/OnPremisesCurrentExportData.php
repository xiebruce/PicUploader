<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesCurrentExportData File
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
* OnPremisesCurrentExportData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesCurrentExportData extends Entity
{
    /**
    * Gets the clientMachineName
    * The name of the onPremises client machine which ran the last export.
    *
    * @return string|null The clientMachineName
    */
    public function getClientMachineName()
    {
        if (array_key_exists("clientMachineName", $this->_propDict)) {
            return $this->_propDict["clientMachineName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientMachineName
    * The name of the onPremises client machine which ran the last export.
    *
    * @param string $val The value of the clientMachineName
    *
    * @return OnPremisesCurrentExportData
    */
    public function setClientMachineName($val)
    {
        $this->_propDict["clientMachineName"] = $val;
        return $this;
    }
    /**
    * Gets the pendingObjectsAddition
    * The count of pending adds from on-premises directory.
    *
    * @return int|null The pendingObjectsAddition
    */
    public function getPendingObjectsAddition()
    {
        if (array_key_exists("pendingObjectsAddition", $this->_propDict)) {
            return $this->_propDict["pendingObjectsAddition"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingObjectsAddition
    * The count of pending adds from on-premises directory.
    *
    * @param int $val The value of the pendingObjectsAddition
    *
    * @return OnPremisesCurrentExportData
    */
    public function setPendingObjectsAddition($val)
    {
        $this->_propDict["pendingObjectsAddition"] = $val;
        return $this;
    }
    /**
    * Gets the pendingObjectsDeletion
    * The count of pending deletes from on-premises directory.
    *
    * @return int|null The pendingObjectsDeletion
    */
    public function getPendingObjectsDeletion()
    {
        if (array_key_exists("pendingObjectsDeletion", $this->_propDict)) {
            return $this->_propDict["pendingObjectsDeletion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingObjectsDeletion
    * The count of pending deletes from on-premises directory.
    *
    * @param int $val The value of the pendingObjectsDeletion
    *
    * @return OnPremisesCurrentExportData
    */
    public function setPendingObjectsDeletion($val)
    {
        $this->_propDict["pendingObjectsDeletion"] = $val;
        return $this;
    }
    /**
    * Gets the pendingObjectsUpdate
    * The count of pending updates from on-premises directory.
    *
    * @return int|null The pendingObjectsUpdate
    */
    public function getPendingObjectsUpdate()
    {
        if (array_key_exists("pendingObjectsUpdate", $this->_propDict)) {
            return $this->_propDict["pendingObjectsUpdate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingObjectsUpdate
    * The count of pending updates from on-premises directory.
    *
    * @param int $val The value of the pendingObjectsUpdate
    *
    * @return OnPremisesCurrentExportData
    */
    public function setPendingObjectsUpdate($val)
    {
        $this->_propDict["pendingObjectsUpdate"] = $val;
        return $this;
    }
    /**
    * Gets the serviceAccount
    * The name of the dirsync service account which is configured to connect to the directory.
    *
    * @return string|null The serviceAccount
    */
    public function getServiceAccount()
    {
        if (array_key_exists("serviceAccount", $this->_propDict)) {
            return $this->_propDict["serviceAccount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceAccount
    * The name of the dirsync service account which is configured to connect to the directory.
    *
    * @param string $val The value of the serviceAccount
    *
    * @return OnPremisesCurrentExportData
    */
    public function setServiceAccount($val)
    {
        $this->_propDict["serviceAccount"] = $val;
        return $this;
    }
    /**
    * Gets the successfulLinksProvisioningCount
    * The count of updated links during the current directory sync export run.
    *
    * @return int|null The successfulLinksProvisioningCount
    */
    public function getSuccessfulLinksProvisioningCount()
    {
        if (array_key_exists("successfulLinksProvisioningCount", $this->_propDict)) {
            return $this->_propDict["successfulLinksProvisioningCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulLinksProvisioningCount
    * The count of updated links during the current directory sync export run.
    *
    * @param int $val The value of the successfulLinksProvisioningCount
    *
    * @return OnPremisesCurrentExportData
    */
    public function setSuccessfulLinksProvisioningCount($val)
    {
        $this->_propDict["successfulLinksProvisioningCount"] = $val;
        return $this;
    }
    /**
    * Gets the successfulObjectsProvisioningCount
    * The count of objects which were successfully provisioned during the current directory sync export run.
    *
    * @return int|null The successfulObjectsProvisioningCount
    */
    public function getSuccessfulObjectsProvisioningCount()
    {
        if (array_key_exists("successfulObjectsProvisioningCount", $this->_propDict)) {
            return $this->_propDict["successfulObjectsProvisioningCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulObjectsProvisioningCount
    * The count of objects which were successfully provisioned during the current directory sync export run.
    *
    * @param int $val The value of the successfulObjectsProvisioningCount
    *
    * @return OnPremisesCurrentExportData
    */
    public function setSuccessfulObjectsProvisioningCount($val)
    {
        $this->_propDict["successfulObjectsProvisioningCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalConnectorSpaceObjects
    * The total number of objects in the AAD Connector Space.
    *
    * @return int|null The totalConnectorSpaceObjects
    */
    public function getTotalConnectorSpaceObjects()
    {
        if (array_key_exists("totalConnectorSpaceObjects", $this->_propDict)) {
            return $this->_propDict["totalConnectorSpaceObjects"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalConnectorSpaceObjects
    * The total number of objects in the AAD Connector Space.
    *
    * @param int $val The value of the totalConnectorSpaceObjects
    *
    * @return OnPremisesCurrentExportData
    */
    public function setTotalConnectorSpaceObjects($val)
    {
        $this->_propDict["totalConnectorSpaceObjects"] = $val;
        return $this;
    }
}
