<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserTeamwork File
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
* UserTeamwork class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserTeamwork extends Entity
{

     /**
     * Gets the associatedTeams
    * The list of associatedTeamInfo objects that a user is associated with.
     *
     * @return array|null The associatedTeams
     */
    public function getAssociatedTeams()
    {
        if (array_key_exists("associatedTeams", $this->_propDict)) {
           return $this->_propDict["associatedTeams"];
        } else {
            return null;
        }
    }

    /**
    * Sets the associatedTeams
    * The list of associatedTeamInfo objects that a user is associated with.
    *
    * @param AssociatedTeamInfo[] $val The associatedTeams
    *
    * @return UserTeamwork
    */
    public function setAssociatedTeams($val)
    {
        $this->_propDict["associatedTeams"] = $val;
        return $this;
    }


     /**
     * Gets the installedApps
    * The apps installed in the personal scope of this user.
     *
     * @return array|null The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists("installedApps", $this->_propDict)) {
           return $this->_propDict["installedApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the installedApps
    * The apps installed in the personal scope of this user.
    *
    * @param UserScopeTeamsAppInstallation[] $val The installedApps
    *
    * @return UserTeamwork
    */
    public function setInstalledApps($val)
    {
        $this->_propDict["installedApps"] = $val;
        return $this;
    }

}
