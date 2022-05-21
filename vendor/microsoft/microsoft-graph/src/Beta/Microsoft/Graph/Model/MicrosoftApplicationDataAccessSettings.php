<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftApplicationDataAccessSettings File
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
* MicrosoftApplicationDataAccessSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftApplicationDataAccessSettings extends Entity
{
    /**
    * Gets the disabledForGroup
    * The ID of an Azure Active Directory (Azure AD) security group for which the members are allowed to access Microsoft 365 data using only Microsoft 365 apps, but not other Microsoft apps such as Edge.  This is only applicable if isEnabledForAllMicrosoftApplications is set to true.
    *
    * @return string|null The disabledForGroup
    */
    public function getDisabledForGroup()
    {
        if (array_key_exists("disabledForGroup", $this->_propDict)) {
            return $this->_propDict["disabledForGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledForGroup
    * The ID of an Azure Active Directory (Azure AD) security group for which the members are allowed to access Microsoft 365 data using only Microsoft 365 apps, but not other Microsoft apps such as Edge.  This is only applicable if isEnabledForAllMicrosoftApplications is set to true.
    *
    * @param string $val The disabledForGroup
    *
    * @return MicrosoftApplicationDataAccessSettings
    */
    public function setDisabledForGroup($val)
    {
        $this->_propDict["disabledForGroup"] = $val;
        return $this;
    }

    /**
    * Gets the isEnabledForAllMicrosoftApplications
    * When set to true, all users in the organization can access in a Microsoft app any Microsoft 365 data that the user has been authorized to access. The Microsoft app can be a Microsoft 365 app (for example, Excel, Outlook) or non-Microsoft 365 app (for example, Edge). The default is true.  It is possible to disable this access for a subset of users in an Azure AD security group, by specifying the group in the disabledForGroup property.  When set to false, all users can access authorized Microsoft 365 data only in a Microsoft 365 app.
    *
    * @return bool|null The isEnabledForAllMicrosoftApplications
    */
    public function getIsEnabledForAllMicrosoftApplications()
    {
        if (array_key_exists("isEnabledForAllMicrosoftApplications", $this->_propDict)) {
            return $this->_propDict["isEnabledForAllMicrosoftApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledForAllMicrosoftApplications
    * When set to true, all users in the organization can access in a Microsoft app any Microsoft 365 data that the user has been authorized to access. The Microsoft app can be a Microsoft 365 app (for example, Excel, Outlook) or non-Microsoft 365 app (for example, Edge). The default is true.  It is possible to disable this access for a subset of users in an Azure AD security group, by specifying the group in the disabledForGroup property.  When set to false, all users can access authorized Microsoft 365 data only in a Microsoft 365 app.
    *
    * @param bool $val The isEnabledForAllMicrosoftApplications
    *
    * @return MicrosoftApplicationDataAccessSettings
    */
    public function setIsEnabledForAllMicrosoftApplications($val)
    {
        $this->_propDict["isEnabledForAllMicrosoftApplications"] = boolval($val);
        return $this;
    }

}
