<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyExpirationRule File
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
* UnifiedRoleManagementPolicyExpirationRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyExpirationRule extends UnifiedRoleManagementPolicyRule
{
    /**
    * Gets the isExpirationRequired
    * Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
    *
    * @return bool|null The isExpirationRequired
    */
    public function getIsExpirationRequired()
    {
        if (array_key_exists("isExpirationRequired", $this->_propDict)) {
            return $this->_propDict["isExpirationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExpirationRequired
    * Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
    *
    * @param bool $val The isExpirationRequired
    *
    * @return UnifiedRoleManagementPolicyExpirationRule
    */
    public function setIsExpirationRequired($val)
    {
        $this->_propDict["isExpirationRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the maximumDuration
    * The maximum duration allowed for eligibility or assignment which is not permanent. Required when isExpirationRequired is true.
    *
    * @return \DateInterval|null The maximumDuration
    */
    public function getMaximumDuration()
    {
        if (array_key_exists("maximumDuration", $this->_propDict)) {
            if (is_a($this->_propDict["maximumDuration"], "\DateInterval") || is_null($this->_propDict["maximumDuration"])) {
                return $this->_propDict["maximumDuration"];
            } else {
                $this->_propDict["maximumDuration"] = new \DateInterval($this->_propDict["maximumDuration"]);
                return $this->_propDict["maximumDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the maximumDuration
    * The maximum duration allowed for eligibility or assignment which is not permanent. Required when isExpirationRequired is true.
    *
    * @param \DateInterval $val The maximumDuration
    *
    * @return UnifiedRoleManagementPolicyExpirationRule
    */
    public function setMaximumDuration($val)
    {
        $this->_propDict["maximumDuration"] = $val;
        return $this;
    }

}
