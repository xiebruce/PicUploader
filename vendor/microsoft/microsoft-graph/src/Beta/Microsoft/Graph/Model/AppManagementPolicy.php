<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppManagementPolicy File
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
* AppManagementPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppManagementPolicy extends PolicyBase
{
    /**
    * Gets the isEnabled
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return AppManagementPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the restrictions
    *
    * @return AppManagementConfiguration|null The restrictions
    */
    public function getRestrictions()
    {
        if (array_key_exists("restrictions", $this->_propDict)) {
            if (is_a($this->_propDict["restrictions"], "\Beta\Microsoft\Graph\Model\AppManagementConfiguration") || is_null($this->_propDict["restrictions"])) {
                return $this->_propDict["restrictions"];
            } else {
                $this->_propDict["restrictions"] = new AppManagementConfiguration($this->_propDict["restrictions"]);
                return $this->_propDict["restrictions"];
            }
        }
        return null;
    }

    /**
    * Sets the restrictions
    *
    * @param AppManagementConfiguration $val The restrictions
    *
    * @return AppManagementPolicy
    */
    public function setRestrictions($val)
    {
        $this->_propDict["restrictions"] = $val;
        return $this;
    }


     /**
     * Gets the appliesTo
     *
     * @return array|null The appliesTo
     */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
           return $this->_propDict["appliesTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliesTo
    *
    * @param DirectoryObject[] $val The appliesTo
    *
    * @return AppManagementPolicy
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
        return $this;
    }

}
