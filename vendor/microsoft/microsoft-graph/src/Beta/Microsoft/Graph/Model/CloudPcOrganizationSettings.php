<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOrganizationSettings File
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
* CloudPcOrganizationSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOrganizationSettings extends Entity
{
    /**
    * Gets the enableMEMAutoEnroll
    * Specifies whether new Cloud PCs will be automatically enrolled in Microsoft Endpoint Manager(MEM). The default value is false.
    *
    * @return bool|null The enableMEMAutoEnroll
    */
    public function getEnableMEMAutoEnroll()
    {
        if (array_key_exists("enableMEMAutoEnroll", $this->_propDict)) {
            return $this->_propDict["enableMEMAutoEnroll"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableMEMAutoEnroll
    * Specifies whether new Cloud PCs will be automatically enrolled in Microsoft Endpoint Manager(MEM). The default value is false.
    *
    * @param bool $val The enableMEMAutoEnroll
    *
    * @return CloudPcOrganizationSettings
    */
    public function setEnableMEMAutoEnroll($val)
    {
        $this->_propDict["enableMEMAutoEnroll"] = boolval($val);
        return $this;
    }

    /**
    * Gets the osVersion
    * The version of the operating system (OS) to provision on Cloud PCs. The possible values are: windows10, windows11, unknownFutureValue.
    *
    * @return CloudPcOperatingSystem|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            if (is_a($this->_propDict["osVersion"], "\Beta\Microsoft\Graph\Model\CloudPcOperatingSystem") || is_null($this->_propDict["osVersion"])) {
                return $this->_propDict["osVersion"];
            } else {
                $this->_propDict["osVersion"] = new CloudPcOperatingSystem($this->_propDict["osVersion"]);
                return $this->_propDict["osVersion"];
            }
        }
        return null;
    }

    /**
    * Sets the osVersion
    * The version of the operating system (OS) to provision on Cloud PCs. The possible values are: windows10, windows11, unknownFutureValue.
    *
    * @param CloudPcOperatingSystem $val The osVersion
    *
    * @return CloudPcOrganizationSettings
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the userAccountType
    * The account type of the user on provisioned Cloud PCs. The possible values are: standardUser, administrator, unknownFutureValue.
    *
    * @return CloudPcUserAccountType|null The userAccountType
    */
    public function getUserAccountType()
    {
        if (array_key_exists("userAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["userAccountType"], "\Beta\Microsoft\Graph\Model\CloudPcUserAccountType") || is_null($this->_propDict["userAccountType"])) {
                return $this->_propDict["userAccountType"];
            } else {
                $this->_propDict["userAccountType"] = new CloudPcUserAccountType($this->_propDict["userAccountType"]);
                return $this->_propDict["userAccountType"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccountType
    * The account type of the user on provisioned Cloud PCs. The possible values are: standardUser, administrator, unknownFutureValue.
    *
    * @param CloudPcUserAccountType $val The userAccountType
    *
    * @return CloudPcOrganizationSettings
    */
    public function setUserAccountType($val)
    {
        $this->_propDict["userAccountType"] = $val;
        return $this;
    }

    /**
    * Gets the windowsSettings
    * Represents the Cloud PC organization settings for a tenant. A tenant has only one cloudPcOrganizationSettings object. The default language value en-US.
    *
    * @return CloudPcWindowsSettings|null The windowsSettings
    */
    public function getWindowsSettings()
    {
        if (array_key_exists("windowsSettings", $this->_propDict)) {
            if (is_a($this->_propDict["windowsSettings"], "\Beta\Microsoft\Graph\Model\CloudPcWindowsSettings") || is_null($this->_propDict["windowsSettings"])) {
                return $this->_propDict["windowsSettings"];
            } else {
                $this->_propDict["windowsSettings"] = new CloudPcWindowsSettings($this->_propDict["windowsSettings"]);
                return $this->_propDict["windowsSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the windowsSettings
    * Represents the Cloud PC organization settings for a tenant. A tenant has only one cloudPcOrganizationSettings object. The default language value en-US.
    *
    * @param CloudPcWindowsSettings $val The windowsSettings
    *
    * @return CloudPcOrganizationSettings
    */
    public function setWindowsSettings($val)
    {
        $this->_propDict["windowsSettings"] = $val;
        return $this;
    }

}
