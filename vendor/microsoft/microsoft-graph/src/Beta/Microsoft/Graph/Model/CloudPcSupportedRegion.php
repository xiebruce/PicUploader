<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcSupportedRegion File
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
* CloudPcSupportedRegion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcSupportedRegion extends Entity
{
    /**
    * Gets the displayName
    * The name for the supported region. Read-only.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The name for the supported region. Read-only.
    *
    * @param string $val The displayName
    *
    * @return CloudPcSupportedRegion
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the regionStatus
    * The status of the supported region. Possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
    *
    * @return CloudPcSupportedRegionStatus|null The regionStatus
    */
    public function getRegionStatus()
    {
        if (array_key_exists("regionStatus", $this->_propDict)) {
            if (is_a($this->_propDict["regionStatus"], "\Beta\Microsoft\Graph\Model\CloudPcSupportedRegionStatus") || is_null($this->_propDict["regionStatus"])) {
                return $this->_propDict["regionStatus"];
            } else {
                $this->_propDict["regionStatus"] = new CloudPcSupportedRegionStatus($this->_propDict["regionStatus"]);
                return $this->_propDict["regionStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the regionStatus
    * The status of the supported region. Possible values are: available, restricted, unavailable, unknownFutureValue. Read-only.
    *
    * @param CloudPcSupportedRegionStatus $val The regionStatus
    *
    * @return CloudPcSupportedRegion
    */
    public function setRegionStatus($val)
    {
        $this->_propDict["regionStatus"] = $val;
        return $this;
    }

    /**
    * Gets the supportedSolution
    * The supported service or solution for the region. The possible values are: windows365, devBox, unknownFutureValue. Read-only.
    *
    * @return CloudPcManagementService|null The supportedSolution
    */
    public function getSupportedSolution()
    {
        if (array_key_exists("supportedSolution", $this->_propDict)) {
            if (is_a($this->_propDict["supportedSolution"], "\Beta\Microsoft\Graph\Model\CloudPcManagementService") || is_null($this->_propDict["supportedSolution"])) {
                return $this->_propDict["supportedSolution"];
            } else {
                $this->_propDict["supportedSolution"] = new CloudPcManagementService($this->_propDict["supportedSolution"]);
                return $this->_propDict["supportedSolution"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedSolution
    * The supported service or solution for the region. The possible values are: windows365, devBox, unknownFutureValue. Read-only.
    *
    * @param CloudPcManagementService $val The supportedSolution
    *
    * @return CloudPcSupportedRegion
    */
    public function setSupportedSolution($val)
    {
        $this->_propDict["supportedSolution"] = $val;
        return $this;
    }

}
