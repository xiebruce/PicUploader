<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TooManyGlobalAdminsAssignedToTenantAlertConfiguration File
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
* TooManyGlobalAdminsAssignedToTenantAlertConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TooManyGlobalAdminsAssignedToTenantAlertConfiguration extends UnifiedRoleManagementAlertConfiguration
{
    /**
    * Gets the globalAdminCountThreshold
    *
    * @return int|null The globalAdminCountThreshold
    */
    public function getGlobalAdminCountThreshold()
    {
        if (array_key_exists("globalAdminCountThreshold", $this->_propDict)) {
            return $this->_propDict["globalAdminCountThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the globalAdminCountThreshold
    *
    * @param int $val The globalAdminCountThreshold
    *
    * @return TooManyGlobalAdminsAssignedToTenantAlertConfiguration
    */
    public function setGlobalAdminCountThreshold($val)
    {
        $this->_propDict["globalAdminCountThreshold"] = intval($val);
        return $this;
    }

    /**
    * Gets the percentageOfGlobalAdminsOutOfRolesThreshold
    *
    * @return int|null The percentageOfGlobalAdminsOutOfRolesThreshold
    */
    public function getPercentageOfGlobalAdminsOutOfRolesThreshold()
    {
        if (array_key_exists("percentageOfGlobalAdminsOutOfRolesThreshold", $this->_propDict)) {
            return $this->_propDict["percentageOfGlobalAdminsOutOfRolesThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentageOfGlobalAdminsOutOfRolesThreshold
    *
    * @param int $val The percentageOfGlobalAdminsOutOfRolesThreshold
    *
    * @return TooManyGlobalAdminsAssignedToTenantAlertConfiguration
    */
    public function setPercentageOfGlobalAdminsOutOfRolesThreshold($val)
    {
        $this->_propDict["percentageOfGlobalAdminsOutOfRolesThreshold"] = intval($val);
        return $this;
    }

}
